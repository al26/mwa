<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive mailbox-messages">
                <table id="tb_inbox" class="table table-hover">
                  <thead>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $datas) {?>
                      <?php if($datas->status == "read"){ ?>
                      <tr class="active"> 
                      <?php }else{?>
                        <tr>
                        <?php } ?>
                    <td><input type="checkbox" value="<?php echo $datas->id; ?>"></td>
                    <td class="mailbox-name"><a href="<?php echo base_url('read_message/').$datas->id; ?>"><?php echo $datas->name; ?></a></td>
                    <td class="mailbox-subject"><b><?php echo $datas->subject; ?></b> - <?php echo strip_tags(word_limiter($datas->message,4));  ?>
                    </td>
                    <td class="mailbox-date"><?= $datas->received_at;?></td>
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