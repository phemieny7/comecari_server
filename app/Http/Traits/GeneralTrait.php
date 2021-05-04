<?php
    namespace App\Http\Traits;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use Twilio\Rest\Client;
    use App\Models\User;

    trait GeneralTrait {
        public function requestCode(Request $request){
            $phone = User::find('phone', $request->phone)->first();
            return $phone;
        }
    }
?>