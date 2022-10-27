        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <form action="<?= base_url('admin/search') ?>" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari nama.." name="nama" value="<?= $keyword; ?>" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                                <a href="<?= base_url('admin') ?>" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                        <?= form_error('nama', '<small class="text-danger mb-3">', '</small>'); ?>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Telepon/WA</th>
                                <th scope="col">Sekolah Asal</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pendaftar as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['nomor']; ?></td>
                                    <td><?= $p['sekolah']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detailpendaftar/') . $p['id']; ?>" class="badge badge-info">detail</a>
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