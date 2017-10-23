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
          <h3 class="box-title">Daftar Personalia MWA</h3>
          <span data-toggle="tooltip" title="Tambah Data" data-placement="left" class="pull-right"><a role="button" href="#tambahprs" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus bigicon"></i></a></span>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahprs" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Personalia</h4>
              </div>
              <div class="modal-body col-xs-12">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('kelola-personalia/add/0');?>">
                    <div class="form-group" style="margin: 0">
                      <label class="control-label" for="name">Nama <span class="text-danger">*</span></label>
                      <div class=""> 
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Jabatan <span class="text-danger">*</span></label>
                      <div class="">
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Unsur <span class="text-danger">*</span></label>
                      <div class="">
                        <input type="text" class="form-control" name="unsur" placeholder="Unsur" required>
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Email</label>
                      <div class="">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">No. Telp</label>
                      <div class="">
                        <input type="text" class="form-control" name="telp" placeholder="08xxxx">
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Facebook</label>
                      <div class="">
                        <input type="text" class="form-control" name="fb" placeholder="Akun Facebook">
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Twitter</label>
                      <div class="">
                        <input type="text" class="form-control" name="twit" placeholder="Akun Twitter">
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Instagram</label>
                      <div class="">
                        <input type="text" class="form-control" name="ig" placeholder="Akun Instagram">
                      </div>
                    </div>
                    <div class="form-group" style="margin: 0">
                      <label class="control-label">Upload Foto</label>
                    <div class="">
                        <input class="form-control" type="file" name="fotopersonalia">
                        <small id="uploadHelp" class="form-text text-muted">ekstensi : .jpg, .jpeg, .png | maks : 2MB</small>
                    </div>
                    </div>
                    <br>
                    <div class="form-group" style="margin: 0"> 
                      <div class="pull-right">
                        <button type="submit" name="fileSubmit" class="btn btn-primary">Tambah Personalia</button>
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
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Unsur</th>
              <th>Foto</th>
              <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($personalia as $k => $p ) { ?>
            <tr>
              <td><?=(strlen($p->nama) > 20) ? substr($p->nama,0,20).'...' : $p->nama;?></td>
              <td><?=(strlen($p->jabatan) > 20) ? substr($p->jabatan,0,20).'...' : $p->jabatan;?></td>
              <td><?=(strlen($p->unsur) > 20) ? substr($p->unsur,0,100).'...' : $p->unsur;?></td>
              <td><img src="<?=(!empty($p->foto)) ? base_url('assets/images/personalia').$p->foto : base_url('assets/images/personalia/noimage.jpg');?>" class="media-object" style="width:60px"></td>
              <td><a href="<?php echo base_url('hapus-post/').$p->id;?>" class="btn btn-danger" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash bigicon"></i></a>
              &nbsp;&nbsp;&nbsp;
              <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editprs<?=$p->id;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
              &nbsp;&nbsp;&nbsp;
            <tr>
            <!-- Modal -->
            <div class="modal fade" id="editprs<?=$p->id;?>" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Personalia</h4>
                  </div>
                  <div class="modal-body col-xs-12">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('kelola-personalia/update/0');?>">
                        <input type="hidden" name="id" value="<?=$p->id;?>">
                        <div class="form-group" style="margin: 0">
                          <label class="control-label" for="name">Nama <span class="text-danger">*</span></label>
                          <div class=""> 
                            <input type="text" class="form-control" name="nama" value="<?=$p->nama;?>" required>
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Jabatan <span class="text-danger">*</span></label>
                          <div class="">
                            <input type="text" class="form-control" name="jabatan" value="<?=$p->jabatan?>" required>
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Unsur <span class="text-danger">*</span></label>
                          <div class="">
                            <input type="text" class="form-control" name="unsur" value="<?=$p->unsur?>" required>
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Email</label>
                          <div class="">
                            <input type="email" class="form-control" name="email" value="<?=$p->email?>">
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">No. Telp</label>
                          <div class="">
                            <input type="text" class="form-control" name="telp" value="<?=$p->telp?>">
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Facebook</label>
                          <div class="">
                            <input type="text" class="form-control" name="fb" value="<?=$p->facebook?>">
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Twitter</label>
                          <div class="">
                            <input type="text" class="form-control" name="twit" value="<?=$p->twitter?>">
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Instagram</label>
                          <div class="">
                            <input type="text" class="form-control" name="ig" value="<?=$p->instagram?>">
                          </div>
                        </div>
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Upload Foto</label>
                        <div class="">
                            <input class="form-control" type="file" name="fotopersonalia">
                            <small id="uploadHelp" class="form-text text-muted">ekstensi : .jpg, .jpeg, .png | maks : 2MB</small>
                        </div>
                        </div>
                        <br>
                        <div class="form-group" style="margin: 0"> 
                          <div class="pull-right">
                            <button type="submit" name="fileSubmit" class="btn btn-primary">Update Personalia</button>
                          </div>
                        </div>
                      </form>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
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