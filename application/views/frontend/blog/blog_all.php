<h4><small>RECENT POSTS</small></h4>
<hr>
<?php foreach ($recent_posts as $post) : ?>
<h2><?= $post->title ?></h2>
<h5><span class="glyphicon glyphicon-time"></span> <?= "Posted by User on ".date_format(date_create($post->created_at), 'l, j F Y g:i A'); ?> in<a class="btn btn-link btn-sm"><?=$post->name; ?></a></h5>
<br>
<div class="media">
  <div class="media-left">
    <img src="<?= ($post->image !== NULL) ? base_url('assets/images/post/').$post->image : base_url('assets/images/post/noimage.png'); ?>" class="media-object post_thumb">
  </div>
  <div class="media-body">
    <p><?= word_limiter($post->body, 50); ?></p>
    <a href="<?=base_url('berita/'.$post->slug);?>" class="btn btn-primary">Read More</a>
  </div>
</div>
<hr>
<?php endforeach; ?>

<?= $pagination; ?>