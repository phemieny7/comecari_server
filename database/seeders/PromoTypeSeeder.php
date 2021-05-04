<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PromoType;

class PromoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promoType = ['coupon', 'voucher', 'discount'];
        $Count = count($promoType);
        for ($i=0; $i < $Count; $i++) { 

	    	PromoType::create([
	            'name' => $promoType[$i]
	        ]);

    	}
    }
}
