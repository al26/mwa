 <div class="col-md-9">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Admin</h3>
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="inputEmail3" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly name="Jabatan" value="Admin" id="inputEmail3" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Unsur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" readonly value="admin" name="unsur" id="inputEmail3" placeholder="unsur">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" required name="email" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="alamat" id="inputEmail3" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Upload File</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="imgInp" name="fileskp">
                    <img id="blah2" src="#" height="100px" alt="your image" />
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