<?php 
$prods1 = '1-2-3-4';
if(!empty($_GET["pidx"])){
	$prods = explode("-",trim(base64_decode($_GET["pidx"])));
}else{
	$prods = explode("-",trim($prods1));
}
?>
<?php include('common-header.php');?>
<?php include 'header.php';?>
<div class="innrBreadcrm">
    <div class="container">
        <a href="index.php">Home</a>  &gt;  Complete Checkout 
    </div>
</div>
<!--============== CART FORM ==============-->
<div class="cart-frm">
<div class="container bdinpad">
    <form role="form" action="thankyou.php" id="frmOrder" method="post">
        <?php include'cart-from.php'?>
    </form>
    </div>
</div>
<!--============== CART FORM ==============-->

<!--============== FOOTER ==============-->
<?php include'footer.php'?>
<!--============== FOOTER ==============-->

<!--============== POP UP ==============-->
<div id="pop_overlay">
	<div id="pop_content">
      <img src="images/icon-cross.png" alt="" class="cross">
	  <center><img src="images/cvv2-location.jpg" alt=""></center>    
    </div>
</div>
<!--============== POP UP ==============-->
<script type="text/javascript" src="js/slick.js"></script>
<script src="js/fontaswome.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/cartv5.js.php"></script>
<script type="text/javascript" src="js/jquery.h5validate.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	showCart(true);
	  
  $('.proceed-chkbtn').click(function (e) { //#A_ID is an example. Use the id of your Anchor
		$('html, body').animate({
			scrollTop: $('#frmsec').offset().top - 10 //#DIV_ID is an example. Use the id of your destination on the page
		}, 'slow');		
  });
  
 $(".add-to-cart").click(function(e){
		e.preventDefault();
		var condiv = $(this).closest('.add-cart-blk');
		var pid = condiv.find("#pid_prc").attr("data-id");
		removeRowItem(pid);
		addItem(pid, $('input[name="qtybox"]').val());
		showCart(true);
	});
	/*-----------------------*/
	
	$("#view-from").click(function () {
		$(".div-box").show("slow");
		$(".cart-sec1").addClass('cart_summary');
		$(".cart_summary .summry-lft-hdr").css('display','block');
		$('.cart_summary .card-box4').hide();
		$("html, body").animate({ scrollTop: 200 }, "slow");
  		return false;
	});
	$('.continue-shpbtn1').click(function(e) {
        $(".cart-sec1").removeClass('cart_summary');
    });
  
	$('#pop_overlay').css('display','none');
		$("a.sccode").click(function() { 
			window.setTimeout(function() {       
				$("#pop_overlay").fadeIn();
			}, 200);
		});	
		$(".cross").click(function(){
			$("#pop_overlay").fadeOut();
	});
	
	$('#frmOrder').h5Validate({
		errorClass:'formError'
	});
	
	$("input[data-mask='phone']").mask("999-999-9999");
	$("input[data-mask='cccvv']").mask("999");
	$("input[data-mask='card']").mask("9999-9999-9999-9999");
	
	$('#agree').change(function(){
		if($(this).is(":checked")) {
			$(this).parent().removeClass('formError');
		} else {
			$(this).parent().addClass('formError');
		}
	});
				
	$( "#frmOrder" ).bind('formValidated', function (event, data) {
		if(data.valid==true)
		{
			window.focus();
			$('#order input[type="submit"]').prop('disabled', true);
			window.internalLink = true;
			showProcessing();
			return true;
		} else {
			event.preventDefault();
			$("input[type='checkbox'].formError").each(function(){
				$(this).parent().addClass('formError');
			});
			return false;
		}
	});
});
$("#chkbx").click(function(e) {
	$("#billing-info").slideToggle();
});
</script>    
</body>
</html>