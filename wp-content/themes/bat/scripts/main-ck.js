$ = jQuery.noConflict();
var util={Global:{init:function(){this.smoothScroll()},smoothScroll:function(){$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");if(e.length){$("html,body").animate({scrollTop:e.offset().top},1e3);return!1}}})})}},Front:{init:function(){this.Custom();this.Carousel();this.statCount()},Custom:function(){$(window).scroll(function(){var e=$(".t-header").outerHeight(),t=$(window).scrollTop();t>e&&(t=e*2);if($(this).scrollTop()>500){$(".navbar-fixed-top").css("top","0");$(".navbar-fixed-top").addClass("nav-shrink")}else{$(".navbar-fixed-top").css("top","0");$(".navbar-fixed-top").removeClass("nav-shrink");$(".navbar-fixed-top").css("top",-(t/2))}$(this).scrollTop()<100&&$(".navbar-fixed-top").css("top","0")})},Carousel:function(){$(".client-feat").owlCarousel({itemsCustom:[[0,1],[480,2],[800,3],[1200,4]],autoPlay:!0});$(".slider-testi").owlCarousel({singleItem:!0,autoPlay:!0});$(".prod-feat-single").owlCarousel({navigation:!0,slideSpeed:300,paginationSpeed:400,singleItem:!0,pagination:!1});$(".prod-feat .row").owlCarousel({itemsCustom:[[0,1],[380,1],[800,2],[800,3],[1600,3]],navigation:!0,pagination:!1})},statCount:function(){$(".js-count span").counterUp({delay:20,time:1e3})}}};jQuery(document).ready(function(){util.Global.init();util.Front.init()});