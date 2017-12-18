  <section class="content">
  <div class="col-xs-12">
  <?php 
  if (!empty($this->session->flashdata('err_msg'))) {
    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
  } elseif (!empty($this->session->flashdata('scss_msg'))) {
    echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
  } ?>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Perbarui Informasi Umum Halaman <?=ucwords($data->title);?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('edit-page').$data->id;?>">
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
			  <textarea class="textarea" rows="6" name="desc" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?=(!empty($data->description)) ? $data->description : $this->session->flashdata('desc');?></textarea>
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
  <div class="row">
    <div class="col-xs-12 ">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Daftar Program Kerja</h3>
          <span data-toggle="tooltip" title="Tambah Data" data-placement="left" class="pull-right"><a role="button" href="#tambahpk" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus bigicon"></i></a></span>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahpk" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Program Kerja</h4>
              </div>
              <div class="modal-body col-xs-12">
                <form class="form-horizontal form-aspirasi" enctype="multipart/form-data" method="post" action="<?=base_url('kelola-proker/add');?>">
                  <div class="form-group" style="margin: 0">
                    <label class="control-label">Judul Program <span class="text-danger">*</span></label>
                    <div class=""> 
                      <input type="text" class="form-control" name="judul" placeholder="Judul Program" required>
                    </div>
                  </div>
                  <div class="form-group" style="margin: 0">
                    <label class="control-label">Jenis Kegiatan<span class="text-danger">*</span></label>
                    <div class="">
                      <textarea class="textarea" rows="6" name="jenis_kegiatan" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                    </div>
                  </div>
                  <br>
                  <div class="form-group" style="margin: 0"> 
                    <div class="pull-right">
                      <button type="submit" name="fileSubmit" class="btn btn-primary">Tambah Proker</button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
      </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="tb_proker" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Judul Program</th>
              <th>Jenis Kegiatan</th>
              <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($proker as $k => $p ) { ?>
            <tr>
              <td><?=$no;?></td>
              <td><?=(strlen($p->judul_program) > 100) ? substr($p->jenis_kegiatan,0,100).'...' : $p->judul_program;?></td>
              <td><?=(strlen($p->jenis_kegiatan) > 100) ? substr($p->jenis_kegiatan,0,100).'...' :  $p->jenis_kegiatan;?></td>
              <td>
              <span data-toggle="tooltip" title="Hapus Data"><a role="button" href="#hapuspk<?=$p->id;?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash bigicon"></i></a></span>
              &nbsp;&nbsp;&nbsp;
              <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editpk<?=$p->id;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
              &nbsp;&nbsp;&nbsp;
              </td>
            </tr>
              <!-- Modal -->
            <div class="modal fade" id="hapuspk<?=$p->id;?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Program Kerja</h4>
                  </div>
                  <div class="modal-body col-xs-12">
                    <p>Are You Sure Want To Delete This Proker?
                      <br>Judul :&nbsp;<?=$p->judul_program; ?> 
                    </p>
                </div>
                <div class="modal-footer">
                  <div class="modal-footer">
                    <a href="<?php echo base_url('HapusPK/').$p->id;?>" class="btn btn-danger" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash bigicon"></i> Delete Data</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <!-- Modal -->
            <div class="modal fade" id="editpk<?=$p->id;?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Program Kerja</h4>
                  </div>
                  <div class="modal-body col-xs-12">
                    <form class="form-horizontal form-aspirasi" enctype="multipart/form-data" method="post" action="<?=base_url('kelola-proker/update');?>">
                      <input type="hidden" name="id" value="<?=$p->id;?>">
                      <div class="form-group" style="margin: 0">
                        <label class="control-label">Judul Program <span class="text-danger">*</span></label>
                        <div class=""> 
                          <input type="text" class="form-control" name="judul" value="<?=$p->judul_program?>" required>
                        </div>
                      </div>
                      <div class="form-group" style="margin: 0">
                        <label class="control-label">Jenis Kegiatan <span class="text-danger">*</span></label>
                        <div class="">
                          <textarea class="textarea" rows="6" name="jenis_kegiatan" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?=$p->jenis_kegiatan?></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="form-group" style="margin: 0"> 
                        <div class="pull-right">
                          <button type="submit" name="fileSubmit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                </div>
              </div>
            </div>
          </div>
            <?php $no++;} ?>
            </tbody>
            <tfoot>
            <tr>
              <th>#</th>
              <th>Judul Program</th>
              <th>Jenis Kegiatan</th>
              <th>Opsi</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
</section>