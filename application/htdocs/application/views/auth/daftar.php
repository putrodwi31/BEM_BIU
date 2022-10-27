<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url('assets/img/PMI2.png') ?>">
  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<img src="<?= base_url('assets/img/LOGO.png'); ?>" class="rounded mx-auto d-block" width="300px">

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?= $this->session->flashdata('message'); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <div class="card">
            <div class="card-header font-weight-bold" style="text-align: center;">
              <?= $title ?>
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ttl" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="ttl" name="ttl">
                    <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nisn" name="nisn">
                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="kelas" name="kelas">
                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="goldar" class="col-sm-2 col-form-label">Golongan Darah</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="goldar" name="goldar">
                    <?= form_error('goldar', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="gender" name="gender">
                      <option value="">Jenis Kelamin</option>
                      <option value="L">Laki - Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                    <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="agama" name="agama">
                    <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat Rumah</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nomor" class="col-sm-2 col-form-label">No Telepon/WA</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="nomor" name="nomor">
                    <?= form_error('nomor', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="email" name="email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="angkatan" name="angkatan">
                      <option value="">Pilih Angkatan</option>
                      <option value="XI">Angkatan XI</option>
                      <option value="XII">Angkatan XII</option>
                      <option value="XIII">Angkatan XIII</option>
                    </select>
                    <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="divisi" name="divisi">
                      <option value="">Pilih Divisi</option>
                      <option value="PP">Pertolongan Pertama</option>
                      <option value="PK">Perawatan Keluarga</option>

                      <option value="TANDU">Tandu</option>
                    </select>
                    <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>

                <div class="form-group row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Daftar</button>
                    <a href="http://wa.me/6283805200284" class="btn btn-warning">Ada Kendala?</a>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; PEMDUSIV2 <?= date('Y'); ?></span>
    </div>
  </div>
</footer>

</html>