<?php include 'common-header.php';?>

<div class="shifter_page">
	<?php include 'header.php';?>
    
    <div class="innrBreadcrm">
        <div class="container">
            <a href="index.php">Home</a>  >  <span>Contact Us</span>
        </div>
    </div>
    
    <!--/*=====SECTION - 2======*/-->
    <div class="cont-sec-1">
        <div class="container">
            <div class="cont-box">
                <div class="cont-lft">
                    <p class="comn-hdng">Customer Support </p>
                    <p class="comn-para">If you require help, please do not hesitate and feel free to reach us at <a href="mailto:<?php echo $config['company_email'];?>"><?php echo $config['company_email'];?></a>. <br class="show-desk">We would be more than happy to answer your questions</p>
                    <ul class="cont-ul">
                    	<li>
                            <img src="images/ic1-cont.png" class="cont-ic-1">
                            <p class="s4-p2">Address:</p>
                            <p class="s4-p1"><?php echo $config['company_name']?> <br><?php echo $config['company_address'];?></p>
                        </li>
                        <li>
                            <img src="images/ic3-cont.png" class="cont-ic-1">
                            <p class="s4-p2"> Phone:</p>
                            <p class="s4-p1"><?php echo $config['phone'];?></p>
                        </li>
                        <li>
                            <img src="images/ic2-cont.png" class="cont-ic-1">
                            <p class="s4-p2"> Email: </p>
                            <p class="s4-p1"><a href="mailto:<?php echo $config['company_email'];?>"><?php echo $config['company_email'];?></a></p>
                        </li>
                        <li>
                            <img src="images/ic1-cont.png" class="cont-ic-1">
                            <p class="s4-p2">Return Address:</p>
                            <p class="s4-p1"><?php echo $config['return_address'];?></p>
                        </li>
                        <li>
                            <img src="images/ic4-cont.png" class="cont-ic-1">
                            <p class="s4-p2">Hours of Operation:</p>
                            <p class="s4-p1"><?php echo $config['cs_hours'];?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php';?>

</div>


</body>
</html>
