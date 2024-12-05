<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_users')->insert([
            'name' => "Banyar",
            'email' => "banyar@gmail.com",
            'phone' => "09771018546",
            'password' => Hash::make('123123123')
        ]);
    }
}
