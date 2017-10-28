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
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title color-aqua">
                    <a role="button" data-toggle="collapse" data-parent="#accordionsk<?=$s->year;?>" href="<?='#collapsesk'.$s->year;?>" aria-expanded="true" aria-controls="<?='collapsesk'.$s->year;?>">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Surat Keputusan MWA Tahun <?=$s->year?>
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
                      <?php foreach($data as $d): ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$d->nomor;?></td>
                        <td><?=$d->tanggal;?></td>
                        <td><?=$d->tentang;?></td>
                        <td><a href="<?=base_url('assets/uploaded_files/skp/').$d->file;?>" class="btn-link color-aqua" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download File</a></td>
                      </tr>
                      <?php $no++; endforeach;?>
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
                      <?php foreach($dt as $d): ?>
                      <tr>
                        <td><?=$no;?></td>
                        <td><?=$d->nomor;?></td>
                        <td><?=$d->tanggal;?></td>
                        <td><?=$d->tentang;?></td>
                        <td><a href="<?=base_url('assets/uploaded_files/skp/').$d->file;?>" class="btn-link color-aqua" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download File</a></td>
                      </tr>
                      <?php $no++; endforeach;?>
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