<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Twilio\Rest\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendCode($phone, $body)
        {
                $sid = getenv("TWILIO_SID");
                $twilio_phone = getenv("TWILIO_PHONE");
                $auth_token = getenv("TWILIO_AUTH_TOKEN");
                $twilio = new Client($sid, $auth_token);
                $message = $twilio->messages 
                    ->create($phone, // to 
                                array(  
                                    "from" =>  $twilio_phone,      
                                    "body" =>  $body
                                ) 
                            );
                            
        }
}
