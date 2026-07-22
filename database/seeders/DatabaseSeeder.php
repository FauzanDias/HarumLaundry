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
        // Layanan Kiloan
        $layananKiloan = [
            ['nama' => 'Cuci Lipat', 'satuan' => 'kg', 'waktu_cuci' => '3 Hari', 'harga' => 7000, 'deskripsi' => 'Layanan Kiloan - Harga Dasar (3 Hari)'],
            ['nama' => 'Cuci Lipat', 'satuan' => 'kg', 'waktu_cuci' => '2 Hari', 'harga' => 8000, 'deskripsi' => 'Layanan Kiloan - Harga Dasar (2 Hari)'],
            ['nama' => 'Cuci Lipat', 'satuan' => 'kg', 'waktu_cuci' => '1 Hari', 'harga' => 10000, 'deskripsi' => 'Layanan Kiloan - Harga Dasar (1 Hari)'],
            ['nama' => 'Cuci Lipat', 'satuan' => 'kg', 'waktu_cuci' => '6 jam', 'harga' => 20000, 'deskripsi' => 'Layanan Kiloan - Harga Dasar (6 Jam)'],
            ['nama' => 'Cuci Lipat', 'satuan' => 'kg', 'waktu_cuci' => '3 jam', 'harga' => 30000, 'deskripsi' => 'Layanan Kiloan - Harga Dasar (3 Jam)'],
        ];

        // Layanan Satuan
        $layananSatuan = [
            ['nama' => 'Bed Cover No. 1', 'satuan' => 'pcs', 'harga' => 40000, 'deskripsi' => 'Layanan Satuan - Harga Dasar (3 Hari)'],
            ['nama' => 'Bed Cover No. 2', 'satuan' => 'pcs', 'harga' => 35000, 'deskripsi' => 'Layanan Satuan - Harga Dasar (3 Hari)'],
            ['nama' => 'Bed Cover No. 3', 'satuan' => 'pcs', 'harga' => 30000, 'deskripsi' => 'Layanan Satuan - Harga Dasar (3 Hari)'],
        ];

        $layanan = array_merge($layananKiloan, $layananSatuan);

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