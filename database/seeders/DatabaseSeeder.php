<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Mbarang;
use App\Models\Tpembelian;
use App\Models\Tpembelianbarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Barang
        Mbarang::create([
            'nama_barang' => 'Sabun batang',
            'harga_satuan' => '3000',
        ]);

        Mbarang::create([
            'nama_barang' => 'Mi Instan',
            'harga_satuan' => '2000',
        ]);

        Mbarang::create([
            'nama_barang' => 'Pensil',
            'harga_satuan' => '1000',
        ]);

        Mbarang::create([
            'nama_barang' => 'Kopi sachet',
            'harga_satuan' => '1500',
        ]);

        Mbarang::create([
            'nama_barang' => 'Air minum galon',
            'harga_satuan' => '20000',
        ]);
        //Barang

        //Users
        $password = 'useradmin';
        User::create([
            'name' => 'Fiqih',
            'username' => 'Fiqih',
            'email' => 'fiqih1666@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'Ariel Tatum',
            'username' => 'ariel',
            'email' => 'ariel@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Kasir',
        ]);

        User::create([
            'name' => 'Bill Gates',
            'username' => 'Bill',
            'email' => 'bill@gmail.com',
            'password' => Hash::make($password),
            'role' => 'Kasir',
        ]);
        //Users

        //Profile
        Profile::create([
            'umur' => 18,
            'jenis_kelamin' => 'Pria',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2001-01-13',
            'alamat' => 'Jl Guntur No.1',
            'bio' => 'I,M Web Developer',
            'no_telp' => '08222332233',
            'profile_foto' => 'default.svg',
            'user_id' => 1,
        ]);

        Profile::create([
            'umur' => 19,
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2002-02-10',
            'alamat' => 'Jl Guntur No.1',
            'bio' => 'I,M Web Developer',
            'no_telp' => '08222332233',
            'profile_foto' => 'default.svg',
            'user_id' => 2,
        ]);

        Profile::create([
            'umur' => 20,
            'jenis_kelamin' => 'Pria',
            'tempat_lahir' => 'Bogor',
            'tgl_lahir' => '2001-01-12',
            'alamat' => 'Jl Guntur No.1',
            'bio' => 'I,M Web Developer',
            'no_telp' => '08222332233',
            'profile_foto' => 'default.svg',
            'user_id' => 3,
        ]);
        //Profile


        //Transaksi Pembelian
        Tpembelian::create([
            'total_harga' => 39500,
        ]);

        Tpembelian::create([
            'total_harga' => 200000,
        ]);
        //Transaksi Pembelian

        //Transaksi Pembelian Barang
        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 1,
            'master_barang_id' => 1,
            'jumlah' => 10,
            'harga_satuan' => 3000,
        ]);

        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 1,
            'master_barang_id' => 3,
            'jumlah' => 5,
            'harga_satuan' => 1000,
        ]);

        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 1,
            'master_barang_id' => 4,
            'jumlah' => 3,
            'harga_satuan' => 1500,
        ]);

        Tpembelianbarang::create([
            'transaksi_pembelian_id' => 2,
            'master_barang_id' => 5,
            'jumlah' => 10,
            'harga_satuan' => 20000,
        ]);
        //Transaksi Pembelian Barang

    }
}