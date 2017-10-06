<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/font-awesome.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/front.css')?>">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">MWA Undip</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="upper"><a href="">beranda</a></li>
          <li class="dropdown upper">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">profil <b class="caret"></b></a>
			<ul class="dropdown-menu">
			  	<li class="upper"><a href="#">penjelasan umum</a></li>
			    <li class="upper"><a href="#">personalia</a></li>
			    <li class="upper"><a href="#">komite audit</a></li>
			    <li class="upper"><a href="#">mwa unsur mahasiswa</a></li>
			</ul>
		  </li>
          <li class="upper"><a href="">sk & peraturan</a></li>
          <li class="upper"><a href="">program kerja</a></li>
          <li class="upper"><a href="">berita</a></li>
          <li class="upper"><a href="">kotak saran</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<section class="row">
<?php $this->load->view('frontend/beranda'); ?>
</section>

<footer>
<div class="row footer">
	<div class="container text-center">
		<div class="section-title text-title upper color-silver">
			<p>kontak kami</p>
		</div>
		<hr class="line2">
		<br><br>
		<div class="row text-center col-md-12 col-sm-12 col-xs-12">
			<div class="col-md-3 col-sm-2 col-xs-1">
				<div class="contact-icon"><i class="fa fa-home color-silver" aria-hidden="true"></i></div><br>
				<div class="text-bolder upper color-silver centered">
					<p>kantor mwa</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="contact-icon"><i class="fa fa-envelope color-silver" aria-hidden="true"></i></div><br>
				<div class="text-bolder upper color-silver centered">
					<p>mail@mwa.undip.ac.id</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-2 col-xs-1">
				<div class="contact-icon"><i class="fa fa-phone color-silver" aria-hidden="true"></i></div><br>
				<div class="text-bolder upper color-silver centered">
					<p>1234567890</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-2 col-xs-1">
				<div class="contact-icon"><i class="fa fa-fax color-silver" aria-hidden="true"></i></div><br>
				<div class="text-bolder upper color-silver centered">
					<p>0987654321</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-silver notice">
	<p class="upper text-center"><i class="fa fa-copyright" aria-hidden="true"></i> <?= date("Y");?> mwa undip. all right reserved</p>
</div>
</footer>





<script src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/owl.carousel.min.js');?>"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(window).on("scroll",function(){
    var wn = $(window).scrollTop();
    if(wn > 120){
      $(".navbar").addClass("scrolled");
    }
    else{
      $(".navbar").removeClass("scrolled");
    }

    $timeline_block.each(function(){
		if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		}
	});


  });

  // Add smooth scrolling on all links inside the navbar
  $("#myScrollspy a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });

  var owl = $("#owl-demo");
	 
  owl.owlCarousel({
  	responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('next.owl.carousel');
  })
  $(".prev").click(function(){
    owl.trigger('prev.owl.carousel');
  })

  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });

});

</script>
</body>
</html>
