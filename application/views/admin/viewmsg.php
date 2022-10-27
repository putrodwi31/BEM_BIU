        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg-10">
                    <div class="form-group row">
                        <label for="idrole" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $message['nama']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $message['email']; ?>" readonly>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">Subject</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $message['subject']; ?>" readonly>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-3 col-form-label">isi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="" id="" rows="10" readonly><?= $message['isi']; ?></textarea>

                        </div>

                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <a href="<?= base_url('admin/message'); ?>" class="btn btn-danger">Back</a>
                        </div>
                    </div>

                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->