$(function() {
	$('.studentForm').data('step', 1);
	var fieldsetCount = $('.studentForm .form').length;
	var current = 1;
	var stepsWidth = 0;
	var widths = new Array();
	
	
	
	function initForm() {
		$('.studentForm .form').each(function(i){
			var $step = $(this);
			widths[i] = stepsWidth;
			stepsWidth += $step.outerWidth();
		});
		
		$('.studentForm .form_container').width(stepsWidth);
	}
	
	initForm();

	$('.nextLink').click(function(e) {
		e.preventDefault();
		saveForm('next');
	});

	$('.studentForm fieldset').each(function(){
		var $fieldset = $(this);
		$fieldset.children('input').last().bind('keydown', function(e){
			if(e.which == 9) { return false; }
			if(e.which == 13) { saveForm('next'); }
		});
	});
	
	function saveForm(direction, goToStep) {
		step = $('.studentForm').data('step');
		
		if(direction == 'next') {
			if(step == 1) {
				$name = $('input[name=fldName]');
				$email = $('input[name=fldEmail]');
				
				if($name.val() == '' || $name.val() == 'Name') {
					alert('Please enter your name.');
					$name.val('');
					$name.focus();
					return false;
				} else if($email.val() == '' || $email.val() == 'Email') {
					alert('Please enter your email address.');
					$email.val('');
					$email.focus();
					return false;
				} else if(!isEmail($email.val())) {
					alert('This is not a valid email address.');
					$email.focus();
					return false;
				}
				$.post('form_handler.php', {step: 1, name: $name.val(), email: $email.val()}, function(response){
					$('.studentForm').data('form_id', response);
				});
			} else if(step == 2) {
				$status = $('input[name=fldStudentStatus]:checked');
				
				if($status.val() == '' || $status.val() == undefined) {
					alert('Please select one.');
					return false;
				}
				$.post('form_handler.php', {step: 2, form_id: $('.studentForm').data('form_id'), status: $status.val()}, function(response){
					
				});
			} else if(step == 3) {
				$address = $('input[name=fldAddress]');
				$city = $('input[name=fldCity]');
				$state = $('input[name=fldState]');
				$zip = $('input[name=fldZipCode]');
				
				if($address.val() == '' || $address.val() == 'Address') {
					alert('Please enter your address.');
					$address.focus();
					return false;
				} else if($city.val() == '' || $city.val() == 'City') {
					alert('Please enter your city.');
					$city.focus();
					return false;
				} else if($state.val() == '' || $state.val() == 'St') {
					alert('Please enter your state.');
					$state.focus();
					return false;
				
				} else if($zip.val() == '' || $zip.val() == 'Zip') {
					alert('Please enter your zip code.');
					$zip.focus();
					return false;
				
				}
			
				$.post('form_handler.php', {step:3, form_id: $('.studentForm').data('form_id'), address: $address.val(), city: $city.val(), state: $state.val(), zip: $zip.val()}, function(response){
					
				});
			} else if(step == 4) {
				$mobile = $('input[name=fldMobile]');
				$mobile_allow = $('select[name=fldMobileAllow] option:selected');

				$('.nextLink').html('Done').click(function(e){
					e.preventDefault();
					return;
				});
				$('.studentForm .form:last').html('<h1>Get more information about going to UK</h1><h2>Thank you for this information.</h2>');
				
				var mobileNumber = ($mobile.val() == "Mobile") ? "" : $mobile.val();
				$.post('form_handler.php', {step:4, form_id: $('.studentForm').data('form_id'), mobile: mobileNumber, mobile_allow: $mobile_allow.val()}, function(response){
					
				});
				// fin.
				return;
			} else {
				return false;
			}
			
			$('ul.carousel li:nth-child('+ step +')').data('complete', true);
			
			if(step < fieldsetCount) {
				$('.studentForm').data('step', step+1);
				step = $('.studentForm').data('step');
				if(goToStep) {
					goTo = widths[goToStep];
				} else {
					goTo = widths[step-1];
					$('ul.carousel li.active').removeClass('active').next('li').addClass('active');
				}
				$('.form_container').stop().animate({ marginLeft: '-' + goTo + 'px' }, 500);
			}
			return true;
		} else {
			if(step > 1) {
			
				if(goToStep) {
					$('.studentForm').data('step', goToStep);
					goTo = widths[goToStep-1];
					$('ul.carousel li.active').removeClass('active');
					$('ul.carousel li:nth-child('+ goToStep +')').addClass('active');
				} else {
					goTo = widths[step-1];
					$('.studentForm').data('step', step-1);
					$('ul.carousel li.active').removeClass('active').prev('li').addClass('active');
				}
				$('.form_container').stop().animate({ marginLeft: '-' + goTo + 'px' }, 500);
			}
		}
	}

	function isEmail(email) {
	  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}
	
	function checkValidMobile(mobileNumber, acceptedCharacters, index) {
		if(index == mobileNumber.length) {
			return true;
		}
		if(acceptedCharacters.indexOf(mobileNumber[index]) >= 0) {
			checkValidMobile(mobileNumber, acceptedCharacters, index + 1);
			return true;
		}
		
		var alertMessage = "Your phone number can only include numbers and any of these symbols: ";
		for(var i = 10; i < acceptedCharacters.length; i++) {
			alertMessage += acceptedCharacters[i] + " ";
		}
		
		alert(alertMessage);
		return false;
	}

});