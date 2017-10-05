<div class="row">
    <nav class="col-sm-12" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#desc" data-toggle="tooltip" data-placement="right" title="Deskripsi"><i class="fa fa-eercast" aria-hidden="true"></i></a></li>
        <li><a href="#recent" data-toggle="tooltip" data-placement="right" title="Berita"><i class="fa fa-eercast" aria-hidden="true"></i></a></li>
        <li><a href="#section3"><i class="fa fa-eercast" aria-hidden="true"></i></a></li>
      </ul>
    </nav>
</div>

<div id="desc" class="bgimg1"></div>
<div class="caption">
		<img src="<?=base_url('assets/images/undip.png')?>" width="200"><br>
		<span class="border upper text-center"><p>majelis wali amanat<br>universitas diponegoro</p></span>
</div>
<div class="desc">
	<div class="container">
		<p class="text text-justify text-indent">
		Majelis Wali Amanat (MWA) merupakan organ tertinggi Universitas dari 3 organ Undip sesuai Pasal 27, PP No. 52 tahun 2015 yaitu MWA, Rektor dan Senat Akademik. MWA mewakili kepentingan Pemerintah, Masyarakat, dan Universitas itu sendiri, yang bertanggung-jawab kepada Menteri dan mengemban tugas mem-berdayakan Universitas dalam menjalankan misi untuk mewujudkan visinya.</p>
		<p class="text text-justify text-indent">MWA menetapkan, memberi pertimbangan pelaksanaan kebijakan umum, dan melaksanakan pengawasan di bidang nonakademik (Pasal 30, ayat 1g; Pasal 74, ayat 4 , PP No. 52 Tahun 2015).
		</p>
	</div>
</div>
<!-- <div class="no-content bg-silver"></div> -->
<!-- <div class="no-content bg-aqua"></div> -->
<div class="bgimg2"></div>
<div id="recent" class="section-title text-center text-title upper">
	<p>berita terbaru</p>
</div>
<hr class="line">
<div class="latest-news">
	<div class="container text-center">
	<div id="owl-demo" class="owl-carousel">
	<?php for ($i = 0; $i < 10; $i++) : ?>
	<div class="item col-post">
		<div class="row thumb-container">
			<div class="col-sm-12">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/kabem.png" name="">
			</div>
		</div>
		<div class="row title-container text-justify">
			<div class="col-sm-12">
				<p>Judul Post</p>
			</div>
		</div>
	</div>
	<?php endfor; ?>
	</div>
	</div>
	<div class="customNavigation">
	  <a class="btn prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
	  <a href="" class="btn btn-default upper" style="border: 1px solid #07575b;">semua post</a>
	  <a class="btn next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	</div>
	<br>
</div>
<div class="bgimg1"></div>
<div class="suggestion">
	
</div>