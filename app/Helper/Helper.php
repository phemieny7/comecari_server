<?php
    
namespace App\Helper;
use Twilio\Rest\Client;
    
class Helper 
    {
        function sendCode($phone, $body)
        {
                $sid = getenv("TWILIO_SID");
                $twilio_phone = getenv("TWILIO_PHONE");
                $auth_token = getenv("TWILIO_AUTH_TOKEN");
                $service_id = getenv("TWILIO_SERVICE_ID");
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
        
?>