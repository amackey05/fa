// JavaScript Document
// lww .getScript DOES NOT WORK IN IE!!!!!! This is the work around.... ----------------------
jQuery.extend({
   getScript: function(url, callback) {
      var head = document.getElementsByTagName("head")[0];
      var script = document.createElement("script");
      script.src = url;

      // Handle Script loading
      {
         var done = false;

         // Attach handlers for all browsers
         script.onload = script.onreadystatechange = function(){
            if ( !done && (!this.readyState ||
                  this.readyState == "loaded" || this.readyState == "complete") ) {
               done = true;
               if (callback)
                  callback();

               // Handle memory leak in IE
               script.onload = script.onreadystatechange = null;
            }
         };
      }

      head.appendChild(script);

      // We handle everything using the script element injection
      return undefined;
   },
});
// ---- end horrible workaround --------------------------------------


$(document).ready(function(){
	yt_querystring = '/?rel=0';

	$form = $('.form_wrap').clone();

	/* The code here is executed on page load */
	if(navigator.platform == 'iPad' || navigator.platform == 'iPhone') {
		$('.slide-content').css('bottom', '50%');
		$('.slide-content').css('-webkit-transform', 'scale(0.8)');
		
	} else {
		
		// Function to fade in and fade out strip navigation
		var activeSection = 0;
		
		$("#strip-navigation ul li").children('p').fadeTo("slow", 0.7);	
		$("#strip-navigation ul li").children('p').css("z-index","10");
		
		$("#strip-navigation ul li").hover(function(){
			$(this).children('p').fadeTo("slow", 0);
			$(this).children('p').css("z-index","-10");
		},function(){
			$(this).children('p').fadeTo("slow", 0.7);	
			$(this).children('p').css("z-index","10");
		});
	}

		

	// Function to fade in and fade out strip navigation
	
	$("#combo-sliding-navigation .sliding-section").hover(function(){
		if($(this).data('hover')) return;
		$(this).data('hover', true);
		if(activeSection == 0) {
			$(this).css('z-index','100');
			$(this).children('p.section-overlay').fadeTo("slow", 0);
			$(this).children('p.section-overlay').css("z-index","-10");
			$(this).animate({'width':'53%','height':'100%'},100);
			$(this).siblings('article.sliding-section').animate({'width':'47%','height':'100%'},100);
			$(this).children('img').css('position','-60');
			$(this).children().find('a.seeblue-story-badge').show();
			$(this).children().find('em.badge-corner').show();
		}
		else {
			if($(this).hasClass('selected-section')){
				
			}
			else {
				$(this).children('p.section-overlay').fadeTo("slow", 0);
				$(this).children('p.section-overlay').css("z-index","-10");	
			}
		}
	},function(){
		$(this).removeData('hover');
		if(activeSection == 0) {
			$(this).children('p.section-overlay').fadeTo("slow", 0.7);	
			$(this).children('p.section-overlay').css("z-index","10");
			$(this).animate({'width':'50%','height':'100%'},100);
			$(this).siblings('article.sliding-section').animate({'width':'50%','height':'100%'},100);
			$(this).children().find('a.seeblue-story-badge').hide();
			$(this).children().find('em.badge-corner').hide();
		}
		else {
			if($(this).hasClass('selected-section')){
				
			}
			else {
				$(this).children('p').fadeTo("slow", 0.7);	
				$(this).children('p').css("z-index","10");
			}
			
		}
	});
		
	$("div.matt").click(function() {
		$.History.go('/matt');
	});
	$("div.chelsea").click(function() {
		$.History.go('/chelsea');
	});
	
	function showStudents(videoIndex) {
		if(!videoIndex || videoIndex == undefined) {
			videoIndex = 1;
		}
		$('#slides2 .slide').hide();
		$('.youtube-player').hide();
			$div = $('div.chelsea');
			$('#combo-sliding-navigation article.sliding-section').removeClass("selected-section");
			$div.parent().addClass("selected-section").siblings('article').find('p.section-overlay').animate({'opacity':'0.7','z-index':'10'},200);		
			$div.parent().animate({'width':'80%','height':'100%'},{queue:false,duration:400}).siblings('article').animate({'width':'20%','height':'100%'},100);
			$div.find('img').animate({'right':'-100px'},400).parent().parent().prev().children('div.matt').find('img').animate({'left':'-125px'},200);
			$div.siblings('div.slide-content').animate({'opacity':'1','z-index':'110000'},100).parent().siblings('article').find('div.slide-content').animate({'opacity':'0','z-index':'-110'},500);		
			$div.siblings('div.slide-content').find('.youtube-player').show();
			$div.children('span.section-caption').hide().parent().parent().siblings('article').find('div.matt').children('span.section-caption').fadeTo("slow",1);
			$div.children('a.seeblue-story-badge').hide();
			$div.children('em.badge-corner').hide();
			$div.parent().find('p.section-overlay').animate({'opacity':'0'},200);	
			activeSection = 1;
			
			$('#student_form_1').html('');
			$('#student_form_2').html($form);
			$.getScript('js/student_form.js');
			$('.youtube-player').attr('src', YOUTUBE_BASE + videoLinks[videoIndex] + yt_querystring);
			$('div.matt .section-overlay').fadeIn('fast');		
	}
	
	function showCareers(videoIndex) {
		if(!videoIndex || videoIndex == undefined) {
			videoIndex = 0;
		}
		$('#slides1 .slide').hide();
		$('div.chelsea').parent().find('.section-overlay').fadeIn('fast');
		$('.youtube-player').hide();
		$('#combo-sliding-navigation article.sliding-section').removeClass("selected-section");
		$('div.matt').parent().addClass("selected-section").siblings('article').find('p.section-overlay').animate({'opacity':'0.7','z-index':'10'},200);
		$('div.matt').parent().animate({'width':'80%','height':'100%'},{queue:false,duration:400}).siblings('article').animate({'width':'20%','height':'100%'},100);
		$('div.matt').find('img').animate({'left':'-100px'},400).parent().parent().next().children('div.chelsea').find('img').animate({'right':'-280px'},200);
		$('div.matt').siblings('div.slide-content').animate({'opacity':'1','z-index':'110'},300).parent().siblings('article').find('div.slide-content').animate({'opacity':'0','z-index':'-110'},500);		
		$('div.matt').siblings('div.slide-content').find('.youtube-player').show();
		$('div.matt').children('span.section-caption').hide().parent().parent().siblings('article').find('div.chelsea').children('span.section-caption').fadeTo("slow",1);
		$('div.matt').children('a.seeblue-story-badge').hide();
		$('div.matt').children('em.badge-corner').hide();
		$('div.matt').parent().find('p.section-overlay').animate({'opacity':'0'},200);
		activeSection = 1;
		
		$('#student_form_2').html('');
		$('#student_form_1').html($form);
		$.getScript('js/student_form.js');
        $('.youtube-player').attr('src', YOUTUBE_BASE + videoLinks[videoIndex] + yt_querystring);
        
        $('.input-text.zip-code').restrictCharacters(['0','1','2','3','4','5','6','7','8','9']);
		$('.input-text.mobile').restrictCharacters(['0','1','2','3','4','5','6','7','8','9','(',')','-','.',' ']);
	}
	
	$.History.bind('/matt', function() {
		showCareers(0);
		$('#slide_matt').show();
	});
	
	$.History.bind('/chelsea', function() {
		showStudents(1);
		$('#slide_chelsea').show();
	});
	
	$.History.bind('/reggie', function() {
		showStudents(2);
		$('#slide_reggie').show();
	});
	
	$.History.bind('/rebekah', function() {
		showStudents(3);
		$('#slide_rebekah').show();
	});
	
	$.History.bind('/jason', function() {
		showStudents(4);
		$('#slide_jason').show();
	});
	
	$.History.bind('/hailey', function() {
		showStudents(5);
		$('#slide_hailey').show();
	});
	$.History.bind('/skyline', function() {
		showCareers(6);
		$('#slide_skyline').show();
	});
	$.History.bind('/amberlee', function() {
		showCareers(7);
		$('#slide_amber').show();
	});
	$.History.bind('/cathy', function() {
		showCareers(8);
		$('#slide_cathy').show();
	});
	$.History.bind('/will', function() {
		showCareers(9);
		$('#slide_will').show();
	});
	
});

// Check if device is iPad or iPhone
if(navigator.platform == 'iPad' || navigator.platform == 'iPhone' || navigator.platform == 'iPod')
{
     $("footer#strip-navigation").css("position", "static");
};
