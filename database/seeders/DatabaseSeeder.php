<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use App\Models\Layanan;
use App\Models\Pelanggan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Roles
        $admin  = Role::create(['name' => 'admin',  'label' => 'Administrator']);
        $kasir  = Role::create(['name' => 'kasir',  'label' => 'Kasir']);

        // Users
        User::create([
            'role_id'   => $admin->id,
            'name'      => 'Fauzan Dias Khairi',
            'email'     => 'admin@harumlaundry.com',
            'password'  => Hash::make('Admin123'),
            'is_active' => true,
        ]);

        User::create([
            'role_id'   => $kasir->id,
            'name'      => 'kasir1',
            'email'     => 'kasir@harumlaundry.com',
            'password'  => Hash::make('Kasir123'),
            'is_active' => true,
        ]);

        // Layanan
        $layanan = [
            ['nama' => 'Cuci + Setrika',   'satuan' => 'kg',  'harga' => 7000,  'deskripsi' => 'Cuci bersih dan disetrika rapi'],
            ['nama' => 'Cuci Saja',        'satuan' => 'kg',  'harga' => 5000,  'deskripsi' => 'Hanya dicuci tanpa setrika'],
            ['nama' => 'Setrika Saja',     'satuan' => 'kg',  'harga' => 4000,  'deskripsi' => 'Hanya disetrika tanpa cuci'],
            ['nama' => 'Dry Cleaning',     'satuan' => 'pcs', 'harga' => 25000, 'deskripsi' => 'Layanan dry cleaning untuk baju sensitif'],
            ['nama' => 'Cuci Sepatu',      'satuan' => 'pcs', 'harga' => 30000, 'deskripsi' => 'Cuci bersih sepatu'],
            ['nama' => 'Cuci Karpet',      'satuan' => 'kg',  'harga' => 10000, 'deskripsi' => 'Cuci karpet berbagai ukuran'],
            ['nama' => 'Express (1 Hari)', 'satuan' => 'kg',  'harga' => 12000, 'deskripsi' => 'Layanan express selesai 1 hari'],
        ];

        foreach ($layanan as $l) {
            Layanan::create(array_merge($l, ['is_active' => true]));
        }

        // Sample pelanggan
        $pelanggan = [
            ['nama' => 'Fauzan Dias',   'telepon' => '085348706418', 'alamat' => 'Jl. Permadi, Sorosutan. Kota Yogyakarta'],
        ];

        foreach ($pelanggan as $p) {
            Pelanggan::create($p);
        }
    }
}