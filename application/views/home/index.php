<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main class="main">
	<!--==================== HOME =====================-->
	<section class="home section" id="home">
		<div class="home__container container grid">
			<img src="<?= base_url('assets/img/logo/') . $org['logo']; ?>" alt="" class="home__img">
			<div class="home__data">
				<p class="home__desc">
					Website Resmi Badan Eksekutif Mahasiswa
				</p>
				<h1 class="home__title">
					<?= $org['nama']; ?>
				</h1>
				<p class="home__description">
					<?= $org['desk']; ?>
				</p>

				<div class="link__web">
					<a href="#video" class="button button--ghost">
						Selengkapnya >
					</a>
					<a href="https://binainsani.ac.id/" target="_blank" class="button button--flex">
						Bina Insani University >
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hidden Sidebar -->
	<!--==================== VIDEO ====================-->
	<section class="video section" id="video" data-aos="fade-up" data-bs-interval="2000">
		<div class="video__container container grid">
			<h2 class="video__title">BEM Universitas Bina Insani</h2>
			<p class="video__desc">Pengenalan Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
			<div class="video__content">
				<iframe width="660" height="371" class="video_bem" src="https://www.youtube.com/embed/fuadn7oMYGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>
	<section class="berita section container" id="berita" data-aos="fade-up" data-bs-interval="2000">
		<h2 class="berita__title">Berita Mengenai BEM BIU</h2>
		<p class="berita__desc">Berita terkini kegiatan maupun kegiatan program kerja yang dilakukan oleh Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
		<div class="berita__container grid">
			<img src="<?= base_url('assets/img/post/') . $newpost['gambar'] ?>" alt="" class="berita__terbaru-img">
			<div class="berita__data-terbaru" data-aos="fade-up" data-bs-interval="3000">
				<div class="detail__upload-berita">
					<h3 class="jenis__page-berita"><?= $newpost['nama'] ?></h3>
					<i class="ri-arrow-right-s-line"></i>
					<p class="tanggal__upload-berita"><?php $date = date_create($newpost['tanggal']);
														echo date_format($date, 'd F Y'); ?></p>
				</div>
				<h2 class="berita__title-desc"><?= $newpost['judul'] ?></h2>
				<p class="berita__detail"><?= $newpost['isi'] ?></p>
				<a href="<?= base_url('artikel/') . $newpost['slug']; ?>" class="button__berita">Lihat Selengkapnya
					<i class="ri-arrow-right-s-line"></i>
				</a>
			</div>
		</div>
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
		<p class="program__desc">Program kerja yang telah dilakukan oleh Badan Eksekutif Mahasiswa Universitas Bina Insani dan divisi-divisinya.</p>
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