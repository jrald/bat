var util = {
    Global: {
        init: function () {
            this.smoothScroll();
        },
        smoothScroll: function () {

            $(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});


        },
    },
    Front: {
      init: function() {
        this.Custom();
        this.Carousel();
        this.statCount();
      },
      Custom: function() {

   		$(window).scroll(function() {
   			var h_hght = $(".t-header").outerHeight();
   			var scrolled = $(window).scrollTop();

   			if(scrolled>h_hght){
   				scrolled = (h_hght*2);
   			}

   			

		    if ($(this).scrollTop() > 500) { 
		    	$('.navbar-fixed-top').css('top','0')
		    	$('.navbar-fixed-top').addClass('nav-shrink');
		    
		    } 
		    else {
		    	$('.navbar-fixed-top').css('top','0')
		    	$('.navbar-fixed-top').removeClass('nav-shrink');
		    	$('.navbar-fixed-top').css('top',-(scrolled/2));
		    }   

		    if ($(this).scrollTop() < 100) {
				$('.navbar-fixed-top').css('top','0')
   			}			
		});

      },

      Carousel: function() {
      	  $(".client-feat").owlCarousel({
     
		      itemsCustom : [
		        [0, 1],
		        [480, 2],
		        [800, 3],
		        [1200, 4],
		      ],
		       autoPlay: true,
		 
		  }); 
		  $(".slider-testi").owlCarousel({
     
		      singleItem:true,
		      autoPlay: true,
		 
		  });

		  $(".prod-feat-single").owlCarousel({
     
		      navigation : true, // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem:true,
		      pagination: false
		 
		  });
		  $(".prod-feat .row").owlCarousel({
     
		      itemsCustom : [
		        [0, 1],
		        [380, 1],
		        [800, 2],
		        [800, 3],
		        [1600, 3],
		      ],
		      navigation : true,
		      pagination: false

		  });

      },

      statCount: function() {

     		$('.js-count span').counterUp({
                delay: 20,
                time: 1000
            });

	    },
      
    }
};

jQuery(document).ready(function() {
  util.Global.init();
    util.Front.init();
});



