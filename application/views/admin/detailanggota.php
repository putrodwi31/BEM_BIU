        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $datap['nama']; ?>" readonly>
                </div>
                <label for="angkatan" class="col-form-label">Angkatan</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?= $datap['angkatan']; ?>" readonly>
                </div>
                <label for="divisi" class="col-form-label">Divisi</label>
                <div class="col-sm-3">
                <?php 
                
                if($datap["divisi"] == "PP"){
                    $datd = "Pertolongan Pertama";
                }else if($datap["divisi"] == "PK"){
                    $datd = "Perawatan Keluarga";
                }else {
                    $datd = "Tandu";
                }
                ?>
                    <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $datd; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat/Tanggal lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ttl" name="ttl" value="<?= $datap['ttl']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= $datap['nisn']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $datap['kelas']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="goldar" class="col-sm-2 col-form-label">Golongan Darah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="goldar" name="goldar" value="<?= $datap['goldar']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                <?php 
                if ($datap["gender"] == "L"){
                    $datk = "Laki - Laki";
                }else {
                    $datk = "Perempuan";
                }

                ?>
                    <input type="text" class="form-control" id="gender" name="gender" value="<?= $datk; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $datap['agama']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Rumah</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="alamat" name="alamat" value="" rows="3" readonly><?= $datap['alamat']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor" class="col-sm-2 col-form-label">No Telepon/WA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $datap['nomor']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $datap['email']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <a href="<?= base_url('admin/anggota') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->