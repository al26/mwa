<div class="section-title text-title text-upper color-aqua">
	<p class="no-margin"><?=($this->uri->segment(3) == 'semua-berita') ? 'Semua Berita' : $this->uri->segment(3) ?></p>
</div>
<?php if (empty($recent_posts[0]->category)): ?>
	<h3>Tidak ada berita untuk kategori <?=$this->uri->segment(3);?></h3>
<?php else : ?>
<?php foreach ($recent_posts as $post) : ?>
<div class="post-container">
<h2 class="no-margin"><?= $post->title ?></h2>
<h5><span class="glyphicon glyphicon-time"></span> <?= "Posted by User on ".date_format(date_create($post->created_at), 'l, j F Y g:i A'); ?> in<?php $categories = explode(",",$post->category); 
  if (!empty($categories)) { 
    foreach ($categories as $c) : ?>
          <a class="btn btn-link btn-sm" href="<?=base_url('berita/kategori/').$c;?>"><?=$c; ?></a>
<?php  endforeach; } ?></h5>
<br>
<!-- <div class="media"> -->
  <!-- <div class="post-container"> -->
  	<?php $images = explode(",",$post->image); 
	  if (!empty($images)) { 
	     foreach ($images as $i) : ?>
	        <img src="<?=base_url('assets/images/post/').$i; ?>" class="post_image img-responsive" align="left">
	<?php   endforeach; } else { ?>
	        <img src="<?=base_url('assets/images/post/noimage.png'); ?>" class="post_image img-responsive" align="left">
	<?php }?>
    <br>
  <!-- </div>
  <div class="paragraph"> -->
    <p class="text-justify"><?= word_limiter($post->body, 50); ?></p>
    <a href="<?=base_url('berita/'.$post->slug);?>" class="btn bg-aqua color-silver">Read More</a>
  <!-- </div> -->
</div>
<hr>
<?php endforeach; ?>
<?php endif; ?>

<?= $pagination; ?>