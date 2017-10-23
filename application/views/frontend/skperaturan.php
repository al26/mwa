<br><br><br>
<div class="container">
    <!-- <div class="row"> -->
        <div class="heading-title text-center">
            <div class="section-title text-center text-title text-upper color-aqua">
				<p><?=$page->title;?></p>
			</div>
			<hr class="line line-aqua">
            <?php if (!empty($page->description)) : ?>
            <div class="p-top-30 text color-aqua text-justify"><?=$page->description;?></div>
            <?php endif; ?>
        </div>
        <?php if (!empty($sk)): ?>
        <div class="text-subtitle text-upper color-aqua">
            <p>surat keputusan mwa undip</p>
        </div>
        <div class="panel-group" id="accordionsk" role="tablist" aria-multiselectable="true">
        <?php foreach($sk as $s): ?>
        <?php $y = explode("/", $s->tanggal); ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title color-aqua">
                    <a role="button" data-toggle="collapse" data-parent="#accordionsk<?=$y[2];?>" href="<?='#collapsesk'.$y[2];?>" aria-expanded="true" aria-controls="<?='collapsesk'.$y[2];?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Surat Keputusan MWA Tahun <?=$y[2]?>
                    </a>
                </h4>
            </div>
            <div id="<?='collapsesk'.$y[2];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
                      <?php $data = $this->skp_model->getSKByYear($y[2]); $no = 1;?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$data->nomor;?></td>
                        <td><?=$data->tanggal;?></td>
                        <td><?=$data->tentang;?></td>
                        <td><a href="<?=base_url('assets/uploaded_files/skp/').$data->file;?>" class="btn-link color-aqua" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download File</a></td>
                      </tr>
                      <?php $no++;?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div><!-- panel-group -->
        <?php endif ?>

        <?php if (!empty($peraturan)) { ?>
        <div class="text-subtitle text-upper color-aqua">
            <p>peraturan mwa undip</p>
        </div>
        <div class="panel-group" id="accordionp" role="tablist" aria-multiselectable="true">
        <?php foreach ($peraturan as $p) : ?>
        <?php $y = explode("/", $s->tanggal); ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title color-aqua">
                    <a role="button" data-toggle="collapse" data-parent="#<?='accordionp'.$y[2]?>" href="#collapse<?='accordionp'.$y[2]?>" aria-expanded="true" aria-controls="collapse<?='accordionp'.$y[2]?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Peraturan MWA Tahun <?=$y[2];?>
                    </a>
                </h4>
            </div>
            <div id="collapse<?='accordionp'.$y[2]?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
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
                      <?php $dt = $this->skp_model->getPeraturanByYear($y[2]); $no = 1; ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$dt->nomor;?></td>
                        <td><?=$dt->tanggal;?></td>
                        <td><?=$dt->tentang;?></td>
                        <td><a href="<?=base_url('assets/uploaded_files/skp/').$dt->file;?>" class="btn-link color-aqua" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download File</a></td>
                      </tr>
                      <?php $no++; ?>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        </div><!-- panel-group -->
        <?php } ?>
    <!-- </div> -->

</div>
<br><br>