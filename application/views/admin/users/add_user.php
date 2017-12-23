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
<div class="col-xs-12 ">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Daftar Personalia MWA</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table id="tb_personaliamwa" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Unsur</th>
                <th>Email</th>
                <th>Telp.</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Instagram</th>
                <th>Foto</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
            <?php $no = 1; foreach ($personalia as $k => $p ) { ?>
            <tr>
              <td><?=$no;?></td>
              <td><?=(strlen($p->nama) > 20) ? wordwrap($p->nama,20,"<br>\n") : $p->nama;?></td>
              <td><?=(strlen($p->jabatan) > 20) ? wordwrap($p->jabatan,20,"<br>\n") : $p->jabatan;?></td>
              <td><?=(strlen($p->unsur) > 20) ? wordwrap($p->unsur,20,"<br>\n") : $p->unsur;?></td>
              <td><?=(strlen($p->email) > 20) ? wordwrap($p->email,20,"<br>\n") : $p->email;?></td>
              <td><?=(strlen($p->telp) > 20) ? wordwrap($p->telp,20,"<br>\n") : $p->telp;?></td>
              <td><?=(strlen($p->facebook) > 20) ? wordwrap($p->facebook,20,"<br>\n") : $p->facebook;?></td>
              <td><?=(strlen($p->twitter) > 20) ? wordwrap($p->twitter,20,"<br>\n") : $p->twitter;?></td>
              <td><?=(strlen($p->instagram) > 20) ? wordwrap($p->instagram,20,"<br>\n") : $p->instagram;?></td>
              <td><a href="<?=(!empty($p->foto)) ? base_url('assets/images/personalia/').$p->foto : '#'?>" target="_blank"><img src="<?=(!empty($p->foto)) ? base_url('assets/images/personalia/').$p->foto : base_url('assets/images/personalia/noimage.jpg');?>" class="media-object" style="width:60px"></a>
              </td>
              <td>
              <span data-toggle="tooltip" title="Buat Akun User"><a <?php if($p->unsur != "mahasiswa" && $p->unsur != "Mahasiswa" ){echo "disabled";} ?> role="button" href="#editprs<?=$p->id;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-user bigicon"></i></a></span>
              </td>
            </tr>
            <?php $no++;} ?>
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
                          <label class="control-label">Jabatan <span class="text-danger">*</span></label>
                          <div class="">
                            <input type="text" class="form-control" name="jabatan" value="<?=$p->jabatan?>" required>
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
            </div>
            
            </tbody>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Unsur</th>
                <th>Email</th>
                <th>Telp.</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Instagram</th>
                <th>Foto</th>
                <th>Opsi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
