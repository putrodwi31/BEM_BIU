<div class="container-fluid">
    <h5 class="mb-4 text-gray-800"><?= $title; ?></h5>
    <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#kementerian">
        Tambah Kementerian
    </button>
    <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#ukm">
        Tambah UKM
    </button>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-lg-7 mb-3">
            <h6 class="text-gray-800"><strong>Kementerian</strong></h6>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kementerian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($kem as $b) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $b['nama'] ?></td>
                            <td><a href="<?= base_url('admin/editkem/') . $b['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/delkem/') . $b['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')">hapus</a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-7 mb-3">
            <h6 class="text-gray-800"><strong>UKM</strong></h6>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama UKM</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($ukm as $b) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $b['nama'] ?></td>
                            <td><a href="<?= base_url('admin/editukm/') . $b['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('admin/delukm/') . $b['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')">hapus</a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="kementerian" tabindex="-1" aria-labelledby="kementerianLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kementerianLabel">Tambah Kementerian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('admin/kandu'); ?>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desk" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="desk" id="desk" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            Logo
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
    <!-- Modal -->
    <div class="modal fade" id="ukm" tabindex="-1" aria-labelledby="ukmLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ukmLabel">Tambah UKM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?= form_open_multipart('admin/addukm'); ?>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="desk" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="desk" id="desk" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">
                            Logo
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