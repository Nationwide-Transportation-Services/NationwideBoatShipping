<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.10.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/classie.js"></script> 
<script src="js/cbpAnimatedHeader.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/scrollReveal.js"></script> 
<script src="js/jquery.scrollTo.js" defer></script> 
<script src="js/jquery.nav.js" defer></script> 
<script src="js/imagesloaded.pkgd.min.js" defer></script> 
<script src="js/isotope.min.js" defer></script> 
<script src="js/jquery.magnific-popup.min.js" defer></script> 
<script src="js/jqBootstrapValidation.js" defer></script> 
<script src="js/custom.js"></script> 
    <script>
    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
    </script>