        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

          
            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message');?>
                    <form action="<?= base_url('admin/editrole')?>" method="post">
                        <div class="form-group row">
                            <label for="idrole" class="col-sm-3 col-form-label">Role ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="idrole" name="idrole" value="<?= $role['id'];?>" readonly>
                            </div>                            
                        </div>                        
                        <div class="form-group row">
                            <label for="role" class="col-sm-3 col-form-label">Role Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="role" name="role" value="<?= $role['role'];?>">
                            </div>
                            
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Edit</button> 
                                <a href="<?= base_url('admin/role');?>" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      