<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/materialize.min.css" media="screen,projection" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/PMI2.png') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $judul; ?></title>
</head>

<body id="home" class="scrollspy">
    <div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <a href="#home" class="brand-logo">&nbsp;PEMDUSI</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= base_url('home/blog'); ?>">Blog</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <?php if ($user !== null) {
                        $nama = $user['name'];
                        $data = "<small>$nama</small>";
                    } else {
                        $data = "";
                    }; ?>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?= $data; ?><i class="material-icons left">arrow_drop_down account_circle</i></a></li>
                </ul>
                <?php if ($this->session->userdata('email') !== null) : ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="<?= base_url('user/') ?>">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
                    </ul>
                <?php else : ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="<?= base_url('auth/registration') ?>">Register</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('auth/') ?>">Login</a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-nav">
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><?= $data; ?><i class="material-icons left">arrow_drop_down account_circle</i></a></li>
        <li><a href="<?= base_url('home/blog'); ?>">Blog</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
    <?php if ($this->session->userdata('email') !== null) : ?>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="<?= base_url('user') ?>">Profile</a></li>
            <li class="divider"></li>
            <li><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
        </ul>
    <?php else : ?>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="<?= base_url('auth/registration') ?>">Register</a></li>
            <li class="divider"></li>
            <li><a href="<?= base_url('auth/') ?>">Login</a></li>
        </ul>
    <?php endif; ?>