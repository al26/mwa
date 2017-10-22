<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Trash Comment</h3>

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
                    <th>No</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Date publish</th>
                  </tr>

                  <?php $no=0; foreach ($data as $datas) {?>
                  <?php $no++; ?> 
                  <tr>
                    <td class="mailbox"><?php echo $no; ?></td>  
                    <td class="mailbox-name"><?php echo $datas->nama; ?></td>  
                    <td class="mailbox-subject"><?php echo strip_tags(word_limiter($datas->comment,4));  ?></td>
                    <td class="mailbox-date"><?= $datas->email;?></td> 
                    <td class="mailbox-date"><?= $datas->time_publish;?> </td> 
                    
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