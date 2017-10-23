<br><br><br>
<div class="container profil">
    <div class="heading-title text-center">
        <div class="section-title text-center text-title text-upper color-aqua">
			<p><?=$page->title;?></p>
		</div>
		<hr class="line line-aqua">
        <?php if (!empty($page->description)) : ?>
        <div class="p-top-30 color-aqua text-justify"><?=$page->description;?></div>
        <?php endif; ?>
    </div>
</div>
<br><br>