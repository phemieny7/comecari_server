<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    protected function generateToken(){
       return random_int(100000, 999999);
    }

    public function register(Request $request)
    {
        //validate user input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|unique:users,phone',
        ]);
        //generate token
        $token = $this->generateToken();
        //send token to user
        parent::sendCode(
            $validatedData['phone'], 
            "your comecari token is $token");

        //create new User
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']),
            'verification_code' => $token,
        ]);
        //successful
        return response(201);
    }

    public function verify (Request $request)
    {
        //Token sent to user
        $validatedData = $request->validate([
            'verification_code' => 'required|max:6',
        ]);
        //update user verified status
        $user = User::where(
           'verification_code', $validatedData['verification_code']
        )->update(['isVerified'=> true]);
        //successful
    
        return response($user, 200);
    }

    public function resend_code(Request $request)
    {   //generate a new token
        $token = $this->generateToken();
        //send to token to user phone
        parent::sendCode(
            $request->phone, 
            "your comecari token is $token");
        //update token to match with the one sent
        User::where('phone', $request->phone)
            ->first()
            ->update(['verification_code'=> $token]);
        //successful
        return response($token, 200);
    }

    public function login(Request $request)
    {
        //User input validated
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);
        //auth attempt
        if (!Auth::attempt($request->only('email', 'password') )) {
            return response()->json([
            'message' => 'Invalid login details'
                       ], 401);
            }
        //check User if matched
        $user = User::where('email', $validatedData['email'])
                    ->where('isVerified', true)
                    ->first();
        //create auth token
        $token = $user->createToken($request->email)->plainTextToken;
        //successful  
        return response()->json([
           'access_token' => $token,
           'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        //user logout
        $user = $request->user();
        $user->tokens()->delete();
        //successful  
        return response(200);
    }
}
