<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Comment</h3>
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <?php if(isset($data)){ ?>
            <?php foreach ($data as $datas) { ?>
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?php echo $datas['nama']; ?></h3>
                <h5>From: <?php echo $datas['email']?>
                <span class="mailbox-read-time pull-right"><?php echo $datas['time_publish']; ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group"></div>
              </div>
              <div class="mailbox-read-message">
                <?php echo $datas['comment']; ?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
               
              </ul>
              <div class="box-footer">
              <div class="pull-right">
                <a href="<?= base_url('reply/').$datas['hash'];?>" type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</a>
              </div>
              <a href="<?= base_url('Deletecomment/').$datas['hash'];?>" type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</a>
               <?php }} ?>
            </div>
            
            </div>
          <!-- /. box -->
        </div>