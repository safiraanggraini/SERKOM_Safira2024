<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\pendaftaran;
use Illuminate\Support\Facades\Validator;
use App\Models\Mahasiswa;

class PendaftaranController extends Controller
{
    /**
     * Menampilkan daftar pendaftaran beasiswa
     * Initial state: Tidak ada data yang ditampilkan
     * Final state: Menampilkan halaman pendaftaran dengan data judul, dan daftar NIM
     * Author: Safira Anggraini Irawan
     * Tanggal : 29 Januari 2024
     */
    public function index()
    {
        // Mengambil daftar NIM dari tabel mahasiswa
        $daftarNIM = Mahasiswa::pluck('nim');
        $jenisBeasiswaData = pendaftaran::all();

        // Menampilkan halaman pendaftaran dengan data judul, dan daftar NIM
        return view('pendaftaran', [
            'title' => 'Pendaftaran Beasiswa',
            'daftarNIM' => $daftarNIM,
            'jenisBeasiswaData' => $jenisBeasiswaData
        ]);
    }    
    
/**
 * Mengambil data mahasiswa berdasarkan NIM
 * Initial state: Tidak ada data mahasiswa yang diambil
 * Final state: Mengembalikan data mahasiswa berdasarkan NIM
 * Author: Safira Anggraini Irawan
 * Tanggal : 29 Januari 2024
 */
public function getMahasiswa($nim)
{
    $mahasiswa = Mahasiswa::where('nim', $nim)->first();
    return $mahasiswa ? json_encode($mahasiswa) : 'mahasiswa tidak ditemukan';
}

    /**
     * Menyimpan data pendaftaran beasiswa ke dalam database
     * Initial state: Tidak ada data pendaftaran beasiswa yang disimpan
     * Final state: Data pendaftaran beasiswa disimpan ke dalam database
     * Author: Safira Anggraini Irawan
     * Tanggal : 29 Januari 2024
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validator = Validator::make($request->all(), [
            'nim' => 'required|unique:pendaftarans,nim', // Menambahkan aturan unik
            'nama' => 'required|unique:pendaftarans,nama', // Menambahkan aturan unik
            'email' => 'required|email:dns|max:255', // Memastikan bahwa nilai pada kolom 'email' merupakan alamat email yang valid.
            'nomor_hp' => 'required|numeric', //Menunjukkan bahwa kolom 'nomor_hp' wajib diisi, tidak boleh kosong berupa angka
            'semester' => 'required|numeric|between:1,8', //  Memastikan bahwa nilai pada kolom 'semester' adalah angka (numeric).
            'ipk' => 'numeric|min:3', // Memastikan IPK dengan nilai minimal 3
            'jenis_beasiswa' => 'required', //Menunjukkan bahwa kolom 'jenis_beasiswa' wajib diisi, tidak boleh kosong.
            'upload_berkas' => 'required|mimes:pdf,jpg,jpeg', //Membuat aturan untuk upload berkas berupa pdf/jpg/jpeg
        ]);

        if ($validator->fails()) {
            // Jika validasi gagal, redirect kembali ke halaman pendaftaran dengan error
            return redirect()->route('pendaftaran.index')->withErrors($validator, 'pendaftaran');
        }

        // Memproses upload berkas
        $path = 'Gambar_Berkas';
        $file = $request->file('upload_berkas');
        $fileName = $file->getClientOriginalName();
        Storage::putFileAs($path, $file, $fileName);

        // Menyimpan data pendaftaran beasiswa ke dalam database
        pendaftaran::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_hp' => $request->nomor_hp,
            'semester' => $request->semester,
            'ipk' => $request->ipk,
            'jenis_beasiswa' => $request->jenis_beasiswa,
            'upload_berkas' => $path . '/' . $fileName,
            'status_ajuan' => 'belum diverifikasi',
        ]);

        // Redirect kembali ke halaman pendaftaran dengan pesan sukses
        return redirect()->route('pendaftaran.index')->with('success', 'Data berhasil diproses, Silahkan Lihat di Halaman Hasil');
    }

    /**
     * Menghapus data pendaftaran beasiswa dari database
     * Initial state: Tidak ada data pendaftaran beasiswa yang dihapus
     * Final state: Data pendaftaran beasiswa dihapus dari database
     * Author: Safira Anggraini Irawan
     * Tanggal : 29 Januari 2024
     */
    public function destroy(string $id)
    {
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->delete();
    }
}