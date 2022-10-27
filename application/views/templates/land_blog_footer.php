<div class="col-lg-4">

    <div class="sidebar">

        <h3 class="sidebar-title">Cari</h3>
        <div class="sidebar-item search-form">
            <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->

        <h3 class="sidebar-title">Kategori</h3>
        <div class="sidebar-item categories">
            <ul>
                <?php $this->load->model('Post_model', 'post');
                foreach ($kategori as $k) : ?>
                    <li><a href="#"><?= $k['nama']; ?> <span>(<?= $this->post->countPostKat($k['id']); ?>)</span></a></li>
                <?php endforeach; ?>
            </ul>
        </div><!-- End sidebar categories-->

        <h3 class="sidebar-title">Post Terbaru</h3>
        <div class="sidebar-item recent-posts">
            <?php foreach ($newpost as $np) : ?>
                <div class="post-item clearfix">
                    <img src="<?= base_url('assets/img/post/') . $np['gambar']; ?>" alt="">
                    <h4><a href="<?= base_url('artikel/') . $np['slug']; ?>"><?= $np['judul']; ?></a></h4>
                    <?php $date = strtotime($np['tanggal']) ?>
                    <time datetime="<?= date('Y-m-d', $date); ?>"><?= date('M j, Y', $date); ?></time>
                </div>
            <?php endforeach; ?>

        </div><!-- End sidebar recent posts-->

        <h3 class="sidebar-title">Tags</h3>
        <div class="sidebar-item tags">
            <ul>
                <?php foreach ($tags as $t) : ?>
                    <?php $tt = explode(",", $t['tag']); ?>
                    <?php foreach ($tt as $tk) : ?>
                        <li><a href="#"><?= ucwords($tk); ?></a></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div><!-- End sidebar tags-->

    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->
</div>

</div>
</section><!-- End Blog Single Section -->

</main><!-- End #main -->



<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="<?= base_url(); ?>assets/img/PMI2.png" alt="">
                        <span>PMR</span>
                    </a>
                    <p><?= $pmr['desk']; ?></p>
                    <div class="social-links mt-3">
                        <a href="http://instagram.com/<?= $pmr['ig']; ?>" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                        <a href="http://youtube.com/<?= $pmr['yt']; ?>" class="youtube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        <?= $pmr['alamat']; ?><br><br>
                        <strong>Telp:</strong> <?= $pmr['no1']; ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $pmr['no2']; ?><br>
                        <strong>Email:</strong> <?= $pmr['email']; ?><br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>PMR</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.js") ?>"></script>
<script src="<?= base_url("assets/vendor/aos/aos.js") ?>"></script>
<script src="<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/vendor/purecounter/purecounter.js") ?>"></script>
<script src="<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
<script src="<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>"></script>
<script src="<?= base_url('assets/'); ?>js/sweetalert2.js"></script>
<?= $this->session->flashdata('swann'); ?>
<!-- Template Main JS File -->
<script src="<?= base_url("assets/js/main.js") ?>"></script>



</body>

</html>