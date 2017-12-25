<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Reply</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              if (!empty($this->session->flashdata('err_msg'))) {
                echo '<div class="alert alert-danger alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
              } elseif (!empty($this->session->flashdata('scss_msg'))) {
                echo '<div class="alert alert-success alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
              } 
              ?>
              <div class="table-responsive mailbox-messages">
                <table id="tb_user" class="table table-hover ">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Options</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php $no=1; foreach ($data as $datas) {?>
                  <tr>
                    <td><?=$no?></td>
                    <td class="mailbox-name">
                        <?php echo $datas->username; ?></a></td>
                    <td class="mailbox-subject">
                      <?php echo $datas->role;  ?>
                    </td>
                    <td>
                      <a  href="<?= base_url('hapus-user/').$datas->id;?>" <?php if($this->session->user_id == $datas->id){echo "onclick='return false'";} ?>>
                        <button type="" data-toggle="tooltip" title="Delete User" data-placement="top" class="btn btn-default" <?php if($this->session->user_id == $datas->id){echo "disabled";} ?>><i class="fa fa-trash-o"></i>
                          </button></a>
                        <a href="<?= base_url('UpdateUsername/').$datas->id;?>" type="button" data-toggle="tooltip" data-placement="top" title="Update Username"  class="btn btn-default"><i class="fa fa-upload"></i> </a>
                        <a href="<?= base_url('UpdatePassword/').$datas->id;?>" type="button" data-toggle="tooltip" data-placement="top" title="Update Password"  class="btn btn-default"><i class="fa fa-upload"></i> </a>
                        <!-- <a <?php if($datas->role == "admin"){echo "onclick='return false' disabled";} ?> href="<?= base_url('UpdateStatus/').$datas->id_personalia;?>" type="button"  data-toggle="tooltip" data-placement="top" title="Update Status"  class="btn btn-default"><i class="fa fa-user"></i> </a> -->
                    </td>
                  </tr>
                  <?php $no++;} ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>