jQuery(document).ready(function($) {

	// ---------------------------------------------------------------
	// CBD scripts
	// ---------------------------------------------------------------

		$(document).on('favorites-updated-single', function(event, favorites, post_id, site_id, status){
		  $('.numberwrap').removeClass('hideme');
		});

		var userAgent = navigator.userAgent.toLowerCase();
		if((navigator.userAgent.indexOf("IE") != -1 ) || (!!document.documentMode == true )){
		$('.overlay').addClass('msie');
		}

		$('#ken-hom .item:first').addClass('active');
		$('#ken-hom .button:first').addClass('active');

		// $(document).on('favorites-cleared', function(event, button){
		//   $('.simplefavorites-user-count').css('display', 'none');
		//   $('.simplefavorites-user-count').addClass('the-button');
		// });

	// ---------------------------------------------------------------
		// example, unused and left-over scripts - delete before launch.
	// ---------------------------------------------------------------

	$('.tab-content.sub-page-content div:first').addClass('active');
	$('.tab-content.sub-page-content div:first').addClass('in');
	$('.tab-content.tab-nav-content div:first').addClass('active in');

	var divs = $(".concertina-column");
	for(var i = 0; i < divs.length; i+=3) {
		divs.slice(i, i+3).wrapAll("<div class='panel-group content-container' id='accordion'></div>");
	}
	//
	//
	//
	// $(".carousel").swipe({
	// 	swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
	// 		if (direction == 'left') $(this).carousel('next');
	// 		if (direction == 'right') $(this).carousel('prev');
	// 	},
	// 	allowPageScroll:"vertical"
	// });


	$(function() {
		$('a.smooth[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top - 100
					}, 1000);
					return false;
				}
			}
		});
	});

	$(".carousel").swipe({
		swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
			if (direction == 'left') $(this).carousel('next');
			if (direction == 'right') $(this).carousel('prev');
		},
		allowPageScroll:"vertical"
	});

















	// ----------------------------------

	// hanburger menu -
		// toggle class on click
		// remove class on click .ghost

	// ----------------------------------

	$(".navburger").click(function() {
		$(this).toggleClass("crossed");
		// setTimeout(function(){
			$(".the-blob").toggleClass("evergrowing");
   // },250)
		// setTimeout(function(){
			$(".the-blob-nav").toggleClass("showoff");
			$(".nav li").toggleClass("fadeInDown");
   // },300)
	 		setTimeout(function(){
				$('.navbar-logo img').toggleClass("light");
			},200);
	});

	$(".nav li").toggleClass("animated");

	$(".ghost").click(function() {
		$('.navbar-toggle').removeClass("crossed");
	});

	// ----------------------------------

	// shrink navigation on scroll

	// ----------------------------------

	$(window).scroll(function () {
			//if you hard code, then use console
			//.log to determine when you want the
			//nav bar to stick.
	console.log($(window).scrollTop())
		if ($(window).scrollTop() >= 100) {
			$('.header').addClass('shrink');
		}
		if ($(document).scrollTop() <= 0) {
			$('.header').removeClass('shrink');
		}
	});

	// ----------------------------------

	// smooth scroll

	// ----------------------------------

	// $(function() {
	// 	$('a[href*="#"]:not([href="#"])').click(function() {
	// 		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	// 			var target = $(this.hash);
	// 			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	// 			if (target.length) {
	// 				$('html, body').animate({
	// 					scrollTop: target.offset().top
	// 				}, 1000);
	// 				return false;
	// 			}
	// 		}
	// 	});
	// });

	// ----------------------------------

	// KEN BURNS

	// ----------------------------------


	// $('#kb').carousel({
	// 	interval: 1000
	// });
	$('#kb .item:first').addClass('active');
	$('#kb .button:first').addClass('active');

	// ----------------------------------

	// FLEX CAROUSEL

	// ----------------------------------


	// $('#kb').carousel({
	// 	interval: 1000
	// });
	$('#flex .item:first').addClass('active');
	$('#flex .button:first').addClass('active');

	$(window).resize(function(){

		$('.className').css({
			position:'absolute',
			left: ($(window).width() - $('.className').outerWidth())/2,
			top: ($(window).height() - $('.className').outerHeight())/2
		});

	});
	// To initially run the function:
	$(window).resize();

	// ----------------------------------

	// BLOG ARCHIVE ROW WRAPPER

	// ----------------------------------

	// wrap divs in a div - freaking love this!
	var divs = $(".blog-archive");
	for(var i = 0; i < divs.length; i+=3) {
		divs.slice(i, i+3).wrapAll("<div class='blog-archive-row'></div>");
	}


	// ----------------------------------

	// DELETE ALL BELOW THIS LINE

	// ----------------------------------


	$('.nav-tabs.sub-page-content li:first').addClass('active');
	$('.tab-content.sub-page-content div:first').addClass('active');
	$('.tab-content.sub-page-content div:first').addClass('in');




	// wrap divs in a div - freaking love this!
	var divs = $(".video-post-wrap");
	for(var i = 0; i < divs.length; i+=3) {
		divs.slice(i, i+3).wrapAll("<div class='row'></div>");
	}
	// wrap divs in a div - freaking love this!
	var divs = $(".media-post-wrap");
	for(var i = 0; i < divs.length; i+=3) {
		divs.slice(i, i+3).wrapAll("<div class='row media_row'></div>");
	}


	$("[data-toggle='toggle']").click(function() {
	    var selector = $(this).data("target");
	    $(selector).toggleClass('in');
	});

	$(".keys").click(function() {  //use a class, since your ID gets mangled
		$(this).toggleClass("plusminus");      //add the class to the clicked element
	});


	$(function(){
		$(".contact.keys").click(function(){
		if($(".moblink").is(':hidden')){
			$(".moblink").slideDown(500);
		}else{
			$(".moblink").slideUp(500);
		}
	});
});




