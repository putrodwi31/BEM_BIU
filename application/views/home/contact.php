<head>
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<main class="main">
    <section class="contact section">
        <div class="ukm__container container grid">
            <div class="ukm__data">
                <h2 class="ukm__title">Kotak Saran Mahasiswa</h2>
            </div>
        </div>
    </section>
    <!-- Contact form section -->
    <section class="contact-form-section" id="cform">
        <div class="auto-container">
            <!--Contact Form-->
            <div class="contact-form mx-2 d-flex justify-content-center">
                <form method="post" action="<?= base_url('contact'); ?>" id="contact-form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <input class="form-control form-control-md" type="text" name="nama" placeholder="Nama" required>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <input class="form-control form-control-md" type="email" name="email" placeholder="Email" required>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control form-control-md" name="pesan" placeholder="Pesan" rows="6"></textarea>
                            <?= form_error('pesan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?= $imgcaptcha; ?>
                            <br><br>
                            <input class="form-control form-control-md" type="text" name="captcha" placeholder="Masukan Kode captcha" required>
                            <?= form_error('captcha', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-12 text-center">
                            <div class="sec-title text-left mb-3">
                                <div class="text"><strong>*Masukkan Nama Dan Email Yang Valid.</strong></div>
                            </div>
                            <button class="btn btn-lg" style="background-color: #093D77; color: white; font-weight: 500;" type="submit"><span><i class="bi bi-send"></i> Kirim</span></button>
                        </div>
                    </div>

                </form>
            </div>
            <!--End Contact Form-->
        </div>
    </section>
</main>