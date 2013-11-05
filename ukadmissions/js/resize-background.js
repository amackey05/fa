// Resize background image for index page
$(function() {   

	var theWindow        = $(window),
		$bg              = $("#streachable-background"),
		aspectRatio      = $bg.width() / $bg.height();
								
	function resizeBg() {
		if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
			$bg
				.removeClass()
				.addClass('bgheight');
		} else {
			$bg
				.removeClass()
				.addClass('bgwidth');
		}
		/* lww position images */

                        //$('section#combo-sliding-navigation article#careers div.matt img').css('position','absolute');
                        //$('div.matt img').css('left','90px');
                        //$('section#combo-sliding-navigation article#studentlife div.chelsea img').css('position','absolute');
                        //$('div.chelsea img').css('left','auto');
                        //$('div.chelsea img').css('right','50px');
						
       		if($(window).height() > 800 ) {
                      //alert("tall");
                        //section#combo-sliding-navigation article#careers div.matt img
                        //$('section#combo-sliding-navigation article#careers div.matt img').css('position','absolute');
                       //$('section#combo-sliding-navigation article#careers div.matt img').css('top','');
                       //$('section#combo-sliding-navigation article#careers div.matt img').css('bottom','0px');
                        
                       $('section#combo-sliding-navigation article#careers div.matt img').css('bottom','-7px');
                       $('section#combo-sliding-navigation article#studentlife div.chelsea img').css('bottom','0px');
			//alert($('section#combo-sliding-navigation article#studentlife div.chelsea img').css('top'))

 
		       //$('section#combo-sliding-navigation article#studentlife div.chelsea img').css('top','');
                       //$('section#combo-sliding-navigation article#studentlife div.chelsea img').css('bottom','0px');
						//alert('v: ' + $.browser.version.slice(0,1));
					if(($.browser.msie && $.browser.version.slice(0,1) == '8') || $.browser.webkit) {
						$('.slide-content').css('top', 'auto');
						$('.slide-content').css('bottom', '8%');
						 $('#wrapper').css('height', $(document).height()+'px');
					}

            } else {
		     	var ht = 800 - $(window).height(); 
				//	alert('-'+ht+'px'); 
			   $('section#combo-sliding-navigation article#careers div.matt img').css('bottom','-'+(ht-7)+'px');
			   $('section#combo-sliding-navigation article#studentlife div.chelsea img').css('bottom','-'+ht+'px');
			   //$('section#combo-sliding-navigation article#careers div.matt img').css('bottom','');
			   //$('section#combo-sliding-navigation article#studentlife div.chelsea img').css('bottom','');
			   //$('section#combo-sliding-navigation article#careers div.matt img').css('top','50px');
			   //$('section#combo-sliding-navigation article#studentlife div.chelsea img').css('top','50px');
			  
			  if(($.browser.msie && $.browser.version.slice(0,1) == '8') || $.browser.webkit) {
			   $('.slide-content').css('top', '10%');
			   $('#wrapper').css('height', $(document).height()+'px');
			  }
			   //$('section#combo-sliding-navigation article#studentlife .slide-content').hide();
		}

		if($(window).width() < 801) { 
			$('div.matt img').css('left','-10%');	
			$('div.chelsea img').css('right','-10%');

		} else {

			$('div.matt img').css('left','17%');
			$('div.chelsea img').css('right','10%');	

		}

		
		//$("#strip-navigation ul li").css("height",$(window).height());		
	}
								
	theWindow.resize(function() {
		resizeBg();
	}).trigger("resize");
	
});
	
	
