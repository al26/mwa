<br><br><br>
<div class="container profil">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-aqua">
				<p>komite audit</p>
			</div>
			<hr class="line line-aqua">
            <p class="p-top-30 half-txt color-aqua text-justify">Komite Audit ( KA ) adalah perangkat MWA yang melaksanakan tugas membantu MWA dalam melakukan fungsi pengawasan di bidang non akademik terhadap penyelenggaraan Undip. Mengawasi proses audit internal dan eksternal atas penyelenggaraan Undip di bidang non akademik, Menilai hasil audit internal maupun eksternal untuk disampaikan kepada MWA, Melakukan pengawasan penyelenggaraan sistem akuntansi, evaluasi sistem pengendalian internal, dan audit atas laporan keuangan </p>
        </div>
        <div class="section-title text-center text-title text-upper color-aqua">
			<p>personalia komite audit</p>
		</div>
		<hr class="line line-aqua">
		<br>
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