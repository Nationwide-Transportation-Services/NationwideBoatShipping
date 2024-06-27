<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if IE 10]> <html class="ie10" lang="en"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]> <html lang="en"> <![endif]-->

<head>
<?php include_once 'includes/links.php';?>
</head>

<body>
<div class="preloader">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>

<?php include_once 'includes/navigation.php';?>

<!-- Hero Banner
    ================================================== -->
    <div id="intro">
  <div class="item background-cover" style="background: url('img/bg-featuredapp1.jpg')">
    <div class="container">
      <div class="row">
        <div class="carousel-caption-center colour-white">
        
          <h2 style="margin-top:0;">We Know Boats!</h2>
          <h2 style="color: #48A5FF; font-size:34px;">(800) 352-8475</h2>
          <h1>Nationwide Boat Shipping</h1>
          <p>Trust the company with the experience and the ability to get any boat moved anywhere in the world.</p>
          <p><a class="btn btn-lg btn-primary signup" href="quote-form.php" role="button">Get Boat Shipping Quote</a></p>
         </div>
      </div>
    </div>
    <div class="overlay-bg"></div>
  </div>
</div>

<br>
<?php include_once 'includes/get-started.php';?>

<section id="featured2" class="featured">
<div class="container container5_top_header">
  <div class="row">
    <div class="col-lg-10">
      <h3>About Nationwide Boat Shipping</h3>
      <hr>
     <strong> <p>Nationwide Boat Shipping is based in beautiful Fort Lauderdale, Florida. Our dedication to serving our customers right has allowed us to flourish over the past 10 years, earning us a 5 star rating. </p>

<p>Nationwide Boat Shipping is a fully insured and DOT compliant boat shipping company in Florida. We specialize in hauling and shipping oversized powerboats, sailboats, speed boats, jet skis, and center consoles as well as special and unique marine craft all across the country.</p>

 <p>We will always gather all of the necessary information about your vessel, from the year, make, model, and all dimensions such as length, height, beam, and weight. Fill out our quote form for a Boat shipping quote today. <a href="mailto:sales@<?php echo($_SERVER['HTTP_HOST']); ?>" class="contact_link">sales@<?php echo($_SERVER['HTTP_HOST']); ?></a> </p></strong>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h4 class="headline second-child"><i class="fa fa-map-marker text-red"></i><span> Address</span></h4>
      <p>Nationwide<br />
        2937 W Cypress Creek Rd. Ste 101<br />
        Fort Lauderdale, FL 33309<br />
    </div>
    <div class="col-sm-4">
      <h4 class="headline second-child"><i class="fa fa-envelope text-red"></i><span> Contact</span></h4>
      Phone: (800) 352-8475<br />
      Fax: (305) 396-5888<br />
      Email: <a class="content-links" href="mailto:sales@<?php echo($_SERVER['HTTP_HOST']); ?>">sales@<?php echo($_SERVER['HTTP_HOST']); ?></a> </div>
    <div class="col-sm-4">
      <h4 class="headline second-child"><i class="fa fa-clock-o text-red"></i><span> Business Hours</span></h4>
      <strong>Monday-Friday:</strong> 7am to 7pm<br />
      <strong>Saturday:</strong> 7am to 7pm<br />
      <strong>Sunday:</strong> 7am to 7pm<br />
      </p>
    </div>
  </div>
</div>
</section>
<br>


  <?php include_once 'includes/footer.php';?>
<?php include_once 'includes/script.php';?>
	
	<!-- Start of LiveChat (www.livechatinc.com) code --> 
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 3116632;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script> 
<!-- End of LiveChat code --> 
	
</body>
</html>