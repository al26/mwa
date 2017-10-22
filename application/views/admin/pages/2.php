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
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('edit-page/').$data->id;?>">
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
          <h3 class="box-title">Daftar Surat Keputusan</h3>
          <span data-toggle="tooltip" title="Tambah Data" data-placement="left" class="pull-right"><a role="button" href="#tambahsk" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus bigicon"></i></a></span>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahsk" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data SK</h4>
              </div>
              <div class="modal-body col-xs-12">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('kirim-pesan');?>">
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Nomor <span class="text-danger">*</span></label>
                  <div class=""> 
                    <input type="text" class="form-control" name="nomor" placeholder="Nomor SK" required>
                  </div>
                </div>
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Tanggal <span class="text-danger">*</span></label>
                  <div class="">
                    <input type="text" class="form-control" name="tanggal" id="datepicker">
                  </div>
                </div>
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Tentang <span class="text-danger">*</span></label>
                  <div class="">
                    <input type="text" class="form-control" name="tentang" placeholder="Tentang" required>
                  </div>
                </div>
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Upload File</label>
                <div class="">
                    <input class="form-control" type="file" name="fotoskp">
                </div>
                </div>
                <br>
                <div class="form-group" style="margin: 0"> 
                  <div class="pull-right">
                    <button type="submit" name="fileSubmit" class="btn btn-primary">Tambah SK</button>
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
        <div class="box-body">
          <table id="tb_sk" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Tentang</th>
              <th>File</th>
              <th>Opsi</th>
              <!-- <th class="hidden"></th> -->
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($sk as $k => $p ) { ?>
            <tr>
              <td><?=$no;?></td>
              <td><?=(strlen($p->nomor) > 20) ? substr($p->nomor,0,20).'...' : $p->nomor;?></td>
              <td><?=date("d/m/Y",strtotime($p->tanggal));?></td>
              <td><?=(strlen($p->tentang) > 20) ? substr($p->tentang,0,20).'...' : $p->tentang;?></td>
              <td><a href="<?=base_url('assets/uploaded_files/skp/'.$p->file);?>" target="_blank"><img src="<?=base_url('assets/images/pdf.png');?>" style="width:35px"></a></td>
              <td><a href="<?php echo base_url('hapus-post/').$p->id;?>" class="btn btn-danger" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash bigicon"></i></a>
              &nbsp;&nbsp;&nbsp;
              <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editsk<?=$p->id;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
              &nbsp;&nbsp;&nbsp;
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="editsk<?=$p->id;?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data SK</h4>
                  </div>
                  <div class="modal-body col-xs-12">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('kirim-pesan');?>">
                      <div class="form-group">
                        <label class="control-label">Nomor <span class="text-danger">*</span></label>
                        <div class=""> 
                          <input type="text" class="form-control" name="nomor" value="<?=$p->nomor;?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal <span class="text-danger">*</span></label>
                        <div class="">
                          <input type="text" class="form-control" name="tanggal" id="datepicker">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="subject">Tentang <span class="text-danger">*</span></label>
                        <div class="">
                          <input type="text" class="form-control" name="tentang" value="<?=$p->tentang;?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Upload File</label>
                      <div class="">
                          <input class="form-control" type="file" name="fotoskp">
                      </div>
                      </div>
                      <div class="form-group"> 
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
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Tentang</th>
              <th>File</th>
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
  <div class="row">
    <div class="col-xs-12 ">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Daftar Peraturan</h3>
          <span data-toggle="tooltip" title="Tambah Data" data-placement="left" class="pull-right"><a role="button" href="#tambahp" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus bigicon"></i></a></span>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahp" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Peraturan</h4>
              </div>
              <div class="modal-body col-xs-12">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('kirim-pesan');?>">
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Nomor <span class="text-danger">*</span></label>
                  <div class=""> 
                    <input type="text" class="form-control" name="nomor" placeholder="Nomor Peraturan" required>
                  </div>
                </div>
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Tanggal <span class="text-danger">*</span></label>
                  <div class="">
                    <input type="text" class="form-control" name="tanggal" id="datepicker">
                  </div>
                </div>
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Tentang <span class="text-danger">*</span></label>
                  <div class="">
                    <input type="text" class="form-control" name="tentang" placeholder="Tentang" required>
                  </div>
                </div>
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Upload File</label>
                <div class="">
                    <input class="form-control" type="file" name="fotoskp">
                </div>
                </div>
                <br>
                <div class="form-group" style="margin: 0"> 
                  <div class="pull-right">
                    <button type="submit" name="fileSubmit" class="btn btn-primary">Tambah SK</button>
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
          <table id="tb_peraturan" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Tentang</th>
              <th>File</th>
              <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($peraturan as $k => $p ) { ?>
            <tr>
              <td><?=$no;?></td>
              <td><?=(strlen($p->nomor) > 20) ? substr($p->nomor,0,20).'...' : $p->nomor;?></td>
              <td><?=date("d/m/Y",strtotime($p->tanggal));?></td>
              <td><?=(strlen($p->tentang) > 20) ? substr($p->tentang,0,20).'...' : $p->tentang;?></td>
              <td><a href="<?=base_url('assets/uploaded_files/skp/'.$p->file);?>" target="_blank"><img src="<?=base_url('assets/images/pdf.png');?>" style="width:35px"></a></td>
              <td><a href="<?php echo base_url('hapus-post/').$p->id;?>" class="btn btn-danger" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash bigicon"></i></a>
              &nbsp;&nbsp;&nbsp;
              <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editp<?=$p->id;?>" class="btn btn-success" data-toggle="modal" aria-expanded="true" aria-controls="edit<?=$p->id;?>"><i class="fa fa-upload bigicon"></i></a></span>
              &nbsp;&nbsp;&nbsp;
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="editp<?=$p->id;?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Data Peraturan</h4>
                  </div>
                  <div class="modal-body col-xs-12">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('kirim-pesan');?>">
                      <div class="form-group">
                        <label class="control-label">Nomor <span class="text-danger">*</span></label>
                        <div class=""> 
                          <input type="text" class="form-control" name="nomor" value="<?=$p->nomor;?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tanggal <span class="text-danger">*</span></label>
                        <div class="">
                          <input type="text" class="form-control" name="tanggal" id="datepicker">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="subject">Tentang <span class="text-danger">*</span></label>
                        <div class="">
                          <input type="text" class="form-control" name="tentang" value="<?=$p->tentang;?>" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Upload File</label>
                      <div class="">
                          <input class="form-control" type="file" name="fotoskp">
                      </div>
                      </div>
                      <div class="form-group"> 
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
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Tentang</th>
              <th>File</th>
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