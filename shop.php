<?php 
$prods1 = '1-2-3-4';
if(!empty($_GET["pidx"])){
	$prods = explode("-",trim(base64_decode($_GET["pidx"])));
}else{
	$prods = explode("-",trim($prods1));
}
?>
<?php include 'common-header.php';?>

<style>
#pop_overlay-ing {
    background-color: rgba(0, 0, 0, 0.6);
    clear: none;
    display: none;
    height: 100%;
    left: 0;
    margin: 0;
    padding: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
}
#pop_content-ing {
        width: 100%;
    background-color: white;
    border-radius: 4px;
    margin: 6% auto 0 auto;
    position: relative;
    text-align: center;
    padding: 30px 20px 20px 20px;
    max-width: 900px;
    height: 599px;
    overflow-y: scroll;
}
#pop_content-ing .ing-img{ max-width:60%;}
.cross {
    position: sticky;
    max-width: 100%;
    background: #ffffff;
    border-radius: 30px;
    padding: 5px;
    float: right;
    filter: drop-shadow(2px 4px 6px black);
    margin-right: -20px;
}
@media only screen and (max-width:767px) {
	#pop_content-ing .ing-img {
		max-width: 90%;
	}
}
</style>

<div class="shifter_page">
	<?php include 'header.php';?>
    
    <div class="innrBreadcrm">
        <div class="container">
            <a href="index.php">Home</a>  >  <a href="shop.php">Products</a>  >  <span><?php echo $config['productSpecs'][$prods[0]]['nm']; ?></span>
        </div>
    </div>
    
    <div class="prd-sec-1">
        <div class="container">
        	<p class="prd-s1-p1 show-mob"><?php echo $config['productSpecs'][$prods[0]]['nm']; ?></p>
            <p class="prd-s1-p3 show-mob"> </p>
            <div class="prd-s1-lft">
                <div class="clearall"></div>
                <div class="prd-slide-div">
                    <img src="<?php echo $config['productSpecs'][$prods[0]]['img'] ; ?>" class="prd-slide-1">
                </div>
                <div class="comn-para show-mob"><?php echo $config['productSpecs'][$prods[0]]['desc']; ?></div>
                <ul class="s1-lst">
					<li><img src="images/s1-li-icon1.png"><span>Expertly Curated </span>Top Picks, Less Sifting</li>
					<li><img src="images/s1-li-icon1.png"><span>Top-Rated Satisfaction </span>Peace of Mind, Proven Quality</li>
					<li><img src="images/s1-li-icon1.png"><span>Effortless Exploration</span>Easy Browsing, Big Selection</li>
					<li><img src="images/s1-li-icon1.png"><span>Quality Made Simple </span>Hassle-Free Quality</li>
				</ul>
            </div>
            
            <div class="prd-s1-rit add-cart-blk">
            <p class="prd-s1-p1 show-desk show-tab"><?php echo $config['productSpecs'][$prods[0]]['nm']; ?></p>
            <div class="clearall"></div>
            <div class="comn-para show-desk show-tab"><?php echo $config['productSpecs'][$prods[0]]['desc']; ?></div>
            <p class="prd-s1-p3 price" id="pid_prc" data-id="<?php echo $config['productSpecs'][$prods[0]]['id']; ?>" data-price="<?php echo number_format($config['productSpecs'][$prods[0]]['prc'],2); ?>">Price: <span>$<?php echo number_format($config['productSpecs'][$prods[0]]['prc'],2); ?></span></p>
            <div class="clearall"></div>
            <div class="prd_quantity">
                <p class="prd-strength-p1">Quantity:</p>
                <div class="wan-spinner2"> <a href="javascript:void(0)" class="minus">-</a>
                    <input type="text" class="qtybox" name="qtybox" value="1">
                    <a href="javascript:void(0)" class="plus">+</a>
                </div>
            </div>
            <div class="clearall"></div>
            <div class="clearall"></div>
            <a href="javascript:void(0);" class="add-to-cart shop-btn">Add To Cart</a>
            <img src="images/cards.png" class="prd-cards">
            
            <div class="clearall"></div>
            
            <p class="comn-hdng">Other Products</p>            
            
            <div class="s2-block">
				<?php if(!empty($prods[0]) && $prods[0] != 1) {?>	
                <div class="s2-prd-box item"> 
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][1]['img']; ?>" class="s2-prd-1">   
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][1]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][1]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('1');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
            <?php } if(!empty($prods[0]) && $prods[0] != 2) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][2]['img']; ?>" class="s2-prd-1">      
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][2]['nm']; ?></p> 
                        <p class="s2-p3">$<?php echo $config['productSpecs'][2]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('2');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 3) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][3]['img']; ?>" class="s2-prd-1">      
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][3]['nm']; ?></p> 
                        <p class="s2-p3">$<?php echo $config['productSpecs'][3]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('3');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 4) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][4]['img']; ?>" class="s2-prd-1">      
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][4]['nm']; ?></p> 
                        <p class="s2-p3">$<?php echo $config['productSpecs'][4]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('4');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 5) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][5]['img']; ?>" class="s2-prd-1">     
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][5]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][5]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('5');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 6) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][6]['img']; ?>" class="s2-prd-1">     
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][6]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][6]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('6');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 7) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][7]['img']; ?>" class="s2-prd-1">     
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][7]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][7]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('7');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 8) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][8]['img']; ?>" class="s2-prd-1">    
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][8]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][8]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('8');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 9) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][9]['img']; ?>" class="s2-prd-1">    
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][9]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][9]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('9');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 10) {?>
                <div class="s2-prd-box item">  
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][10]['img']; ?>" class="s2-prd-1">    
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][10]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][10]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('10');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
				<?php } if(!empty($prods[0]) && $prods[0] != 11) {?>
                <div class="s2-prd-box item">   
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][11]['img']; ?>" class="s2-prd-1">    
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][11]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][11]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('11');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
            
				<?php } if(!empty($prods[0]) && $prods[0] != 12) {?>
                <div class="s2-prd-box item"> 
                    <div class="prd-s2-prd-div">
                        <img src="<?php echo $config['productSpecs'][12]['img']; ?>" class="s2-prd-1">     
                    </div>
                    <div class="s2-prd-txt">
                        <p class="s2-p2"><?php echo $config['productSpecs'][12]['nm']; ?></p>
                        <p class="s2-p3">$<?php echo $config['productSpecs'][12]['prc']; ?></p>
                        <a href="shop.php?pidx=<?php echo base64_encode('12');?>"><p class="shop-btn s2btn">Shop Now </p></a>
                    </div>
                </div>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</div>

<div id="pop_overlay-ing">
	<div id="pop_content-ing">
      <img src="images/icon-cross.png" alt="" class="cross">
	  <center><?php echo $config['productSpecs'][$prods[0]]['ingredients']; ?></center>    
    </div>
</div>

<script type="text/javascript" src="js/jquery.cookie.js"></script> 
<script type="text/javascript" src="js/cartv5.js.php"></script> 
<script type="text/javascript">
$(document).ready(function(e) {
	$('#pop_overlay-ing').css('display','none');
		$("a.sccode-ing").click(function() { 
			window.setTimeout(function() {       
				$("#pop_overlay-ing").fadeIn();
			}, 200);
		});	
		$(".cross").click(function(){
			$("#pop_overlay-ing").fadeOut();
	});
	
	var items = document.querySelectorAll(".item"), index, i;
		var min = 0;
		var max = items.length - 1;
		var count = items.length - 3;
		
		while(count > 0) {
			index = Math.floor(Math.random() * (max - min + 1)) + min;
			if(items[index].style.display != "none") {
				items[index].style.display = "none";
				--count;
			}
		}
	
	$(".add-to-cart").click(function(e){
		e.preventDefault();
		var condiv = $(this).closest('.add-cart-blk');
		var pid = condiv.find("#pid_prc").attr("data-id");
		//alert(pid);
		removeRowItem(pid);
		addItem(pid, $('input[name="qtybox"]').val());
		showCart(true);
	});
var options = {
		  maxValue: 10,
		  minValue: 1,
		  step: 1,
		  inputWidth: 50,
		  start: 1,
		  plusClick: function(element, val) {
			//console.log(val);
		  },
		  minusClick: function(element, val) {
			//console.log(val);
		  },
		  exceptionFun: function(val) {
			//console.log("excep: " + val);
		  },
		  valueChanged: function(element, val) {
			  var prd_price = $('#pid_prc').data("price");
			  console.log(prd_price + " --price");
			  var total_qty = $('.qtybox').val();
			  console.log(total_qty + " --qty");
			  var totat_price = prd_price * total_qty;
			  console.log(totat_price + " --total");
			  $('#pid_prc').html("Price: $" +  totat_price.toFixed(2));
		  }
		}
		$(".wan-spinner2").WanSpinner(options).css("border-color", "#e1e1e1");
});
</script>

</body>
</html>
