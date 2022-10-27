<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url('assets/'); ?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url('assets/'); ?>css/styless.css" rel="stylesheet">
</head>

<body class="fixed-sn mdb-skin-custom">

    <!--Navbar -->
    <nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark blue darken-2">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <section>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner mt-5">
                <div class="carousel-item active">
                    <img width="100%" class="d-block" src="<?= base_url('assets/') ?>img/slider/pp.png" alt="First slide">
                    <div class="carousel-caption text-right">
                        <div class="animated fadeInRight">
                            <h3 class="h3-responsive">Pertolongan Pertama</h3>
                            <p class="font-weight-light">Menumbuhkan jiwa penolong.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" class="d-block" src="<?= base_url('assets/') ?>img/slider/pk.png" alt="Second slide">
                    <div class="carousel-caption text-left">
                        <div class="animated fadeInLeft">
                            <h3 class="h3-responsive">Perawatan Keluarga</h3>
                            <p class="font-weight-light">Mampu menjadi penolong di dalam keluarga.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" class="d-block" src="<?= base_url('assets/') ?>img/slider/tandu.png" alt="Third slide">
                    <div class="carousel-caption">
                        <div class="animated fadeInDown">
                            <h3 class="h3-responsive">Tandu</h3>
                            <p class="font-weight-light">Siap tanggap dimanapun.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section>
        <div class="container">
            <div class="row text-center mt-5 mb-3 font-weight-light">
                <div class="col ">
                    <h3 class="grey-darken-3-text ">Tentang PMR 2 Bekasi</h3>
                </div>

            </div>

            <div class="row">
                <div class="col-md font-weight-light">
                    <h5>We Strong Because We Are Family</h5>
                    <p>PMR SMK Negeri 2 Kota Bekasi (PEMDUSI) adalah organisasi kepalangmerahan,Mempunyai 3 divisi yaitu Pertolongan Pertama, Perawatan Keluarga, Tandu Darurat</p>
                </div>
                <div class="col-md font-weight-lighter">
                    <p>PERTOLONGAN PERTAMA</p>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>PERAWATAN KELUARGA</p>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p>TANDU DARURAT</p>
                    <div class="progress" style="height: 4px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small blue darken-3">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- SCRIPTS -->
    <p class="font-weight-bold">Bold text.</p>
    <p class="font-weight-bolder">Bolder weight text (relative to the parent element).</p>
    <p class="font-weight-normal">Normal weight text.</p>
    <p class="font-weight-light">Light weight text.</p>
    <p class="font-weight-lighter">Lighter weight text (relative to the parent element).</p>
    <p class="font-italic">Italic text.</p>
    <script>
        $('.carousel').carousel({
            interval: 300
        })
    </script>
    <!-- JQuery -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/mdb.min.js"></script>
</body>


</html>