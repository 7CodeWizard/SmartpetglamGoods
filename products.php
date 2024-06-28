<?php include 'common-header.php';?>
<?php include 'header.php';?>
<div class="innrBreadcrm">
    <div class="container">
        <a href="index.php">Home</a>  &gt;  Products 
    </div>
</div>
<div class="shop-sec-1">
    <div class="container"> 
        <p class="comn-hdng">Shop Our Best Sellers </p>
        <div class="clearall"></div>
        <div class="s2-block">
            <div class="s2-prd-box">    
                <div class="s2-prd-div">
                    <img src="<?php echo $config['productSpecs'][1]['img']; ?>" class="s2-prd-1">  
                </div>
                <div class="s2-prd-txt"> 
                    <p class="s2-p2"><?php echo $config['productSpecs'][1]['nm']; ?></p> 
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
                    <p class="s2-p3">$<?php echo number_format($config['productSpecs'][4]['prc'],2); ?></p>
                    <a href="shop.php?pidx=<?php echo base64_encode('4');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                </div>  
            </div>
        
            <div class="s2-prd-box">    
                <div class="s2-prd-div">
                    <img src="<?php echo $config['productSpecs'][5]['img']; ?>" class="s2-prd-1">  
                </div>
                <div class="s2-prd-txt"> 
                    <p class="s2-p2"><?php echo $config['productSpecs'][5]['nm']; ?></p> 
                    <p class="s2-p3">$<?php echo number_format($config['productSpecs'][5]['prc'],2); ?></p>
                    <a href="shop.php?pidx=<?php echo base64_encode('5');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                </div>
            </div>
        
            <div class="s2-prd-box">      
                <div class="s2-prd-div">
                    <img src="<?php echo $config['productSpecs'][6]['img']; ?>" class="s2-prd-1">    
                </div>
                <div class="s2-prd-txt">
                    <p class="s2-p2"><?php echo $config['productSpecs'][6]['nm']; ?></p>
                    <p class="s2-p3">$<?php echo number_format($config['productSpecs'][6]['prc'],2); ?></p>
                    <a href="shop.php?pidx=<?php echo base64_encode('6');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                </div>
            </div>
            
            <div class="s2-prd-box">      
                <div class="s2-prd-div">
                    <img src="<?php echo $config['productSpecs'][7]['img']; ?>" class="s2-prd-1">    
                </div>
                <div class="s2-prd-txt">
                    <p class="s2-p2"><?php echo $config['productSpecs'][7]['nm']; ?></p>
                    <p class="s2-p3">$<?php echo number_format($config['productSpecs'][7]['prc'],2); ?></p>
                    <a href="shop.php?pidx=<?php echo base64_encode('7');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                </div>
            </div>
            
            <div class="s2-prd-box">      
                <div class="s2-prd-div">
                    <img src="<?php echo $config['productSpecs'][8]['img']; ?>" class="s2-prd-1">    
                </div>
                <div class="s2-prd-txt">
                    <p class="s2-p2"><?php echo $config['productSpecs'][8]['nm']; ?></p>
                    <p class="s2-p3">$<?php echo number_format($config['productSpecs'][8]['prc'],2); ?></p>
                    <a href="shop.php?pidx=<?php echo base64_encode('8');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                </div>
            </div>
            
            <div class="s2-prd-box">      
                <div class="s2-prd-div">
                    <img src="<?php echo $config['productSpecs'][9]['img']; ?>" class="s2-prd-1">    
                </div>
                <div class="s2-prd-txt">
                    <p class="s2-p2"><?php echo $config['productSpecs'][9]['nm']; ?></p>
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
                    <p class="s2-p3">$<?php echo $config['productSpecs'][12]['prc']; ?></p>
                    <a href="shop.php?pidx=<?php echo base64_encode('12');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>
