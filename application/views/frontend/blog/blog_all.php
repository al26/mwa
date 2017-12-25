<div class="section-title text-title text-upper color-black">
	<p class="no-margin"><?=($this->uri->segment(3) == 'semua-berita') ? $this->uri->segment(2).' : Semua Berita' : $this->uri->segment(2).' : '.str_replace("-"," ",$this->uri->segment(3)) ?></p>
</div>
<hr class="line-long line-black">
<?php if (empty($recent_posts[0]->category)): ?>
	<h3>Tidak ada berita untuk kategori/kode pencarian <?=ucwords(str_replace("-"," ",$this->uri->segment(3)));?></h3>
<?php else : ?>
<?php foreach ($recent_posts as $post) : ?>
  <div class="post-container">
    <h2 class="no-margin"><?= ucwords($post->title) ?></h2>
    <h5><span class="glyphicon glyphicon-time"></span> <?= "Dipublikasikan oleh ".ucwords($post->nama)." pada ".date_format(date_create($post->created_at), 'j/m/Y'); ?><?php $categories = explode(",",$post->category); 
    if (!empty($categories)) { 
      echo "| kategori : ";
      foreach ($categories as $c) : ?>
            <a class="btn btn-link btn-sm" href="<?=base_url('berita/kategori/').url_title($c, 'dash', true);?>"><?=ucwords($c); ?></a>
  <?php  endforeach; } ?></h5>
    <br>
    <div class="text text-justify">
      <?php $images = explode(",",$post->image); 
      if (!empty($images)) { 
         foreach ($images as $i) : ?>
            <img src="<?=base_url('assets/images/post/').$i; ?>" class="post_thumb">
    <?php   endforeach; } else { ?>
            <img src="<?=base_url('assets/images/post/noimage.png'); ?>" class="post_thumb">
    <?php }?>
      <br>
      <p><?= word_limiter($post->body, 50); ?></p>
      <a href="<?=base_url('berita/'.$post->slug);?>" class="btn btn-border-aqua">Read More</a>
    </div>
  </div>
  <hr>
<?php endforeach; ?>
<?php endif; ?>

<?= $pagination; ?>