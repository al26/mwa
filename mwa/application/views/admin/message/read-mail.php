<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
              
                
              
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <?php foreach ($data as $datas) { ?>
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?php echo $datas->subject; ?></h3>
                <h5>From: <?php echo $datas->email; ?>
                  <span class="mailbox-read-time pull-right"><?php echo $datas->received_at; ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                </div>
              </div>
              <div class="mailbox-read-message">
                <?php echo $datas->message; ?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
              <ul class="mailbox-attachments clearfix">
              <?php $attch = explode(",",$datas->attachments);?>
              <?php if (!empty($attch)) { 
                    foreach ($attch as $i){ ?>
                    <a target="_blank" href="<?=base_url('assets/uploaded_files/attachments/').$i;  ?>" class="mailbox-attachment-name"><?php echo $i; ?></a>
                    <span class="mailbox-attachment-size">
                    <?php $a = "assets/uploaded_files/attachments/".$i;
                    echo number_format(filesize($a) / 1048576, 2) . ' MB';
                    ?>
                    <a target="_blank" href="<?=base_url('assets/uploaded_files/attachments/').$i;  ?>" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                    </span>
                  <?php } }else{?>
                    <a href="#" class="mailbox-attachment-name">App Description.docx</a>
                    <span class="mailbox-attachment-size">1,245 KB
                    <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                    </span>
                  <?php } ?>
                  
                  </div>
                </li>
              </ul>
              <div class="box-footer">
              <div class="pull-right">
                <a href="<?= base_url('Save/').$datas->id;?>" type="button" class="btn btn-default"><i class="fa fa-save"></i> Save</a>
              </div>
              <a href="<?= base_url('Delete/').$datas->id;?>" type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</a>
            </div>
            <?php } ?>
            </div>
          <!-- /. box -->
        </div>