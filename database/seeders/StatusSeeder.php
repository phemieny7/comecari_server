<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Status = ['Accepted', 'Picked Up', 'in Transit', 'Delievered', 'complete', 'SOS'];
        $Count = count($Status);
        for ($i=0; $i < $Count; $i++) { 

	    	Status::create([
	            'status_name' => $Status[$i]
	        ]);

    	}
    }
}
