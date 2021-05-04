<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role = ['customer', 'rider', 'company', 'admin', 'support', 'others'];
        $Count = count($Role);
        for ($i=0; $i < $Count; $i++) { 

	    	Role::create([
	            'name' => $Role[$i]
	        ]);

    	}
    }
}
