        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg">
                    <table id="anggota" class="table table-striped table-bordered table-responsive" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($message as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $p['nama']; ?></a></td>
                                    <td><?= $p['email']; ?></td>
                                    <td><?= $p['subject']; ?></td>
                                    <td><?= word_limiter($p['isi'], 5); ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/delmsg/') . $p['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah anda yakin ingin menghapus?')">Hapus</a>
                                        <a href="<?= base_url('admin/viewmsg/') . $p['id']; ?>" class="badge badge-info">View</a>
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