<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Trash Comment</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive mailbox-messages">
                <table id="tb_comment_trash" class="table table-bordered">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Komenter</th>
                    <th>Judul Post</th>
                    <th>Isi Komen</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=0; foreach ($data as $datas) {?>
                  <?php $no++; ?> 
                  <tr>
                    <td class="mailbox"><?php echo $no; ?></td>  
                    <td class="mailbox-name"><?php echo $datas->nama; ?></td>  
                    <td class="mailbox-subject"><?=$datas->title?></td>
                    <td class="mailbox-subject"><?php echo strip_tags(word_limiter($datas->comment,5));  ?></td> 
                    <td class="mailbox-date"><?= $datas->time_publish;?> </td> 
                    <td>
                      <a href="<?= base_url('DeletePermanently/').$datas->hash;?>" type="button" data-toggle="tooltip" data-placement="top" title="Delete Permanently" class="btn btn-danger"><i class="fa fa-trash-o"></i> </a>
                      <a href="<?= base_url('RestorageComment/').$datas->hash;?>" type="button" data-toggle="tooltip" data-placement="top" title="Restorage Comment"  class="btn btn-default"><i class="fa fa-reply"></i> </a>
                    </td>
                  </tr>

                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
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