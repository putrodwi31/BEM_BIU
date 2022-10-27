        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg-8">
                    <?php $np = $bph['id'];
                    echo $this->session->flashdata('message'); ?>
                    <?= form_open_multipart("admin/editbph/$np"); ?>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $bph['nama']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="igs" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="igs" name="igs" placeholder="abc_31" value="<?= $bph['ig']; ?>">
                            <?= form_error('igs', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <select id="jabatan" name="jabatan" class="form-control">
                                <option selected value="<?= $bph['jabatan']; ?>"><?= $bph['jabatan']; ?></option>
                                <option value="Ketua Umum">Ketua Umum</option>
                                <option value="Wakil Ketua Umum 1">Wakil Ketua Umum 1</option>
                                <option value="Wakil Ketua Umum 2">Wakil Ketua Umum 2</option>
                                <option value="Sekretaris 1">Sekretaris 1</option>
                                <option value="Sekretaris 2">Sekretaris 2</option>
                                <option value="Bendahara 1">Bendahara 1</option>
                                <option value="Bendahara 2">Bendahara 2</option>
                                <option value="Humas">Humas</option>
                            </select>
                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            Picture
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url("assets/img/team/") . $bph['image']; ?>" id="output_image" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" onchange="loadFile(event)">
                                        <label for="image" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="<?= base_url('admin/profile'); ?>" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->