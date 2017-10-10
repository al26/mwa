<div class="section-title text-title text-upper color-aqua">
	<p class="no-margin">semua berita</p>
</div>
<?php foreach ($recent_posts as $post) : ?>
<div class="post-container">
<h2 class="no-margin"><?= $post->title ?></h2>
<h5><span class="glyphicon glyphicon-time"></span> <?= "Posted by User on ".date_format(date_create($post->created_at), 'l, j F Y g:i A'); ?> in<a class="btn btn-link btn-sm" href="<?=base_url('berita/kategori/').$post->name;?>"><?=$post->name; ?></a></h5>
<br>
<!-- <div class="media"> -->
  <!-- <div class="post-container"> -->
    <img src="<?= ($post->image !== NULL) ? base_url('assets/images/post/').$post->image : base_url('assets/images/post/noimage.png'); ?>" class="media-object post_thumb"><br>
  <!-- </div>
  <div class="paragraph"> -->
    <p class="text-justify"><?= word_limiter($post->body, 50); ?></p>
    <a href="<?=base_url('berita/'.$post->slug);?>" class="btn bg-aqua color-silver">Read More</a>
  <!-- </div> -->
</div>
<hr>
<?php endforeach; ?>

<?= $pagination; ?>