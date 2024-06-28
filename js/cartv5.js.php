<?php 
header('Content-Type: text/javascript');

include "../config.inc.php";
?>
var products = [];
<?php foreach($config['productSpecs'] as $prodIndex => $prodSpec) { ?>
products[<?php echo $prodSpec['id']; ?>] = ["<?php echo utf8_encode($prodSpec['nm']); ?>", <?php echo utf8_encode($prodSpec['prc']); ?>, "<?php echo utf8_encode($config['product_name']); ?>", "<?php echo utf8_encode($prodSpec['desc']); ?>", "<img src='<?php echo utf8_encode($prodSpec['img']); ?>' class='cart-prd1' />", "<?php echo utf8_encode($prodSpec['term']); ?>"];
<?php } ?>
console.log(products);
var orderedItems = [];
var orderedTotQty = 0;
var maxQty = <?php echo $config['max_qty']; ?>;
var shipRates = false;
var handling = 0;

var carturl = "<?php echo $config['cart_page'] ; ?>";

//Funtion adds Items to Cart
var addItem = function(itemId, Qty) {
	orderedTotQty = $.cookie('orderedTotQty');
	if (!orderedTotQty) {
		orderedTotQty = 0;
	}
    Qty = parseInt(Qty);
	if(Qty > maxQty) {
    	alert("Maximum " + maxQty + " of this product can be selected in a single order");
		return false;
	}
    var order = $.cookie('order');
    if (!order) {
        order = itemId + "-" + Qty;
		orderedItems[itemId] = Qty;
    } else {
        var itemExists = false;
        var items = order.split("|");
        order = "";
        for (var i = 0; i < items.length; i = i + 1) {
            var position = items[i].indexOf("-");
            var prodId = items[i].substring(0, position);
            var quantity = parseInt(items[i].substring(position + 1));
            if (order != "") {
                order += "|";
            }
            if (prodId == itemId) {
            	alert("Product already exist in cart");
                return false;
				if((quantity + Qty) > maxQty) {
                    alert("Maximum " + maxQty + " of this product can be selected in a single order");
					return false;
				}
                quantity += Qty;
                order += prodId + "-" + quantity;
                itemExists = true;
            } else {
                order += prodId + "-" + quantity;
            }
			
			orderedItems[prodId] = quantity;
        }
        if (!itemExists) {
            if (order != "") {
                order += "|";
            }
            order += itemId + "-" + Qty;
			orderedItems[itemId] = Qty;
        }
    }
	orderedTotQty = parseInt(orderedTotQty);
	orderedTotQty += Qty;
	$('.cartqty').html(orderedTotQty);
    $.cookie('order', order);
    $.cookie('orderedTotQty', orderedTotQty);

    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename == carturl) {
        showCart(false, 'add', itemId);
    } else {
        $(location).attr('href', carturl);
    }
};

//Funtion decrements Items to Cart
var removeItem = function(itemId, Qty) {
    Qty = parseInt(Qty);
    var order = $.cookie('order');

    if (!order) {
		orderedItems[itemId] = 0;
		refreshRow(itemId);
		
    } else {
        var items = order.split("|");
        order = "";
        for (var i = 0; i < items.length; i = i + 1) {
            var position = items[i].indexOf("-");
            var prodId = items[i].substring(0, position);
            var quantity = parseInt(items[i].substring(position + 1));
            if (prodId == itemId) {
                quantity -= Qty;
                if (quantity > 0) {
					if (order != "") {
						order += "|";
					}
                    order += prodId + "-" + quantity;
                }
                itemExists = true;
				orderedItems[prodId] = quantity;
				refreshRow(itemId);
            } else {
				if (order != "") {
					order += "|";
				}
                order += prodId + "-" + quantity;
				orderedItems[prodId] = quantity;
            }
        }
    }
	orderedTotQty -= Qty;
	$('.cartqty').html(orderedTotQty);
    $.cookie('order', order);
    $.cookie('orderedTotQty', orderedTotQty);
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename == carturl) {
       showCart(false, 'remove', itemId);
    } else {
        $(location).attr('href', carturl);
    }
};


