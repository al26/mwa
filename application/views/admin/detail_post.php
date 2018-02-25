<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detail Post</title>
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
  <link rel="stylesheet" href="<?php echo base_url('assets/')?>/bower_components/select2/dist/css/select2.min.css">
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
  <section class="content-header">
      <h1>Buat Artikel Baru</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

  <section class="content">
  <?php 
  if (!empty($this->session->flashdata('err_msg'))) {
    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
  } elseif (!empty($this->session->flashdata('scss_msg'))) {
    echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
  } 
  ?>
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('create-post');?>">
  <div class="form-group">
    <label class="control-label col-sm-3 col-md-2 color-aqua" for="title">Title <span class="text-danger">*</span></label>
    <div class="col-sm-8 col-md-9"> 
      <input type="text" class="form-control" name="title" placeholder="Post Title" value="<?=$data_post->title?>" readonly>
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-3 col-md-2 color-aqua" for="body">Post Body <span class="text-danger">*</span></label>
  <div class="col-sm-8 col-md-9">
    <textarea id="editor1" class="form-control" rows="10" cols="80" name="body" readonly><?=$data_post->body?></textarea>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-3 col-md-2 color-aqua">Category</label>
  <?php $attch = explode(",",$data_post->category);?>
  <div class="col-sm-8 col-md-9">
    <?php foreach($attch as $c): ?>
      <?php $result = $this->category_model->getWhereCategory($c); ?>
          <label><input type="checkbox" name="r1" class="minimal" checked disabled>&nbsp;<?=$result->name;?></label>
    <?php endforeach; ?>
    </div>
  </div>
 <div class="form-group">
  <label class="control-label col-sm-3 col-md-2 color-aqua" for="title">Files <span class="text-danger">*</span></label>
  <ul class="mailbox-attachments clearfix">
    <?php $attch = explode(",",$data_post->image);?>

    <?php if (!empty($attch)) { ?>
      <div class="col-sm-8 col-md-9">
      <?php foreach ($attch as $i){
          $allowed =  array('gif','png' ,'jpg');
          $ext = pathinfo($i, PATHINFO_EXTENSION);
          if(in_array($ext,$allowed) ){ ?>
            <img src="<?=base_url('assets/images/post/').$i; ?>" class="post_image" align="left">
            <?php }
             else { ?>
            <img src="<?=base_url('assets/images/post/noimage.png'); ?>" class="post_image" align="left">
          <?php }}
             
    }else{?>
     </div>
     <a href="#" class="mailbox-attachment-name">App Description.docx</a>
    <span class="mailbox-attachment-size">1,245 KB
     <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
    </span>
   <?php } ?>
</div>
</form>
</section>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
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
<!-- CK Editor -->
<script src="<?php echo base_url('assets');?>/bower_components/ckeditor/ckeditor.js"></script>
<!-- page script -->
<script>
  $(function () {
    CKEDITOR.replace('editor1');
    $('.select2').select2();

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
