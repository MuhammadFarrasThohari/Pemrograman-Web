<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('biodatas')->insert(
            [
                [
                    'first_name' => 'John',
                    'last_name' => 'Doe',
                    'gender' => 'male',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'first_name' => 'John',
                    'last_name' => 'Doe',
                    'gender' => 'male',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
        //
    }
}
