<br>
<div class="container profil">
    <div class="heading-title text-center">
        <div class="section-title text-center text-title text-upper color-aqua">
			<p><?=$page->title;?></p>
		</div>
		<hr class="line line-aqua">
    </div>

    <div class="row content">
	    <div class="col-sm-3 sidenav">
	      <div class="section-title text-title text-upper color-aqua hidden-xs">
	        <p class="no-margin">arsip</p>
	      </div>
	      <hr class="line-long line-aqua">
	      <ul class="category_list hidden-xs">
	        <!-- <li><a class="btn btn-link btn-md color-aqua <?=($this->uri->segment(3) === 'semua-berita') ? 'active' : '';?>" href="<?=base_url('berita/kategori/semua-berita');?>">Semua Berita</a></li>
	      	<?php foreach ($categories as $category) : ?>
		      	<li><a class="btn btn-link btn-md color-aqua <?=($this->uri->segment(3) === url_title($category->name,'dash',true)) ? 'active' : '';?>" href="<?=base_url('berita/kategori/').url_title($category->name,'dash',true)?>"><?= ucwords($category->name); ?></a></li>
			    <?php endforeach; ?> -->	
			    <li>akakaka</li>
			    <li>kakakaak</li>
	      </ul>
	    </div>
	    <div class="col-sm-9 main-content">
	    	<div class="media">
			  <div class="media-body">
			    <table class="">
				<thead>
					<tr>
					  <th colspan="2"><p class="text-title color-aqua no-margin">Nama</p></th>
					</tr>
				</thead>
					<tbody>
					<tr>
					  <td><i class="fa fa-envelope color-aqua contact-icon" aria-hidden="true"></i></td>
					  <td><p class="text-left no-margin"><a class="color-aqua btn btn-link btn-md" href="mailto:mwa@live.undip.ac.id">email</a></p></td>
					</tr>
					<tr>
					  <td><i class="fa fa-phone color-aqua contact-icon" aria-hidden="true"></i></td>
					  <td><p class="text-left no-margin"><a class="color-aqua btn btn-link btn-md" href="tel:+622476922632">telp</a></p></td>
					</tr>
					<tr>
					  <td><i class="fa fa-home color-aqua contact-icon" aria-hidden="true"></i></td>
					  <td><address class="color-aqua text-left no-margin">alamat</address></td>
					</tr>
					</tbody>
				</table>
				<div class="row list-group list-group-horizontal">
	                <a href="#" class="list-group-item active">Item One</a>
	                <a href="#" class="list-group-item">Item Two</a>
	                <a href="#" class="list-group-item">Item Three</a>
	                <a href="#" class="list-group-item">Item Four</a>
	            </div>
			  </div>
			  <div class="media-right">
			    <img src="<?=base_url('assets/images/personalia/noimage.jpg')?>" class="media-object" width="300">
			  </div>
			</div>
			<hr>

	      	<?php if (!empty($page->description)) : ?>
		        <div class="p-top-30 color-aqua text-justify"><?=$page->description;?></div>
		    <?php endif; ?>
	    </div>
	  </div>


    


</div>
<br><br>