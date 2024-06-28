<!--/*====FOOTER====*/-->
<footer>
	<div class="container">
    	<img src="images/cards.png" />
        <div class="ftrBox2">
            <ul class="ftr-nav">
                <li><img src="images/location.png" alt=""> <?php echo $config['company_name']?>,<br class="show-mob"> <?php echo $config['company_address'];?></li>
                <li><img src="images/email.png" alt=""> <a href="mailto:<?php echo $config['company_email']?>"><?php echo $config['company_email']?></a></li>
                <li><img src="images/phone.png" alt=""> <?php echo $config['phone']?></li>
            </ul>
        </div>
    </div>
    <ul class="other-links">
        <li><a href="terms.php" target="_blank">Terms & Conditions</a></li>
        <li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
</footer>

<div class="foo-btm">
	<div class="container">
    	<p>Copyright © <?php echo $config['product_name']?> <?php echo date('Y')?>. <br class="show-mob"> All Rights Reserved.</p>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.h5validate.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>

<script src="js/wan-spinner.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	
	$('.menu-bar li a').click(function(){
		$('li a').removeClass("active");
		$(this).addClass("active");
	});


	$('.mob-mnu-ic').click(function(e) {
		$('.mobimenu').slideToggle();
		$('.mob-mnu-ic span').toggle();
		$('.dl-trigger').toggleClass('dl-active');
	});	
	
	$('.mobimenu li a').click(function(e) {
		$('.mobimenu').slideToggle();
		$('.mob-mnu-ic span').toggle();
		$('.dl-trigger').toggleClass('dl-active');
	});
	
});

$(document).scroll(function() {
	if ($(this).scrollTop() > 30){
	   $('.top-bar').addClass('fixed-nav');
	}else{
		$('.top-bar').removeClass('fixed-nav');
	}
	
	if ($(this).scrollTop() > 10){
	   $('.mobimenu').addClass('mobimenu-top');
	}else{
		$('.mobimenu').removeClass('mobimenu-top');
	}

	
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
	$('.order-btn').click(function(e) {
		var selid = $(this).attr('data-id');
		$('.btn').text('Select');
		$(this).find('.btn').text('SELECTED');
		$('.order-btn').not(this).removeClass('picked');
		$(this).addClass('picked');
		$('input[type=checkbox]').prop("checked",false);
		$(this).find('[type=checkbox]').prop('checked', true);
		window.location.href="checkout.php?pidx=" + selid;
    });
	
	$('.step1Btn').click(function(e) {
		var result = $('#frmOrder').h5Validate('allValid');
		if(result){
			$('.step1-hd').removeClass('actv');
			$('.step2-hd').addClass('actv');
			$('#shippingInfo').hide();
			$('#paymentInfo').fadeIn();
			bookmarkscroll.scrollTo('paymentInfo');
			return false;
		}else{
		}

	});
	
});

</script>