<br>
<div class="container">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-black">
				<p><?=$page->title;?></p>
			</div>
			<hr class="line line-black">
            <?php if (!empty($page->description)) : ?>
            <div class="p-top-30 color-black text text-justify"><?=$page->description;?></div>
            <?php endif; ?>
        </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach($proker as $p) : ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?=$p->id;?>">
                <h4 class="panel-title color-black">
                    <a role="button" data-toggle="collapse" data-parent="#accordion<?=$p->id;?>" href="#collapse<?=$p->id;?>" aria-expanded="true" aria-controls="collapse<?=$p->id;?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        <?=$p->judul_program;?>
                    </a>
                </h4>
            </div>
            <div id="collapse<?=$p->id;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$p->id;?>">
                <div class="panel-body table-responsive">
                	<?=$p->jenis_kegiatan;?>
                </div>
            </div>
        </div>
    	<?php endforeach; ?>
        </div><!-- panel-group -->
    <!-- </div> -->

</div>
<br><br>