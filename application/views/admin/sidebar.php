
  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">MWA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard</b> Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets'); ?>/images/undip.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin MWA Undip</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets'); ?>/images/undip.png" class="img-circle" alt="User Image">
                <p>Admin MWA Undip</p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/')?>/images/undip.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('post'); ?>"><i class="fa fa-circle-o"></i>View All Post</a></li>
            <li><a href="<?php echo base_url('new-post'); ?>"><i class="fa fa-circle-o"></i>Add New Post</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tags"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('viewCategory') ?>"><i class="fa fa-circle-o"></i> View All Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Message</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('message');?>"><i class="fa fa-circle-o"></i> View All Message</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">

            <i class="fa fa-file"></i> <span>Pengaturan Halaman</span>

            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">          
            <li><a href="<?=base_url('page/edit/1');?>"><i class="fa fa-circle-o"></i> Beranda</a></li>
            <li class="treeview menu-open">
                <a href=""><i class="fa fa-circle-o"></i> Profil
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu" style="display: block;">
                  <li><a href="<?=base_url('page/edit/2');?>"><i class="fa fa-circle-o"></i> Penjelasan Umum</a></li>
                  <li><a href="<?=base_url('page/edit/3');?>"><i class="fa fa-circle-o"></i> Personalia</a></li>
                  <li><a href="<?=base_url('page/edit/4');?>"><i class="fa fa-circle-o"></i> Komite Audit</a></li>
                  <li><a href="<?=base_url('page/edit/5');?>"><i class="fa fa-circle-o"></i> MWA UM</a></li>
                </ul>
            </li>
            <li><a href="<?=base_url('page/edit/6');?>"><i class="fa fa-circle-o"></i> SK &amp; Peraturan</a></li>
            <li><a href="<?=base_url('page/edit/7');?>"><i class="fa fa-circle-o"></i> Program Kerja</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
              <i class="fa fa-comments"></i> <span>Comment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">          
           <li><a href="<?php echo base_url('comment');?>"><i class="fa fa-circle-o"></i> View All Comment</a></li>  
          </ul>
        </li>
           
           
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
