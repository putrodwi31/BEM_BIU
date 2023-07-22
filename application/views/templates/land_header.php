<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?>BEM Bina Insani University</title>
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/responsive.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/styless3.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/color.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/'); ?>img/klogo2.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
        .berita__terbaru-img {
            max-height: 300px;
            max-width: 500px;
            min-height: 300px;
            max-width: 500px;
        }

        @media only screen and (max-width: 600px) {
            .video__title {
                width: 520px;
            }

            .video__title {
                width: 520px;
            }

            .video__desc {
                width: 520px;
            }

            .video__content {
                width: 520px;
            }

            .video_bem {
                width: 520px;
            }
        }

        @media only screen and (max-width: 500px) {
            .video__title {
                width: 350px;
            }

            .video__title {
                width: 350px;
            }

            .video__desc {
                width: 350px;
            }

            .video__content {
                width: 350px;
            }

            .video_bem {
                width: 350px;
            }

            .berita__terbaru-img {
                max-height: 200px;
                max-width: 320px;
                min-height: 200px;
                max-width: 320px;
            }
        }

        @media only screen and (max-width: 400px) {
            .video__title {
                width: 350px;
            }

            .video__desc {
                width: 350px;
            }

            .video__content {
                width: 350px;
            }

            .video_bem {
                width: 340px;
            }
        }
    </style>
</head>

<body>
    <!-- Main Header -->
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <img src="<?= base_url('assets/'); ?>img/klogo2.png" href="index.php" class="nav__logo" alt="">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="<?= base_url('') ?>" class="nav__link<?= $title == '' ? ' active-link' : ''; ?>">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?= base_url('tentang-kami'); ?>" class="nav__link<?= $title == 'Tentang - ' || $title == 'Visi & Misi - ' || $title == 'Sejarah - ' ? ' active-link' : ''; ?>">Tentang Kami</a>
                        <i class="ri-arrow-down-s-line" style="color: white;"></i>
                        <ul class="dropdown__nav">
                            <li><a href="<?= base_url('tentang-kami'); ?>" class="dropdown__link">Tentang BEM</a></li>
                            <li><a href="<?= base_url('visi-misi'); ?>" class="dropdown__link">Visi - Misi</a></li>
                            <li><a href="<?= base_url('sejarah'); ?>" class="dropdown__link">Sejarah</a></li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="<?= base_url('berita-program'); ?>" class="nav__link<?= $title == 'Berita & Program - ' ? ' active-link' : ''; ?>">Berita & Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?= base_url('struktur-menteri'); ?>" class="nav__link<?= $title == 'Struktur & Menteri - ' ? ' active-link' : ''; ?>">Struktur & Menteri</a>
                    </li>

                    <li class="nav__item">
                        <a href="<?= base_url('ukm'); ?>" class="nav__link<?= $title == 'UKM - ' ? ' active-link' : ''; ?>">UKM</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?= base_url('contact'); ?>" class="nav__link button--ghost">Hubungi Kami</a>
                    </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>