<div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="<?php echo base_url('inbox-comment'); ?>"><i class="fa fa-inbox"></i> Inbox Comments
                  <span class="label label-primary pull-right"><?php if(isset($count)) {echo $count;}?></span></a></li>
                <li><a href="<?php echo base_url('Drafts'); ?>"><i class="fa fa-file-text-o"></i> All Reply Comment</a></li>
                <li><a href="<?php echo base_url('Trash'); ?>"><i class="fa fa-trash-o"></i> Trash Comment</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>