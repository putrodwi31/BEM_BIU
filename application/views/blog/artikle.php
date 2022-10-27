<main class="main">

    <section class="detail-berita section">
        <div class="detail-berita__container container grid">
            <div class="detail__data">
                <h2 class="detail__title"><?= $artikel['judul']; ?></h2>
                <img src="<?= base_url('assets/img/post/') . $artikel['gambar']; ?>" alt="" class="card__detail-img">

            </div>
        </div>
    </section>

    <section class="section berita container" id="berita">
        <div class="berita__link-container grid">
            <div class="berita__link-data">
                <h2 class="berita__link-title"><?= $artikel['judul']; ?></h2>
                <p class="berita__link-desc"><?= $artikel['isi']; ?></p>
            </div>
    </section>
</main>