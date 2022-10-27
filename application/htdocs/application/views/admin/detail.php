        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $datap['nama']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor" class="col-sm-2 col-form-label">No Telepon/WA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $datap['nomor']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sekolah" name="sekolah" value="<?= $datap['sekolah']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $datap['jurusan']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="moto" class="col-sm-2 col-form-label">Motto Hidup</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" id="moto" name="moto" value="" rows="3" readonly><?= $datap['moto']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="pengalaman" class="col-sm-2 col-form-label">Pengalaman Organisasi</label>
                <div class="col-sm-10">
                    <textarea type="textarea" class="form-control" id="pengalaman" name="pengalaman" value="" rows="3" readonly><?= $datap['pengalaman']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="ttl" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ttl" name="ttl" value="<?= $datap['ttl']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="alasan" class="col-sm-2 col-form-label">Alasan Masuk PMR</label>
                <div class="col-sm-10">
                    <textarea type="textarea" class="form-control" id="alasan" name="alasan" value="" rows="3" readonly><?= $datap['alasan']; ?></textarea>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <a href="<?= base_url('admin') ?>" class="btn btn-danger">Kembali</a>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->