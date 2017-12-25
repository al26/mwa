
<div class="col-md-9">
            <?php 
  if (!empty($this->session->flashdata('err_msg'))) {
    echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
  } elseif (!empty($this->session->flashdata('scss_msg'))) {
    echo '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'. $this->session->flashdata('scss_msg').'</li></ul></div>';
  } ?>
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
                <h5><span class="mailbox-read-time pull-right"><?php echo $datas->time_publish; ?></span></h5><br>
                <h3>From&nbsp;: <?php echo $datas->nama.' ('.$datas->email.')'; ?></h3>
                <h3>In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $datas->title ?></h3>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group"></div>
              </div>
              <div class="mailbox-read-message">
                <?php echo $datas->comment;?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
               
              <div class="box-body">
              <div class="form-group">
                <input class="form-control" disabled value="<?php echo $datas->nama; ?>"></div>
              <?php echo form_open('do_reply/'.$datas->hash);  ?>
              <div class="form-group">
                    <textarea id="compose-textarea" name="reply" disabled="true" class="form-control" style="height: 300px">
                      <?php echo $datas->reply; ?>
                    </textarea>
              </div>
            </div>
              <div class="box-footer">
              <div class="pull-right">
                
              </div>
              <?php echo form_close(); ?>   
              <?php }} ?>
            </div>
            
            </div>
          <!-- /. box -->
        </div>