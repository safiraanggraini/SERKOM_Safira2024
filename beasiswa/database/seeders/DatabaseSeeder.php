<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// Mendefinisikan kelas DatabaseSeeder yang merupakan turunan dari kelas Seeder pada Laravel
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menghapus Data Tabel
        DB::table('mahasiswas')->delete();

        // Tambahkan data seeder
        DB::table('mahasiswas')->insert([
            'nama' => 'naeli',
            'nim' => '20102020',
            'ipk' => 3.8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'nanaz',
            'nim' => '20102021',
            'ipk' => 2.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'lala',
            'nim' => '20102022',
            'ipk' => 3.7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'rayhan',
            'nim' => '20102023',
            'ipk' => 3.2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('mahasiswas')->insert([
            'nama' => 'dila',
            'nim' => '20102024',
            'ipk' => 3.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}