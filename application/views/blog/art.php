<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 75px;">
        <div class="container">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('blog'); ?>">Blog</a></li>
                <li><?= $artikel['slug']; ?></li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="<?= base_url('assets/img/post/') . $artikel['gambar']; ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="<?= base_url('artikel') . $artikel['slug'] ?>"><?= $artikel['judul']; ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a><?= $penulis['name']; ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="<?php $date = date_create($artikel['tanggal']);
                                                                                                                        echo date_format($date, "Y-m-d"); ?>">
                                            <?php $date = date_create($artikel['tanggal']);
                                            echo date_format($date, "M j, Y"); ?></time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a><?= $jmlkomen; ?> Komentar</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <?= $artikel['isi']; ?>

                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href=""><?= $kat['nama']; ?></a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <?php $tag = explode(",", strtolower($artikel['tag']));
                                ?>
                                <?php foreach ($tag as $t) : ?>
                                    <li><a href=""><?= ucwords($t); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                    <div class="blog-author d-flex align-items-center">
                        <img src="<?= base_url(); ?>/assets/img/PMI2.png" class="float-left" alt="">
                        <div>
                            <h4><?= $penulis['name']; ?></h4>
                            <div class="social-links">
                                <a href=""><i class="bi bi-youtube"></i></a>
                                <a href="https://instagram.com/pmr2bekasi"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                <?= $penulis['deskripsi']; ?>
                            </p>
                        </div>
                    </div><!-- End blog author bio -->

                    <div class="blog-comments">
                        <?php $i = 1; ?>
                        <h4 class="comments-count"><?= $jmlkomen; ?> Komentar</h4>

                        <?php foreach ($komen as $k) : ?>
                            <?php $tanggal = date('Y-m-d', $k['tanggal']);
                            $tgl = date('d M, Y', $k['tanggal']);
                            ?>
                            <div id="comment-<?= $i; ?>" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                                    <div>
                                        <h5><?= $k['name']; ?></h5>
                                        <time datetime="<?= $tanggal; ?>"><?= $tgl; ?></time>
                                        <p>
                                            <?= $k['komen']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End comment #1 -->
                            <?php $i++; ?>
                        <?php endforeach; ?>

                        <div class="reply-form">
                            <h4>Komentar</h4>
                            <p>Alamat email kamu tidak akan dipublish. Required fields are marked * </p>
                            <?= $this->session->flashdata('message'); ?>
                            <form method="post" action="<?= base_url('artikel/') . $artikel['slug']; ?>">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input id="name" name="name" type="text" class="form-control" placeholder="Your Name*">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input id="email" name="email" type="text" class="form-control" placeholder="Your Email*">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea id="komen" name="komen" class="form-control" placeholder="Your Comment*"></textarea>
                                        <?= form_error('komen', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div><!-- End blog comments -->

                </div><!-- End blog entries list -->