<!DOCTYPE html>
<html>
<head>
  <title><?=(!empty($page->title)) ? ucwords($page->title) : "";?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?=base_url()?>/assets/images/undip.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/front.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body id="<?=(isset($body)) ? strtolower($body) : '';?>" data-spy="scroll" data-target=".navbar" data-offset="0">
<!-- <header class="header bg-aqua">
  <div class="container">
    <a class="" href="<?=base_url()?>">
      <img class="img-responsive" src="<?=base_url('assets/images/logo.png');?>" width="400">
    </a>
  </div>
</header> -->
<nav class="navbar bg-aqua navbar-fixed-top" id="global-nav">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="<?=base_url()?>">
        	<img class="img-responsive" src="<?=base_url('assets/images/logo.png');?>">
        </a>
    </div>
    <div class="hidden-sm">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="text-upper"><a href="<?=base_url()?>">beranda</a></li>
          <li class="dropdown text-upper">
      			<a href="#" class="dropdown-toggle" data-toggle="dropdown">profil <b class="caret"></b></a>
      			<ul class="dropdown-menu">
      			  	<li class="text-upper"><a href="<?=base_url('profil/penjelasan-umum')?>">penjelasan umum</a></li>
      			    <li class="text-upper"><a href="<?=base_url('profil/personalia')?>">personalia</a></li>
      			    <li class="text-upper"><a href="<?=base_url('profil/komite-audit')?>">komite audit</a></li>
      			    <li class="text-upper"><a href="<?= !empty($profil->tahun) ? base_url('profil/mwa-um/').str_replace("/", "-", $profil->tahun) : '#';?>">mwa unsur mahasiswa</a></li>
      			</ul>
    		  </li>
          <li class="text-upper"><a href="<?=base_url('sk-peraturan')?>">sk &amp; peraturan</a></li>
          <li class="text-upper"><a href="<?=base_url('program-kerja')?>">program kerja</a></li>
          <li class="text-upper"><a href="<?=base_url('berita/kategori/semua-berita')?>">berita</a></li>
          <li class="text-upper"><a href="<?=base_url('kotak-saran')?>">form aspirasi</a></li>
        </ul>
      </div>
    </div>

    <div class="visible-sm">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="text-upper"><a href="">beranda</a></li>
          <li class="dropdown text-upper">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">profil <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="text-upper"><a href="<?=base_url('profil/penjelasan-umum')?>">penjelasan umum</a></li>
                <li class="text-upper"><a href="<?=base_url('profil/personalia')?>">personalia</a></li>
                <li class="text-upper"><a href="<?=base_url('profil/komite-audit')?>">komite audit</a></li>
                <li class="text-upper"><a href="<?= !empty($profil->tahun) ?  base_url('profil/mwa-um/').str_replace("/", "-", $profil->tahun) : '';?>">mwa unsur mahasiswa</a></li>
            </ul>
          </li>
          <li class="text-upper"><a href="<?=base_url('berita/kategori/semua-berita')?>">berita</a></li>
          <li class="dropdown text-upper">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">lainnya <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="text-upper"><a href="<?=base_url('sk-peraturan')?>">sk &amp; peraturan</a></li>
                <li class="text-upper"><a href="<?=base_url('program-kerja')?>">program kerja</a></li>
                <li class="text-upper"><a href="<?=base_url('kotak-saran')?>">form aspirasi</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div class="bg-aqua" style="height: 150px;"></div>