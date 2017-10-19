<br><br><br>
<div class="container">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-aqua">
				<p>personalia mwa undip</p>
			</div>
			<hr class="line line-aqua">
            <p class="p-top-30 half-txt color-aqua text-justify">Majelis Wali Amanat (MWA) merupakan organ tertinggi Universitas dari 3 organ Undip sesuai Pasal 27, PP No. 52 tahun 2015 yaitu MWA, Rektor dan Senat Akademik. MWA mewakili kepentingan Pemerintah, Masyarakat, dan Universitas itu sendiri, yang bertanggung-jawab kepada Menteri dan mengemban tugas mem-berdayakan Universitas dalam menjalankan misi untuk mewujudkan visinya. MWA menetapkan, memberi pertimbangan pelaksanaan kebijakan umum, dan melaksanakan pengawasan di bidang nonakademik (Pasal 30, ayat 1g; Pasal 74, ayat 4 , PP No. 52 Tahun 2015). </p>
        </div>

        <?php foreach ($personalia as $p) : ?> 
        <div class="col-md-4 col-sm-4">
            <div class="team-member">
                <div class="team-img">
                    <img src="<?=($p->foto !== null) ? base_url('assets/images/personalia/').$p->foto : base_url('assets/images/personalia/noimage.jpg');?>" alt="team member" class="img-responsive">
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
                <h4><?=$p->nama?></h4>
                <span><?=$p->jabatan?></span>
            </div>
        </div>
        <?php endforeach; ?>

    <!-- </div> -->

</div>
<br><br>