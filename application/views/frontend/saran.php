<!-- <div id="bgsaran1" class="bg-aqua"></div> -->
<!-- <div id="bgsaran2" class="bg-silver"></div> -->
<br><br>
<div class="form-aspirasi-container">
	<div class="section-title text-center text-title text-upper color-aqua">
		<p>form aspirasi</p>
	</div>
	<hr class="line line-aqua"><br>
	<!-- <div class="container"> -->
	<form class="form-horizontal form-aspirasi" enctype="multipart/form-data" method="post" action="<?=base_url('kirim-pesan');?>">
	  <?php 
  if (!empty($this->session->flashdata('err_msg'))) {
    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
  } elseif (!empty($this->session->flashdata('scss_msg'))) {
    echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
  } ?>
	  <div class="form-group">
	    <label class="control-label col-sm-3 col-md-2 color-aqua" for="name">Nama <span class="text-danger">*</span></label>
	    <div class="col-sm-8 col-md-9"> 
	      <input type="text" class="form-control" name="name" placeholder="Nama Kamu" value="<?=$this->session->flashdata('name');?>" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3 col-md-2 color-aqua" for="email">Email <span class="text-danger">*</span></label>
	    <div class="col-sm-8 col-md-9">
	      <input type="email" class="form-control" name="email" placeholder="Email Aktif Kamu" value="<?=$this->session->flashdata('email');?>" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3 col-md-2 color-aqua" for="subject">Topik <span class="text-danger">*</span></label>
	    <div class="col-sm-8 col-md-9">
	      <input type="text" class="form-control" name="subject" placeholder="Topik Bahasan" value="<?=$this->session->flashdata('subject');?>" required>
	    </div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-3 col-md-2 color-aqua" for="message">Aspirasi <span class="text-danger">*</span></label>
		<div class="col-sm-8 col-md-9">
		  <textarea class="textarea" rows="6" name="message" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required><?=$this->session->flashdata('message');?></textarea>
		</div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3 col-md-2 color-aqua" for="exampleInputFile">Upload File</label>
		<div class="col-sm-8 col-md-9">
	      <input class="form-control" type="file" name="attachment[]" id="exampleInputFile" multiple>
		</div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-3 col-md-offset-2 col-sm-10">
	      <button type="submit" name="fileSubmit" class="btn bg-aqua color-silver">Kirim</button>
	    </div>
	  </div>
	</form>
	<!-- </div> -->
</div>

<?php if (!empty($this->session->tempdata('msg'))) : ?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content ">
        <div class="modal-body text-center">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h4 align="center"><?=$this->session->tempdata('msg');?>.</h4>
        </div>
      </div>
      
    </div>
  </div>
<?php endif;?>