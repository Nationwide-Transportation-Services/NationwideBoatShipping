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
  <div class="container">
    <div class="row">
          <h1>Boat Transportation FAQ's's</h1>
          <p>If you dont find your answer here, please feel free to contact us <A href="http://nationwideboatshipping.com/contact.php">here</a>.</p>
          
    <div class="row">
<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        How long Does Shipping Take?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>			
                <div class="panel-body">
                    We understand the importance for getting things done of on time. Our clients have busy schedules, and we make a considerable effort to work within these given parameters. The total time involved in transporting a boat can vary from one to another. Some of the factors involved are the size of the boat, it’s location, the driver availability, and any permit requirements.
 We take pride in going the extra mile to ensure that your experience with us at Nationwide Boat Shippers is reliable and seamless. With so many satisfied and repeat clients from all over the country, our customer feedback speaks for itself. Call today and allow us to fill your Boat transportation needs. 
                </div>
			</div>
			
			
			<div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        How do you Calculate the cost of Transport?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    The cost of shipping a Boat takes several factors into consideration. The size of the unit, permit requirements, taxes, tolls, fuel, insurance, and driving distance.
We strive to consistently provide our valued customers with competitive pricing time and time again. Since we handle a very high number of transports all year round, we have in place a dedicated network of committed drivers all across the country, which allow us to pass down our high volume savings to you. 
                </div>
			</div>
            
            
            <div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        Where do I Drop Off my Boat?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    Convenience is in our blood. Our drivers go directly to the location of your Boat or Jet Ski for pick up. We make it effortless, so there is no need to take the time of having to haul it yourself. Please make sure to have it on a trailer ready for us to transport. Under unique circumstances where there is not a trailer available, we can provide accommodations.
                </div>
			</div>
            
            
            <div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        How far in advance should I book my shipment to make sure it is loaded on time?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    As soon as possible, the faster you schedule your load whether a week in advance or months, it is the most cost effective decision you can make in order to make the load aviable before others book the most aviable driver already driving the route. Though certain circumstances can force customers to require last minute accomodations, it is highly adviced to get booked with time. The more time the better. This ensures you get the best rate. Call to today to get a quote for your boat shipping needs.
                </div>
			</div>
            
			

			<div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        Is Nationwide Boat Shipping certified?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    Nationwide Boat Shipping is Licensed and bonded to transport cargo, vehicles, heavy machinery, oversize and overweight loads Nationally. Our interstate Operating Authority is: MC 693977.
                </div>
			</div>
            
            <div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        How Do I Track my Shipment?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    You can access our mobile application here for your Android or Apple device.

                </div>
			</div>
            
            
			

			<div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        How do I pay? May I pay Cash? on Delivery?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    Payment is very simple with us. We accept all major Credit/Debit Cards, Wire Transfers, Money Orders, Cashiers Checks, and Cash. We do not accept personal checks.
                </div>
            </div>
        </div>
    </div>

    </div>
  </div>
</section>


  <?php include_once 'includes/footer.php';?>
<?php include_once 'includes/script.php';?>
<script>
$(document).on('click', '.panel-heading span.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '.panel div.clickable', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).ready(function () {
    $('.panel-heading span.clickable').click();
    $('.panel div.clickable').click();
});
</script>
</body>
</html>