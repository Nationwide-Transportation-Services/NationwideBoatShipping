<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if IE 10]> <html class="ie10" lang="en"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]> <html lang="en"> <![endif]-->

<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122641223-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122641223-1');
</script>

	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="ico/nationwide.png">
<title>Nationwide Boat Shipping Services - (800) 352-8475</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/datepicker.css" rel="stylesheet" />
<link href="css/styles-form.css" rel="stylesheet" />
<link href="css/theme.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/monserat.css" rel="stylesheet">
<link href="css/opensans.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<script src="js/modernizr.custom.js"></script>
</head>

<body>
<!-- Date Code -->
<?php
$year=date("Y");
?>
<!-- End Date Code -->

<div class="preloader">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>

<!-- Hero Banner
    ================================================== -->
<div class="item background-cover" style="background: #010C28;">
  <div class="container">
    <div class="row" style="margin-bottom:100%;">

      <div class="col-lg-12 col-md-12 col-xs-12"> <a href="index.php"><span class="fa fa-times-circle icon-tab-size pull-right" style="color:#FFF; font-size:36px; margin-top:20px; margin-right: 10px;"></span></a> <br>

        <p class="login-overlay" style="color: #fff;   text-transform: uppercase;letter-spacing: 4px;font-size: 24px;font-family:Montserrat, sans-serif;
  font-weight: 500;">Nationwide</a></p><br>


        
        
          <div class="panel panel-primary col-lg-4 col-md-4 col-sm-6 col-xs-11 center" style="background-color: rgba(10, 132, 193, 0);
  border-color: rgba(10, 132, 193, 0);">
      <div class="panel-body">
        <form name="basicform" id="basicform" method="post" action="post.php" onsubmit="return validate();"  enctype="multipart/form-data" >
          <div id="sf1" class="frm">
            <fieldset>
                      <p class="login-overlay text-center text-uppercase" style="color: #fff; font-weight:300; font-size:24px;  font-family: 'Open Sans', Helvetica Neue, Helvetica, Arial, sans-serif;">Let's get started</p>
          <p class="text-center" style="color: #9DCFFF;letter-spacing: 1px;">Please tell us about your boat</p>
                <label style="color: #FFF; font-weight:300; letter-spacing: 1px;">
              <h5>3 simple steps</h5>
              </label>
              <div class="form-group" style="margin-bottom:0;">
                <div class="controls controls-row">
                  <select name="vehicle_Year" id="vehicle_Year" autocomplete="off" onchange="resetClass(this.id)">
                    <option value="">Year</option>
                    <?php for($y=$year;$y>1900;$y--){?>
                    <option value="<?php echo $y;?>">
                    <?php echo $y;?>
                    </option>
                    <?php }?>
                  </select>
                  <div class="controls">
                    <input id="vehiclemake" name="vehicle_Make" placeholder="Make" type="text" onfocus="resetClass(this.id)"/>
                  </div>
                  <div class="controls">
                    <input id="vehiclemodel" name="vehicle_Model" placeholder="Model" type="text" onfocus="resetClass(this.id)"/>
                      <div class="controls">
                        <select name="carrier_type" id="quotetype">
                          <option value="">Choose</option>
                          <option value="On Trailer">Trailer</option>
                          <option value= "No Trailer">No Trailer</option>
                        </select>
                      </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-lg-12">
                  <button class="btn btn-primary btn-block btn-large open1" type="button">Next Step <span class="fa fa-arrow-right"></span></button>
                 </div>
              </div>
            </fieldset>
          </div>
          <div id="sf2" class="frm" style="display: none;">
            <fieldset>
              <label style="color: #FFF; margin-top: 0; font-weight:300; letter-spacing: 1px;">
              <h5>Step 2 of 3</h5>
              </label>
              <div class="form-group">
                <div class="controls controls-row">
                  <input type="text" class="date-picker" name="Ship_Date" id="date-picker" onfocus="resetClass(this.id)" placeholder="Date of Pickup" href="#" data-toggle="tooltip" title="This is the date you would like us to pick up your vehicle for transport." autocomplete="off"/>
                  <div class="controls">
                    <input type="text" name="pickupZip" id="Pickup" onfocus="resetClass(this.id)" placeholder="Pickup Zip" href="#" data-toggle="tooltip" title="We need the zip code where you want us to pickup your vehicle. If Canada use postal code."/>
                  </div>
                  <div class="controls">
                    <input type="text" name="deliveryZip" id="Delivery" onfocus="resetClass(this.id)" placeholder="Delivery Zip" href="#" data-toggle="tooltip" title="We need the zip code where you want us to deliver your vehicle. If Canada use postal code."/>
                  </div>
                </div>
              </div>
              <div class="clearfix" style="height: 10px;clear: both;"></div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button class="btn btn-primary2 back2" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                  <button class="btn btn-primary open2" type="button">Next Step <span class="fa fa-arrow-right"></span></button>
                </div>
              </div>
            </fieldset>
          </div>
          <div id="sf3" class="frm" style="display: none;">
            <fieldset>
              <label style="color: #FFF; margin-top: 0; font-weight:300; letter-spacing: 1px;">
              <h5>Final Step 3 of 3</h5>
              </label>
              <div class="form-group">
                <div class="controls controls-row">
                  <input id="From_Name" name="From_Name" placeholder="Name" onfocus="resetClass(this.id)" type="text" />
                </div>
                <div class="controls controls-row">
                  <input id="email" name="email" placeholder="Email" onfocus="resetClass(this.id)" type="email" href="#" data-toggle="tooltip" title="WE DON'T SPAM! We want to send a copy of your quote to your email." />
                  <div class="controls">
                    <input id="phone" name="phone" placeholder="Phone" onfocus="resetClass(this.id)" type="phone" href="#" data-toggle="tooltip" title="Please feel free to put your complete number. We don't spam call or harrass potential customers."/>
                  </div>
                </div>
                <div class="form-group">
                <label style="color: #FFF; font-weight:300; letter-spacing: 1px; font-size:10px;">
              Attach your boat picture here (optional)
              </label>
            <!--<input type="file" id="exampleInputFile">-->
			<input name="pic" id="pic" type="file" placeholder="">
         
          </div>
          <div class="checkbox">
            <label style="color: #FFF; font-weight:300; letter-spacing: 1px; font-size:10px; margin-top: 5px;">
              <input type="checkbox" name="sendme" id="sendme" value="1" >
              Send a copy to myself </label>
          </div>
              </div>
              <div class="clearfix" style="height: 10px;clear: both;"></div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button class="btn btn-primary2 back3" type="button"><span class="fa fa-arrow-left"></span> Back</button>
                  <button class="btn btn-primary open3" type="submit">Get Quote </button>
                </div>
              </div>
            </fieldset>
          </div>
        </form>
      </div>
   </div>   
    </div>
  </div>
