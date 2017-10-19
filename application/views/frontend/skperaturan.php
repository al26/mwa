<br><br><br>
<div class="container">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-aqua">
				<p>surat keputusan dan peraturan mwa undip</p>
			</div>
			<hr class="line line-aqua">
            <p class="p-top-30 color-aqua text-justify">MWA Undip aliquam ornare massa a pulvinar malesuada. In in lacinia tortor. Vestibulum efficitur sollicitudin ipsum a volutpat. Quisque sollicitudin non lectus vitae pellentesque. Morbi ultricies posuere sapien. Aliquam erat volutpat. Donec sollicitudin dui enim, ut facilisis mauris interdum ut. In dui tellus, vulputate luctus vehicula eget, convallis vel nisl. Nulla ante erat, mattis at dolor nec, faucibus commodo orci. </p>
        </div>

        <div class="text-subtitle text-upper color-aqua">
            <p>surat keputusan mwa undip</p>
        </div>
        <div class="panel-group" id="accordionsk" role="tablist" aria-multiselectable="true">
        <?php foreach($sk as $s): ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title color-aqua">
                    <a role="button" data-toggle="collapse" data-parent="#accordionsk" href="<?='#collapsesk'.$s->year;?>" aria-expanded="true" aria-controls="<?='collapsesk'.$s->year;?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Surat Keputusan MWA Tahun <?=$s->year;?>
                    </a>
                </h4>
            </div>
            <div id="<?='collapsesk'.$s->year;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nomor SK</th>
                        <th>Tanggal</th>
                        <th>Tentang</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $data = $this->skp_model->getSKByYear($s->year); $no = 1;?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$data->nomor;?></td>
                        <td><?=$data->tanggal;?></td>
                        <td><?=$data->tentang;?></td>
                        <td><a href="<?=base_url('assets/uploaded_files/skperaturan/').$data->file;?>" class="btn-link color-aqua" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download File</a></td>
                      </tr>
                      <?php $no++;?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div><!-- panel-group -->
        <div class="text-subtitle text-upper color-aqua">
            <p>peraturan mwa undip</p>
        </div>
        <div class="panel-group" id="accordionp" role="tablist" aria-multiselectable="true">
        <?php foreach ($peraturan as $p) : ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title color-aqua">
                    <a role="button" data-toggle="collapse" data-parent="#<?='accordionp'.$p->year?>" href="#collapse<?='accordionp'.$p->year?>" aria-expanded="true" aria-controls="collapse<?='accordionp'.$p->year?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Peraturan MWA Tahun <?=$p->year;?>
                    </a>
                </h4>
            </div>
            <div id="collapse<?='accordionp'.$p->year?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nomor Peraturan</th>
                        <th>Tanggal</th>
                        <th>Tentang</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $dt = $this->skp_model->getPeraturanByYear($p->year); $no = 1; ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$dt->nomor;?></td>
                        <td><?=$dt->tanggal;?></td>
                        <td><?=$dt->tentang;?></td>
                        <td><a href="<?=base_url('assets/uploaded_files/skperaturan/').$dt->file;?>" class="btn-link color-aqua" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download File</a></td>
                      </tr>
                      <?php $no++; ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div><!-- panel-group -->
    <!-- </div> -->

</div>
<br><br>