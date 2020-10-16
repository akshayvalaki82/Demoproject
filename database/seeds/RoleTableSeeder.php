<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
// use DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'=>'superadmin',
                'slug'=>'superadmin',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'admin',
                'slug'=>'admin',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'inventory_manager',
                'slug'=>'inventory_manager',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'order_manager',
                'slug'=>'order_manager',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            [
                'name'=>'customer',
                'slug'=>'customer',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ];
        \DB::table('roles')->insert($roles);
    }
}
