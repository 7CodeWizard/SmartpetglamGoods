function showProcessing() {
	$("#processing-box-overlay").css('height', $( document ).height());
	$('#processing-box-overlay').show();
	$('#processing-box-inner').show();
}

function getStates(e, field, selCountry, selState, secondField, selStateSecond, ignoreShipping) {
    if (e && field) {
        var selCountry = ($.inArray(selCountry, window.countries) != -1)? selCountry : false;
        var selState = ($.inArray(selCountry, window.countries) != -1)? selState : false;


        var country = $('input[name=' + field + 'Country]', e);
        var stateLabel = $('#' + field + 'StateLabel', e);
        var zipLabel = $('#' + field + 'ZipLabel', e);
        var state = $('select[name=' + field + 'State]', e);
        var stateTxt = $('input[name=' + field + 'State]', e);

        var country2;
        var stateLabel2;
        var zipLabel2;
        var state2;
        var stateTxt2;
		var stateType;
		
		if((typeof secondField !== "undefined") && secondField != '') {
			country2 = $('select[name=' + secondField + 'Country]', e);
			stateLabel2 = $('#' + secondField + 'StateLabel', e);
			zipLabel2 = $('#' + secondField + 'ZipLabel', e);
			state2 = $('select[name=' + secondField + 'State]', e);
			stateTxt2 = $('input[name=' + secondField + 'State]', e);
		}
		
		$.cookie(field+'Country', country.val());

        $.ajax({
            url: 'ajax/states.php',
            data: {
                country: country.val()
            },
            dataType: 'json',
            success: function(json) {
                if (json.complete) {
                    //stateLabel.html(json.stateLabel);
                    //zipLabel.html(json.zipLabel);
                    state.empty();
					
					if((typeof json.isText !== "undefined") && json.isText == 'Y') {
						stateType = 'text';
					} else {
						stateType = 'select';
					}
					
					if((typeof ignoreShipping === "undefined")) {
						window.shipRates = json.r;
						window.handling = json.h;
						showTotalPrice();
					}
					
					if((typeof secondField !== "undefined") && secondField != '') {
						//stateLabel2.html(json.stateLabel);
						//zipLabel2.html(json.zipLabel);
						state2.empty();
					}
					
                    $.each(json.states, function(index, value) {
                        state.append($("<option></option>")
                                        .attr("value", index)
                                        .text(value));
						if((typeof secondField !== "undefined") && secondField != '') {
							state2.append($("<option></option>")
											.attr("value", index)
											.text(value));
						}
                    });

                    if (selState) {
                        $('select[name=' + field + 'State] option[value="'+selState+'"]').attr("selected","selected");
                    }
					
					if((typeof secondField !== "undefined") && secondField != '' && (typeof selStateSecond !== "undefined") && selStateSecond != '') {
                        $('select[name=' + secondField + 'State] option[value="'+selStateSecond+'"]').attr("selected","selected");
                    }

                    // Check to see that there is a selected item if not select first item in the list.
                    var hasValue = $('select[name=' + field + 'State]').has('[selected]');
                    if(hasValue.length == 0){
                        $('select[name=' + field + 'State] option:first-child').attr("selected","selected");
                    }
					if((typeof secondField !== "undefined") && secondField != '') {
						hasValue = $('select[name=' + secondField + 'State]').has('[selected]');
						if(hasValue.length == 0){
							$('select[name=' + secondField + 'State] option:first-child').attr("selected","selected");
						}
					}

                    if (json.disabled) {
                        state.attr("disabled", "disabled");
						//stateTxt.attr("disabled", "disabled");
                    } else {
                        /*if(stateType == 'text') {
							stateTxt.removeAttr("disabled");
							state.attr("disabled", "disabled");
						} else {
							state.removeAttr("disabled");
							stateTxt.attr("disabled", "disabled");
						}*/
                    }
					
					if(stateType == 'text') {
						state.hide();
						//stateTxt.show();
					} else {
						//stateTxt.hide();
						state.show();
					}
					
					if((typeof secondField !== "undefined") && secondField != '') {
						if (json.disabled) {
							state2.attr("disabled", "disabled");
							//stateTxt2.attr("disabled", "disabled");
						} else {
							/*if(stateType == 'text') {
								stateTxt2.removeAttr("disabled");
								state2.attr("disabled", "disabled");
							} else {
								state2.removeAttr("disabled");
								stateTxt2.attr("disabled", "disabled");
							}*/
						}
						
						if(stateType == 'text') {
							state2.hide();
							//stateTxt2.show();
						} else {
							//stateTxt2.hide();
							state2.show();
						}
					}
					
					
                }
            }
        });
    } else {
        alert('Field not specified for states');
    }
}

function toggleBillingAddress(radioObj)
{
   if (radioObj.value == 'yes')
   {
	  $('#billingDiv').fadeOut('fast');
   }
   else
   {
	  $('#billingDiv').fadeIn('slow');
   }
   
}

function toggleBillingAddressV2(radioObj)
{
   if (radioObj.value == 'yes')
   {
		$('#billingDiv input, #billingDiv select').each(function(){
			$(this).attr('disabled', true).removeClass('formError');
			$(this).val('');
		});
   } else {
		$('#billingDiv input, #billingDiv select').each(function(){
			$(this).attr('disabled', false);
		});
   }
   
}

function update_expire()
{
   var month = document.getElementById("fields_expmonth");
   var month_value = month.options[month.selectedIndex].value;
   var year = document.getElementById("fields_expyear");
   var year_value = year.options[year.selectedIndex].value;
   if ((month_value != '' ) && (year_value != ''))
   {
	  document.getElementById("cc_expires").value = month_value +  year_value;
   }
   else
   {
	  document.getElementById("cc_expires").value = '';
   }
}

function onlyNumbers(e,type)
{
   var keynum;
   var keychar;
   var numcheck;
   if(window.event) // IE
   {
	  keynum = e.keyCode;
   }
   else if(e.which) // Netscape/Firefox/Opera
   {
	  keynum = e.which;
   }
   keychar = String.fromCharCode(keynum);
   numcheck = /\d/;

   switch (keynum)
   {
	  case 8:    //backspace
	  case 9:    //tab
	  case 13:    //enter
	  case 35:   //end
	  case 36:   //home
	  case 37:   //left arrow
	  case 38:   //right arrow
	  case 39:   //insert
	  case 45:   //delete
	  case 46:   //0
	  case 48:   //1
	  case 49:   //2
	  case 50:   //3
	  case 51:   //4
	  case 52:   //5
	  case 54:   //6
	  case 55:   //7
	  case 56:   //8
	  case 57:   //9
	  case 96:   //0
	  case 97:   //1
	  case 98:   //2
	  case 99:   //3
	  case 100:  //4
	  case 101:  //5
	  case 102:  //6
	  case 103:  //7
	  case 104:  //8
	  case 105:  //9
		 result2 = true;
		 break;
	  case 109: // dash -
		 if (type == 'phone')
		 {
			result2 = true;
		 }
		 else
		 {
		 result2 = false;
		 }
	  break;
	  default:
		 result2 = numcheck.test(keychar);
		 break;
   }

   return result2;
}

// Popup window function
function basicPopup(url) {
	popupWindow = window.open(url,'popUpWindow','height=700,width=700,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
}

