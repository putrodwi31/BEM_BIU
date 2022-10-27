<main class="main">

    <section class="ukm section">
        <div class="ukm__container container grid">
            <div class="ukm__data">
                <h2 class="ukm__title">Berita dan Program yang akan dan <br> sudah dilaksanakan BEM BiU</h2>
            </div>
        </div>
    </section>

    <!--==================== UKM ====================-->
    <section class="berita section container" id="berita" data-aos="fade-up" data-bs-interval="2000">
        <h2 class="berita__title">Berita Mengenai BEM BIU</h2>
        <div class="berita-lawas__container grid">
            <?php foreach ($artikel as $a) : ?>
                <div class="berita__card">
                    <img src="<?= base_url('assets/img/post/') . $a['gambar'] ?>" class="cards__berita-img" alt="">

                    <div class="detail__upload-berita">
                        <h3 class="jenis__page-berita"><?= $a['nama']; ?></h3>
                        <i class="ri-arrow-right-s-line"></i>
                        <p class="tanggal__upload-berita"><?php $date = date_create($a['tanggal']);
                                                            echo date_format($date, 'd F Y'); ?></p>
                    </div>
                    <h2 class="berita__title-desc"><?= $a['judul']; ?></h2>
                    <p class="berita__detail"><?= $a['isi']; ?></p>
                    <a href="<?= base_url('artikel/') . $a['slug']; ?>" class="button__berita">Lihat Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="program section container" id="program" data-aos="fade-up" data-bs-interval="2000">
        <h2 class="program__title">Program yang sudah terlaksana</h2>
        <div class="program__container grid">

            <?php foreach ($program as $p) : ?>
                <div class="program__card">
                    <img src="<?= base_url('assets/img/post/') . $p['gambar'] ?>" class="cards__berita-img">

                    <div class="detail__upload-berita">
                        <h3 class="jenis__page-berita"><?= $p['nama']; ?></h3>
                        <i class="ri-arrow-right-s-line"></i>
                        <p class="tanggal__upload-berita"><?php $date = date_create($p['tanggal']);
                                                            echo date_format($date, 'd F Y'); ?></p>
                    </div>
                    <h2 class="berita__title-desc"><?= $p['judul']; ?></h2>
                    <p class="berita__detail"><?= $p['isi']; ?></p>
                    <a href="<?= base_url('artikel/') . $p['slug']; ?>" class="button__berita">Lihat Selengkapnya
                        <i class="ri-arrow-right-s-line"></i>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </section>

</main>