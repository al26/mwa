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
              echo '<div class="alert alert-danger alert-dismissable" ><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
            } elseif (!empty($this->session->flashdata('scss_msg'))) {
              echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
            } 
            ?>
            <!-- koment -->
            
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="<?= base_url('kelola-personalia/update/0');?>">
              <div class="box-body">
                <input type="hidden" name="id" value="<?= $this->session->id_personalia; ?>">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" id="inputEmail3" value="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Upload File</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="imgInp" name="fotopersonalia">
                    <br>
                    <img id="blah2" src="<?= base_url('/assets/images/personalia/').$data->foto;?>" height="100px" alt="your image" />
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

          </div>
          <!-- /.box -->
        </div>