<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox Comment</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <div class="box-body table-responsive">
              <!-- <div class="table-responsive mailbox-messages"> -->
                <table id="tb_comment_in" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Komenter</th>
                      <th>Judul Post</th>
                      <th>Isi Komen</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($data as $datas) {?>
                  <tr>
                    <td class="mailbox-name"><a href="<?php echo base_url('read_comment/').$datas->hash; ?>"><?php echo $datas->nama; ?></a></td>
                    <td class="mailbox-subject"><a href="<?=base_url('berita/').$datas->slug?>" target="_blank"><?=ucwords($datas->title);?></a></td>
                    <td class="mailbox-subject"> - <?php echo strip_tags(word_limiter($datas->comment,4));  ?>
                    </td>
                    <td class="mailbox-date"><?= $datas->time_publish;?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              <!-- </div> -->
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>