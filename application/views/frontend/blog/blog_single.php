<h2><?= $single_post->title ?></h2>
<h5><span class="glyphicon glyphicon-time"></span> <?= "Posted by User on ".date_format(date_create($single_post->created_at), 'l, j F Y g:i A'); ?> in<a class="btn btn-link btn-sm"><?=$single_post->name; ?></a></h5>
<br>
<div class="row">
  <img src="<?= ($single_post->image !== NULL) ? base_url('assets/images/post/').$single_post->image : base_url('assets/images/post/noimage.png'); ?>" class="media-object post_image" align="left">
  <p><?=$single_post->body; ?></p>
</div>
<!-- comment -->
<div class="row">
<div class="container comment-box col-sm-12">
  <h2>Add Comments</h2>
  <form>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control comenters" id="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control comment-text" id="pwd">
	  </div>
	  <div class="checkbox">
	    <label><input type="checkbox"> Remember me</label>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
  </form>
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