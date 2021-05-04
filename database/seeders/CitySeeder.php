<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = ['lagos', 'ogun', 'abeokuta'];
        $cityCount = count($city);
        for ($i=0; $i < $cityCount; $i++) { 

	    	City::create([

	            'city_name' => $city[$i]

	        ]);

    	} 
            
    }
}
