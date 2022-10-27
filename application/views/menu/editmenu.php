        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>


          <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message');?>
                    <form action="<?= base_url('menu/editedmenu/') . $menu['id'];?>" method="post">
                        <div class="form-group row">
                            <label for="menuid" class="col-sm-3 col-form-label">Menu ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="menuid" name="menuid" value="<?= $menu['id'];?>" readonly>
                            </div>                            
                        </div>                        
                        <div class="form-group row">
                            <label for="menu" class="col-sm-3 col-form-label">Menu Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu'];?>">
                            </div>
                            
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Edit</button> 
                                <a href="<?= base_url('menu');?>" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->