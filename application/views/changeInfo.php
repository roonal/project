<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-pencil"></i> &nbsp; Update User</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('Auth/changePsw'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Change Password</a>
        </div>  
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <div class="box-body my-form-body">
           <?php echo form_open(base_url('admin/profile'), 'class="form-horizontal"' )?> 
          <div class="form-group">
            <label for="username" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-9">
              <input type="text" name="username" value="<?= $_SESSION['user']['username']?$_SESSION['user']['username'] : '' ?>" class="form-control" id="username" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">User Email</label>
            <div class="col-sm-9">
              <input type="text" name="firstname" value="<?= $_SESSION['user']['email']?$_SESSION['user']['email'] : '' ?>" class="form-control" id="firstname" placeholder="">
            </div>
          </div>
            <div class="form-group">
              <div class="col-md-11 pt-3">
                <input type="submit" name="submit" value="Update Profile" class="btn btn-info pull-right">
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
  <script>
  $("#admin").addClass('active');
  </script>