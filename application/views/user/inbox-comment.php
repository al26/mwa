<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox Comment</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>Sender</th>
                    <th>Subject</th>
                    <th>Date Comment</th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($data as $datas) {?>
                  
                  <tr>
                    <td class="mailbox-name"><a href="<?php echo base_url('read_comment_user/').$datas->hash; ?>"><?php echo $datas->nama; ?></a></td>
                    <td class="mailbox-subject"> - <?php echo strip_tags(word_limiter($datas->comment,4));  ?>
                    </td>
                    <td class="mailbox-date"><?= $datas->time_publish;?></td>
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
            </div>
          </div>
          <!-- /. box -->
        </div>