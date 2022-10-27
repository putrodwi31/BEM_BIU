<div class="container">
    <div class="row" style="margin-top: 40px;">
        <div class="card">
            <div class="card-content" style="padding: 0px;">
                <img class="responsive-img" src="<?= base_url('assets/img/post/') . $artikel['gambar'] ?>">
                <div style="padding-right: 4px; padding-left: 4px; padding-bottom: 0px !important;">
                    <div class="row">
                        <div class="col m4">
                            <p>
                                <i class="fas fa-list"></i>
                                Tag : <strong><?= $artikel['tag']; ?></strong>
                            </p>
                        </div>
                        <div class="col m4">
                            <?php $date = date_create($artikel['tanggal']); ?>
                            <p>
                                <i class="fas fa-calendar"></i>
                                Tanggal Publikasi : <strong><?= date_format($date, 'd F Y'); ?></strong>
                            </p>
                        </div>
                        <div class="col m4">
                            <p>
                                <i class="fas fa-user"></i>
                                Penulis : <strong><?= $artikel['name']; ?></strong>
                            </p>
                        </div>

                    </div>
                    <h4 style="margin-top: 0px !important">
                        <?= $artikel['judul']; ?>
                    </h4>

                </div>
                <hr>
                <div style="padding-right: 4px; padding-left: 4px;">
                    <?= $artikel['isi']; ?>
                    <div class="row">
                        <div class="col m8 s8">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col m3 s3">
                                            <img src="<?= base_url('assets/img/profile/') . $artikel['image'] ?>" class="responsive-img">
                                        </div>
                                        <div class="col m9 s9">
                                            <h5 style="margin-top: 0px !important;"><?= $artikel['name']; ?></h5>
                                            <p><?= $artikel['deskripsi']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col m4 s4">
                            <div class="card">
                                <div class="card-content" style="padding: 0px !important;">
                                    <div class="col m6 s6">
                                        <button style="padding-right: 55px; padding-left: 55px;" class="btn-large blue darken-3" style="border-radius: 0px !important;">
                                            <i class="fas fa-thumbs-up"></i>
                                        </button>

                                    </div>
                                    <div class="col m6 s6">
                                        <button style="padding-right: 55px; padding-left: 55px;" class="btn-large  red" style="border-radius: 0px !important;">
                                            <i class="fas fa-thumbs-down"></i>
                                        </button>
                                    </div>
                                    <div class="col m12 s12 white-text">
                                        <button style="padding-right: 122px; padding-left: 122px;" class="btn-large  grey" style="border-radius: 0px !important;">
                                            <i class="fas fa-share">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>