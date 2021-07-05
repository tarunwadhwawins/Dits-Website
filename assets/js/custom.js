
		   
  // bottom to top scroll
       $(document).ready(function(){ 
          $(window).scroll(function(){ 
              if ($(this).scrollTop() > 100) { 
                  $('#scroll').fadeIn(); 
              } else { 
                  $('#scroll').fadeOut(); 
              } 
          }); 
		   
         $('#scroll').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }); 
             return false; 
          }); 
		   
	// owl carousel testimonial
		   $('#testimonialCarousel').owlCarousel({
			loop:true,
			margin:10,
			autoplay:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:1,
					nav:false
				},
				1000:{
					items:1,
					nav:true,
					loop:false
				}
			}
		})
		   
	// logo Carousel
		   $('#logoCarousel').owlCarousel({
			loop:true,
			margin:15,
			autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
			autoWidth:true,
        	autoplaySpeed:1500,
			animateOut:'fadeOut',
            animateIn:'fadeIn',
			responsiveClass:true,
// 			autoplayHoverPause:true,
		    navSpeed:1500,
			rewind:true,
			responsive:{
				0:{
					items:2,
					nav:true
				},
				600:{
					items:6,
					nav:false
				},
				1000:{
					items:8,
					nav:true,
					loop:true
				}
			}
		})   
	
	// portfolio Carousel
		   $('#portCarousel').owlCarousel({
			loop:true,
			margin:15,
			autoplay:true,
			responsiveClass:true,
		    navSpeed:500,
			responsive:{
				0:{
					items:1,
					nav:true
				},
				600:{
					items:1,
					nav:false
				},
				1000:{
					items:1,
					nav:true,
					loop:true
				}
			}
		})  
	
	
	
		   
	// menu toggle //
		   

         	$('#offcanvas-toggler').on('click', function (event) {
         		event.preventDefault();
         		$('body').addClass('offcanvas');
         	});
         	$('<div class="offcanvas-overlay"></div>').insertBefore('.body-innerwrapper > .offcanvas-menu');
         	$('.close-offcanvas, .offcanvas-overlay').on('click', function (event) {
         		event.preventDefault();
         		$('body').removeClass('offcanvas');
         	});
         
        
		   
		   
	//  floating js //
		   $(window).scroll(function() {
			var winScrollTop = $(window).scrollTop();
			var winHeight = $(window).height();
			var floaterHeight = $('#floater').outerHeight(true);
			var fromBottom = 300;
			var top = winScrollTop + winHeight - floaterHeight - fromBottom;
			$('#floater').css({'top': top + 'px'});
	   
         }); 
		      
      });
	$(document).ready(function () {
		$('#floater').removeClass('removeTopSpace');
	});
	
	$(".show-popup").click(function(){
	  $(".contact-us").addClass("show");
	});
	
	$(".close-btn").click(function(){
	  $(".contact-us").removeClass("show");
	});
	
