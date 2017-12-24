<br>
<div class="container profil">
    <div class="heading-title text-center">
        <div class="section-title text-center text-title text-upper color-black">
			<p>mwa um <?=str_replace("-", "/", $this->uri->segment(3));?></p>
		</div>
		<hr class="line line-black">
    </div>

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
	    	<div class="bio">
	    	  <div class="col-sm-4 img-bio">
			    <img src="<?=base_url('assets/images/personalia/').$detail->foto?>" class="img-responsive"><br>
			  </div>
			  <div class="col-sm-8 no-padding">
				<div class="row list-group">
					<h3 class="list-group-item color-black no-margin"><?=$detail->nama?></h3>
	                <a class=" list-group-item color-black" href="mailto:<?=$detail->email?>"><i class="fa fa-envelope color-black contact-icon" aria-hidden="true"></i><?=$detail->email?></a>
	                <a class=" list-group-item color-black" href="tel:<?=$detail->telp?>"><i class="fa fa-phone color-black contact-icon" aria-hidden="true"></i> <?=$detail->telp?></a>
	                <address class=" list-group-item color-black text-justify no-margin"><i class="fa fa-home color-black contact-icon pull-left" aria-hidden="true"></i>  <?=$detail->alamat?></address>
	            </div>
	            <ul class="list-inline" style="margin-left: 0;">
					<li class="sns <?=(empty($detail->facebook) ? 'hidden' : '')?>"><a target="_blank" href="<?=$detail->facebook?>" data-toggle="tooltip" data-placement="bottom" title="Facebook"><span id="fb" class="fa fa-facebook fa-fw"></span></a></li>
					<li class="sns <?=(empty($detail->instagram) ? 'hidden' : '')?>"><a target="_blank" href="<?=$detail->instagram?>" data-toggle="tooltip" data-placement="bottom" title="Instagram"><span id="ig" class="fa fa-instagram fa-fw"></span></a></li>
					<li class="sns <?=(empty($detail->twitter) ? 'hidden' : '')?>"><a target="_blank" href="<?=$detail->twitter?>" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span id="twitter" class="fa fa-twitter fa-fw"></span></a></li>
                </ul>
			  </div>
			</div>
			<hr>
			<div class="col-sm-12">
	      	<?php if (!empty($detail->bio)) : ?>
		        <div class="color-black text-justify"><?=$detail->bio;?></div>
		    <?php endif; ?>
		    <hr>
		    <?php 
		    	$n = $this->post_model->getPostCountByAuthor($detail->nama);
		    	$x = $this->post_model->getPostByAuthor($detail->nama, NULL, $n); 
		    	if (!empty($x)) {
		    ?>
			    <div class="karya">
				    <div class="row list-group">
						<h3 class="list-group-item color-black no-margin">Catatan</h3>
						<?php foreach ($x as $v) { ?>
							<a class=" list-group-item color-black" href="<?=current_url().'/read/'.url_title($v->title)?>"><i class="fa fa-book color-black" aria-hidden="true"></i> <?=$v->title?></a>	
						<?php } ?>
			        </div>
		        </div>
		    <?php } ?>
	        </div>
	    </div>
	  </div>


    


</div>
<br><br>