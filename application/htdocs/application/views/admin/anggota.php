        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <div class="col-lg">
                    <table id="anggota" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Divisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($anggota as $p) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><a style="text-decoration: none" class="text-dark" href="<?= base_url('admin/detailanggota/') . $p['id']; ?>"><?= $p['nama']; ?></a></td>
                                    <td><?= $p['ttl']; ?></td>
                                    <?php if ($p['gender'] == 'L') {
                                        $gndr = 'Laki - laki';
                                    } else {
                                        $gndr = 'Perempuan';
                                    }

                                    ?>
                                    <td><?= $gndr; ?></td>
                                    <td><?= $p['kelas']; ?></td>
                                    <td><?= $p['angkatan']; ?></td>
                                    <?php if ($p['divisi'] == 'PP') {
                                        $dvs = 'Pertolongan Pertama';
                                    } else if ($p['divisi'] == 'PK') {
                                        $dvs = 'Perawatan Keluarga';
                                    } else {
                                        $dvs = 'Tandu';
                                    }
                                    ?>
                                    <td><?= $dvs; ?></td>
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