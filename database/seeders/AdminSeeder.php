<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Créer le rôle admin s'il n'existe pas
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Vérifier si l'admin existe déjà
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'nom' => 'Super',
                'prenom' => 'Admin',
                'telephone' => '0700000000',
                'password' => Hash::make('password123'),
            ]
        );

        // Assigner le rôle admin à l'utilisateur
        $admin->assignRole($adminRole);
    }
}