$(function(){
	$(".showtheform").click(function(){
	if($(".theform").is(':hidden')){
		$(".theform").slideDown(500);
	}else{
		$(".theform").slideUp(500);
	}
});
});



	// $(function() {                       //run when the DOM is ready
	//   $(".video-copy.mobile").click(function() {  //use a class, since your ID gets mangled
	//     $(this).addClass("active");      //add the class to the clicked element
	// 		setTimeout(RemoveClass, 2000);
	//   });
	// 	function RemoveClass() {
	// 	$('.video-copy.mobile').removeClass("active");
	// 	}
	// });

 $(".navmenu .nav li").addClass("animated slideInRight");

 $(".navbar-toggle").click(function() {
     $(this).toggleClass("crossed");
   });

	 $("#ghost").click(function() {
			 $('.navbar-toggle').removeClass("crossed");
		 });

// $('.item').matchHeight();



	$('#app').carousel({
		interval: 3000
	});

	$('#app .item:first').addClass('active');
	// $('#kb-fw .item:first').addClass('active');
	$( "div[id^='kb-fw']").find('.item:first' ).addClass('active');





$(window).resize(function(){

	$('.className').css({
		position:'absolute',
		left: ($(window).width() - $('.className').outerWidth())/2,
		top: ($(window).height() - $('.className').outerHeight())/2
	});

});
// To initially run the function:
$(window).resize();



}); /* end of as page load scripts */

$( window ).load(function() {

		// ----------------------------------
				// sticky footer
		//-----------------------------------

	// find height of footer and apply CSS for sticky footer
	var boot= $('.footer').outerHeight();
	var four= $(window).height();
	// var smallboot= boot-10;
	$(".wrapper").css('padding-bottom', boot);
	$(".footer").css('margin-top', -boot);
	// $(".fourohfour").css('padding-top', '140px');
	// $(".fourohfour").css('height', (four-boot)-140);
});
