
jQuery(document).ready(function() {

    'use strict';

//  Tooltip function by = bootstrap.js ========================== //
	jQuery('[data-toggle="tooltip"]').tooltip();

//  Popovers = bootstrap.js========================= //	
	jQuery('[data-toggle="popover"]').popover();
	


//  image-carousel function by = owl.carousel.js ========================== //

	jQuery('.img-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})

//  image-carousel with content function by = owl.carousel.js ========================== //

	jQuery('.img-carousel-content').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})


//  image-carousel no margin function by = owl.carousel.js ========================== //

	jQuery('.img-carousel-full-screen').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})	
	
//  widget-client-carousel function by = owl.carousel.js ========================== //

	jQuery('.widget-client').owlCarousel({
		loop:true,
		autoplay:true,
		items:1,
		nav:false,
		dots:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	})	
//  Portfolio Carousel function by = owl.carousel.js ========================== //

	jQuery('.portfolio-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})

//  Portfolio Carousel no margin function by = owl.carousel.js ========================== //

	jQuery('.portfolio-carousel-nogap').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})



//  Portfolio Carousel Full Screen with no margin function by = owl.carousel.js ========================== //

	jQuery('.portfolio-carousel-fullscreen-nogap').owlCarousel({
        loop:true,
		margin:0,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})

	

//  Event Carousel function by = owl.carousel.js ========================== //

	jQuery('.event-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}

	})		

	

//  Client logo Carousel function by = owl.carousel.js ========================== //

	jQuery('.client-logo-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        autoplay:true,
		autoplayTimeout:2000,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:3
			},			
			767:{
				items:4
			},
			1000:{
				items:5
			}
		}
	})	

// Client logo Carousel-4   function by = owl.carousel.js ========================== //	

	jQuery('.client-logo-carousel-4').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:4
			},
			1000:{
				items:4
			}
		}
	})	

// Client logo Carousel-3 Carousels  function by = owl.carousel.js ========================== //		

	jQuery('.client-logo-carousel-3').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})	

// Client logo Carousel-2 Carousels  function by = owl.carousel.js ========================== //		

	jQuery('.client-logo-carousel-2').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})	

// Client logo Carousel-1  function by = owl.carousel.js ========================== //		

	jQuery('.client-logo-carousel-1').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			767:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})	

// Fade slider for home function by = owl.carousel.js ========================== //

	jQuery('.owl-fade-slider-one').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:2000,
		margin:30,
		nav:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		items:1,
		dots: true,
		animateOut:'fadeOut',

	})

// Slide slider for home function by = owl.carousel.js ========================== //

	jQuery('.owl-slide-slider-one').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:2000,
		margin:30,
		nav:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		items:1,
		dots: true,
	})	

//  Testimonial one function by = owl.carousel.js ========================== //

	jQuery('.testimonial-one').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			767:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

//  Testimonial two function by = owl.carousel.js ========================== //

	jQuery('.testimonial-two').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});

//  Testimonial three function by = owl.carousel.js ========================== //

	jQuery('.testimonial-three').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})

//  Testimonial four function by = owl.carousel.js ========================== //

	jQuery('.testimonial-four').owlCarousel({
		loop:false,
		margin:80,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:2
			}
		}
	})
//  Testimonial five function by = owl.carousel.js ========================== //
	jQuery('.testimonial-five').owlCarousel({
		loop:false,
		margin:80,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:2
			}
		}
	})	
//  CounterUp one function by = counterup-min.js ========================== //

	jQuery('.counter').counterUp({
		delay: 10,
		time: 1000
	});

});

// Document.ready END==set-marker-popup-close============================================================//

