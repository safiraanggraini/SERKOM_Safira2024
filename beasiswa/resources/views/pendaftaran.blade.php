@extends('layouts/app')
@section('content')
    <!-- Menggunakan kelas contact_section dan long_section untuk styling. Menggunakan formulir HTML dengan metode POST yang mengarah ke rute pendaftaran.store. -->
    <section class="contact_section long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form_container">
                        <div class="heading_container" style="text-align: center;">
                            <h2>
                                Form Pendaftaran Beasiswa
                            </h2>
                        </div>
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                                @if (Session::has('success'))
                                    <a href="/hasil">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    </a>
                                @endif
                                <!--Formulir HTML dengan atribut action menuju rute pendaftaran.store dan metode POST -->
                                <form action="{{ route('pendaftaran.store') }}" method="POST" class="text-main"
                                    enctype="multipart/form-data" id="beasiswaForm">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <select class="form-select border-0 bg-light px-4" name="nim" id="nim"
                                                style="height: 55px;">
                                                <!--Dropdown untuk memilih NIM dari daftar yang berasal dari variabel $daftarNIM-->
                                                <option value="" disabled selected>Pilih NIM</option>
                                                <!-- Tampilkan daftar NIM dari database -->
                                                @foreach ($daftarNIM as $nim)
                                                    <option value="{{ $nim }}">{{ $nim }}</option>
                                                @endforeach
                                            </select>
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('nim') }}</div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control border-0 bg-light px-4" name="nama"
                                                placeholder="Masukan Nama Anda"
                                                value="{{ isset($mahasiswa->nama) ? $nama : '' }}" style="height: 55px;"
                                                readonly>
                                            <!--Input teks untuk nama dengan nilai default dari variabel $mahasiswa->nama jika ada-->
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('nama') }}</div>
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Input untuk alamat email, Menampilkan pesan kesalahan jika ada-->
                                            <input type="email" class="form-control border-0 bg-light px-4" name="email"
                                                placeholder="Masukan Email" style="height: 55px;">
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('email') }}</div>
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Input untuk nomor hp, Menampilkan pesan kesalahan jika ada-->
                                            <input type="number" class="form-control border-0 bg-light px-4"
                                                name="nomor_hp" placeholder="Masukan Nomor HP" style="height: 55px;">
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('nomor_hp') }}</div>
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Dropdown untuk memilih semester dari 1 hingga 8, Menampilkan pesan kesalahan jika ada-->
                                            <select class="form-select border-0 bg-light px-4" name="semester" id
                                                style="height: 55px;">
                                                <option value="" disabled selected>Pilih Semester</option>
                                            <!--Kondisi percabangan untuk menampilkan pilihan semester -->    
                                                @for ($i = 1; $i <= 8; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('semester') }}</div>
                                        </div>
                                        <div class="col-md-12">
                                            <!--Input untuk IPK dengan nilai default dari variabel $mahasiswa->ipk jika ada, Menampilkan pesan kesalahan jika ada-->
                                            <input type="text" class="form-control border-0 bg-light px-4" name="ipk"
                                                id="ipk" value="{{ isset($mahasiswa->ipk) ? $ipk : '' }}"
                                                placeholder="Masukan IPK" style="height: 55px;" readonly>
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('ipk') }}</div>
                                        </div>

                                        <div class="col-md-12">
                                            <!--Dropdown untuk memilih jenis beasiswa (penghargaan, baik), Menampilkan pesan kesalahan jika ada-->
                                            <select class="form-select border-0 bg-light px-4" name="jenis_beasiswa"
                                                style="height: 55px;" id="jenisBeasiswa" disabled>
                                                <option value="" disabled selected>Jenis Beasiswa</option>
                                                <option value="penghargaan">Penghargaan</option>
                                                <option value="baik">Baik</option>
                                            </select>
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('jenis_beasiswa') }}</div>
                                        </div>

                                        <div class="col-md-12">
                                            <!--Input untuk mengunggah berkas dengan batasan tipe file yang diperbolehkan (pdf, jpg, jpeg), Menampilkan pesan kesalahan jika ada-->
                                            <label for="uploadBerkas" class="form-label">Pilih Berkas (pdf/jpg):</label>
                                            <input type="file" class="form-control border-0 bg-light px-4"
                                                name="upload_berkas" id="uploadBerkas" style="height: 55px;" disabled
                                                accept=".pdf, .jpg, .jpeg">
                                            <div class="errors text-danger" style="font-size: 14px">
                                                {{ $errors->pendaftaran->first('upload_berkas') }}
                                            </div>
                                            <small class="form-text text-muted">
                                                Harap unggah file dalam format .pdf atau .jpg.
                                            </small>
                                        </div>

                                        <div class="row justify-content-evenly">
                                            <div class="col-5">
                                                <!-- Menampilkan tampilan button daftar-->
                                                <button id="btnDaftar" class="btn btn-utama w-100 py-3" type="submit"
                                                    disabled>Daftar</button>
                                            </div>
                                            <div class="col-4">
                                                <!-- Menampilkan tampilan button batal-->
                                                <button id="btnbatal" class="btn btn-kedua w-100 py-3" type="button"
                                                    disabled>Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            let ipkValue = "";
            // Menangkap perubahan pada elemen dengan ID nim (dropdown NIM pada formulir)
            $('#nim').on('change', function() {
                // Mengambil nilai NIM yang dipilih dari dropdown
                var nim = $(this).val();

                // Ini adalah panggilan AJAX menggunakan jQuery untuk mengambil data mahasiswa berdasarkan NIM dari server
                $.ajax({
                    url: '/get-mahasiswa/' +
                        nim, // Menentukan URL endpoint untuk mengambil data mahasiswa
                    dataType: 'json',
                    type: 'GET',
                    success: function(data) {
                        // Isi nilai nama dan IPK dengan data yang diambil dari server
                        $('input[name="nama"]').val(data.nama);
                        $('input[name="ipk"]').val(data.ipk);
                        ipkValue = data.ipk;
                        console.log(ipkValue);
                        // Mendapatkan elemen input jenis beasiswa
                        let jenisBeasiswaInput = document.getElementById("jenisBeasiswa");
                        let upload_berkas = document.getElementById("uploadBerkas");
                        let button = document.getElementById("btnDaftar");
                        let buttonbtl = document.getElementById("btnbatal");

                        // Memeriksa apakah IPK kurang dari 3, apabila iya maka disable fitur selanjutnya
                        if (ipkValue < 3) {
                            jenisBeasiswaInput.disabled = true;
                            upload_berkas.disabled = true;
                            button.disabled = true;
                            buttonbtl.disabled = true;
                        } else {
                            jenisBeasiswaInput.disabled = false;
                            upload_berkas.disabled = false;
                            button.disabled = false;
                            buttonbtl.disabled = false;
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });

            });
            $('#btnbatal').on('click', function() {
                // Mengosongkan semua input form
                $('select[name="nim"]').val('');
                $('input[name="nama"]').val('');
                $('input[name="ipk"]').val('');
                $('input[name="email"]').val('');
                $('input[name="nomor_hp"]').val('');
                $('select[name="semester"]').val('');
                $('select[name="jenis_beasiswa"]').val('');
                $('input[name="upload_berkas"]').val('');
                // Menonaktifkan input jenis beasiswa, upload berkas, dan tombol daftar serta batal
                document.getElementById("jenisBeasiswa").disabled = true;
                document.getElementById("uploadBerkas").disabled = true;
                document.getElementById("btnDaftar").disabled = true;
                document.getElementById("btnbatal").disabled = true;
            });
        });
    </script>
@endsection