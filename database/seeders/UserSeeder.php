<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role_id'   => 1,
            'name'      => 'Owner Harum Laundry',
            'email'     => 'admin@harumlaundry.com',
            'password'  => Hash::make('Admin123'),
            'is_active' => true,
        ]);

        User::create([
            'role_id'   => 2,
            'name'      => 'kasir1',
            'email'     => 'kasir@harumlaundry.com',
            'password'  => Hash::make('Kasir123'),
            'is_active' => true,
        ]);
    }
}