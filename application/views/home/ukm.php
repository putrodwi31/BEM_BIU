<main class="main">

    <section class="ukm section">
        <div class="ukm__container container grid">
            <div class="ukm__data">
                <h2 class="ukm__title">UKM Yang Dinaungi Oleh BEM <br> Kabinet <?= $kab['nama_kabinet']; ?></h2>
            </div>
        </div>
    </section>

    <!--==================== UKM ====================-->
    <section class="program section container" id="program">
        <div class="program__container grid">
            <?php foreach ($ukm as $b) : ?>
                <div class="program__card">
                    <div class="detail__divisi">
                        <p class="ukm__card-title">UKM</p>
                        <h2 class="ukm__card-desc"><?= $b['nama']; ?></h2>
                    </div>
                    <img src="<?= base_url('assets/img/logo/') . $b['logo']; ?>" class="cards__program-img" alt="">

                    <div class="detail__divisi-card">
                        <h2 class="detail__title-divisi"><?= $b['desk']; ?></h2>
                        <?php
                        $no = 1;
                        if ($no != 1) {
                            echo "<a href='" . base_url('detail-ukm/') . $b['id'] . "class='button__program'>Baca Selengkapnya<i class='ri-arrow-right-s-line'></i></a>";
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>