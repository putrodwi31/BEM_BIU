<?php
date_default_timezone_set('Asia/Jakarta');
$mulai = $pendaftaran[0]['started'];
$terlambat = $pendaftaran[0]['end'];
$now = time();
if ($mulai > $now) :
?>
    <section id="daftar" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg d-flex flex-column justify-content-center">
                    <div class="rounded bg-gradient-4 text-white shadow p-5 text-center mb-5">
                        <p class="mb-0 font-weight-bold text-uppercase">Pendaftaran Anggota Baru Dibuka Dalam</p>
                        <div id="timer" class="countdown py-4" data-isi="mulai" data-time="<?= date('Y-m-d H:i:s', $pendaftaran[0]['started']) ?>">
                            <span class="h1 font-weight-bold">00</span>Hari
                            <span class="h1 font-weight-bold">00</span>Jam
                            <span class="h1 font-weight-bold">00</span>Menit
                            <span class="h1 font-weight-bold">00</span>Detik
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <main id="main" style="margin-top: 40px;">
    <?php elseif ($terlambat > $now) : ?>
        <section id="divisi" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>FORM</h2>
                    <p>Pendaftaran PMR SMK Negeri 2 Kota Bekasi.</p>
                </header>

                <div class="row">
                    <div class="col-lg-6 mt-2 ">
                        <div class="row">
                            <div class="col-lg d-flex flex-column justify-content-center">
                                <div class="rounded bg-gradient-4 text-white shadow p-3 text-center mb-2">
                                    <p class="mb-0 font-weight-bold text-uppercase">Berakhir Dalam</p>
                                    <div id="timer" class="countdown py-4" data-isi="mulai" data-time="<?= date('Y-m-d H:i:s', $pendaftaran[0]['end']) ?>">
                                        <span class="h1 font-weight-bold">00</span>Hari
                                        <span class="h1 font-weight-bold">00</span>Jam
                                        <span class="h1 font-weight-bold">00</span>Menit
                                        <span class="h1 font-weight-bold">00</span>Detik
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mt-2">
                        <form action="<?= base_url('blog/daftar'); ?>" method="post">
                            <div class="form-row">
                                <div class="form-group col-lg">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control <?= form_error('nama') ? "is-invalid" : ""; ?>" id="nama" name="nama">
                                    <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="ttl">Tempat, Tanggal lahir</label>
                                    <input type="text" class="form-control <?= form_error('ttl') ? "is-invalid" : ""; ?>" id="ttl" name="ttl" placeholder="Bekasi, 20 Mey 2002">
                                    <?= form_error('ttl', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select id="gender" class="form-control <?= form_error('gender') ? "is-invalid" : ""; ?>" name="gender">
                                        <option>Pilih...</option>
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('gender', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="nis">NIS/NISN</label>
                                    <input type="text" class="form-control <?= form_error('nis') ? "is-invalid" : ""; ?>" id="nis" name="nis">
                                    <?= form_error('nis', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <!-- <div class="form-group col-lg">
                            <label for="kelas">Kelas</label>
                            <select id="kelas" class="form-control" name="kelas">
                                <option>Pilih...</option>
                                <option value="X Akuntansi 1">X Akuntansi 1</option>
                                <option value="X Akuntansi 2">X Akuntansi 2</option>
                                <option value="X Akuntansi 3">X Akuntansi 3</option>
                                <option value="XI Akuntansi 1">XI Akuntansi 1</option>
                                <option value="XI Akuntansi 2">XI Akuntansi 2</option>
                                <option value="XI Akuntansi 3">XI Akuntansi 3</option>
                                <option value="XII Akuntansi 1">XII Akuntansi 1</option>
                                <option value="XII Akuntansi 2">XII Akuntansi 2</option>
                                <option value="XII Akuntansi 3">XII Akuntansi 3</option>
                                <option value="X Rekayasa Perangkat Lunak 1">X Rekayasa Perangkat Lunak 1</option>
                                <option value="X Rekayasa Perangkat Lunak 2">X Rekayasa Perangkat Lunak 2</option>
                                <option value="X Rekayasa Perangkat Lunak 3">X Rekayasa Perangkat Lunak 3</option>
                                <option value="XI Rekayasa Perangkat Lunak 1">XI Rekayasa Perangkat Lunak 1</option>
                                <option value="XI Rekayasa Perangkat Lunak 2">XI Rekayasa Perangkat Lunak 2</option>
                                <option value="XI Rekayasa Perangkat Lunak 3">XI Rekayasa Perangkat Lunak 3</option>
                                <option value="XII Rekayasa Perangkat Lunak 1">XII Rekayasa Perangkat Lunak 1</option>
                                <option value="XII Rekayasa Perangkat Lunak 2">XII Rekayasa Perangkat Lunak 2</option>
                                <option value="XII Rekayasa Perangkat Lunak 3">XII Rekayasa Perangkat Lunak 3</option>
                                <option value="X Teknik Komputer dan Jaringan 1">X Teknik Komputer dan Jaringan 1</option>
                                <option value="X Teknik Komputer dan Jaringan 2">X Teknik Komputer dan Jaringan 2</option>
                                <option value="X Teknik Komputer dan Jaringan 3">X Teknik Komputer dan Jaringan 3</option>
                                <option value="XI Teknik Komputer dan Jaringan 1">XI Teknik Komputer dan Jaringan 1</option>
                                <option value="XI Teknik Komputer dan Jaringan 2">XI Teknik Komputer dan Jaringan 2</option>
                                <option value="XI Teknik Komputer dan Jaringan 3">XI Teknik Komputer dan Jaringan 3</option>
                                <option value="XII Teknik Komputer dan Jaringan 1">XII Teknik Komputer dan Jaringan 1</option>
                                <option value="XII Teknik Komputer dan Jaringan 2">XII Teknik Komputer dan Jaringan 2</option>
                                <option value="XII Teknik Komputer dan Jaringan 3">XII Teknik Komputer dan Jaringan 3</option>
                                <option value="X Teknik Elektronika Industri 1">X Teknik Elektronika Industri 1</option>
                                <option value="X Teknik Elektronika Industri 2">X Teknik Elektronika Industri 2</option>
                                <option value="X Teknik Elektronika Industri 3">X Teknik Elektronika Industri 3</option>
                                <option value="X Teknik Elektronika Industri 4">X Teknik Elektronika Industri 4</option>
                                <option value="XI Teknik Elektronika Industri 1">XI Teknik Elektronika Industri 1</option>
                                <option value="XI Teknik Elektronika Industri 2">XI Teknik Elektronika Industri 2</option>
                                <option value="XI Teknik Elektronika Industri 3">XI Teknik Elektronika Industri 3</option>
                                <option value="XI Teknik Elektronika Industri 4">XI Teknik Elektronika Industri 4</option>
                                <option value="XII Teknik Elektronika Industri 1">XII Teknik Elektronika Industri 1</option>
                                <option value="XII Teknik Elektronika Industri 2">XII Teknik Elektronika Industri 2</option>
                                <option value="XII Teknik Elektronika Industri 3">XII Teknik Elektronika Industri 3</option>
                                <option value="XII Teknik Elektronika Industri 4">XII Teknik Elektronika Industri 4</option>
                                <option value="X Teknik dan Bisnis Sepeda Motor 1">X Teknik dan Bisnis Sepeda Motor 1</option>
                                <option value="X Teknik dan Bisnis Sepeda Motor 2">X Teknik dan Bisnis Sepeda Motor 2</option>
                                <option value="X Teknik dan Bisnis Sepeda Motor 3">X Teknik dan Bisnis Sepeda Motor 3</option>
                                <option value="X Teknik dan Bisnis Sepeda Motor 4">X Teknik dan Bisnis Sepeda Motor 4</option>
                                <option value="XI Teknik dan Bisnis Sepeda Motor 1">XI Teknik dan Bisnis Sepeda Motor 1</option>
                                <option value="XI Teknik dan Bisnis Sepeda Motor 2">XI Teknik dan Bisnis Sepeda Motor 2</option>
                                <option value="XI Teknik dan Bisnis Sepeda Motor 3">XI Teknik dan Bisnis Sepeda Motor 3</option>
                                <option value="XI Teknik dan Bisnis Sepeda Motor 4">XI Teknik dan Bisnis Sepeda Motor 4</option>
                                <option value="XII Teknik dan Bisnis Sepeda Motor 1">XII Teknik dan Bisnis Sepeda Motor 1</option>
                                <option value="XII Teknik dan Bisnis Sepeda Motor 2">XII Teknik dan Bisnis Sepeda Motor 2</option>
                                <option value="XII Teknik dan Bisnis Sepeda Motor 3">XII Teknik dan Bisnis Sepeda Motor 3</option>
                                <option value="XII Teknik dan Bisnis Sepeda Motor 4">XII Teknik dan Bisnis Sepeda Motor 4</option>
                                <option value="XI Teknik Energi Biomasa 1">XI Teknik Energi Biomasa 1</option>
                                <option value="XI Teknik Energi Biomasa 2">XI Teknik Energi Biomasa 2</option>
                                <option value="XI Teknik Energi Biomasa 3">XI Teknik Energi Biomasa 3</option>
                                <option value="XI Teknik Energi Biomasa 4">XI Teknik Energi Biomasa 4</option>
                                <option value="XII Teknik Energi Biomasa 1">XII Teknik Energi Biomasa 1</option>
                                <option value="XII Teknik Energi Biomasa 2">XII Teknik Energi Biomasa 2</option>
                                <option value="XII Teknik Energi Biomasa 3">XII Teknik Energi Biomasa 3</option>
                                <option value="XII Teknik Energi Biomasa 4">XII Teknik Energi Biomasa 4</option>
                            </select>
                        </div> -->
                                <div class="form-group col-lg">
                                    <label for="jurusan">Jurusan</label>
                                    <select id="jurusan" class="form-control <?= form_error('jurusan') ? "is-invalid" : ""; ?>" name="jurusan">
                                        <option>Pilih...</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                        <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                        <option value="Teknik Energi Biomasa">Teknik Energi Biomasa</option>
                                    </select>
                                    <?= form_error('jurusan', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control <?= form_error('email') ? "is-invalid" : ""; ?>" id="email" name="email">
                                    <?= form_error('email', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="no">No Telp/WA</label>
                                    <input type="text" class="form-control <?= form_error('no') ? "is-invalid" : ""; ?>" id="no" name="no">
                                    <?= form_error('no', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control <?= form_error('alamat') ? "is-invalid" : ""; ?>" id="alamat" name="alamat" rows="3"></textarea>
                                    <?= form_error('alamat', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="sekolah">Sekolah asal</label>
                                    <input type="text" class="form-control <?= form_error('sekolah') ? "is-invalid" : ""; ?>" id="sekolah" name="sekolah">
                                    <?= form_error('sekolah', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="pengalaman">Pengalaman organisasi</label>
                                    <textarea class="form-control <?= form_error('pengalaman') ? "is-invalid" : ""; ?>" id="pengalaman" name="pengalaman" rows="3"></textarea>
                                    <?= form_error('pengalaman', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="alasan">Alasan</label>
                                    <textarea class="form-control <?= form_error('alasan') ? "is-invalid" : ""; ?>" id="alasan" name="alasan" rows="3"></textarea>
                                    <?= form_error('alasan', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                                <div class="form-group col-lg">
                                    <label for="motto">Motto Hidup</label>
                                    <textarea class="form-control <?= form_error('motto') ? "is-invalid" : ""; ?>" id="motto" name="motto" rows="3"></textarea>
                                    <?= form_error('motto', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <strong>
                                <p>*Harap berikan email dan no telp yang valid</p>
                            </strong>
                            <button type="submit" class="cccd col-lg-12 col-12 col-sm-12">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>

            </div>

        </section><!-- End Values Section -->
    <?php else : ?>
        <section id="endded" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg d-flex flex-column justify-content-center">
                        <div class="rounded bg-gradient-4 text-white shadow p-5 text-center mb-5">
                            <p class="mb-0 font-weight-bold text-uppercase">Pendaftaran belum dibuka/telah berakhir</p>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    <?php endif; ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p><?= $pmr['alamat']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telp</h3>
                                <p><?= $pmr['no1']; ?><br><?= $pmr['no2']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p><?= $pmr['email']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Waktu Ekskul</h3>
                                <p><?= $pmr['hari']; ?><br><?= $pmr['jam']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="<?= base_url(''); ?>" method="post" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                <?= form_error('subject', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="9" placeholder="Message" required></textarea>
                                <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

    </main><!-- End #main -->