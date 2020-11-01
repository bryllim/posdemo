<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User Type

        DB::table('user_types')->insert([
            'type' => "employee",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'type' => "manager",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_types')->insert([
            'type' => "admin",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
