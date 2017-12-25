 <div class="col-md-9">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Password</h3>
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
            <?php foreach ($data as $user => $key) { ?>
            <form class="form-horizontal" action="<?= base_url('StatusUpdate/').$key->id;?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Personalia</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly name="username1" id="inputEmail3" value="<?= $key->nama; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Unsur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $key->unsur ?>" required readonly name="unsur" id="inputEmail3" placeholder="unsur">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="status" required>
                    <option value="aktif">aktif</option>
                    <option value="nonaktif">nonaktif</option>
                  </select>
                </div>
                </div>
              </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
            <?php } ?>
          </div>
          <!-- /.box -->
        </div>