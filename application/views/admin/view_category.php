<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Category</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?=base_url()?>/assets/images/undip.png" type="image/png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view($sidebar); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="col-xs-12">
      <?php 
      if (!empty($this->session->flashdata('err_msg'))) {
      echo '<div class=" alert alert-danger alert-dismissable" style="width:100%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
      } elseif (!empty($this->session->flashdata('scss_msg'))) {
      echo '<div class=" alert alert-success alert-dismissable" style="width:100%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
      } 
      ?>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Kategori</h3>
              <span data-toggle="tooltip" title="Tambah Kategori" data-placement="left" class="pull-right"><a role="button" href="#tambahsk" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus bigicon"></i></a></span>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Isi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0; ?>
                <?php foreach ($data as $k => $post ) {?>
                <?php $i++; //die(print_r($post)); ?>

                <tr>
                  <td><?=$i?></td>
                  <td><?=word_limiter($post->name,5);?></td>
                  <td>
                    <a href="<?=base_url('DeleteKategori/').$post->id; ?>" class="btn btn-danger" data-toggle="modal" title="Hapus Post" role="button"><i class="fa fa-trash bigicon"></i></a>
                      &nbsp;&nbsp;&nbsp;
                    <a href="#update<?=$post->id?>" class="btn btn-primary" data-toggle="modal" title="Update Post" role="button"><i class="fa fa-upload bigicon"></i></a>
                </tr>

                <!-- Modal update-->
                <div class="modal fade" id="update<?=$post->id?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Data Kategori</h4>
                      </div>
                      <div class="modal-body col-xs-12">
                        <form class="form-horizontal" method="post" action="<?=base_url('UpdateKategori/').$post->id;?>">
                        <div class="form-group" style="margin: 0">
                          <label class="control-label">Kategori <span class="text-danger">*</span></label>
                          <div class="">
                            <input type="text" class="form-control" name="nama" value="<?=$post->name; ?>" placeholder="Nama Ketegori" required>
                          </div>
                        </div>
                        <br>
                        <div class="form-group" style="margin: 0"> 
                          <div class="pull-right">
                            <button type="submit" name="fileSubmit" class="btn btn-primary">Update Kategori</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                    </div>
                  </div>
                </div>

                
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Isi</th>
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
    <!-- /.content -->  
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Modal -->
        <div class="modal fade" id="tambahsk" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Kategori</h4>
              </div>
              <div class="modal-body col-xs-12">
                <form class="form-horizontal" method="post" action="<?=base_url('addCategory');?>">
                <div class="form-group" style="margin: 0">
                  <label class="control-label">Kategori <span class="text-danger">*</span></label>
                  <div class="">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Ketegori" required>
                  </div>
                </div>
                <br>
                <div class="form-group" style="margin: 0"> 
                  <div class="pull-right">
                    <button type="submit" name="fileSubmit" class="btn btn-primary">Tambah Kategori</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets'); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets'); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets'); ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
