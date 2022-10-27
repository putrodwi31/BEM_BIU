        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message'); ?>
                    <form action="<?= base_url('admin/editpendaftaran/') . $pendaftaran['id']; ?>" method="post">
                        <div class="form-group row">
                            <label for="angkatan" class="col-sm-3 col-form-label">Angatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?= $pendaftaran['angkatan']; ?>">
                                <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mulai" class="col-sm-3 col-form-label">Mulai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="mulai" name="mulai" value="<?= $pendaftaran['started']; ?>">
                                <?= form_error('mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="berakhir" class="col-sm-3 col-form-label">Berakhir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="berakhir" name="berakhir" value="<?= $pendaftaran['end']; ?>">
                                <?= form_error('berakhir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="<?= base_url('admin/pendaftaran'); ?>" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->