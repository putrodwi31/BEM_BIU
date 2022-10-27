<footer class="footer section ">
    <div class="footer__container container grid ">
        <div class="footer__content ">
            <a href="# " class="footer__logo ">
                <img src="<?= base_url('assets/'); ?>img/klogo2.png" alt="">
                <img src="<?= base_url('assets/'); ?>img/logobiu-removebg-preview.png" alt="">
            </a>
            <h3 class="footer__title ">
                Badan Eksekutif Mahasiswa Universitas Bina Insani</p>
            </h3>
            <div class="footer__social ">
                <a href="https://www.instagram.com/ " class="footer__social-link ">
                    <i class="ri-instagram-line "></i>
                </a>
                <a href="https://twitter.com/ " class="footer__social-link ">
                    <i class="ri-youtube-fill "></i>
                </a>
            </div>
        </div>
        <div class="footer__content ">
            <h3 class="footer__title ">Menteri</h3>
            <ul class="footer__data ">
                <?php foreach ($kem as $u) : ?>
                    <a href="<?= base_url('detail-kem/') . $u['id']; ?>">
                        <li class="footer__information "> <?= $u['nama'] == 'Komunikasi dan Informasi' ? 'Kominfo' : $u['nama']; ?></li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="footer__content ">
            <h3 class="footer__title ">BEM BIU</h3>

            <ul class="footer__data ">
                <a href="<?= base_url('struktur-menteri'); ?>">
                    <li class="footer__information ">Struktur</li>
                </a>
                <a href="<?= base_url('berita-program'); ?>">
                    <li class="footer__information ">Program</li>
                </a>
                <a href="<?= base_url('sejarah'); ?>">
                    <li class="footer__information ">Sejarah</li>
                </a>
                </a>
            </ul>
        </div>
        <div class="footer__content">
            <h3 class="footer__title">
                Hubungi Kami
            </h3>
            <a href="<?= base_url('contact'); ?>" class="button footer__button">Hubungi Kami</a>
        </div>
    </div>
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>
</footer>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Initialize Swiper -->

<script>
    AOS.init();
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
</script>

<script src="<?= base_url('assets/'); ?>js/js/jquery.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/jquery.fancybox.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/isotope.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/owl.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/appear.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/wow.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/lazyload.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/scrollbar.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/TweenMax.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/swiper.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/jquery.polyglot.language.switcher.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/parallax-scroll.js"></script>
<script src="<?= base_url('assets/'); ?>js/js/script.js"></script>
<!--=============== SCROLL REVEAL ===============-->
<script src="<?= base_url('assets/'); ?>js/js/scrollreveal.min.js "></script>
<!--=============== MAIN JS ===============-->
<script src="<?= base_url('assets/'); ?>js/js/main.js "></script>
</body>

</html>