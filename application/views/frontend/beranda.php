<!-- <div class="row hidden-sm hidden-xs">
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
<?php if (!empty($page->description)) : ?>
<div class="desc bg-aqua">
	<div class="container text text-justify">
		<?=$page->description;?>
	</div>
</div>
<?php endif; ?>
<div id="recent" class="bgimg2"></div>
<div class="section-title text-center text-title text-upper color-aqua">
	<p>berita terbaru</p>
</div>
<hr class="line line-aqua">
<div class="latest-news">
	<?php if (!empty($recent_posts)) : ?>
		<div class="container text-center">
		<div id="owl-demo" class="owl-carousel">
		<?php foreach ($recent_posts as $recent_post) : ?>
		<?php $thumb = explode(",",$recent_post->image); ?>
		<div class="item col-post">
			<div class="posthumb-container">
				<img class="posthumb" src="<?= (!empty($recent_post->image)) ? base_url('assets/images/post/').$thumb[0] : base_url('assets/images/post/noimage.png') ;?>">
			</div>
			<div class="title-container">
				<a href="<?=base_url('berita/'.$recent_post->slug);?>" class="btn btn-link no-margin" style="padding: 0 5px; text-align: left;"><?=(strlen($recent_post->title) > 70) ? substr(ucwords(wordwrap($recent_post->title,36, "<br />\n")),0,70)."..." : ucwords(wordwrap($recent_post->title,36, "<br />\n")) ?></a>
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
	<?php else : ?>
		<div class="section-title text-center text-title text-upper color-aqua">
			<p>Belum ada berita</p>
		</div>
	<?php endif; ?>
	<br>
</div>
<div id="suggestion" class="bgimg3"></div>
<div class="suggestion text-center">
	<br>
	<a href="<?=base_url('kotak-saran')?>" class="btn btn-md btn-aspirasi text-upper"><i class="fa fa-paper-plane" aria-hidden="true"></i> sampaikan aspirasimu</a>
</div>
<div class="bgimg3"></div> -->

<div id="berita" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
	  <!-- img dari db -->
	  <?php $i=0; foreach ($recent_posts as $recent_post) { $thumb = explode(",",$recent_post->image); ?>
	    <div class="item <?php if($i==0) {echo "active";} ?>">
	        <img class="carousel-img" src="<?= (!empty($recent_post->image)) ? base_url('assets/images/post/').$thumb[0] : base_url('assets/images/post/noimage.png') ;?>" alt="<?=$recent_post->title;?>">
	        <div class="carousel-caption">
	          <h3><?=$recent_post->title;?></h3>
	          <a class="btn btn-border-aqua" href="<?=base_url('berita/'.$recent_post->slug);?>">Read More</a>
	        </div>
	      <!-- </a> -->
	    </div>
	  <?php $i++;} ?>
	</div>

	<!-- carousel indicators -->
	<ol class="carousel-indicators">
		<?php $i=0; foreach ($recent_posts as $recent_post) { ?>
	  	<li data-target="#berita" data-slide-to="<?php echo $i?>" class="active"></li>
		<?php $i++;} ?>
	</ol>

	<!-- Left and right controls -->
	<a class="carousel-control left" href="#berita" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control right" href="#berita" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="bgimg1">

<div class="container-fluid no-padding">
	<div class="desc col-sm-6 bg-aqua-transparent text text-justify color-silver">
		<div class="section-title text-center text-title text-upper color-silver">
			<p>#kenalan</p>
		</div>
		<hr class="line line-silver">
		<?php if (!empty($page->description)) : ?>
			<?=$page->description;?>
		<?php endif; ?>
		<br>
		<div class="text-right">
		<a href="<?=base_url('profil/penjelasan-umum')?>" class="btn btn-md btn-border-silver text-upper" style="margin-right: 0"><i class="fa fa-external-link" aria-hidden="true"></i> selengkapnya</a>
		</div>
	</div>
<!-- </div> -->
<!-- <div class="container-fluid no-padding"> -->
	<div class="col-sm-6 desc bg-silver-transparent text text-justify color-aqua">
		<div class="section-title text-center text-title text-upper color-aqua">
			<p>#ayosampaikan</p>
		</div>
		<hr class="line line-aqua">
		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		<br>
		<div class="text-right">
		<a href="<?=base_url('kotak-saran')?>" class="btn btn-md btn-border-aqua text-upper"><i class="fa fa-paper-plane" aria-hidden="true"></i> sampaikan sekarang</a>
		</div>
	</div>
</div>

</div>