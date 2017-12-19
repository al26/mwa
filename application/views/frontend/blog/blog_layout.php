<br><br>
<div class="container">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <div class="section-title text-title text-upper color-aqua">
        <p class="no-margin">cari sesuatu</p>
      </div>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Judul, Kategori ...">
        <span class="input-group-btn">
          <button class="btn bg-aqua color-silver" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
      <div class="section-title text-title text-upper color-aqua hidden-xs">
        <p class="no-margin">kategori</p>
      </div>
      <ul class="category_list hidden-xs">
        <li><a class="btn btn-link btn-md color-aqua <?=($this->uri->segment(3) === 'semua-berita') ? 'active' : '';?>" href="<?=base_url('berita/kategori/semua-berita');?>">Semua Berita</a></li>
        <li><a class="btn btn-link btn-md color-aqua <?=($this->uri->segment(3) === 'tanpa-kategori') ? 'active' : '';?>" href="<?=base_url('berita/kategori/tanpa-kategori');?>">Tanpa Kategori</a></li>
      	<?php foreach ($categories as $category) : ?>
	      	<li><a class="btn btn-link btn-md color-aqua <?=($this->uri->segment(3) === $category->name) ? 'active' : '';?>" href="<?=base_url('berita/kategori/').$category->name;?>"><?= $category->name; ?></a></li>
		    <?php endforeach; ?>	
      </ul>
    </div>
    <div class="col-sm-9 main-content">
      <?php $this->load->view('frontend/blog/'.$view);  ?>
    </div>
  </div>
</div>