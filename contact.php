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

<!-- Hero Banner ================================================== -->
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
<!-- Hero Banner ================================================== -->


<!-- Contact Us Start================================================== -->
<br />
<br />
<section id="featured2" class="featured">
<div class="container container5_top_header">

  <div class="row">
    <div class="col-lg-12 text-center">
      <h1>CONTACT US</h1>
      <hr class ="style1">
      <p class="lead">Thank you for giving Nationwide the opportunity to service your needs.</p>
      <p class= "lead-bottom">If you require transport services, please call us directly at <strong>(877) 278-3135</strong>. 
      <br /> For all other inquiries, please email us at <a href="mailto:sales@<?php echo($_SERVER['HTTP_HOST']); ?>" class="contact_link">sales@<?php echo($_SERVER['HTTP_HOST']); ?></a>.</p>
      <hr class="style1">
    </div>
  </div>

  <br>
  <div class="row">
    
    <div class="col-sm-4">
      <h4 class="headline second-child"><i class="fa fa-map-marker text-red"></i><span> <strong>Address<strong></span></h4>
      <p>Nationwide<br />
      2765 W Cypress Creek Rd,<br />
      Fort Lauderdale, FL 33309<br />
    </div>

    <div class="col-sm-4">
      <h4 class="headline second-child"><i class="fa fa-envelope text-red"></i><span> <strong> Contact<strong> </span></h4>
      <p>Phone: (877) 278-3135<br />
      Fax: (305) 396-5888<br />
      Email: <a class="content-links" href="mailto:sales@<?php echo($_SERVER['HTTP_HOST']); ?>">sales@<?php echo($_SERVER['HTTP_HOST']); ?></a> </div>

    <div class="col-sm-4">
      <h4 class="headline second-child"><i class="fa fa-clock-o text-red"></i><span> <strong>Business Hours<strong> </span></h4>
      <p>Monday-Friday: 6am to 10pm<br />
      Saturday: 7am to 9pm<br />
      Sunday: 8am to 9pm<br />
      </p>
    </div>

  </div>
  <br>
</div>
</section>
<!-- Contact Us End================================================== -->

<hr class="style1">

<br>
<?php include_once 'includes/get-started.php';?>
<br />
<br />
<br>

<!-- Custom styles for the Contact Us section ================================================== -->
<style>

  hr.dashed {
   border-top: 2px solid #2b2d35;
  } 

  section.featured{
    background-color: #f6f6f6;
  
    padding: 40px 0;
  }

  p.lead {
    font-size: 2.3rem;
    /**color: #536A;**/
  }

  p.lead-bottom {
    font-size: 1.8rem;
    /**color: #536A;**/
  }

  .style1 { 
      border: 2; height: 2px; 
      background-image: linear-gradient(to right, rgba(1, 0, 0, 0), rgba(1, 0, 0, 0.75), rgba(1, 0, 0, 0)); 
    }


</style>

<?php include_once 'includes/footer.php';?>
<?php include_once 'includes/script.php';?>
</body>
</html>