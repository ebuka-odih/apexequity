<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@apexequity.io')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'Admin Panel',
                'status' => 1,
                'username' =>'admin',
                'role' => 1,
                'balance' => 90000,
                'profit' => 69000,
                'email' => 'admin@apexequity.io',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('PASSWORD1'),

            ]);

        }
    }

}
