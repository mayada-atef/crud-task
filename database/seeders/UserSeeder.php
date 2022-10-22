<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' =>  'admin@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
        User::factory(1)->create();
    }
}
