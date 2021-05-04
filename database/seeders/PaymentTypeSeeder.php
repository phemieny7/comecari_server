<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentType;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentType = ['cash', 'gateway'];
        $Count = count($paymentType);
        for ($i=0; $i < $Count; $i++) { 

	    	PaymentType::create([
	            'name' => $paymentType[$i]
	        ]);

    	}
    }
}
