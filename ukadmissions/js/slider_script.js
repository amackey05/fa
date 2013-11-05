/*=================================
// Script for slider section
===================================*/

	$(function(){
			$('#slides').slides({
				preload: true,
				//preloadImage: 'images/loading.gif',
				//play: 0,
				auto: false,
				//pause: 2500,
				pagination: false,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},300);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},300);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},300);
				}
			});
			
			hash = window.location.hash;
			if(hash == '#/matt') {
				starter = 1;
			} else if(hash == '#/skyline') {
				starter = 2;
			} else if(hash == '#/amberlee') {
				starter = 3;
			} else if(hash == '#/cathy') {
				starter = 4;
			} else if(hash == '#/will') {
				starter = 5;
			} else {
				starter = 1;
			}
			$('#slides1').slides({
				preload: true,
				//preloadImage: 'images/loading.gif',
				//play: 0,
				//pause: 2500,
				auto: false,
				start: starter,
				pagination: false,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},300);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},300);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
					if(current == 1) {
						$.History.go('/matt');
					} else if(current == 2) {
						$.History.go('/skyline');
					} else if(current == 3) {
						$.History.go('/amberlee');
					} else if(current == 4) {
						$.History.go('/cathy');
					} else if(current == 5) {
						$.History.go('/will');
					}
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},300);
				}
			});
			
			hash = window.location.hash;
			if(hash == '#/chelsea') {
				starter = 1;
			} else if(hash == '#/reggie') {
				starter = 2;
			} else if(hash == '#/rebekah') {
				starter = 3;
			} else if(hash == '#/jason') {
				starter = 4;
			} else if(hash == '#/hailey') {
				starter = 5;
			} else {
				starter = 1;
			}
			$('#slides2').slides({
				preload: true,
				//preloadImage: 'images/loading.gif',
				//play: 5000,
				//pause: 2500,
				auto: false,
				pagination: false,
				hoverPause: true,
				start: starter,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},300);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},300);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
					if(current == 1) {
						$.History.go('/chelsea');
					} else if(current == 2) {
						$.History.go('/reggie');
					} else if(current == 3) {
						$.History.go('/rebekah');
					} else if(current == 4) {
						$.History.go('/jason');
					} else if(current == 5) {
						$.History.go('/hailey');
					}
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},300);
				}
			});
			
		});
