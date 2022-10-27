        <!-- Begin Page Content -->
        <div class="container-fluid">





            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <?php
            date_default_timezone_set('Asia/Jakarta');
            $mulai = $pendaftaran[0]['started'];
            $terlambat = $pendaftaran[0]['end'];
            $now = time();
            if ($terlambat > $now) :
            ?>
                <div class="rounded bg-gradient-4 text-white shadow p-5 text-center mb-5">
                    <p class="mb-0 font-weight-bold text-uppercase"><?= $mulai > $now ? "Pendaftaran Anggota Baru Akan dimulai Dalam" : "Pendaftaran Sedang Berlangsung, Berakhir Dalam"  ?></p>
                    <div id="timer" class="countdown py-4" data-isi="mulai" data-time="<?= $mulai > $now ? date('Y-m-d H:i:s', $pendaftaran[0]['started']) : date('Y-m-d H:i:s', $pendaftaran[0]['end']) ?>">
                        <span class="h1 font-weight-bold">00</span>Hari
                        <span class="h1 font-weight-bold">00</span>Jam
                        <span class="h1 font-weight-bold">00</span>Menit
                        <span class="h1 font-weight-bold">00</span>Detik
                    </div>

                </div>
            <?php else : ?>
                <div class="rounded bg-gradient-4 text-white shadow p-5 text-center mb-5">
                    <p class="mb-0 font-weight-bold text-uppercase">Pendaftaran belum dibuka/telah berakhir</p>


                </div>
            <?php endif; ?>
            <?= form_error('angkatan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('mulai', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('berakhir', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
            <?php if (!$pendaftaran) : ?>
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Tambah Jadwal</a>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg">
                    <table id="pendaftar" class="table table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Mulai</th>
                                <th scope="col">Berakhir</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pendaftaran as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $r['angkatan']; ?></td>
                                    <td><?= date('d-m-Y H:i:s', $r['started']); ?></td>
                                    <td><?= date('d-m-Y H:i:s', $r['end']); ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/editpendaftaran/') . $r['id']; ?>" class="badge badge-success">edit</a>
                                        <a href="<?= base_url('admin/deletependaftaran/') . $r['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin mengahapus?')">delete</a>
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

        <!-- Modal -->
        <?php if (!$pendaftaran) : ?>
            <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newRoleModalLabel">Tambah Jadwal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('admin/pendaftaran'); ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Angkatan XII">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mulai" name="mulai" placeholder="Mulai">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="berakhir" name="berakhir" placeholder="Berakhir">
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
        <?php endif; ?>