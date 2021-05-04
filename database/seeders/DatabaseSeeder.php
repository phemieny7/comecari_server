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
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
=======
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d
        $this->call([
            CitySeeder::class,
            PackageTypeSeeder::class,
            PaymentTypeSeeder::class,
            PromoTypeSeeder::class,
            RoleSeeder::class,
           StatusSeeder::class,
        ]);
<<<<<<< HEAD
>>>>>>> bac3761 (a new update to our backend server)
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d
    }
}
