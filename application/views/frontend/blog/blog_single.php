<h2><?= ucwords($single_post->title) ?></h2>
<h5><span class="glyphicon glyphicon-time"></span> <?= "Dipublikasikan oleh ".ucwords($single_post->nama)." pada ".date_format(date_create($single_post->created_at), 'j/m/Y'); ?> | kategori :<?php $categories = explode(",",$single_post->category); 
  if (!empty($categories)) { 
    foreach ($categories as $c) : ?>
          <a class="btn btn-link btn-sm" href="<?=base_url('berita/kategori/').$c;?>"><?=$c; ?></a>
<?php  endforeach; } ?></h5>
<br>
<div class="text text-justify">
  <!--   -->
  <?php
  $images = explode(",",$single_post->image); 
  if (!empty($images)) { 
     foreach ($images as $i) { ?>
        <img src="<?=base_url('assets/images/post/').$i; ?>" class="post_image">
        <?php } } else { ?>
        <img src="<?=base_url('assets/images/post/noimage.png'); ?>" class="post_image">
<?php }?>
  <br>
  <p><?=$single_post->body; ?></p>
</div>
<hr>
<!-- comment -->
<div class="row">
<div class="container comment-box col-sm-12">
   <?php 
  if (!empty($this->session->flashdata('err_msg'))) {
    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
  } elseif (!empty($this->session->flashdata('scss_msg'))) {
    echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
  } ?>
  <h2>Add Comments</h2>
  <?=form_open('new_comment/'.$single_post->slug.'/'.$single_post->hash); ?>
  <input type="hidden" name="id_author" value="<?= $single_post->author; ?>">
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control comenters" name="email" id="email" required>
	  </div>
    <div class="form-group">
      <label for="email">Name :</label>
      <input type="text" class="form-control comenters" name="nama" required>
    </div>
	  <div class="form-group">
	    <label for="pwd">Comment :</label>
	    <textarea name="comment" class="form-control comment-text" required style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
  <?= form_close(); ?>
  <hr>
  <?php $hash = $single_post->hash;
      $comment1 = $this->post_model->getCommentPosh($hash);
   ?>
  <?php if(isset($comment1)){?>
      <?php foreach ($comment1 as $comment) {?>
  <div class="media">
  <div class="media-left">
    
      <img src="<?= base_url('assets/images/post/ava.jpg');?>" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?=$comment['nama']?> <small><i>Posted on <?= date('Y-m-d',strtotime($comment['time_publish']))?></i></small></h4>
      <p><?=$comment['comment']?></p>
          
      <!-- Nested media object -->
        <?php $hash2 = $comment['hash']?>
        <?php $reply = $this->post_model->getReplyComment($hash2)?>
        <?php if(!empty($reply)){ 
          foreach($reply as $datas) {?>
        <div class="media">
          <div class="media-left">
            <img src="<?= base_url('assets/images/post/ava.jpg');?>" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Admin<small><i> Posted on <?=date('Y-m-d',strtotime($datas['timestamp']))?></i></small></h4>
            <p><?=$datas['reply'] ?></p>
          </div>
        </div>
        <?php }} ?>
      
    </div>
  </div>
   <?php }} ?>
</div>
</div>
<br>