
<!--Pulling Awesome Font -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo  base_url('assets/');?>css/login.css">
<div class="container">
    <div class="row">
    <?php echo form_open('auth/auth_user'); ?>
    <div class="col-md-4"></div>
        <div class="col-md-4">
            
            <div class="form-login">
            <h3>Welcome back.</h3>
            <input type="text" class="form-control input-sm chat-input" name="username" placeholder="username" />
            </br>
            <input type="password" class="form-control input-sm chat-input" name="password" placeholder="password" />
            </br>
            <?php echo $image;?>
            </br>
            <input type="text" class="form-control input-sm chat-input" name="captcha" placeholder="captcha" />

            <div class="wrapper">
            <span class="group-btn">     
                <button class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></button>
            </span>
            </div>
            </div>
        </div>
        <div class="col-md-4 "></div>
    <?php echo form_close(); ?>
    </div>
    <?php
       if(isset($errorLogin)){
            echo "<left>";
            echo $errorLogin; 
            echo "</left>";
        }
    ?>
</div>