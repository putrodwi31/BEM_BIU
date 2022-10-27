        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <div class="row">
            <div class="col-lg">
              <table id="pendaftar" class="table table-hover" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">No Telepon/WA</th>
                    <th scope="col">Sekolah Asal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($pendaftar as $p) : ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><a style="text-decoration: none" class="text-dark" href="<?= base_url('admin/detailpendaftar/') . $p['id']; ?>"><?= $p['nama']; ?></a></td>
                      <td><?= $p['ttl']; ?></td>
                      <td><?= $p['jurusan']; ?></td>
                      <td><?= $p['nomor']; ?></td>
                      <td><?= $p['sekolah']; ?></td>

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