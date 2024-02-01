@extends('layouts/app')
@section('content')
<!-- digunakan untuk menampilkan bagian hasil pengumuman beasiswa-->
    <section class="contact_section long_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form_container">
                        <div class="heading_container" style="text-align: center;">
                            <h2>
                                Hasil Pengumuman Beasiswa
                            </h2>
                        </div>
                        <!--Membuat tabel menggunakan plugin DataTables untuk menampilkan hasil pengumuman beasiswa. Kolom tabel mencakup No, Nama, Email, No HP, Semester, IPK, Jenis Beasiswa, dan Status Ajuan.
                        Data diambil dari variabel $data, yang diasumsikan memiliki struktur yang sesuai. -->
                        <table class="data-table table stripe hover nowrap" id="hasil">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">IPK</th>
                                    <th scope="col">Jalur Beasiswa</th>
                                    <th scope="col">Status Ajuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Looping Data untuk Tabel -->
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->nama }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->nomor_hp }}</td>
                                        <td>{{ $d->semester }}</td>
                                        <td>{{ $d->ipk }}</td>
                                        <td>{{ $d->jenis_beasiswa }}</td>
                                        <td>{{ $d->status_ajuan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Jenis Beasiswa</h5>

                                    <!-- Menampilkan elemen <canvas> untuk membuat chart jenis pie menggunakan library Chart.js -->
                                    <canvas id="pieChart" style="max-height: 400px;"></canvas>
                                    <!-- Variabel $penghargaan, dan $baik digunakan untuk menyediakan data chart dari hasil pengumuman beasiswa-->
                                     <!-- PieChart untuk membuat grafik hasil dari pendaftaran--> 
                                   <script>
                                        var penghargaan = {{ $penghargaan }}
                                        var baik = {{ $baik }}
                                        console.log(penghargaan, baik)
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.querySelector('#pieChart'), {
                                                type: 'pie',
                                                data: {
                                                    labels: [
                                                        'Penghargaan',
                                                        'Baik',                  
                                                    ],
                                                    datasets: [{
                                                        label: 'jenis beasiswa',
                                                        data: [
                                                            penghargaan,
                                                            baik,
                                                        ],
                                                        backgroundColor: [
                                                            'rgb(255, 99, 132)',
                                                            'rgb(0, 255, 0)',
                                                            'rgb(255, 205, 86)'
                                                        ],
                                                        hoverOffset: 4
                                                    }]
                                                }
                                            });
                                        });
                                    </script>
                                    <!-- End Pie Chart -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection