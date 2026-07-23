<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::insert([
            ['name' => 'Owner Harum Laundry', 'label' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'kasir1', 'label' => 'Kasir', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}