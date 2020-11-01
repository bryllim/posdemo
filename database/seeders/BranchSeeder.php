<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Branches
        DB::table('branches')->insert([
            'street' => "Gorordo",
            'baranggay' => "Lahug",
            'city_munacipality' => 'Cebu',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
