<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BeasiswaQu - Website Beasiswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><i class="fa fa-graduation-cap" aria-hidden="true"></i>BeasiswaQu</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Beranda</a>
                <a href="/hasil" class="nav-item nav-link">Hasil</a>
                
            </div>
            <a href="/pendaftaran" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">PENDAFTARAN<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')

    <!-- JavaScript Libraries -->
    <script src=" {{ asset ('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src=" {{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset ('lib/wow/wow.min.js') }}"></script>
    <script src=" {{ asset ('lib/easing/easing.min.js') }}"></script>
    <script src=" {{ asset ('lib/waypoints/waypoints.min.js') }}"></script>
    <script src=" {{ asset ('lib/owlcarousel/owl.carousel.min.js') }}"></script>

     <!-- Template Javascript -->
     <script src=" {{ asset ('js/main.js') }}"></script>

    <!-- Template Javascript -->
    <script src=" {{ asset ('js/main.js') }}"></script>
</body>

</html>