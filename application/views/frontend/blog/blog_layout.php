<br><br><br>
<div class="container">
  <div class="row content">
    <div class="col-sm-9 main-content">
    	<?php $this->load->view('frontend/blog/'.$view);  ?>
    </div>
    <div class="col-sm-3 sidenav">
      <h4><small>SEARCH SOMETHING</small></h4><hr>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
      <br>
      <h4><small>CATEGORIES</small></h4><hr>
      <ul class="category_list">
      	<?php foreach ($categories as $category) : ?>
	      	<li><a class="btn btn-link btn-md" href=""><?= $category->name; ?></a></li>
		<?php endforeach; ?>	
      </ul>
    </div>

  </div>
</div>