<br><br><br>
<div class="container">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-aqua">
				<p>personalia mwa undip</p>
			</div>
			<hr class="line line-aqua">
            <p class="p-top-30 half-txt color-aqua text-justify">MWA Undip aliquam ornare massa a pulvinar malesuada. In in lacinia tortor. Vestibulum efficitur sollicitudin ipsum a volutpat. Quisque sollicitudin non lectus vitae pellentesque. Morbi ultricies posuere sapien. Aliquam erat volutpat. Donec sollicitudin dui enim, ut facilisis mauris interdum ut. In dui tellus, vulputate luctus vehicula eget, convallis vel nisl. Nulla ante erat, mattis at dolor nec, faucibus commodo orci. </p>
        </div>

        <?php for ($i=0; $i < 9; $i++) : ?> 
        <div class="col-md-4 col-sm-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?=(isset($foto)) ? base_url('assets/images/personalia/').$foto : base_url('assets/images/personalia/noimage.jpg');?>" alt="team member" class="img-responsive">
                </div>
                <div class="team-hover">
                    <div class="desk">
                        <h4>Judul caption</h4>
                        <p>bio singkat</p>
                    </div>
                    <div class="s-link">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-title">
                <h4>Nama</h4>
                <span>Jabatan</span>
            </div>
        </div>
        <?php endfor; ?>

    <!-- </div> -->

</div>
<br><br>