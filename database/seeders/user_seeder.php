<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Immanuel Tremblay',
            'email' => 'Immanuel@gardener.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 1,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([

            'name' => 'Matilde Murphy',
            'email' => 'Murphy@designer.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 2,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([

            'name' => 'Kelvin Schoen',
            'email' => 'Kelvin@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 3,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
