<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //criar multiplos usuarios
        DB::table('usuarios')->insert([
            [
                'name' => 'Davi',
                'email' => 'davisoaresgigante@gmail.com',
                'password' => Hash::make('123'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sofia',
                'email' => 'sofia@gmail.com',
                'password' => Hash::make('123'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Laka',
                'email' => 'laka@gmail.com',
                'password' => Hash::make('123'),
                'created_at' => date('Y-m-d H:i:s')
            ]
            ]);
    }
}
