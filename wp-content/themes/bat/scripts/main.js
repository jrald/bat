var util = {
    Global: {
        init: function () {
            this.smoothScroll();
        },
        smoothScroll: function () {




        },
    },
    Front: {
      init: function() {
        this.Custom();
        this.Carousel();
        this.statCount();
        this.zoomer();
        this.Tabbed();
      },
      Custom: function() {

      	var chcker = 1;
      	var body_hght = ($('.nav-top').outerHeight())+($('.nav-top').outerHeight());

   		$(window).scroll(function() {
   			var h_hght = $(".t-header").outerHeight();
   			var scrolled = $(window).scrollTop();
   			var win_width = $(window).outerWidth();
			
			if(win_width>800){

	   			if(scrolled>h_hght){
	   				scrolled = (h_hght*2);
	   			}
   			
			    if ($(this).scrollTop() > 500) { 
			    	$('.navbar-fixed-top').css('top','0')
			    	$('.navbar-fixed-top').addClass('nav-shrink');
			    
			    } 
			    else {
			    	$('.navbar-fixed-top').removeClass('nav-shrink');
			    	$('.navbar-fixed-top').css('top',-(scrolled/2));
			    }   
		    }

		    

		   		
		});

		var counter = 1;
		
		function listResize() {

			$('.list-bordered-lg').each(function() {
				
				var max_li = 0;

   				$(this).children('li').each(function() {

   					var li_hght = $(this).outerHeight();
   					if(li_hght>=max_li){

   						max_li = li_hght;
   						console.log(max_li + "<--max" + counter);
   					}
   				});
   				$(this).children('li').css('height',max_li);
   			});

		}

		listResize();	

		$('.navbar-toggle').click( function() {
			var menu_target = $(this).data('target');

			$('.body-wrapper').toggleClass('slide-left');
			$('.nav-cont').css('right','0');

			return false;

		});
		$('.btn-close').click( function() {

			$('.body-wrapper').removeClass('slide-left');
			$('.nav-cont').css('right','-100%');

			return false;

		});
		$('body').click( function() {

			$('.body-wrapper').removeClass('slide-left');
			$('.nav-cont').css('right','-100%');

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
		        [400, 1],
		        [600, 2],
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
	    Tabbed: function() {

     		$('.tabbed').find('.nav-tabs li').first().addClass('active');
     		$('.tabbed').find('.tab-content .tab-desc').addClass('hideleft make_transist');
     		$('.tabbed').find('.tab-content .tab-desc').first().addClass('showleft');
     		$('.tabbed').find('.tab-content .tab-desc').first().removeClass('hideleft');

     		$('.tabbed').find('.nav-tabs li a').click(function() {
     			var tab_target = $(this).attr('href');
     			$('.tabbed').find('.nav-tabs li').removeClass('active');
     			$(this).parent('li').addClass('active');

     			$('.tabbed').find('.tab-content .tab-desc').removeClass('showleft');
     			$('.tabbed').find('.tab-content .tab-desc').addClass('hideleft');     			

     			$(tab_target).addClass('showleft');

     		return false;

			});
	    },
	    zoomer: function() {

     		$(".zoom-img").each(function() {
	     		$(this).elevateZoom({ 
	     			zoomType	 : "lens", 
	     			easing : true,
	     			scrollZoom : true,
	     			lensShape : "round", 
	     			responsive: true,
	     			lensSize : 200
	     		}); 
     		});

	    },
      
    }
};

jQuery(document).ready(function() {
    util.Global.init();
    util.Front.init();
});