//Funtion sets Item quantity on the Cart
var setItemQty = function(itemId, Qty) {
    Qty = parseInt(Qty);
	
	if(Qty > maxQty || Qty < 0) {
		return false;
	}
	
    var order = $.cookie('order');
	orderedTotQty = 0;

    if (!order) {
		orderedItems[itemId] = 0;
    } else {
        var items = order.split("|");
        order = "";
        for (var i = 0; i < items.length; i = i + 1) {
            var position = items[i].indexOf("-");
            var prodId = items[i].substring(0, position);
            var quantity = parseInt(items[i].substring(position + 1));
            if (prodId == itemId) {
                quantity = Qty;
				if (order != "") {
					order += "|";
				}
				order += prodId + "-" + quantity;
                itemExists = true;
            } else {
				if (order != "") {
					order += "|";
				}
                order += prodId + "-" + quantity;
            }
			orderedItems[prodId] = quantity;
			orderedTotQty += quantity;
        }
    }
	$('.cartqty').html(orderedTotQty);
    $.cookie('order', order);
    $.cookie('orderedTotQty', orderedTotQty);
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename == carturl) {
       showCart(false, 'set', itemId);
    } else {
        $(location).attr('href', carturl);
    }
};



var removeRowItem = function(itemId) { 
    var order = $.cookie('order');
    if (!order)
    {
		orderedTotQty = 0;
    } else {
        var items = order.split("|");
        order = "";
		orderedTotQty = 0;
		orderedItems = null;
		orderedItems = new Array();
        for (var i = 0; i < items.length; i = i + 1) {
            var position = items[i].indexOf("-");
            var prodId = items[i].substring(0, position);
            var quantity = parseInt(items[i].substring(position + 1));
            if (prodId == itemId) {
            } else {
				if (order != "") {
					order += "|";
				}
                order += prodId + "-" + quantity;
				orderedTotQty += quantity;
				orderedItems[prodId] = quantity;
            }
        }
    }
	if($('#prow-' + itemId).length == 1) {
		$('#prow-' + itemId).remove();
        $('#term-' + itemId).remove();
	}
    $.cookie('order', order);
    $.cookie('orderedTotQty', orderedTotQty);
    showCart(false, 'removerow', itemId);
};

//Emptying the cart
var emptyCart = function() {
    var order = $.cookie('order');
    order = "";
	orderedTotQty = 0;
	orderedItems = null;
	orderedItems = new Array();	
    $.cookie('order', order);
    $.cookie('orderedTotQty', orderedTotQty);
	
	if($('[id^="prow-"]').length > 0) {
		$('[id^="prow-"]').each(function(){
			$(this).remove();
		});
	}
	$('.trm_1').hide();
    showCart(false, 'empty');
};

//Displaying the cart items & calculations
function showTotalPrice() {	
	var cartHtml = "";
	var total = 0;
	var shipping = 0;
	var grand_total = 0;
	var sub_total = 0;
	var shippingType = '';
	
	var order = $.cookie('order');
    orderedTotQty = $.cookie('orderedTotQty');
	
	
	if($('#shippingCountry').val() == '') {
		shippingType = '';
	} else if($('#shippingCountry').val() == 'US') {
		shippingType = 'US';
	} else {
		shippingType = 'INTERNATIONAL';
	}
	
    if (!order) {
		orderedTotQty = 0;
	} else {
		var items = order.split("|");

		if(shipRates) {
			shipping = shipRates * 1.0;
		}

		for (var i = 0; i < items.length; i = i + 1) {
			var position = items[i].indexOf("-");
			var prodId = items[i].substring(0, position);
			var quantity = parseInt(items[i].substring(position + 1));
			if (prodId != "" && quantity > 0) {
				sub_total = round((quantity * products[prodId][1]), 2);
				total += (quantity * products[prodId][1]);
			}
		}
		
		total = round(total, 2);
	}
	
	var snh = shipping + handling;
	//if(shipping == 0) {
	//	snh = shipping;
	//}
    console.log(snh);
	grand_total = total + snh;
	
	$('#total-price').html('$ ' + total.toFixed(2));
	$('#shipping-price').html('$ ' + snh.toFixed(2));
	$('#grand-total').html('$ ' + grand_total.toFixed(2));
};

// Refresh row content with updated quantity / price for a product
function refreshRow(pid) {
	pid = parseInt(pid);
	quantity = orderedItems[pid];
	sub_total = round((quantity * products[pid][1]), 2);

	$('#prow-' + pid + ' .tot-price').html('$' + sub_total.toFixed(2) + ' USD');
	$('#prow-' + pid + ' .qtybox').val(quantity);
	$('#prow-' + pid + ' .dispqty').html(quantity);
	
}

function replaceAllStr(str, find, rstr) {
  //return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
  //return str.replace(/find/g, '\\$&');
  return str.replace(new RegExp(find, "g"), rstr);
}


