        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?>
            </h1>
            <h5 class="text-center text-gray-800">Edit Postingan</h5>
            <div class="row">
                <?= $this->session->flashdata('message'); ?>
                <div class="col-md-12">
                    <div class="card">
                        <?php $idi = $artikel['id']; ?>
                        <?= form_open_multipart("admin/edited/$idi"); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul Postingan</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?= $artikel['judul']; ?>" class="form-control" id="judul" name="judul" required>
                                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                                        <div class="col-sm-8">
                                            <select name="kategori" id="kategori" class="form-control">
                                                <option>=== PILIH KATEGORI ===</option>
                                                <?php foreach ($kategori as $k) : ?>
                                                    <?php if ($k['id'] === $artikel['kategori']) :
                                                        $select = 'selected';
                                                    else :
                                                        $select = '';
                                                    endif;
                                                    ?>
                                                    <option <?= $select; ?> value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                                        <div class="col-sm-8">
                                            <input value="<?= $artikel['tag']; ?>" type="text" class="form-control" id="tag" name="tag" placeholder="Tag" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?= $artikel['penulis']; ?>" class="form-control" id="penulis" name="penulis" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Thumbnail</label>
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/post/') . $artikel['gambar']; ?>" class="img-thumbnail">
                                </div>
                                <div class="custom-file col-sm-6">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label for="foto" class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi Postingan</label>
                                <textarea name="isi" id="isipost" cols="30" rows="10"><?= $artikel['isi']; ?></textarea>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <a href="<?= base_url('admin/post') ?>" class="btn btn-danger btn-block">Kembali</a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success btn-block">Edit</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->