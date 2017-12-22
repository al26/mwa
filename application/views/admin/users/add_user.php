 <div class="col-md-9">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Users</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
            if (!empty($this->session->flashdata('err_msg'))) {
              echo '<div class="alert alert-danger alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
            } elseif (!empty($this->session->flashdata('scss_msg'))) {
              echo '<div class="alert alert-success alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
            } 
            ?>
            <form class="form-horizontal" action="<?= base_url('ValidationUser');?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="username" id="inputEmail3" placeholder="Usename">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" required name="password" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Re-Type Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" required name="password2" id="inputPassword3" placeholder="Re-Type Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Role</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="role" required>
                    <option value="admin">Administrator</option>
                    <option value="user">User</option>
                  </select>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign Up</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>