<main class="main">

    <section class="detail-berita section">
        <div class="detail-berita__container container grid">
            <div class="detail__data">
                <h2 class="detail__title">Kementerian <?= $kemin['nama']; ?> BEM BiU Khabinet <?= $kab['nama_kabinet']; ?></h2>
                <img src="<?= base_url(); ?>assets/img/gambar-berita.jpeg" alt="" class="card__detail-img">

            </div>
        </div>
    </section>

    <section class="section berita container" id="berita">
        <div class="berita__link-container grid">
            <div class="berita__link-data">
                <h2 class="berita__link-title">Tentang Kementerian <?= $kemin['nama']; ?></h2>
                <p class="berita__link-desc"><?= $kemin['desk']; ?></p>
            </div>
        </div>
    </section>

    <!--==================== VISI Kementerian KOMINFO ====================-->

    <section class="section visi__ukm container">
        <div class="visi__container grid">
            <div class="visi__ukm-data">
                <h2 class="visi__ukm-title">Visi Kementerian <?= $kemin['nama']; ?> </h2>
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
                <h2 class="visi__ukm-title">Misi Kementerian <?= $kemin['nama']; ?> </h2>
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
        <h2 class="member__desc">Anggota & Pengurus <?= $kemin['nama']; ?></h2>

        <div class="swiper mySwiper member__container container grid">
            <div class="swiper-wrapper">
                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__koor-divisi-komunikasi-dan informasi"> Nadira Ilmitha - FB 19A</h2>
                        <p class="desc__koor-divisi-komunikasi-dan informasi">Koordinator <?= $kemin['nama']; ?> 2020-2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Salsabilah Rahmadani - FB 19A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Ika Nurfitriani - FB 19A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Firli Juli Prayitno - FI 19A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>


                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Muhammad Rizky Darmawan - FB 19A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>
                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Adzanti Fajri Syahputri Marcha - FI 20A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Iqbal Maulana Rozak - FI 20A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Muhammad Yazid - FI 20B</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>

                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Vinki Cecilian Maulana - FI 20A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan-informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>


                <div class="swiper-slide member-card">
                    <div class="member__card-content">
                        <div class="swiper-image">
                            <img src="assets/img/pp.jpg" class="member-image-img" alt="">
                        </div>
                        <h2 class="nama__anggota-divisi-komunikasi-dan-informasi"> Wanindya Dian Aruna - FI 20A</h2>
                        <p class="desc__anggota-divisi-komunikasi-dan informasi"> Anggota <?= $kemin['nama']; ?> 2021</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination member__pagination"></div>
            <div style="margin-top: 2rem;"></div>
    </section>

    <!--==================== PROGRAM KERJA DIVISI MINAT DAN BAKAT ====================-->
    <section class="program section container" id="program">
        <h2 class="divisi__title"> Program Kerja Kementerian <?= $kemin['nama']; ?> </h2>
        <div class="program__container grid">

        </div>
    </section>

</main>