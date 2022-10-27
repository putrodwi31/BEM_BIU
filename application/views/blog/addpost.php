        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row">
                <?= $this->session->flashdata('message'); ?>
                <div class="col-md-12">
                    <div class="card">
                        <?= form_open_multipart('admin/addpost'); ?>
                        <div class="card-body" id="a">
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul Postingan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="judul" name="judul" required>
                                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                                        <div class="col-sm-8">
                                            <select name="kategori" id="kategori" class="form-control" onchange="cekPro()">
                                                <option class="text-center">PILIH KATEGORI</option>
                                                <?php foreach ($kategori as $k) : ?>
                                                    <option class="text-center" value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="tag" class="col-sm-2 col-form-label">Tag</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section id="newpro"></section>
                            <div class="form-group row" id="b">
                                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?= $user['name']; ?>" class="form-control" id="penulis" name="penulis" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Thumbnail</label>
                                <div class="custom-file col-sm-9">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label for="image" class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi Postingan</label>
                                <textarea name="isi" id="isipost" cols="30" rows="10"></textarea>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-danger btn-block">Reset Data</button>
                                </div>
                                <div class="col-md-4">
                                    <button name="0" class="btn btn-warning btn-block">Draft</button>
                                </div>
                                <div class="col-md-4">
                                    <button name="1" class="btn btn-success btn-block">Publish</button>
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