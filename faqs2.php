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

<?php include_once 'includes/nav.php';?>

<?php include_once 'includes/get-started.php';?>

<section id="featured2" class="featured">
  <div class="container">
    <div class="row">
          <h1>Nationwide Faq's Page</h1>
          <p>If you dont find your answer here, please feel free to contact us <A href="http://nationwideboatshipping.com/contact.php">here</a>.</p>
          
    <div class="row">
<div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        How can I track my shipping?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>			
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis lacinia ipsum, id pharetra lacus congue sed. Donec non lorem volutpat, mollis eros a, vehicula orci. Fusce id mattis nulla. Pellentesque volutpat felis eros, at pharetra purus maximus ut. Nunc tristique purus nibh, sed tempus dui volutpat eget. Nulla eget ante commodo, tristique augue ac, molestie neque. Donec nisl lorem, ornare sed hendrerit in, ultricies eu orci. Praesent sed rhoncus lorem, ac gravida elit. Vivamus quis efficitur ex, quis placerat risus.
                </div>
			</div>
			
			
			<div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        Is it safe?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis lacinia ipsum, id pharetra lacus congue sed. Donec non lorem volutpat, mollis eros a, vehicula orci. Fusce id mattis nulla. Pellentesque volutpat felis eros, at pharetra purus maximus ut. Nunc tristique purus nibh, sed tempus dui volutpat eget. Nulla eget ante commodo, tristique augue ac, molestie neque. Donec nisl lorem, ornare sed hendrerit in, ultricies eu orci. Praesent sed rhoncus lorem, ac gravida elit. Vivamus quis efficitur ex, quis placerat risus.
                </div>
			</div>
			

			<div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        Is Nationwide Boat Shipping certified?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis lacinia ipsum, id pharetra lacus congue sed. Donec non lorem volutpat, mollis eros a, vehicula orci. Fusce id mattis nulla. Pellentesque volutpat felis eros, at pharetra purus maximus ut. Nunc tristique purus nibh, sed tempus dui volutpat eget. Nulla eget ante commodo, tristique augue ac, molestie neque. Donec nisl lorem, ornare sed hendrerit in, ultricies eu orci. Praesent sed rhoncus lorem, ac gravida elit. Vivamus quis efficitur ex, quis placerat risus.
                </div>
			</div>
			

			<div class="panel panel-primary">
				<div class="panel-heading clickable">
                    <h3 class="panel-title">
                        Can I stop services?</h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-minus"></i></span>
                </div>
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis lacinia ipsum, id pharetra lacus congue sed. Donec non lorem volutpat, mollis eros a, vehicula orci. Fusce id mattis nulla. Pellentesque volutpat felis eros, at pharetra purus maximus ut. Nunc tristique purus nibh, sed tempus dui volutpat eget. Nulla eget ante commodo, tristique augue ac, molestie neque. Donec nisl lorem, ornare sed hendrerit in, ultricies eu orci. Praesent sed rhoncus lorem, ac gravida elit. Vivamus quis efficitur ex, quis placerat risus.
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