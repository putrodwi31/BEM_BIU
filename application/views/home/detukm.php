<main class="main">

    <section class="detail-berita section">
        <div class="detail-berita__container container grid">
            <div class="detail__data">
                <h2 class="detail__title"> UKM <?= $ukm['nama']; ?> BEM BiU Khabinet <?= $kab['nama_kabinet']; ?></h2>
                <img src="<?= base_url(); ?>assets/img/gambar-berita.jpeg" alt="" class="card__detail-img">

            </div>
        </div>
    </section>

    <section class="section berita container" id="berita">
        <div class="berita__link-container grid">
            <div class="berita__link-data">
                <h2 class="berita__link-title"> Apa itu UKM <?= $ukm['nama']; ?>? </h2>
                <p class="berita__link-desc"><?= $ukm['desk']; ?></p>
            </div>
    </section>

    <!--==================== VISI DIVISI UKM ====================-->

    <section class="section visi__ukm container">
        <div class="visi__container grid">
            <div class="visi__ukm-data">
                <h2 class="visi__ukm-title">Visi UKM <?= $ukm['nama']; ?></h2>
                <p class="visi__ukm-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                <div class="order__visi">
                    <p class="order__details">1.</p>
                    <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="order__visi">
                    <p class="order__details">2.</p>
                    <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="order__visi">
                    <p class="order__details">3.</p>
                    <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>


            <div class="visi__ukm-data">
                <h2 class="visi__ukm-title">Misi UKM <?= $ukm['nama']; ?></h2>
                <p class="visi__ukm-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <div class="order__visi">
                    <p class="order__details">1.</p>
                    <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="order__visi">
                    <p class="order__details">2.</p>
                    <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="order__visi">
                    <p class="order__details">3.</p>
                    <p class="order__details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </section>


    <!--==================== ANGGOTA PENGURUS ====================-->

    <section class="member section" id="member">
        <h2 class="member__desc"> Anggota & Pengurus UKM <?= $ukm['nama']; ?> </h2>

        <div class="swiper mySwiper member__container container grid">
            <div class="swiper-wrapper">
                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__ketua-ukm">Faiq Sastra Dinata - FI 19A</h2>
                        <p class="desc__ketua-ukm">Koordinator LDK</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__ketua-ukm">Faiq Sastra Dinata - FI 19A</h2>
                        <p class="desc__Anggota-ukm"> Anggota LDK 2020-2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__Anggota-ukm">Faiq Sastra Dinata - FI 19A</h2>
                        <p class="desc__Anggota-ukm">Anggota LDK 2020-2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__Anggota-ukm">Faiq Sastra Dinata - FI 19A</h2>
                        <p class="desc__Anggota-ukm">Anggota LDK 2020-2021</p>
                    </div>
                </div>


                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__Anggota-ukm">Faiq Sastra Dinata - FI 19A</h2>
                        <p class="desc__Anggota-ukm">Anggota LDK 2020-2021</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination member__pagination"></div>
            <div style="margin-top: 2rem;"></div>
        </div>

    </section>


    <!--==================== DOKUMENTASI UKM LDK ====================-->

    <section class="documentation section">
        <div class="documentation__container container grid">
            <div class="documentation__data">
                <h2 class="documentation__title">Dokumentasi UKM <?= $ukm['nama']; ?></h2>
                <div class="documentation__image">
                    <img src="<?= base_url(); ?>assets/img/gambar-berita.jpeg" alt="" class="documentation-img">
                    <div class="documentation__text">
                        <h2 class="documentation__text-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                        <p class="documentation__desc-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>




</main>