<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@pocketdevs.online',
            'password' => Hash::make('secret'),
            'location' => 'Cebu',
            'number' => 639123456789,
            'type_id' => 3,
            'branch_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
