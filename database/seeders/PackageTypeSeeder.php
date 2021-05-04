<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PackageType;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packageType = ['Boxed', 'Grocery', 'Envelop', 'Fragile', 'others'];
        $Count = count($packageType);
        for ($i=0; $i < $Count; $i++) { 

	    	PackageType::create([

	            'name' => $packageType[$i]

	        ]);

    	}
    }
}
