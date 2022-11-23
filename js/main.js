(function($) {

	"use strict";


	$(window).stellar({
		responsive: true,
		parallaxBackgrounds: true,
		parallaxElements: true,
		horizontalScrolling: false,
		hideDistantElements: false,
		scrollProperty: 'scroll'
  	});


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

  var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// magnific popup
	$('.image-popup').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
		verticalFit: true
		},
		zoom: {
		enabled: true,
		duration: 300 // don't foget to change the duration also in CSS
		}
	});

	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();

	$('.appointment_date-check-in').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});
	$('.appointment_date-check-out').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});

	$('.appointment_time').timepicker();

	//validating user input
	function ValidateEmailForm(type){
		switch(type){
			case 'contact' :
				if( document.getElementById('name').value == "")
				{
					notifyError("Please Enter Name !");
					document.getElementById('name').focus() ;
					return false;
				}
				if( document.getElementById('mailfrom').value == "")
				{
					notifyError("Please Enter Your Email ID !");
					document.getElementById('mailfrom').focus() ;
					return false;
				}
				if( document.getElementById('subject').value == "" )
				{
					notifyError("Please Enter Your Subject !");
					document.getElementById('subject').focus() ;
					return false;
				}
				if( document.getElementById('message').value == "" )
				{
					notifyError("Please Enter Your Message !");
					document.getElementById('message').focus() ;
					return false;
				}
			break;
			case 'reservation' :
				if( document.getElementById('fullname').value == "")
				{
					notifyError("Please Enter Name !");
					document.getElementById('fullname').focus() ;
					return false;
				}
				if( document.getElementById('checkin').value == "")
				{
					notifyError("Please Enter Check In Date !");
					document.getElementById('checkin').focus() ;
					return false;
				}
				if( document.getElementById('checkout').value == "")
				{
					notifyError("Please Enter Check Out Date !");
					document.getElementById('checkout').focus() ;
					return false;
				}
				if( document.getElementById('phone').value == "")
				{
					notifyError("Please Enter Phone Number !");
					document.getElementById('phone').focus() ;
					return false;
				}
				if( document.getElementById('time').value == "")
				{
					notifyError("Please Enter Time !");
					document.getElementById('time').focus() ;
					return false;
				}
			break;
		}
		
		return true;
	}

	function notifySuccess(message, title = 'Success !', postion = 'topRight') {
		iziToast.success({
			title		: title,
			message	: message,
			position	: postion
		});
	}

	function notifyError(message, title = 'Failed !', postion = 'topRight') {
		iziToast.error({
			title		: title,
			message	: message,
			position	: postion
		});
	}
	//onclick event to submit a form
	$('#contactForm').submit(function() {
		var validateform = ValidateEmailForm('contact');
		if(validateform === true){
			$('#btnSendMail').attr('disabled', 'disabled');
			$.ajax({  
				url			: $(this).attr('action'),
				data	   	: $(this).serialize(),
				method		: "post",
				dataType 	: "json",
				success:function(info){
					console.log(info);
					if(info.result == 'success'){
						notifySuccess('Contact Send Successfully !');
						window.setTimeout(function(){
							location.reload(true);
						}, 3000);
					}
					else{
						notifyError('Message could not be sent !');
						console.log('Error :', info.error);
						$('#btnSendMail').removeAttr('disabled');
					}
				}
			});
		}
		return false;
	});

	$('#appointment-form').submit(function() {
		var validateform = ValidateEmailForm('reservation');
		if(validateform === true){
			$('#booking-now').attr('disabled', 'disabled');
			$.ajax({  
				url			: $(this).attr('action'),
				data	   	: $(this).serialize(),
				method		: "post",
				dataType 	: "json",
				success		: function(info){
					console.log(info);
					if(info.result == 'success'){
						notifySuccess('Reservation request send successfully !');
						window.setTimeout(function(){
							location.reload(true);
						}, 3000);
					}
					else{
						notifyError('Reservation request could not be sent !');
						console.log('Error :', info.error);
						$('#booking-now').removeAttr('disabled');
					}
				}
			});
		}
		return false;
	});

})(jQuery);

