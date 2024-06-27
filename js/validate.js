String.prototype.trim = function() { return this.replace(/^\s\s*/, "").replace(/\s\s*$/, ""); }
var Check = function(f) { this.form = f; }
Check.prototype.required = function(str) { return str.search(/\S/) > -1; }
Check.prototype.min_length = function(str, val) { return (str.length >= val); }
Check.prototype.valid_email = function(str) { return str.search(/^([\w\+\-]+)(\.[\w\+\-]+)*@([a-z\d\-]+\.)+[a-z]{2,6}$/i) > -1; }

function sh_remove() {for(var i = 0; i < arguments.length; i++) $("#msgE" + arguments[i]).remove();}
function resetClass(id){
	$("#" + id).removeClass('help-inline-error');
	$("#msgE" + id).remove();
}

function validateMessage(id, message) {
	$("#" + id).addClass('help-inline-error');
	$('<span id="msgE' + id + '" for="' + id + '" generated="true" class="help-inline-error">' + message + '</span>').insertAfter($("#" + id));		
}

function validate(n) {
	var validate = new Check(), flag = true;
	if(n == 1){		
		sh_remove("vehicle_Year", "vehiclemake", "vehiclemodel");	
		if(validate.required($("#vehicle_Year").val().trim()) == '') {	
			validateMessage('vehicle_Year', 'Please select year.');	
			flag = false;
		}
		if(validate.required($("#vehiclemake").val().trim()) == '') {	
			validateMessage('vehiclemake', 'This field is required.');	
			flag = false;
		}
		if(validate.required($("#vehiclemodel").val().trim()) == '') {	
			validateMessage('vehiclemodel', 'This field is required.');					
			flag = false;
		}		
	}
	if(n == 2){
		sh_remove("date-picker", "Pickup", "Delivery");	
		if(validate.required($("#date-picker").val().trim()) == '') {	
			validateMessage('date-picker', 'This field is required.');	
			flag = false;
		}
		if(validate.required($("#Pickup").val().trim()) == '') {	
			validateMessage('Pickup', 'This field is required.');	
			flag = false;
		}else
		if(!validate.min_length($("#Pickup").val().trim(), 4)) {	
			validateMessage('Pickup', 'Please enter at least 4 characters.');	
			flag = false;
		}
		if(validate.required($("#Delivery").val().trim()) == '') {	
			validateMessage('Delivery', 'This field is required.');					
			flag = false;
		}else
		if(!validate.min_length($("#Delivery").val().trim(), 4)) {	
			validateMessage('Delivery', 'Please enter at least 4 characters.');					
			flag = false;
		}
	}
	
	if(n == 3){
		sh_remove("From_Name", "email", "phone");	
		if(validate.required($("#From_Name").val().trim()) == '') {	
			validateMessage('From_Name', 'This field is required.');	
			flag = false;
		}else
		if(!validate.min_length($("#From_Name").val().trim(), 2)) {	
			validateMessage('From_Name', 'Please enter at least 2 characters.');					
			flag = false;
		}
		if(!validate.valid_email($("#email").val())) {	
			validateMessage('email', 'Please enter a valid email address.');	
			flag = false;
		}
		if(validate.required($("#phone").val().trim()) == '') {	
			validateMessage('phone', 'This field is required.');					
			flag = false;
		}
	}
		
	return flag;
}