@extends('layouts/app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/beasiswa.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Segera daftarkan diri anda!</h1>
                                    <p class="text-light mb-5 animated slideInDown">Tingkatkan potensimu dan buka pintu kesempatan dengan beragam peluang beasiswa yang ditawarkan. Mari kita bersama-sama menapaki perjalanan pendidikan yang membanggakan</p>
                                    <a href="#penghargaan" class="btn btn-primary py-sm-3 px-sm-5">Beasiswa PENGHARGAAN</a>
                                    <a href="#baik" class="btn btn-light py-sm-3 px-sm-5 ms-3">Beasiswa BAIK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/beasiswa1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/gbrkecil.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Tentang Beasiswa</h6>
                        <h1 class="display-6 mb-4" id="penghargaan">Beasiswa Penghargaan</h1>
                        <p>Beasiswa penghargaan tentunya diberikan kepada kamu yang memiliki prestasi atau pencapaian akademik yang luar biasa. Indikatornya adalah indeks prestasi kumulatif para mahasiswa. Nggak cuma itu, Mahasiswa yang aktif dalam berbagai kegiatan non-akademik lainnya juga menjadi salah satu syarat pertimbangan untuk bisa mendapatkan jenis beasiswa ini.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>IPK Min. 3,0 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Mahasiswa Aktif Semester 1-8
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Memiliki Prestasi akademik 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Aktif kegiatan non-akademik
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="/pendaftaran">Daftar sekarang</a>
                            </div>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Tentang Beasiswa</h6>
                        <h1 class="display-6 mb-4" id="baik">Beasiswa BAIK</h1>
                        <p>Beasiswa BAIK tentunya diberikan kepada mahasiswa yang tergolong kurang mampu secara ekonomi, sehingga tidak dapat menanggung beban biaya studi. Namun memiliki prestasi akademik yang gemilang sehingga dianggap layak untuk melanjutkan pendidikannya ke jenjang yang lebih tinggi. Penilaian dari ketidakmampuan finansial calon penerima beasiswa ini adalah pendapatan orangtua, jumlah saudara kandung, biaya hidup, sampai lingkungan tempat tinggal.</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>IPK Min. 3,0 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Mahasiswa Aktif Semester 1-8
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Memiliki Prestasi akademik
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Memiliki Surat Keterangan Tidak Mampu
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="/pendaftaran">Daftar sekarang</a>
                            </div>
                           
                                </a>
                            </div>
                        </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/beasiswa2.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/gbrkecil.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-4">Terhubung</h4>
                    <h2 class="text-primary mb-4"><i class="fa fa-graduation-cap text-white me-2"></i>BeasiswaQu</h2>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Purwokerto, Jawa Tengah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 896 0470 2658</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>beasiswaqu@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Tautan Langsung</h4>
                    <a class="btn btn-link" href="">Tentang beasiswa</a>
                    <a class="btn btn-link" href="">Kontak beasiswa</a>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Surat berita</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Masukkan Email ">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">beasiswaqu</a>, All Right Reserved.
                </div>
                
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @endsection