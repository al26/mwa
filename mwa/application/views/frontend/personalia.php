<br><br><br>
<div class="container profil">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-aqua">
				<p><?=$page->title;?></p>
			</div>
			<hr class="line line-aqua">
            <?php if (!empty($page->description)) : ?>
            <div class="p-top-30 half-txt color-aqua text-justify"><?=$page->description;?></div>
        <?php endif; ?>
        </div>

        <?php foreach ($personalia as $p) : ?>
        <div class="col-md-4 col-sm-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?=(!empty($p->foto)) ? base_url('assets/images/personalia/').$p->foto : base_url('assets/images/personalia/noimage.jpg');?>" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4><?=$p->nama;?></h4>
                        <p><?=$p->jabatan;?></p>
                        <p><?=$p->unsur;?></p>
                    </div>
                    <div class="s-link">
                        <?php if (!empty($p->telp)) : ?>
                            <a href="<?='tel:'.$p->telp;?>"><i class="fa fa-phone"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($p->email)) : ?>
                            <a href="<?='mailto:'.$p->email;?>"><i class="fa fa-envelope"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($p->facebook)) : ?>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($p->twitter)) : ?>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if (!empty($p->instagram)) : ?>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h4><?=$p->nama?></h4>
                <span><?=$p->jabatan?></span>
            </div>
        </div>
        <?php endforeach; ?>

    <!-- </div> -->

</div>
<br><br>