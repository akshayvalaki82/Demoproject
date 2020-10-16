<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
// use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[  
            'firstname'=>'Admin',
            'lastname'=>'admin',
            'email'=>'akshay@gmail.com',
            'password'=>bcrypt("admin123"),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
          
        ];
    \DB::table('users') -> insert($users);
    }
}
