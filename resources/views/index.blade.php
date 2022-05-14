<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Laravel Jetstream</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    {{-- font awesome --}}
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>html {
        scroll-behavior: smooth;
      }</style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"></i>Laravel<span class="fs-5"> Jetsream</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#pengertian" class="nav-item nav-link active">Pengertian</a>
                        <a href="#kenapa" class="nav-item nav-link active">Kelebihan</a>
                        <a href="#fitur" class="nav-item nav-link active">Fitur</a>
                     
                    </div>
                  
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5" id="home">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Apa itu Laravel Jetstream??</h1>
                            <p class="text-white pb-3 animated zoomIn">Laravel jetstream adalah starter kit bawaan laravel yang memiliki desaign yang indah dan telah mengimplementasikan fitur otentikasi dua faktor, session, dan API</p>
                     
                            <a href="/register" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Live Demo</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/paperjett.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        {{-- <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End --> --}}


               {{-- pengertian --}}
               <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s" id="pengertian">
                <div class="container px-lg-5">
                    <div class="row align-items-center" style="height: 250px;">
                        <div class="col-12 col-md-6">
                            <h3 class="text-white mb-3">Pengertian dari Laravel Jetstream</h3>
                            <p class="text-white">Laravel jetstream adalah starter kit (tingkat lanjut) dari Laravel Breeze, dikarenakan jetstrteam memiliki fitur yang lumayan compleks. yakni otentikasi dua faktor, email verifikasi session management, API dengan menggunkaan laravel Sanctum.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- pengertian end --}}
    

        <!-- About Start -->
        <div class="container-xxl py-5" id="kenapa">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                           
                            <h2 class="mt-2">Kenapa pakai Laravel Jetstream?</h2>
                        </div>
                        <p class="mb-4">Selain desaign yang cantik laravel jetstream sudah mengimplementasikan livewire, dimana di laravel Breeze belum menggunakan teknologi tersebut. laravel jetstream ini dikhusukan untuk pengguna yang sudah paham dengan laravel breeze dan livewire. starter kit ini sangat cocok untuk kamu yang akan membuat wibsite modern dengan menerapkan otentikasi 2 faktor, session, dan API</p>
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Autentikasi 2 faktor</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Session management</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>API(laravel Sanctum)</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Livewire + Blades</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Inertia + vue</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Tailwind CSS</h6>
                            </div>
                        </div>
                        
                    </div>
                    {{-- <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Service Start -->
        <div class="container-xxl py-5" id="fitur">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                   
                    <h2 class="mt-2">Fitur-fitur Laravel Jetstream</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                
                            </div>
                            <h5 class="mb-3">Autentikasi 2 faktor</h5>
                            <p>Autentikasi 2 faktor membuat website kamu lebih aman karena memiliki sistem keamanan yang memakai dua dari faktor.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://experience.dropbox.com/id-id/resources/what-is-2fa#:~:text=Autentikasi%20dua%20faktor%20secara%20sederhana,sandi%20atau%20nomor%20PIN%20Anda.">Detail...</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                
                            </div>
                            <h5 class="mb-3">Session management</h5>
                            <p>Implementasi session management mendefinisikan mekanisme pertukaran yang akan digunakan antara pengguna dan aplikasi web untuk berbagi dan terus bertukar ID sesi..</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://cheatsheetseries.owasp.org/cheatsheets/Session_Management_Cheat_Sheet.html">Detail...</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                
                            </div>
                            <h5 class="mb-3">API dengan laravel Sanctum</h5>
                            <p>Laravel Sanctum menyediakan sistem otentikasi kelas bulu untuk SPA (aplikasi satu halaman), aplikasi seluler, dan API berbasis token sederhana.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://laravel.com/docs/9.x/sanctum">Detail...</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                
                            </div>
                            <h5 class="mb-3">Livewire + Blade</h5>
                            <p>Livewire adalah Framework full-stack untuk Laravel yang membuat membangun antarmuka dinamis menjadi sederhana, tanpa meninggalkan kenyamanan Laravel.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="https://laravel-livewire.com/">Detail...</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                
                            </div>
                            <h5 class="mb-3">Inertia + vue</h5>
                            <p>Inertia telah disediakan oleh Jetstream menggunakan Vue.js sebagai bahasa templatingnya. Membangun aplikasi Inertia sangat mirip dengan membangun aplikasi Vue biasa.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Detail...</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                
                            </div>
                            <h5 class="mb-3">Tailwind CSS</h5>
                            <p>Tailwind css adalah css framework yang memiliki design simple dan memprioritaskan proses untuk membangun desaign antarmuka khusus dengan cepat.
                            </p>
                            <a class="btn px-3 mt-auto mx-auto" href="">Detail...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


    
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" id="footer">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                  
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Sumber Informasi</h5>
                        <a class="btn btn-link" href="https://jetstream.laravel.com/2.x/installation.html">Dokumentasi</a>
                        <a class="btn btn-link" href="https://youtu.be/iZzaGvsJp04">Tutorial Youtube</a>
                        <a class="btn btn-link" href="https://codelapan.com/post/crud-laravel-8-jetstream-livewire">Tutorial website</a>
                        <a class="btn btn-link" href="https://github.com/IRS-dev/Laravel-Jetstream-007">Github Repo</a>
                    </div>
                  
               
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">
							Designed By Irsyad
                          </a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>