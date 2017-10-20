<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox Comment</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  
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
                  <!-- <?php foreach ($data as $datas) {?>
                      <?php if($datas->status == "read"){ ?>
                      <tr class="active"> 
                      <?php }else{?>
                        <tr>
                        <?php } ?> -->
                    <tr>
                    <td><input type="checkbox" value="<?php echo $datas->id; ?>"></td>
                    <td class="mailbox-name"><a href="<?php echo base_url('read_comment/').$datas->hash; ?>"><?php echo $datas->nama; ?></a></td>
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
              <div class="mailbox-controls">
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>