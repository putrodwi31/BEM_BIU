<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="margin-top: 75px;">
        <div class="container">

            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li>Blog</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">
                    <?php foreach ($artikel as $art) : ?>
                        <?php
                        $this->load->model('Post_model', 'post');
                        $date = strtotime($art['tanggal']);
                        $tanggal = date('Y-m-d', $date);
                        $tgl = date('d M, Y', $date);
                        ?>
                        <article class="entry">

                            <div class="entry-img">
                                <img src="<?= base_url('assets/img/post/') . $art['gambar']; ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="<?= base_url('artikel/') . $art['slug']; ?>"><?= $art['judul']; ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?= $art['name']; ?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="<?= $tanggal; ?>"><?= $tgl; ?></time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html"><?= $this->post->getnumKomen($art['id']); ?> Comments</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?= word_limiter($art['isi'], 15); ?>
                                </p>
                                <div class="read-more">
                                    <a href="<?= base_url('artikel/') . $art['slug']; ?>">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    <?php endforeach; ?>

                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->