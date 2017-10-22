<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Reply</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                
                <div class="btn-group">
                  
                  
                </div>
                <!-- /.btn-group -->
                
                <button class="btn btn-default btn-sm" onClick="history.go(0)" VALUE="Refresh"><i class="fa fa-refresh"></i></input></button>
                
                <div class="pull-right">
                  
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover ">
                  <tbody>
                  <tr>
                    <th>Sender</th>
                    <th>Subject</th>
                    <th>Date Reply</th>
                    <th>Action Reply</th>
                  </tr>
                   <?php foreach ($data as $datas) {?>

                  <tr>

                    
                    <td class="mailbox-name"><a href="<?php echo base_url('ViewReply/').$datas->id_reply; ?>"><?php echo $datas->nama; ?></a></td>
                    <td class="mailbox-subject"> - <?php echo strip_tags(word_limiter($datas->reply,4));  ?>
                    </td>
                    <td class="mailbox-date"><?= $datas->timestamp;?></td>
                    <td>
                        <a href="<?= base_url('DeleteReply/').$datas->id_reply;?>" type="button" data-toggle="tooltip" data-placement="top" title="Delete Replay" class="btn btn-default"><i class="fa fa-trash-o"></i> </a>
                        <a href="<?= base_url('UpdateReply/').$datas->id_reply;?>" type="button" data-toggle="tooltip" data-placement="top" title="Update Replay"  class="btn btn-default"><i class="fa fa-upload"></i> </a>
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