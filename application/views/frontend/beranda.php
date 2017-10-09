<div class="row hidden-sm hidden-xs">
    <nav class="col-sm-12" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="#desc" data-toggle="tooltip" data-placement="right" title="Deskripsi"><i class="fa fa-eercast" aria-hidden="true"></i></a></li>
        <li><a href="#recent" data-toggle="tooltip" data-placement="right" title="Berita"><i class="fa fa-eercast" aria-hidden="true"></i></a></li>
        <li><a href="#suggestion" data-toggle="tooltip" data-placement="right" title="Aspirasi"><i class="fa fa-eercast" aria-hidden="true"></i></a></li>
      </ul>
    </nav>
</div>

<div id="desc" class="bgimg1"></div>
<div class="caption">
		<img src="<?=base_url('assets/images/undip.png')?>" width="200"><br>
		<span class="border text-upper text-center"><p>majelis wali amanat<br>universitas diponegoro</p></span>
</div>
<div class="desc bg-aqua">
	<div class="container">
		<p class="text text-justify text-indent">
		Majelis Wali Amanat (MWA) merupakan organ tertinggi Universitas dari 3 organ Undip sesuai Pasal 27, PP No. 52 tahun 2015 yaitu MWA, Rektor dan Senat Akademik. MWA mewakili kepentingan Pemerintah, Masyarakat, dan Universitas itu sendiri, yang bertanggung-jawab kepada Menteri dan mengemban tugas mem-berdayakan Universitas dalam menjalankan misi untuk mewujudkan visinya.</p>
		<p class="text text-justify text-indent">MWA menetapkan, memberi pertimbangan pelaksanaan kebijakan umum, dan melaksanakan pengawasan di bidang nonakademik (Pasal 30, ayat 1g; Pasal 74, ayat 4 , PP No. 52 Tahun 2015).
		</p>
	</div>
</div>
<!-- <div class="no-content bg-silver"></div> -->
<!-- <div class="no-content bg-aqua"></div> -->
<div id="recent" class="bgimg2"></div>
<div class="section-title text-center text-title text-upper color-aqua">
	<p>berita terbaru</p>
</div>
<hr class="line line-aqua">
<div class="latest-news">
	<div class="container text-center">
	<div id="owl-demo" class="owl-carousel">
	<?php foreach ($recent_posts as $recent_post) : ?>
	<div class="item col-post">
		<div class="posthumb-container">
			<img class="posthumb" src="<?=base_url('assets/images/post/').$recent_post->image;?>">
		</div>
		<div class="title-container text-justify">
			<a href="<?=base_url('berita/'.$recent_post->slug);?>" class="btn btn-link no-margin" style="padding: 0 5px;"><?=$recent_post->title?></a>
		</div>
	</div>
	<?php endforeach; ?>
	</div>
	</div>
	<div class="customNavigation text-center">
	  <a class="btn bg-aqua color-silver prev"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
	  <a href="<?=base_url('berita/kategori/semua-berita')?>" class="btn btn-default text-upper" style="border: 1px solid #07575b;">semua berita</a>
	  <a class="btn bg-aqua color-silver next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
	</div>
	<br>
</div>
<div id="suggestion" class="bgimg3"></div>
<div class="suggestion text-center">
	<br>
	<a href="<?=base_url('kotak-saran')?>" class="btn btn-md btn-aspirasi text-upper"><i class="fa fa-paper-plane" aria-hidden="true"></i> sampaikan aspirasimu</a>
</div>
<div class="bgimg3"></div>