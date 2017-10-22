
<div class="col-md-9">
            <?php 
              if (!empty($this->session->flashdata('err_msg'))) {
                echo '<div class="alert alert-danger alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
              } elseif (!empty($this->session->flashdata('scss_msg'))) {
                echo '<div class="alert alert-success alert-dismissable" style="width:80%;margin-left:10%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
              } 
              ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Comment</h3>
              
                
              
              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
             
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
                <?php echo strip_tags(word_limiter($datas['comment'],4));?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
               
              <div class="box-body">
              <div class="form-group">
                <input class="form-control" readonly value="<?php echo $datas['nama']; ?>"></div>
              <?php }} ?>
              <?php echo form_open('do_reply/'.$datas['hash']);  ?>
              <div class="form-group">
                    <textarea id="compose-textarea" name="reply" required class="form-control" style="height: 300px"></textarea>
              </div>
            </div>
              </ul>
              <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
              </div>
              <?php echo form_close(); ?>   
            </div>
            
            </div>
          <!-- /. box -->
        </div>