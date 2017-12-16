<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Editors</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets');?>/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets');?>/bower_components/Ionicons/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/skins/_all-skins.min.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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

  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <!-- <textarea name="editor1" rows="10" cols="80">
                                            This is my textarea to be replaced with CKEditor.
                    </textarea> -->
              </form>
            </div>
          </div>
          <!-- /.box -->

          <div class="box">
          
            <!-- /.box-header -->
           <!--  <div class="box-body pad"> -->
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            <!-- </div> -->
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets');?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php echo base_url('assets');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="<?php echo base_url('assets');?>/bower_components/fastclick/lib/fastclick.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url('assets');?>/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url('assets');?>/dist/js/demo.js"></script> -->
<!-- CK Editor -->
<script src="<?php echo base_url('assets');?>/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
