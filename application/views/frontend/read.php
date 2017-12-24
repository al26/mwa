<br>
<div class="container profil">
    <div class="row content">
	    <div class="col-sm-3 sidenav hidden-xs">
	      <div class="section-title text-title text-upper color-black hidden-xs">
	        <p class="no-margin">Jejak MWA UM</p>
	      </div>
	      <hr class="line-long line-black">
	      <ul class="category_list">
	      	<?php foreach ($mwaum as $mwa) : ?>
		      	<li><a class="btn btn-link btn-md color-black <?=($this->uri->segment(3) === str_replace("/", "-", $mwa->tahun)) ? 'active' : '';?>" href="<?=base_url('profil/mwa-um/').str_replace("/", "-", $mwa->tahun)?>"><?= "MWA UM ".$mwa->tahun; ?></a></li>
		    <?php endforeach; ?> 	
	      </ul>
	    </div>
	    <?php 
	    	$detail = $this->personalia_model->getPersonaliaUMbyYear(str_replace("-", "/", $this->uri->segment(3)));
	    	// die(var_dump($detail));
	    ?>
	    <div class="col-sm-9 main-content">
	    	<div class="section-title text-title text-upper color-black">
	          <p class="no-margin"><?= ucwords($single_post->title) ?></p>
	        </div>
	        <hr class="line-long line-black">
	    	<h5 class="color-black"><span class="glyphicon glyphicon-time"></span> <?= "Dipublikasikan oleh ".ucwords($single_post->nama)." pada ".date_format(date_create($single_post->created_at), 'j/m/Y'); ?><?php $categories = explode(",",$single_post->category); 
			  if (!empty($categories)) { 
			  	echo '| kategori : ';
			    foreach ($categories as $c) : ?>
			          <a class="btn btn-link btn-sm" href="<?=base_url('berita/kategori/').$c;?>"><?=$c; ?></a>
			<?php  endforeach; } ?></h5>
			<br>
			<div class="text-justify color-black">
			  <?php $images = explode(",",$single_post->image); 
			  if (!empty($images)) { 
			     foreach ($images as $i) : ?>
			        <img src="<?=base_url('assets/images/post/').$i; ?>" class="post_image" align="left">
			<?php   endforeach; } else { ?>
			        <img src="<?=base_url('assets/images/post/noimage.png'); ?>" class="post_image" align="left">
			<?php }?>
			  <br>
			  <p><?=$single_post->body; ?></p>
			</div>
			<hr>
			<!-- comment -->
			<div class="row color-black">
			<div class="container comment-box col-sm-12">
			   <?php 
			  if (!empty($this->session->flashdata('err_msg'))) {
			    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
			  } elseif (!empty($this->session->flashdata('scss_msg'))) {
			    echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
			  } ?>
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
	    </div>
	  </div>


    


</div>
<br><br>