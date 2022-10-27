        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <h5 class="mb-4 text-gray-800">Profile Organisasi</h5>
            <div class="row">
                <div class="col-lg-8">
                    <?= $this->session->flashdata('message'); ?>

                    <?= form_open_multipart('admin/editpprof'); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Organisasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $org['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namak" class="col-sm-3 col-form-label">Nama Kabinet</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="namak" name="namak" value="<?= $org['nama_kabinet']; ?>">
                            <?= form_error('namak', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            Logo Kabinet
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/logo/') . $org['logo'] ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label for="image" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="alamat" name="alamat"><?= $org['alamat']; ?></textarea>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desk" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="desk" name="desk"><?= $org['desk']; ?></textarea>
                            <?= form_error('desk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $org['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="no" class="col-sm-3 col-form-label">No Telp</label>
                        <div class="col-sm-4">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                </div>
                                <input type="text" class="form-control" id="no" name="no" placeholder="Telp 1" value="<?= $org['no1']; ?>">
                                <?= form_error('no', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                </div>
                                <input type="text" class="form-control" id="no2" name="no2" placeholder="Telp 2" value="<?= $org['no2']; ?>">
                                <?= form_error('no2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="ig" class="col-sm-3 col-form-label">Sosmed</label>
                        <div class="col-sm-4">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                </div>
                                <input type="text" class="form-control" id="ig" name="ig" placeholder="Instagram" value="<?= $org['ig']; ?>">
                                <?= form_error('ig', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fab fa-youtube"></i></div>
                                </div>

                                <input type="text" class="form-control" id="yt" name="yt" placeholder="YouTube" value="<?= $org['yt']; ?>">
                                <?= form_error('yt', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>


                    </form>


                </div>
            </div>
            <h5 class="mb-4 text-gray-800">Jajaran Pengurus</h5>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>

            <div class="row">
                <?php foreach ($bph as $b) : ?>
                    <div class="col-lg-3 mb-3">
                        <div class="card">
                            <img src="<?= base_url("assets/img/team/") . $b['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $b['nama'] ?></h5>
                                <p class="card-text"><?= $b['jabatan'] ?></p>
                                <a href="<?= base_url('admin/editbph/') . $b['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/delbph/') . $b['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')">hapus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah BPH</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?= form_open_multipart('admin/profile'); ?>
                        <div class="modal-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="igs" class="col-sm-2 col-form-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="igs" name="igs" placeholder="abc_31">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <select id="jabatan" name="jabatan" class="form-control">
                                        <option>Pilih...</option>
                                        <option value="Ketua BEM">Ketua BEM</option>
                                        <option value="Wakil Ketua BEM">Wakil Ketua BEM</option>
                                        <option value="Sekretaris 1">Sekretaris 1</option>
                                        <option value="Sekretaris 2">Sekretaris 2</option>
                                        <option value="Bendahara 1">Bendahara 1</option>
                                        <option value="Bendahara 2">Bendahara 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Picture
                                </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img id="output_image" class="img-thumbnail">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->