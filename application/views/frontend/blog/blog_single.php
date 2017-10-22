<h2><?= $single_post->title ?></h2>
<h5><span class="glyphicon glyphicon-time"></span> <?= "Posted by User on ".date_format(date_create($single_post->created_at), 'l, j F Y g:i A'); ?> in <?php $categories = explode(",",$single_post->category); 
  if (!empty($categories)) { 
    foreach ($categories as $c) : ?>
          <a class="btn btn-link btn-sm" href="<?=base_url('berita/kategori/').$c;?>"><?=$c; ?></a>
<?php  endforeach; } ?></h5>
<br>
<div class="container">
  <?php $images = explode(",",$single_post->image); 
  if (!empty($images)) { 
     foreach ($images as $i) : ?>
        <img src="<?=base_url('assets/images/post/').$i; ?>" class="post_image" align="left">
<?php   endforeach; } else { ?>
        <img src="<?=base_url('assets/images/post/noimage.png'); ?>" class="post_image" align="left">
<?php }?>
  <br>
  <p class="container text-justify"><?=$single_post->body; ?></p>
</div>
<!-- comment -->
<div class="row">
<div class="container comment-box col-sm-12">
   <?php 
    if (!empty($this->session->flashdata('err_msg'))) {
      echo '<div class="alert alert-danger alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
    } elseif (!empty($this->session->flashdata('scss_msg'))) {
      echo '<div class="alert alert-success alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
    } 
    ?>
  <h2>Add Comments</h2>
  <?=form_open('new_comment/'.$single_post->slug.'/'.$single_post->hash); ?>
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
  <div class="media">
    <div class="media-left">
      <img src="<?= base_url('assets/images/post/noimage.png');?>" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="<?= base_url('assets/images/post/noimage.png');?>" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">John Doe <small><i>Posted on February 20, 2016</i></small></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <img src="<?= base_url('assets/images/post/noimage.png');?>" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h4 class="media-heading">John Doe <small><i>Posted on February 21, 2016</i></small></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          
        </div>
        
        <!-- Nested media object -->
        <div class="media">
          <div class="media-left">
            <img src="<?= base_url('assets/images/post/noimage.png');?>" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Jane Doe <small><i>Posted on February 20, 2016</i></small></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        
      </div>
    </div>
    
    <!-- Nested media object -->    
    <div class="media">
      <div class="media-left">
        <img src="<?= base_url('assets/images/post/noimage.png');?>" class="media-object" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading">Jane Doe <small><i>Posted on February 19, 2016</i></small></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>

  </div>
</div>
</div>
<br>