<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <p>Hari ini : <?= date("d/m/Y") ?></p>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('user/absensi'); ?>" method="post" id="absensi">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user["name"]; ?>">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" required>
                </div>
                <div class="form-group">
                    <label for="text">Divisi</label>
                    <br>
                    <input type="text" class="form-control" id="divisi" name="divisi" required>
                </div>
                <div class="form-group">
                    <label for="text">Keterangan</label>
                    <select name="ket" id="ket" class="form-control" required>
                        <option value="1">Hadir</option>
                        <option value="2">Sakit</option>
                        <option value="3">Izin</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="text">Tanda Tangan</label><br>
                    <div name="tandatangan" id="tandatangan"></div>
                </div> -->
                <div class="form-group">
                    <label for="text">Tanda Tangan JS Sign</label><br>
                    <div name="tandatanganv2" id="tandatanganv2" data-width="300" data-height="200" data-border="1px solid black" data-line-color="#000000"></div>


                </div>
                <div class="form-group">
                    <button type="submit" id="kirim" class="btn btn-primary">Absen</button>
                    <button type="reset" id="res" class="btn btn-danger">Reset</button>
                    <!-- <button type="#" id="del" class="btn btn-danger">Reset</button>
                    <br>
                    <div id="bbk"></div> -->
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->