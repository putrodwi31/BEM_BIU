        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <a href="<?= base_url('admin/addpost') ?>" class="btn btn-primary">Tambah Postingan</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Postingan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kategori</th>
                                <th scope="col" width="10%">
                                    <i class="fas fa-thumbs-up"></i>
                                    <i class="fas fa-thumbs-down"></i>
                                </th>
                                <th scope="col">Dilihat</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($artikel as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td width="30%">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="<?= base_url('assets/img/post/') . $p['gambar'] ?>" class="img-fluid">
                                            </div>
                                            <div class="col-md-6">
                                                <?= word_limiter($p['judul'], 3); ?>
                                            </div>
                                        </div>

                                    </td>
                                    <td width="20%">
                                        <?php $date = date_create($p['tanggal']);
                                        echo date_format($date, 'd F Y'); ?>
                                    </td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['suka'] . ' / ' . $p['tidak_suka']; ?></td>
                                    <td><?= $p['dilihat']; ?></td>
                                    <td><?= $p['penulis']; ?>
                                    </td>
                                    <?php if ($p['status'] == '1') : $status = 'Publish';
                                    else : $status = 'Draft'; ?>
                                    <?php endif; ?>
                                    <td><?= $status; ?></td>
                                    <td width="30%">
                                        <a href="<?= base_url('admin/editpost/') . $p['id']; ?>" class="badge badge-success">edit</a>
                                        <a onclick='return confirm("Yakin ingin menghapus postingan ini ?")' href="<?= base_url('admin/delpost/') . $p['id']; ?>" class="badge badge-danger">hapus</a>
                                        <?php if ($p['status'] == '1') : ?>
                                            <a onclick='return confirm("Yakin ingin mengembalikan postingan ini ke Draft ?")' href="<?= base_url('admin/draft/') . $p['id'] ?>" class="badge badge-warning">Draf</a>
                                        <?php else : ?>
                                            <a onclick='return confirm("Yakin ingin mempublikasikan postingan ini ?")' href="<?= base_url('admin/pub/') . $p['id'] ?>" class="badge badge-primary">Publish</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>




        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->