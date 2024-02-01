<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;

class HasilController extends Controller
{
    /**
    * Menampilkan hasil pendaftaran beasiswa
    * Initial state: Tidak ada data yang ditampilkan
    * Final state: Menampilkan halaman hasil dengan data pendaftaran, beasiswa penghargaan, beasiswa baik dan judul halaman hasil
    * Author: Safira Anggraini Irawan
    * Tanggal : 29 Januari 2024
    */
    public function index()
    {
        // Mengambil semua data pendaftaran
        $data = pendaftaran::all();

        // Menghitung jumlah pendaftaran dengan jenis beasiswa penghargaan
        $penghargaan = pendaftaran::where('jenis_beasiswa', 'penghargaan')->count();

        // Menghitung jumlah pendaftaran dengan jenis beasiswa baik
        $baik = pendaftaran::where('jenis_beasiswa', 'baik')->count();


        // Mengembalikan view hasil dengan data pendaftaran, beasiswa penghargaan, beasiswa baik dan judul
        return view('hasil', [
            'data' => $data,
            'penghargaan' => $penghargaan,
            'baik' => $baik,
            'title' => 'Hasil Pendaftaran',
        ]);
    }

}