<br><br><br>
<div class="container profil">
    <div class="heading-title text-center">
        <div class="section-title text-center text-title text-upper color-aqua">
			<p><?=$page->title;?></p>
		</div>
		<hr class="line line-aqua">
        <?php if (!empty($page->description)) : ?>
        <div class="p-top-30 color-aqua text-indent text-justify"><?=$page->description;?></div>
        <?php endif; ?>
    </div>
<?php if(!empty($fk)) : ?>
    <?php if(!empty($fk->fungsi)) : ?>
    <div class="text-subtitle text-upper color-aqua">
        <p>fungsi mwa</p>
    </div>
    <div>        
    <?php echo $fk->fungsi;?>
    </div>
    <?php endif; ?>
	<br>
    <?php if(!empty($fk->kewenangan)) : ?>
    <div class="text-subtitle text-upper color-aqua">
        <p>kewenangan mwa</p>
    </div>
    <div>
    <?php echo $fk->kewenangan;?>
    </div>
    <?php endif; ?>
<?php endif; ?>
</div>
<br><br>