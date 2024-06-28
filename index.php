<?php include 'common-header.php';?>

<div class="shifter_page">
	<?php include 'header.php';?>
    <!--/*=====BANNER======*/-->
    <div class="banner">
        <div class="container">
            <div class="bnr-content">
                <div class="bnr-lft">
                	<p class="brn-p1">Smart Pet Glam Goods</p>   
                    <p class="brn-p3">Comprehensive wellness <span>for your furry friends</span></p>
					<p class="p2-bnr">We understand the importance of holistic wellness for your furry companions and strive to offer the highest standard of care and attention.</p>
              		<img src="images/brn-mob-prd.png" alt="" class="brn-prd show-mob">
					<div class="clearall"></div>
                    <a href="products.php" class="shop-btn">Shop Now</a>
                </div>
            </div>  
        </div>
    </div> 
    
    <!--/*=====SECTION - 5=====*/-->
    <div class="section5">
        <div class="container"> 
        	<p class="comn-hdng">Introducing Smart Pet Glam Goods</p>  
			<p class="comn-para">At <b>Smart Pet Glam Goods</b>, we provide a handpicked assortment of premium pet accessories, meticulously crafted to ensure your companion's well-being, happiness, and boundless energy. From durable toys to cozy beds, we are dedicated to keeping your furry friend tail-wagging with joy.</p>    
            <ul class="s5-list">
                <li><img src="<?php echo $config['productSpecs'][2]['img']; ?>" class="s5-pics">Pet Comfort & <br>Health</li>
                 
                <li><img src="<?php echo $config['productSpecs'][4]['img']; ?>" class="s5-pics">Convenience & <br>Utility</li>
                 
               <li><img src="<?php echo $config['productSpecs'][5]['img']; ?>" class="s5-pics">Outdoor & Travel Essentials</li>
               
               <li><img src="<?php echo $config['productSpecs'][3]['img']; ?>" class="s5-pics">Entertainment & Enrichment</li>
               
               <li><img src="<?php echo $config['productSpecs'][11]['img']; ?>" class="s5-pics">Home and <br>Decor</li>
            </ul> 
         </div>
    </div>
    
    <!--/*=====SECTION - 6=====*/-->
    <div class="section-6">
    	<div class="container">
        	<div class="s6-lft">
            	<p class="comn-hdng"> Discover the Latest in Pet Care </p>
                <p class="comn-para">Explore the latest advancements in keeping your furry companions happy, healthy, and thriving.</p>
                <div class="s6-tab">
                <div class="s2-block">
                
                    <div class="s2-prd-box"> 
                    <a href="shop.php?pidx=<?php echo base64_encode('2');?>">     
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][2]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][2]['nm']; ?></p>
                            
                            
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][2]['prc'],2); ?></p>
                        
                        </div>
                        </a>
                    </div>
                    
                    <div class="s2-prd-box">
                    <a href="shop.php?pidx=<?php echo base64_encode('10');?>">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][10]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][10]['nm']; ?></p>
                           
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][10]['prc'],2); ?></p>
                        
                        </div>
                        </a>
                    </div>
                    
                    <div class="s2-prd-box">   
                    <a href="shop.php?pidx=<?php echo base64_encode('4');?>">   
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][4]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][4]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][4]['prc'],2); ?></p>
                        
                        </div>
                        </a>
                    </div>
                    
                    
                </div>
            </div>
            </div>
          
        	<div class="s6rgt">
            	<img src="images/s6-bg-img.png" class="s6-bg-img">
                <p class="s6-rgt-txt">Pet <br>care Products</p>
            </div>	
           
            
            
        </div>
    </div>
     
     
         <!--/*=====SECTION - 6=====*/-->
    <div class="section-6 sec6_bg">
    	<div class="container">
           <div class="s6-mid">
        		<p class="comn-hdng">Find Our Top Picks </p>
            </div>
            
            
                <div class="s2-block">
                
                	<div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][1]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][1]['nm']; ?></p>
                            
                            
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][1]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('1');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][2]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][2]['nm']; ?></p>
                            
                            
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][2]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('2');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][3]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][3]['nm']; ?></p>
                            
                            
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][3]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('3');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][4]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][4]['nm']; ?></p>
                            
                            
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][4]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('4');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][9]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][9]['nm']; ?></p>
                            
                            
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][9]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('9');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][10]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][10]['nm']; ?></p>
                           
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][10]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('10');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][11]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][11]['nm']; ?></p>
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][11]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('11');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                    
                    <div class="s2-prd-box">      
                        <div class="s2-prd-div">
                            <img src="<?php echo $config['productSpecs'][12]['img']; ?>" class="s2-prd-1">    
                        </div>
                        <div class="s2-prd-txt">
                            <p class="s2-p2"><?php echo $config['productSpecs'][12]['nm']; ?></p>
                           
                        </div>
                        <div class="s2-prd_box">
                        <p class="s2-p3">$<?php echo number_format($config['productSpecs'][12]['prc'],2); ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('12');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
	<!--/*=====STRIP======*/-->
    <div class="strip">
    	<div class="container">
        	<p class="strip-txt">Order Essential Products Today</p>
            <p class="comn-para">Ensure your furry friend's needs are met with ease by ordering their essentials today. Enjoy the convenience of having top-quality products delivered straight to your door, ensuring your pet's happiness and well-being.</p>
 			<a href="products.php" class="shop-btn">Shop Now</a>
        </div>
    </div>
    <!--/*=====SECTION - 1======*/-->
    <div class="section1" id="about">
        <div class="container">
            <div class="sec1-in">
            	<p class="comn-hdng">Find the Best Without the Hassle</p>  
                <img src="images/s1-pet.png" alt="" class="s1-prodt show-mob">  
                <img src="images/s1-pet.png" alt="" class="s1-prodts hide-mob"> 
                <p class="comn-para">Enjoy effortless shopping with our curated collection of top-rated products across various categories. Quality made simple and enjoyable.</p>
                <div class="s6-tab">
                <ul class="s1-lst">
					<li><img src="images/s1-li-icon1.png"><span>Expertly Curated </span>Top Picks, Less Sifting</li>
					<li><img src="images/s1-li-icon1.png"><span>Top-Rated Satisfaction </span>Peace of Mind, Proven Quality</li>
					<li><img src="images/s1-li-icon1.png"><span>Effortless Exploration</span>Easy Browsing, Big Selection</li>
					<li><img src="images/s1-li-icon1.png"><span>Quality Made Simple </span>Hassle-Free Quality</li>
				</ul>
					<a href="products.php" class="shop-btn">Shop Now</a>
            </div>
               	
            </div>
            
        </div>
    </div>
    
    
    <!--/*=====SECTION - 5=====*/--> 
    
    <!--/*=====Footer======*/-->    
    
    <?php include 'footer.php';?>
</div>

</body>
</html>