</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/classie.js"></script> 
<script src="js/cbpAnimatedHeader.min.js"></script> 
<script src="js/scrollReveal.js"></script> 
<script src="js/jquery.scrollTo.js" defer></script> 
<script src="js/jquery.nav.js" defer></script> 
<script src="js/imagesloaded.pkgd.min.js" defer></script> 
<script src="js/isotope.min.js" defer></script> 
<script src="js/jquery.magnific-popup.min.js" defer></script> 
<script src="js/custom.js"></script> 

<!-- Tool Tips --> 

<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript">
  
  jQuery().ready(function() {
	
    $(".open1").click(function() {
      if (validate(1)) {
        $(".frm").hide("fast");
        $("#sf2").show("slow");
      }
    });

    $(".open2").click(function() {
      if (validate(2)) {
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      }
    });
    
    $(".open3").click(function() { 
	
    	if(!validate(3))
			return false;
     });
   	 $(".back2").click(function() {
	   	$(".frm").hide("fast");
	   	$("#sf1").show("slow");
	 });

	 $(".back3").click(function() {
	    $(".frm").hide("fast");
	    $("#sf2").show("slow");
	 });
	 
  });
</script>
<!-- Tool Tips -->
<script src="js/bootstrap-tooltip.js"></script>
<script type="text/javascript">
     $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
</script>
<!-- End Tool Tips -->
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.js"></script>
<script>
      $('#date-picker').datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function (ev) {
             $(this).blur();
             $(this).datepicker('hide');
         });
      $('#date-picker2').datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function (ev) {
             $(this).blur();
             $(this).datepicker('hide');
         });
      $('#date-picker3').datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function (ev) {
             $(this).blur();
             $(this).datepicker('hide');
         });
      $('#date-picker4').datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function (ev) {
             $(this).blur();
             $(this).datepicker('hide');
         });
      $(".date-picker").on("change", function () {
             var id = $(this).attr("id");
             var val = $("label[for='" + id + "']").text();
             $("#msg").text(val + " changed");
         });
</script>
<!-- End Date Picker -->

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