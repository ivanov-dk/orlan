$(function() {

 	//Phone Mask
  	$(".phone").mask("+7 (999) 999-9999");

	//Arctic Modal
    $('.call-btn').click(function (e) {
        e.preventDefault();
        $('#callModal').arcticmodal();
    });

	//Smooth Scrolling
	$(".more-btn").click(function (e) {
		e.preventDefault();
		elementClick = $(this).attr("href");
		destination = $(elementClick).offset().top;
		$("body,html").animate({scrollTop: destination }, 800);
	});

	//Menu Hamburger
	$(".menu-btn").click(function () {
		$('.menu__list').toggleClass('menu-opened');
	});

	//Slider Main
	$('.main-wrap').slick({
			dots: true,
			dotsClass: "white-dots",
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: false,
			adaptiveHeight: false,
			autoplay: true,
			autoplaySpeed: 5000,
			nextArrow: '<i class="main-arrow-right fa" aria-hidden="true"></i>',
			prevArrow: '<i class="main-arrow-left fa" aria-hidden="true"></i>',
			responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

  //Slider Insructor
	$('.sel-instr-wrap').slick({
			dots: true,
			dotsClass: "dots",
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true,
			adaptiveHeight: false,
			autoplay: false,
			autoplaySpeed: 2000,
			nextArrow: '<i class="arrow-right arrow-sel-right fa" aria-hidden="true"></i>',
			prevArrow: '<i class="arrow-left arrow-sel-left fa" aria-hidden="true"></i>',
			responsive: [
		{
	      breakpoint: 1024,
	      settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false
	      }
	    },
	    {
	      breakpoint: 640,
	      settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false
	      }
	    }
	  ]
	});

	//Slider Program
	$('.program-wrap').slick({
			dots: false,
			dotsClass: "dots",
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			variableWidth: false,
			adaptiveHeight: false,
			autoplay: false,
			autoplaySpeed: 2000,
			arrows: false,
			nextArrow: '<i class="arrow-right fa" aria-hidden="true"></i>',
			prevArrow: '<i class="arrow-left fa" aria-hidden="true"></i>',
			responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        infinite: true
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	      	autoplay: true,
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

	//Slider Autopark
	$('.ourpark-wrap').slick({
			dots: true,
			dotsClass: "dots",
			infinite: true,
			speed: 300,
			slidesToShow: 2,
			slidesToScroll: 1,
			variableWidth: true,
			adaptiveHeight: false,
			autoplay: true,
			autoplaySpeed: 2000,
			nextArrow: '<i class="arrow-right fa" aria-hidden="true"></i>',
			prevArrow: '<i class="arrow-left fa" aria-hidden="true"></i>',
			responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
	});

	//Slider Reviews
	$('.pupils').slick({
			dots: true,
			dotsClass: "dots",
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true,
			adaptiveHeight: false,
			autoplay: false,
			autoplaySpeed: 2000,
			nextArrow: '<i class="arrow-right fa" aria-hidden="true"></i>',
			prevArrow: '<i class="arrow-left fa" aria-hidden="true"></i>',
			responsive: [
		{
	      breakpoint: 1024,
	      settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false
	      }
	    },
	    {
	      breakpoint: 640,
	      settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false
	      }
	    }
	  ]
	});

	//Sticky Navigation
 	$("#navigator").sticky({topSpacing:0});

});