//Displaying the cart items & calculations
function showCart(showFullCart, act, itm) {	
    var cartHtml = "";
    var order = $.cookie('order');
    orderedTotQty = $.cookie('orderedTotQty');
	
    if (!order)
    {
		orderedTotQty = 0;

		if($('[id^="prow-"]').length == 0) {
	        $("#cartBox").html("<p>You have not selected any product...</p> &nbsp <a id='browse' href='products.php'>Browse Products</a>");
		}

		showTotalPrice();
		return false;
    }
    else
    {
        var items = order.split("|");
        var total = 0;
        var shipping = 0;
        var grand_total = 0;
		
		orderedTotQty = parseInt(orderedTotQty);
		
		if (typeof showFullCart === "undefined") {
			return false;
		} else if(showFullCart == false) {
			if ((typeof act !== "undefined") && (typeof itm !== "undefined")) {
				if((act == 'add' || act == 'set' || act == 'remove') && itm > 0) {
					refreshRow(itm);
				} else if(act == 'removerow' && itm > 0) {
					itm = parseInt(itm);
				}
			}

			showTotalPrice();
			
			return false;
		} 
		
		orderedItems = null;
		orderedItems = new Array();
		cartHtml += "<div class='summry-lft'><div class='summry-lft-hdr'>Order Summary <span>Price</span></div>";
        cartHtml += "<div class='cart-lft'><div class='cart-box1'><span class='one'> Products </span><span class='three'>Qty</span><span class='two'>Unit Price</span><span class='four'>Total</span></div>";
		var total = 0;
        var term_htm ='';
        for (var i = 0; i < items.length; i = i + 1) {
            var position = items[i].indexOf("-");
            var prodId = items[i].substring(0, position);
            var quantity = parseInt(items[i].substring(position + 1));
			
            if (prodId != "" && quantity > 0) {
				orderedItems[prodId] = quantity;
                var sub_total = round((quantity * products[prodId][1]), 2);
                total += sub_total;
                
                termTxt = products[prodId][5];
                termTxt = replaceAllStr(termTxt, ' __prc__', products[prodId][1].toFixed(2));
                termTxt = replaceAllStr(termTxt, '__pname__', products[prodId][2]);
                termTxt = replaceAllStr(termTxt, '__prdname__', products[prodId][0]);
			
				term_htm += '<span id="term-' + prodId +'">' + termTxt + '</span>';
                
                 cartHtml += "<div class='cart-box2' id='prow-" + prodId + "'>"
                            + "<div class='one'>"                            
                            + "<p class='cart-prdname'>" + products[prodId][4] + " <span class='span2'>  " +  products[prodId][0] + "</span></p>"
                            + "</div>"
                			+ "<input type='hidden' value='" + quantity + "' name='prodqty_" + prodId + "' class='qtybox' readonly>"
							+ "<input type='hidden' value='" + prodId + "' name='prodid[]'>"+ "<div class='three'><span class='qtybox'>"+ quantity +"</span></div>"  
                            + "<div class='two'> <span class='unit-price'> $" + (products[prodId][1]).toFixed(2) + "</span> </div>"
                            + "<div class='four'><span class='sub-total'>$" + sub_total.toFixed(2) + "</span> <img style='cursor:pointer' src='images/cross-img.png' class='cart-remv' onClick='removeRowItem(" + prodId + ")' /></div>"
           					+ "</div>"
            }
        }
        
        cartHtml += "</div>";
        cartHtml += "<div class='card-box3'>"
                        +"<div class='card-box3rgt'>"
                        	+"<ul class='cart-prclist'>"
                                +"<li>Sub Total: <span class='span1' id='total-price'>$" + total.toFixed(2) + "</span></li>"
                                +"<li>Shipping &amp; Handling: <span class='span1' id='shipping-total'>$0.00</span></li>"
                                +"<li><span class='span2'>Total:</span> <span class='span1 span2' id='grand-total'>$" + total.toFixed(2) + "</span></li>"
                            +"</ul>"
                        +"</div>"
                        +"<div class='card-box4-lft'>"
                        +"</div>";
            		+"</div>";
           cartHtml += "<div class='card-box4'><div class='card-box4-lft'>"
                    +"<!--<a href='javascript:void(0)' class='continue-shpbtn' id='view-from'>Proceed To Checkout </a>--><a href='products.php' class='continue-shpbtn continue-shpbtn1'>Continue Shopping </a> <a href='javascript:void(0)' onclick='emptyCart()' class='continue-shpbtn'>Empty Cart </a></div>"
                    +"</div>";
                    
                    
        if (cartHtml != "") {
            $("#cartBox").html(cartHtml);
            $(".trm_1").html(term_htm);
        } else {
            $("#cartBox").html("&nbsp;Loading...");
        }
		
		return false;
    }
};

var round = function(value, decimals) {
    return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
};