<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@apexequity.io')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'User Panel',
                'status' => 1,
                'username' =>'user',
                'admin' => false,
                'balance' => 90000,
                'profit' => 69000,
                'email' => 'user@apexequity.io',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('PASSWORD12'),

            ]);

        }
    }

}
