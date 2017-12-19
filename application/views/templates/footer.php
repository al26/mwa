<footer class="">
<div class="footer bg-silver">
  <div class="container text-center">
    <!-- <div class="section-title text-title text-upper color-silver">
      <p>kontak kami</p>
    </div> -->
    <!-- <hr class="line line-silver"> -->
    <div class="row contact">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <table class="table">
          <thead>
            <tr>
              <th colspan="2"><p class="text-title color-silver no-margin">Media Sosial</p></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="padding:0"><img src="<?=base_url('assets/images/instagram.png')?>" style="width:40px; padding:5px;"></td>
              <td style="padding:0"><p class="text-left no-margin no-padding"><a class="color-silver btn btn-link btn-md" href="#">Ikuti Kami di Instagram</a></p></td>
            </tr>
            <tr>
              <td style="padding:0"><img src="<?=base_url('assets/images/line.png')?>" style="width:40px; padding:5px;"></td>
              <td style="padding:0"><p class="text-left no-margin no-padding"><a class="color-silver btn btn-link btn-md" href="#">OA Line MWA UM Undip</a></p></td>
            </tr>
          </tbody>
        </table>
        <table class="table">
          <thead>
            <tr>
              <th colspan="2"><p class="text-title color-silver no-margin">Links</p></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="padding:0"><p class="text-left no-margin no-padding"><a class="color-silver btn btn-link btn-md" href="https://www.undip.ac.id/" target="_blank">Website Undip</a></p></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <table class="table">
          <thead>
            <tr>
              <th colspan="2"><p class="text-title color-silver no-margin">Kontak Kami</p></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="fa fa-envelope color-silver contact-icon" aria-hidden="true"></i></td>
              <td><p class="text-left no-margin"><a class="color-silver btn btn-link btn-md" href="mailto:mwa@live.undip.ac.id">mwa@live.undip.ac.id</a></p></td>
            </tr>
            <tr>
              <td><i class="fa fa-phone color-silver contact-icon" aria-hidden="true"></i></td>
              <td><p class="text-left no-margin"><a class="color-silver btn btn-link btn-md" href="tel:+622476922632">+62 247 692 263 2</a></p></td>
            </tr>
            <tr>
              <td><i class="fa fa-fax color-silver contact-icon" aria-hidden="true"></i></td>
              <td><p class="text-left no-margin"><a class="color-silver btn btn-link btn-md" href="fax:+622476922632">+62 247 692 263 2</a></p></td>
            </tr>
            <tr>
              <td><i class="fa fa-home color-silver contact-icon" aria-hidden="true"></i></td>
              <td><p class="color-silver text-left no-margin">Jalan Prof. Soedarto, SH Tembalang, Semarang</p></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 no-padding">
        <table class="table">
          <thead>
            <tr>
              <th><p class="text-title color-silver no-margin">Petunjuk Arah</p></th>
            </tr>
          </thead>
          <tbody>
            <tr><td style="padding-top: 10px;">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6458956270085!2d110.43799338230264!3d-7.0508300593810125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c1b3d6548b1%3A0xa140280d22e36dd9!2sRektorat+Universitas+Diponegoro!5e0!3m2!1sid!2sus!4v1508433965349" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="copyright">
  <p class="text-upper text-center no-margin no-padding color-aqua text-bolder"><i class="fa fa-copyright" aria-hidden="true"></i> <?= date("Y");?> mwa undip | all right reserved</p>
</div>
<a id="scroll" href="javascript:void(0);" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left" style="display:none;"><span class="glyphicon glyphicon-chevron-up"></span></a>
</footer>

<?php 
  if (isset($recent_posts)) {
    $owl_items = count($recent_posts);
    if ($owl_items > 4) {
      $owl_items = 1;
    }   
  } else {
    $owl_items = 1;
  }
?>

<script src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/owl.carousel.min.js');?>"></script>
<script src="<?php echo base_url('assets');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script type="text/javascript">
  
$(document).ready(function(){
  $('.textarea').wysihtml5()
 //  $(window).on("scroll",function(){
 //    var wn = $(window).scrollTop();
 //    if(wn > 120){
 //      $(".navbar").addClass("scrolled");
 //    }
 //    else{
 //      $(".navbar").removeClass("scrolled");
 //    }
  // });
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
  var owl_items = <?php echo json_encode($owl_items); ?>;
  owl.owlCarousel({
    // responsiveClass:true,
    // responsive:{
    //     0:{
    //         items:1
    //     },
    //     400:{
    //         items:1
    //     },
    //     1000:{
    //         items:1
    //     }
    // }
    loop: true,
    items: 1
  });
 
  // Custom Navigation Events owl carousel
  $(".next").click(function(){
    owl.trigger('next.owl.carousel');
  })
  $(".prev").click(function(){
    owl.trigger('prev.owl.carousel');
  })
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
  // acordion
  function toggleIcon(e) {
  $(e.target)
      .prev('.panel-heading')
      .find(".more-less")
      .toggleClass('glyphicon-plus glyphicon-minus');
  }
  $('.panel-group').on('hidden.bs.collapse', toggleIcon);
  $('.panel-group').on('shown.bs.collapse', toggleIcon);
    
});

$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() >= 100){
            $('#scroll').fadeIn();
            $('#global-nav').addClass('scrolled-nav');
            $('#global-nav').css('height', '50px');
            $('#global-nav').css('padding', '0px');
            $('#global-nav').css('transition', 'all .5s');
            $('#global-nav').css('-webkit-transition', 'all .5s');
        }else{
            $('#scroll').fadeOut();
            $('#global-nav').removeClass('scrolled-nav');
            $('#global-nav').css('height', '150px');
            $('#global-nav').css('padding', '35px');
            $('#global-nav').css('transition', 'all .5s');
            $('#global-nav').css('-webkit-transition', 'all .5s');
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

</script>
</body>
</html>