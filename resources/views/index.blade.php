<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Title -->
    <title> Devina Collection</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="./assets/img/avatars/LogoDC.png" />
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="./assets/css/landing.css" />
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./assets/css/responsive.css"  />
    <link rel="stylesheet" href="./assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Resource style -->
    <script src="./assets/js/modernizr.js"></script> 
    <!-- Modernize -->


    <style>

        header .name {
        display: block;
        text-transform: uppercase;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1em;
        font-weight: 500;
        }

    </style>

    
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header_area headroom">
        <div class="container-fluid bg-color" style="width: 100% !important">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-xl navbar-light px-1">
                            <!-- Logo -->
                            <a href="#home">
                                <img src="./assets/img/avatars/LogoDC.png" class="img-fluid logo-width" alt="Brand Logo" /></a><h3>Devina Collection</h3>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    @auth
                                        {{-- FOR AUTHENTICATED USERS --}}
                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <button class="btn btn-md btn-label-warning dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    Hello, {{ auth()->user()->username }}
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-34px, 37px);" data-popper-placement="bottom-end">
                                                    <a class="dropdown-item" href="{{ auth()->user()->level == 1 ? '/adminpage-dashboard' : '/siswapage-dashboard' }}">
                                                        <i class="bx bx-user me-2"></i>
                                                        <span class="align-middle">My Dashboard</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="/logout" method="POST">
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i class="bx bx-power-off me-2"></i>
                                                            <span class="align-middle">Log Out</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        {{-- FOR NON AUTHENTICATED USERS --}}
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="/login">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="/login">Produk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="/login">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3" href="/login">Login</a>
                                        </li>
                                        <li class="nav-item buynow-btn mx-auto">
                                            <a class="nav-link px-4" href="/register" target="_blank">Register</a>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    {{-- <!-- ***** Welcome Area Start ***** -->
    <section style="height: 100vh;" class="bg-grey" id="demos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <img style="margin-top:300px; width:90px;" class="img-fluid align-content" src="./assets/img/avatars/LogoDC.png" alt="">
                        </div>
                        <div class="d-flex justify-content-center">
                            <h1>APLIKASI</h1> <br>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h2>TABUNGAN SISWA</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
</section>
    {{-- <!-- ***** Welcome Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section style="height: 100vh;" class="bg-white" id="demos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="margin-top: 280px;">DESKRIPSI SISTEM</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row" style="margin: 20px 0;">
                <div class="col-lg-12">
                    <p class="deskripsi">APlikasi ini dibuat oleh para programmer yang sangad ahli dalam bidangnya digunakan untuk menabung dan memudahkan siswa dalam menabung </p>
                </div>
            </div>
        </div>
</section>
    <!-- ***** Awesome Features End ***** --> --}}

    <!-- ***** Cool Facts Area Start ***** -->
    {{-- <section class="cool-facts-area clearfix">
        <div class="container-fluid">
            <h1 class="text-center text-light fw-bolder">Development Teams</h1>
            <div class="row text-center justify-content-center">
                <!-- Single Cool Fact-->
                <div class="col-lg-2 col-6 mt-4">
                    <div class="card text-center">
                        <div class="card-header">
                            211402144
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Arnis Chairiah</h5>
                            <img src="./assets/img/avatars/2.png" alt="" class="img-fluid rounded">
                        </div>
                        <div class="card-footer text-muted">
                            <a href="javascript:void(0)" class="btn buynow-btn text-light" style="margin-left: 0 !important"><i class="bx bx-camera"></i> Instagram</a>
                            <a href="javascript:void(0)" class="btn buynow-btn text-light mt-2" style="margin-left: 0 !important"><i class="bx bx-mail-send"></i> Gmail</a>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-2 col-6 mt-4">
                    <div class="card text-center">
                        <div class="card-header">
                            211402084
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Caesto Marco</h5>
                            <img src="./assets/img/avatars/1.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-muted">
                            <a href="javascript:void(0)" class="btn buynow-btn text-light" style="margin-left: 0 !important"><i class="bx bx-camera"></i> Instagram</a>
                            <a href="javascript:void(0)" class="btn buynow-btn text-light mt-2" style="margin-left: 0 !important"><i class="bx bx-mail-send"></i> Gmail</a>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-2 col-6 mt-4">
                    <div class="card text-center">
                        <div class="card-header">
                            211402087
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gabryelle Ninna</h5>
                            <img src="./assets/img/avatars/6.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-muted">
                            <a href="javascript:void(0)" class="btn buynow-btn text-light" style="margin-left: 0 !important"><i class="bx bx-camera"></i> Instagram</a>
                            <a href="javascript:void(0)" class="btn buynow-btn text-light mt-2" style="margin-left: 0 !important"><i class="bx bx-mail-send"></i> Gmail</a>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-2 col-6 mt-4">
                    <div class="card text-center">
                        <div class="card-header">
                            211402102
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Wildan Taufiq</h5>
                            <img src="./assets/img/avatars/3.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-muted">
                            <a href="javascript:void(0)" class="btn buynow-btn text-light" style="margin-left: 0 !important"><i class="bx bx-camera"></i> Instagram</a>
                            <a href="javascript:void(0)" class="btn buynow-btn text-light mt-2" style="margin-left: 0 !important"><i class="bx bx-mail-send"></i> Gmail</a>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-2 col-6 mt-4">
                    <div class="card text-center">
                        <div class="card-header">
                            211402060
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Yusuf Valentino</h5>
                            <img src="./assets/img/avatars/7.png" alt="" class="img-fluid">
                        </div>
                        <div class="card-footer text-muted">
                            <a href="javascript:void(0)" class="btn buynow-btn text-light" style="margin-left: 0 !important"><i class="bx bx-camera"></i> Instagram</a>
                            <a href="javascript:void(0)" class="btn buynow-btn text-light mt-2" style="margin-left: 0 !important"><i class="bx bx-mail-send"></i> Gmail</a>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** --> --}}

    <!-- Footer Area -->
    <footer class="text-center pt-3 clearfix">
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>
                Copyright ©<span class="year"></span> Designed by
                <a href="#" target="_self">Kelompok 6</a>
            </p>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="./assets/js/jquery-2.2.4.min.js"></script>
    <!-- Headroom js -->
    <script src="./assets/js/headroom.js"></script>
    <!-- Popper js -->
    <script src="./assets/js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="./assets/js/plugins.js"></script>
    <!-- Active JS -->
    <script src="./assets/js/active.js"></script>
    <script src="./assets/js/jquery.mobile.custom.min.js"></script>
    <!-- Resource jQuery -->
    <script src="./assets/js/landing.js"></script>
    <!-- Resource jQuery -->
</body>

</html>