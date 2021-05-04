<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Twilio\Rest\Client;
>>>>>>> bac3761 (a new update to our backend server)
=======
use Twilio\Rest\Client;
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d

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
<<<<<<< HEAD
>>>>>>> bac3761 (a new update to our backend server)
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d
}
