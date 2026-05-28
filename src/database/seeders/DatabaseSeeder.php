<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PetloveSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            PetloveSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
