<!-- Post content -->
<div class="container-fluid" style="margin-top: 30px;">
    <div class="row">
        <div class="col m7 s12">

            <div class="slider">
                <ul class="slides">
                    <?php foreach ($populer as $p) : ?>
                        <li>
                            <a href="<?= base_url('artikel/') . $p['slug'] ?>">
                                <img src="<?= base_url('assets/img/post/') . $p['gambar'] ?>"> <!-- random image -->
                                <div class="caption center-align" style="background-color: #0000003d; border-radius:10px;">
                                    <h4 style="text-shadow: 0px 4px 10px #000; font-weight: bold;"><?= $p['judul'] ?></h4>
                                    <h6 style="text-shadow: 0px 4px 10px #000;" class="light grey-text text-lighten-3"><?= $p['tag'] ?></h6>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="col m5 s12" style="margin-top: -6px;">
            <div class="card">
                <div class="card-content">
                    <h5 style="margin-bottom: 20px;">Artikel Kategori <strong>Pertolongan Pertama</strong></h5>
                    <hr>
                    <?php foreach ($kategori as $kat) : ?>
                        <a href="<?= base_url('artikel/') . $kat['slug'] ?>" class="black-text">
                            <div class="row holishit" style="margin-top: 30px">
                                <div class="col m4 s12">
                                    <img class="responsive-img" src="<?= base_url('assets/img/post/') . $kat['gambar'] ?>" alt="">
                                </div>
                                <div class="col m8 s12">
                                    <h6 style="margin-bottom: 0px; margin-top: -5px; font-weight: bold;"><?= $kat['judul']; ?></h6>
                                    <small><i class="fas fa-th-large"></i>&nbsp; <strong style="font-weight: bold;"><?= $kat['nama']; ?><strong> | <i class="far fa-user"></i>&nbsp; </strong><?= $kat['name'] ?></strong></small>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col m8 s12">

            <div class="card">
                <div class="card-content">
                    <h4 style="margin-bottom: 30px; margin-top: -10px;"><i class="far fa-newspaper"></i>&nbsp; Artikel Terbaru</h4>
                    <?php foreach ($artikel as $a) : ?>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col m4 s12">
                                <img class="responsive-img" src="<?= base_url('assets/img/post/') . $a['gambar']; ?>" alt="">
                            </div>
                            <div class="col m8 s12">
                                <a class="black-text" href="<?= base_url('artikel/') . $a['slug']; ?>">
                                    <h5 style="margin-top: -4px;">
                                        <?= $a['judul']; ?>
                                    </h5>
                                </a>

                                <div class="row ">
                                    <div class="col m4">
                                        <i class="fas fa-user">
                                            <span class="light">&nbsp;<?= $a['name']; ?></span>
                                        </i>
                                    </div>
                                    <div class="col m4">
                                        <i class="fas fa-calendar">
                                            <?php $date = date_create($a['tanggal']); ?>
                                            <span class="light">&nbsp;<?= date_format($date, 'd F Y'); ?></span>
                                        </i>
                                    </div>
                                    <div class="col m4">
                                        <i class="fas fa-th-large">
                                            <span class="light">&nbsp;<?= $a['nama']; ?></span>
                                        </i>
                                    </div>
                                </div>

                                <?= word_limiter($a['isi'], 15); ?> <br>
                                <a class="waves-effect waves-light btn-small blue darken-2" href="<?= base_url('artikel/') . $a['slug']; ?>">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <hr>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col m4 s12">
            <div class="card">
                <div class="card-content">
                    <h5 style="margin-bottom: 30px; margin-top: -10px;">Daftar Kategori</h5>
                    <?php foreach ($kate as $kt) : ?>
                        <a href="<?= base_url('kategori/') . urlencode(strtolower($kt['nama']))  ?>">
                            <span class="waves-effect waves-light btn-small" style="margin-bottom: 10px;"><i class="fas fa-fw fa-tag" style="margin-left: -10px;">&nbsp;</i><small><?= $kt['nama']; ?></small></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
    <!-- Close Post Content -->