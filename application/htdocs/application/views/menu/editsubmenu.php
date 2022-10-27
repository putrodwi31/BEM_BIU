        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>


          <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message');?>
                    <form action="<?= base_url('menu/editedsubmenu/') . $menuid['id'];?>" method="post">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title" value="<?= $menuid['title'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="menu_id" class="col-sm-2 col-form-label">Menu</label>
                            <div class="col-sm-10">
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="<?= $menuid['id']  ?>" hidden><?= $menuselected['menu']?></option>
                                <option value="">Select Menu</option>
                                <?php foreach($menu as $m) :?>
                                <option value="<?= $m['id']?>"><?= $m['menu']?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $menuid['url'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon" value="<?= $menuid['icon'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active" checked>
                                <label for="" class="form-check-label" for="is_active">Active?</label>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button> 
                                <a href="<?= base_url('menu/submenu');?>" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->