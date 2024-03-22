<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create sample login records
        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        User::create([
            'username' => 'user',
            'password' => Hash::make('user123'),
        ]);

        // Alternatively, you can use DB facade
        /*DB::table('logins')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
        ]);

        DB::table('logins')->insert([
            'username' => 'user',
            'password' => Hash::make('user123'),
        ]);*/
    }
}
