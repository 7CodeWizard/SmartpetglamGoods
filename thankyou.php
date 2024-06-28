<?php include('common-header.php');?>
<?php include 'header.php';?>

<div class="innrBreadcrm">
    <div class="container">
        <a href="index.php">Home</a>  &gt;  Thank You 
    </div>
</div>
<div class="inr-cont thank-pg">
	<div class="container">
    	<img src="images/thank-tick.png" alt="">
        <div class="comn-hdng">Thank You For Your Order!</div>
        <p class="comn-para">Your order is being processed. Please look for an email receipt.</p>
        <p class="comn-para">Your estimated delivery date is on or before  <?php echo date("l F j, Y", strtotime("+ 4 days")); ?>.</p>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>
