<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
=======
        $this->call([
            CitySeeder::class,
            PackageTypeSeeder::class,
            PaymentTypeSeeder::class,
            PromoTypeSeeder::class,
            RoleSeeder::class,
           StatusSeeder::class,
        ]);
>>>>>>> bac3761 (a new update to our backend server)
    }
}
