  <section class="content">
  <?php 
  if (!empty($this->session->flashdata('err_msg'))) {
    echo '<div class="alert alert-danger alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
  } elseif (!empty($this->session->flashdata('scss_msg'))) {
    echo '<div class="alert alert-success alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
  } 
  ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Perbarui Informasi Umum Halaman <?=ucwords($data->title);?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('edit-beranda');?>">
            <input type="hidden" name="id" value="<?=$data->id;?>" required>
            <div class="form-group">
              <label class="control-label col-sm-3 col-md-2 color-aqua" for="title">Title <span class="text-danger">*</span></label>
              <div class="col-sm-8 col-md-9"> 
                <input type="text" class="form-control" name="title" value="<?=(!empty($data->title)) ? $data->title : $this->session->flashdata('title');?>" required>
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-3 col-md-2 color-aqua" for="body">Description <span class="text-danger">*</span></label>
            <div class="col-sm-8 col-md-9">
        <textarea class="textarea" rows="6" name="jenis_kegiatan" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?=(!empty($data->description)) ? $data->description : $this->session->flashdata('desc');?></textarea>
            </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-3 col-md-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary color-silver">Submit</button>
              </div>
            </div>
          </form>
        </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
</section>