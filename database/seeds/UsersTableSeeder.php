<?php

use App\User;
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
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'istrator',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret')
        ]);
    }
}
