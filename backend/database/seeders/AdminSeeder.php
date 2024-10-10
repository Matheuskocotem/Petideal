<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        if (!User::where('role', 'admin')->exists()) {
            User::create([
                'name' => 'Admin Padrão',
                'email' => 'admin@exemplo.com',
                'password' => Hash::make('senhaAdmin123'),
                'cpf' => '12345678901',
                'address' => 'Endereço Admin',
                'phone_number' => '11999999999',
                'role' => 'admin',
            ]);
        }
    }
}
