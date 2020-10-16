<?php

// namespace Database\Seeds;

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
        $this->call([RoleTableSeeder::class,
                    UserTableSeeder::class
                    ]);
        // \App\Models\User::factory(10)->create();
    }
}
