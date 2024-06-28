<?php 
$pagenm = $_SERVER['REQUEST_URI'];
require('config.inc.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $config['product_name']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/inner.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" >
<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
<link rel="stylesheet" type="text/css" href="css/cart-from-validation.css">
</head>

<body>
<!-----------TOP SECTION---------->
<div class="top-fix-bar">
    <!--------Navigation-Section---------->
    <?php include 'header.php' ?>
</div>

<!-----Breadcrm----->
<div class="prodBreadcrm">
    <div class="container">
    	<p><a href="index.php">Home</a> &nbsp;&gt;&nbsp; <span>Cart</span></p>
    </div>
</div>


<div class="container">
    <div class="breadcrumbs style2">
        <a href="index.php">Home</a>
        <a href="cart.php">Cart</a>
        <span>Checkout</span>
    </div>
    
  	<div class="row">
        <div class="col-sm-12">
            
            <div class="chk-sec-block">
            
                <div class="chk-box-rit">
                    <div class="chk-rit-prc-box">
                        <p class="chk-head" style="margin-bottom:5px;">Order Summary</p>
                        <div class="cart-sec1 dsplay">
                    		<div class="nt-slt" id="cartBox"><span class="nt-txt">You have not selected any product...</span></div>
        				</div>
                    </div>
                    
                    <div class="chk-post-logo">
                        <img src="images/chk-post-logo.png" class="post-logo-img" alt="img">
                        Your Order Is Estimated To Arrive by <span class="red-c"><b><script type="text/javascript">getDate(1);</script></b></span>
                    </div>
                    
                    
                    
                </div>
                
                <div class="chk-box-lft">
                    <p class="chk-head">Shipping Information</p>
                    
                    <form role="form" action="thankyou.php" id="frmOrder" method="post" class="pageForm">
                    
                        <input type="hidden" name="step" value="direct_multi_product" />
                        <input type="hidden" name="campaignId" value="" />
                        <input type="hidden" name="shippingId" value="" autocomplete="off" />
                        <input type="hidden" name="ipAddress" value="" />
                        <input type="hidden" id="cc_expires" name="cc_expires" value="">
                        
                        <div class="frmBox">
                            
                            <div class="input-box hlf">
                                <img src="images/ic1.png" alt="" class="fldicon">
                                <input type="text" name="firstName" placeholder="First Name" id="firstName" value="" required maxlength="64">
                            </div>
                            <div class="input-box hlf fr">
                                <img src="images/ic1.png" alt="" class="fldicon">
                                <input type="text" name="lastName" id="lastName" placeholder="Last Name" value="" required maxlength="64" />
                            </div>
                            
                            <div class="input-box">
                                <img src="images/ic2.png" alt="ic1" class="fldicon">
                                <input type="email" class="input-flds h5-email" name="email" id="email" placeholder="E-mail" value="" required maxlength="96" />
                            </div>
                            
                            <div class="input-box">
                                <img src="images/ic3.png" alt="ic3" class="fldicon">
                                <input type="text" class="input-flds h5-phone" name="phone" id="phone" placeholder="Phone Number" value="" required maxlength="12" data-mask="phone" />
                            </div>
                            
                            <div class="input-box">
                                <img src="images/ic4.png" alt="ic6" class="fldicon">
                                <input type="text" class="input-flds" name="shippingAddress1" id="shippingAddress1" placeholder="Address" value="" required maxlength="64" />
                            </div>
                            
                            <div class="input-box">
                                <img src="images/ic6.png" alt="ic7" class="fldicon">
                                <input type="text" class="input-flds" name="shippingCity" id="shippingCity" placeholder="City" value="" required maxlength="32" />
                            </div>
                            
                            <div class="input-box hlf">
                                <img src="images/ic5.png" alt="ic1" class="fldicon">
                                <select class="selcet-fld fl-select" name="shippingState" id="shippingState" required>
                                    <option value="">State</option>
                                    <option value="AL">Alabama (AL)</option>
                                    <option value="AK">Alaska (AK)</option>
                                    <option value="AZ">Arizona (AZ)</option>
                                    <option value="AR">Arkansas (AR)</option>
                                    <option value="CA">California (CA)</option>
                                    <option value="CO">Colorado (CO)</option>
                                    <option value="CT">Connecticut (CT)</option>
                                    <option value="DE">Delaware (DE)</option>
                                    <option value="FL">Florida (FL)</option>
                                    <option value="GA">Georgia (GA)</option>
                                    <option value="HI">Hawaii (HI)</option>
                                    <option value="ID">Idaho (ID)</option>
                                    <option value="IL">Illinois (IL)</option>
                                    <option value="IN">Indiana (IN)</option>
                                    <option value="IA">Iowa (IA)</option>
                                    <option value="KS">Kansas (KS)</option>
                                    <option value="KY">Kentucky (KY)</option>
                                    <option value="LA">Louisiana (LA)</option>
                                    <option value="ME">Maine (ME)</option>
                                    <option value="MD">Maryland (MD)</option>
                                    <option value="MA">Massachusetts (MA)</option>
                                    <option value="MI">Michigan (MI)</option>
                                    <option value="MN">Minnesota (MN)</option>
                                    <option value="MS">Mississippi (MS)</option>
                                    <option value="MO">Missouri (MO)</option>
                                    <option value="MT">Montana (MT)</option>
                                    <option value="NE">Nebraska (NE)</option>
                                    <option value="NV">Nevada (NV)</option>
                                    <option value="NH">New Hampshire (NH)</option>
                                    <option value="NJ">New Jersey (NJ)</option>
                                    <option value="NM">New Mexico (NM)</option>
                                    <option value="NY">New York (NY)</option>
                                    <option value="NC">North Carolina (NC)</option>
                                    <option value="ND">North Dakota (ND)</option>
                                    <option value="OH">Ohio (OH)</option>
                                    <option value="OK">Oklahoma (OK)</option>
                                    <option value="OR">Oregon (OR)</option>
                                    <option value="PA">Pennsylvania (PA)</option>
                                    <option value="RI">Rhode Island (RI)</option>
                                    <option value="SC">South Carolina (SC)</option>
                                    <option value="SD">South Dakota (SD)</option>
                                    <option value="TN">Tennessee (TN)</option>
                                    <option value="TX">Texas (TX)</option>
                                    <option value="UT">Utah (UT)</option>
                                    <option value="VT">Vermont (VT)</option>
                                    <option value="VA">Virginia (VA)</option>
                                    <option value="WA">Washington (WA)</option>
                                    <option value="WV">West Virginia (WV)</option>
                                    <option value="WI">Wisconsin (WI)</option>
                                    <option value="WY">Wyoming (WY)</option>
                                </select>
                            </div>
                            
                            <div class="input-box hlf fr">
                                <img src="images/ic7.png" alt="ic7" class="fldicon">
                                <input type="tel" class="input-flds h5-zip" name="shippingZip" id="shippingZip" placeholder="Zip Code" value="" required maxlength="5">
                            </div>
                            
                       </div>
                        
                        <div class="chk-payment-box">
                            <p class="chk-head">Payment Information</p>
                            
                            <label class="fieldToggle">
                            <input type="checkbox" name="togData" id="togData" checked="checked">
                            <span class="togship"></span>
                            Billing address same as shipping</label>
                            
                            <div class="shipaddress" style="display:none;">
                            	
                                
                                <div class="input-box hlf">
                                    <img src="images/ic1.png" alt="" class="fldicon">
                                    <input type="text" class="input-flds" name="billingFirstName" id="billingFirstName" placeholder="First Name" value="" required maxlength="64" />
                                </div>
                                <div class="input-box hlf fr">
                                    <img src="images/ic1.png" alt="" class="fldicon">
                                    <input type="text" class="input-flds" name="billingLastName" id="billingLastName" placeholder="Last Name" value="" required maxlength="64" />
                                </div>
  
                                <div class="input-box">
                                    <img src="images/ic4.png" alt="ic6" class="fldicon">
                                    <input type="text" class="input-flds" name="billingAddress1" id="billingAddress1" placeholder="Address" value="" required maxlength="64" />
                                </div>
                                
                                <div class="input-box">
                                    <img src="images/ic6.png" alt="ic7" class="fldicon">
                                    <input type="text" class="input-flds" name="billingCity" id="billingCity" placeholder="City" value="" required maxlength="32" />
                                </div>

                                
                                <div class="input-box hlf">
                                    <img src="images/ic5.png" alt="ic1" class="fldicon">
                                    <select name="billingState" class="field-all" id="billingState" required >
                                        <option value="">Select State</option>
                                        <option value="AL">Alabama (AL)</option>
                                        <option value="AK">Alaska (AK)</option>
                                        <option value="AZ">Arizona (AZ)</option>
                                        <option value="AR">Arkansas (AR)</option>
                                        <option value="CA">California (CA)</option>
                                        <option value="CO">Colorado (CO)</option>
                                        <option value="CT">Connecticut (CT)</option>
                                        <option value="DE">Delaware (DE)</option>
                                        <option value="FL">Florida (FL)</option>
                                        <option value="GA">Georgia (GA)</option>
                                        <option value="HI">Hawaii (HI)</option>
                                        <option value="ID">Idaho (ID)</option>
                                        <option value="IL">Illinois (IL)</option>
                                        <option value="IN">Indiana (IN)</option>
                                        <option value="IA">Iowa (IA)</option>
                                        <option value="KS">Kansas (KS)</option>
                                        <option value="KY">Kentucky (KY)</option>
                                        <option value="LA">Louisiana (LA)</option>
                                        <option value="ME">Maine (ME)</option>
                                        <option value="MD">Maryland (MD)</option>
                                        <option value="MA">Massachusetts (MA)</option>
                                        <option value="MI">Michigan (MI)</option>
                                        <option value="MN">Minnesota (MN)</option>
                                        <option value="MS">Mississippi (MS)</option>
                                        <option value="MO">Missouri (MO)</option>
                                        <option value="MT">Montana (MT)</option>
                                        <option value="NE">Nebraska (NE)</option>
                                        <option value="NV">Nevada (NV)</option>
                                        <option value="NH">New Hampshire (NH)</option>
                                        <option value="NJ">New Jersey (NJ)</option>
                                        <option value="NM">New Mexico (NM)</option>
                                        <option value="NY">New York (NY)</option>
                                        <option value="NC">North Carolina (NC)</option>
                                        <option value="ND">North Dakota (ND)</option>
                                        <option value="OH">Ohio (OH)</option>
                                        <option value="OK">Oklahoma (OK)</option>
                                        <option value="OR">Oregon (OR)</option>
                                        <option value="PA">Pennsylvania (PA)</option>
                                        <option value="RI">Rhode Island (RI)</option>
                                        <option value="SC">South Carolina (SC)</option>
                                        <option value="SD">South Dakota (SD)</option>
                                        <option value="TN">Tennessee (TN)</option>
                                        <option value="TX">Texas (TX)</option>
                                        <option value="UT">Utah (UT)</option>
                                        <option value="VT">Vermont (VT)</option>
                                        <option value="VA">Virginia (VA)</option>
                                        <option value="WA">Washington (WA)</option>
                                        <option value="WV">West Virginia (WV)</option>
                                        <option value="WI">Wisconsin (WI)</option>
                                        <option value="WY">Wyoming (WY)</option>
                                    </select>
                                </div>
                                
                                <div class="input-box hlf fr">
                                    <img src="images/ic7.png" alt="ic7" class="fldicon">
                                    <input type="tel" class="input-flds h5-zip" name="billingZip" id="billingZip" placeholder="Zip" value="" required maxlength="8">
                                </div>
                            </div>
                            
                            <div class="card-accept"> We Accept: <img src="images/cc-icon.png"></div>
                            
                            <div class="input-box payfld">
                                <input type="text" name="creditCardNumber" id="creditCardNumber" value="" placeholder="Credit Card Number" autocomplete="off" required maxlength="16" onkeydown="return onlyNumbers(event,'cc')" class="h5-ccno field-all" />
                            </div>
                            
                            <div class="input-box hlf payfld" style="padding:0;">
                                <select class="field-all" name="expmonth" id="expmonth" required>
                                    <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            
                            <div class="input-box hlf fr payfld" style="padding:0;">
                                <select class="field-all" name="expyear" id="expyear" required>
                                    <option value="">Year</option>
                                    <option value="21">2021</option>
                                    <option value="22">2022</option>
                                    <option value="23">2023</option>
                                    <option value="24">2024</option>
                                    <option value="25">2025</option>
                                    <option value="26">2026</option>
                                    <option value="27">2027</option>
                                    <option value="28">2028</option>
                                    <option value="29">2029</option>
                                    <option value="30">2030</option>
                                </select>
                            </div>
                            
                            
                            
                            <div class="input-box hlf payfld cvv">
                                <input type="tel" class="field-all" placeholder="Security code" id="cvv" onkeypress="return isNumberKey(event)" maxlength="3" required>
                            </div>
                            <a href="cvv.php" class="whats-dis fancybox fancybox.iframe">What is this?</a>
                        </div>
                        
                        <input type="submit" value="Complete Checkout" class="submit">
                    
                    </form>
                    
                </div>
            
                
            
        	</div>
        </div>
	</div>
</div>


<?php include 'footer.php' ?>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/Modernizr.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>

<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/cartv5.js.php"></script>
<script type="text/javascript" src="js/jquery.h5validate.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){ 

	showCart(true);

	$('.fancybox').fancybox();
	
	$('#frmOrder').h5Validate({
		errorClass:'formError'
	});
	
	
	$('.fieldToggle').click(function(){
		if($('#togData').prop("checked") == true){
			$('.shipaddress').slideUp();
		}
		else if($('#togData').prop("checked") == false){
		   $('.shipaddress').slideDown();
		}
	});

	$('#summry-tog').click(function(e) {
		$('.summry-drower').slideToggle();
		$('#summry-tog').toggleClass('open');
	});
});
</script> 
</body>
</html>
