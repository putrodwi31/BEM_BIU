<main class="main">


    <!--==================== SWIPER CARD ====================-->

    <section class="swiper__section section " id="berita">
        <div class="swiper__title">
            <h2 class="struktur__title">Jajaran Pengurus & Kementerian Pada BEM <br> Bina Insani University 2022/2023</h2>
            <p class="struktur__desc">Jajaran Pengurus Inti</p>
        </div>
        <div class="swiper mySwiper swiper__container container grid">
            <div class="swiper-wrapper">
                <?php foreach ($bph as $b) : ?>
                    <div class="swiper-slide swiper-card">
                        <div class="swiper__card-content">
                            <div class="swiper-image">
                                <img src="<?= base_url("assets/img/team/") . $b['image'] ?>" class="swiper-image-img" alt="">
                            </div>
                            <h2 class="nama__profesi"><?= $b['nama'] ?></h2>
                            <p class="desc__profesi"><?= $b['jabatan'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="swiper-pagination"></div>
        </div>


    </section>
    <!-- ==================== KEMENTERIAN ==================== -->
    <section class="program section container" id="program">
        <h2 class="divisi__title">Kementerian pada BEM BIU</h2>
        <div class="program__container grid">
            <?php foreach ($kem as $u) : ?>
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="divisi__card-title">Kementerian</p>
                        <h2 class="divisi__card-desc"><?= $u['nama']; ?></h2>
                    </div>
                    <img src="<?= base_url('assets/img/logo/') . $u['logo']; ?>" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi"><?= word_limiter($u['desk'], 7); ?></h2>
                        <?php
                        $no = 1;
                        if ($no != 1) {
                            echo "<a href='" . base_url('detail-kem/') . $u['id'] . "' class='button__program'>Baca Selengkapnya<i class='ri-arrow-right-s-line'></i></a>";
                        } ?>


                    </div>
                </div>
            <?php endforeach; ?>
    </section>