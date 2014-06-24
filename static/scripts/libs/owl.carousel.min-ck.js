"function"!=typeof Object.create&&(Object.create=function(e){function t(){}t.prototype=e;return new t});(function(e,t,n){var r={init:function(t,n){this.$elem=e(n);this.options=e.extend({},e.fn.owlCarousel.options,this.$elem.data(),t);this.userOptions=t;this.loadContent()},loadContent:function(){function t(e){var t,r="";if("function"==typeof n.options.jsonSuccess)n.options.jsonSuccess.apply(this,[e]);else{for(t in e.owl)e.owl.hasOwnProperty(t)&&(r+=e.owl[t].item);n.$elem.html(r)}n.logIn()}var n=this,r;"function"==typeof n.options.beforeInit&&n.options.beforeInit.apply(this,[n.$elem]);"string"==typeof n.options.jsonPath?(r=n.options.jsonPath,e.getJSON(r,t)):n.logIn()},logIn:function(){this.$elem.data("owl-originalStyles",this.$elem.attr("style"));this.$elem.data("owl-originalClasses",this.$elem.attr("class"));this.$elem.css({opacity:0});this.orignalItems=this.options.items;this.checkBrowser();this.wrapperWidth=0;this.checkVisible=null;this.setVars()},setVars:function(){if(0===this.$elem.children().length)return!1;this.baseClass();this.eventTypes();this.$userItems=this.$elem.children();this.itemsAmount=this.$userItems.length;this.wrapItems();this.$owlItems=this.$elem.find(".owl-item");this.$owlWrapper=this.$elem.find(".owl-wrapper");this.playDirection="next";this.prevItem=0;this.prevArr=[0];this.currentItem=0;this.customEvents();this.onStartup()},onStartup:function(){this.updateItems();this.calculateAll();this.buildControls();this.updateControls();this.response();this.moveEvents();this.stopOnHover();this.owlStatus();!1!==this.options.transitionStyle&&this.transitionTypes(this.options.transitionStyle);!0===this.options.autoPlay&&(this.options.autoPlay=5e3);this.play();this.$elem.find(".owl-wrapper").css("display","block");this.$elem.is(":visible")?this.$elem.css("opacity",1):this.watchVisibility();this.onstartup=!1;this.eachMoveUpdate();"function"==typeof this.options.afterInit&&this.options.afterInit.apply(this,[this.$elem])},eachMoveUpdate:function(){!0===this.options.lazyLoad&&this.lazyLoad();!0===this.options.autoHeight&&this.autoHeight();this.onVisibleItems();"function"==typeof this.options.afterAction&&this.options.afterAction.apply(this,[this.$elem])},updateVars:function(){"function"==typeof this.options.beforeUpdate&&this.options.beforeUpdate.apply(this,[this.$elem]);this.watchVisibility();this.updateItems();this.calculateAll();this.updatePosition();this.updateControls();this.eachMoveUpdate();"function"==typeof this.options.afterUpdate&&this.options.afterUpdate.apply(this,[this.$elem])},reload:function(){var e=this;t.setTimeout(function(){e.updateVars()},0)},watchVisibility:function(){var e=this;if(!1!==e.$elem.is(":visible"))return!1;e.$elem.css({opacity:0}),t.clearInterval(e.autoPlayInterval),t.clearInterval(e.checkVisible);e.checkVisible=t.setInterval(function(){e.$elem.is(":visible")&&(e.reload(),e.$elem.animate({opacity:1},200),t.clearInterval(e.checkVisible))},500)},wrapItems:function(){this.$userItems.wrapAll('<div class="owl-wrapper">').wrap('<div class="owl-item"></div>');this.$elem.find(".owl-wrapper").wrap('<div class="owl-wrapper-outer">');this.wrapperOuter=this.$elem.find(".owl-wrapper-outer");this.$elem.css("display","block")},baseClass:function(){var e=this.$elem.hasClass(this.options.baseClass),t=this.$elem.hasClass(this.options.theme);e||this.$elem.addClass(this.options.baseClass);t||this.$elem.addClass(this.options.theme)},updateItems:function(){var t,n;if(!1===this.options.responsive)return!1;if(!0===this.options.singleItem)return this.options.items=this.orignalItems=1,this.options.itemsCustom=!1,this.options.itemsDesktop=!1,this.options.itemsDesktopSmall=!1,this.options.itemsTablet=!1,this.options.itemsTabletSmall=!1,this.options.itemsMobile=!1;t=e(this.options.responsiveBaseWidth).width();t>(this.options.itemsDesktop[0]||this.orignalItems)&&(this.options.items=this.orignalItems);if(!1!==this.options.itemsCustom)for(this.options.itemsCustom.sort(function(e,t){return e[0]-t[0]}),n=0;n<this.options.itemsCustom.length;n+=1)this.options.itemsCustom[n][0]<=t&&(this.options.items=this.options.itemsCustom[n][1]);else t<=this.options.itemsDesktop[0]&&!1!==this.options.itemsDesktop&&(this.options.items=this.options.itemsDesktop[1]),t<=this.options.itemsDesktopSmall[0]&&!1!==this.options.itemsDesktopSmall&&(this.options.items=this.options.itemsDesktopSmall[1]),t<=this.options.itemsTablet[0]&&!1!==this.options.itemsTablet&&(this.options.items=this.options.itemsTablet[1]),t<=this.options.itemsTabletSmall[0]&&!1!==this.options.itemsTabletSmall&&(this.options.items=this.options.itemsTabletSmall[1]),t<=this.options.itemsMobile[0]&&!1!==this.options.itemsMobile&&(this.options.items=this.options.itemsMobile[1]);this.options.items>this.itemsAmount&&!0===this.options.itemsScaleUp&&(this.options.items=this.itemsAmount)},response:function(){var n=this,r,i;if(!0!==n.options.responsive)return!1;i=e(t).width();n.resizer=function(){e(t).width()!==i&&(!1!==n.options.autoPlay&&t.clearInterval(n.autoPlayInterval),t.clearTimeout(r),r=t.setTimeout(function(){i=e(t).width();n.updateVars()},n.options.responsiveRefreshRate))};e(t).resize(n.resizer)},updatePosition:function(){this.jumpTo(this.currentItem);!1!==this.options.autoPlay&&this.checkAp()},appendItemsSizes:function(){var t=this,n=0,r=t.itemsAmount-t.options.items;t.$owlItems.each(function(i){var s=e(this);s.css({width:t.itemWidth}).data("owl-item",Number(i));if(0===i%t.options.items||i===r)i>r||(n+=1);s.data("owl-roundPages",n)})},appendWrapperSizes:function(){this.$owlWrapper.css({width:this.$owlItems.length*this.itemWidth*2,left:0});this.appendItemsSizes()},calculateAll:function(){this.calculateWidth();this.appendWrapperSizes();this.loops();this.max()},calculateWidth:function(){this.itemWidth=Math.round(this.$elem.width()/this.options.items)},max:function(){var e=-1*(this.itemsAmount*this.itemWidth-this.options.items*this.itemWidth);this.options.items>this.itemsAmount?this.maximumPixels=e=this.maximumItem=0:(this.maximumItem=this.itemsAmount-this.options.items,this.maximumPixels=e);return e},min:function(){return 0},loops:function(){var t=0,n=0,r,i;this.positionsInArray=[0];this.pagesInArray=[];for(r=0;r<this.itemsAmount;r+=1)n+=this.itemWidth,this.positionsInArray.push(-n),!0===this.options.scrollPerPage&&(i=e(this.$owlItems[r]),i=i.data("owl-roundPages"),i!==t&&(this.pagesInArray[t]=this.positionsInArray[r],t=i))},buildControls:function(){if(!0===this.options.navigation||!0===this.options.pagination)this.owlControls=e('<div class="owl-controls"/>').toggleClass("clickable",!this.browser.isTouch).appendTo(this.$elem);!0===this.options.pagination&&this.buildPagination();!0===this.options.navigation&&this.buildButtons()},buildButtons:function(){var t=this,n=e('<div class="owl-buttons"/>');t.owlControls.append(n);t.buttonPrev=e("<div/>",{"class":"owl-prev",html:t.options.navigationText[0]||""});t.buttonNext=e("<div/>",{"class":"owl-next",html:t.options.navigationText[1]||""});n.append(t.buttonPrev).append(t.buttonNext);n.on("touchstart.owlControls mousedown.owlControls",'div[class^="owl"]',function(e){e.preventDefault()});n.on("touchend.owlControls mouseup.owlControls",'div[class^="owl"]',function(n){n.preventDefault();e(this).hasClass("owl-next")?t.next():t.prev()})},buildPagination:function(){var t=this;t.paginationWrapper=e('<div class="owl-pagination"/>');t.owlControls.append(t.paginationWrapper);t.paginationWrapper.on("touchend.owlControls mouseup.owlControls",".owl-page",function(n){n.preventDefault();Number(e(this).data("owl-page"))!==t.currentItem&&t.goTo(Number(e(this).data("owl-page")),!0)})},updatePagination:function(){var t,n,r,i,s,o;if(!1===this.options.pagination)return!1;this.paginationWrapper.html("");t=0;n=this.itemsAmount-this.itemsAmount%this.options.items;for(i=0;i<this.itemsAmount;i+=1)0===i%this.options.items&&(t+=1,n===i&&(r=this.itemsAmount-this.options.items),s=e("<div/>",{"class":"owl-page"}),o=e("<span></span>",{text:!0===this.options.paginationNumbers?t:"","class":!0===this.options.paginationNumbers?"owl-numbers":""}),s.append(o),s.data("owl-page",n===i?r:i),s.data("owl-roundPages",t),this.paginationWrapper.append(s));this.checkPagination()},checkPagination:function(){var t=this;if(!1===t.options.pagination)return!1;t.paginationWrapper.find(".owl-page").each(function(){e(this).data("owl-roundPages")===e(t.$owlItems[t.currentItem]).data("owl-roundPages")&&(t.paginationWrapper.find(".owl-page").removeClass("active"),e(this).addClass("active"))})},checkNavigation:function(){if(!1===this.options.navigation)return!1;!1===this.options.rewindNav&&(0===this.currentItem&&0===this.maximumItem?(this.buttonPrev.addClass("disabled"),this.buttonNext.addClass("disabled")):0===this.currentItem&&0!==this.maximumItem?(this.buttonPrev.addClass("disabled"),this.buttonNext.removeClass("disabled")):this.currentItem===this.maximumItem?(this.buttonPrev.removeClass("disabled"),this.buttonNext.addClass("disabled")):0!==this.currentItem&&this.currentItem!==this.maximumItem&&(this.buttonPrev.removeClass("disabled"),this.buttonNext.removeClass("disabled")))},updateControls:function(){this.updatePagination();this.checkNavigation();this.owlControls&&(this.options.items>=this.itemsAmount?this.owlControls.hide():this.owlControls.show())},destroyControls:function(){this.owlControls&&this.owlControls.remove()},next:function(e){if(this.isTransition)return!1;this.currentItem+=!0===this.options.scrollPerPage?this.options.items:1;if(this.currentItem>this.maximumItem+(!0===this.options.scrollPerPage?this.options.items-1:0)){if(!0!==this.options.rewindNav)return this.currentItem=this.maximumItem,!1;this.currentItem=0,e="rewind"}this.goTo(this.currentItem,e)},prev:function(e){if(this.isTransition)return!1;this.currentItem=!0===this.options.scrollPerPage&&0<this.currentItem&&this.currentItem<this.options.items?0:this.currentItem-(!0===this.options.scrollPerPage?this.options.items:1);if(0>this.currentItem){if(!0!==this.options.rewindNav)return this.currentItem=0,!1;this.currentItem=this.maximumItem,e="rewind"}this.goTo(this.currentItem,e)},goTo:function(e,n,r){var i=this;if(i.isTransition)return!1;"function"==typeof i.options.beforeMove&&i.options.beforeMove.apply(this,[i.$elem]);e>=i.maximumItem?e=i.maximumItem:0>=e&&(e=0);i.currentItem=i.owl.currentItem=e;if(!1!==i.options.transitionStyle&&"drag"!==r&&1===i.options.items&&!0===i.browser.support3d)return i.swapSpeed(0),!0===i.browser.support3d?i.transition3d(i.positionsInArray[e]):i.css2slide(i.positionsInArray[e],1),i.afterGo(),i.singleItemTransition(),!1;e=i.positionsInArray[e];!0===i.browser.support3d?(i.isCss3Finish=!1,!0===n?(i.swapSpeed("paginationSpeed"),t.setTimeout(function(){i.isCss3Finish=!0},i.options.paginationSpeed)):"rewind"===n?(i.swapSpeed(i.options.rewindSpeed),t.setTimeout(function(){i.isCss3Finish=!0},i.options.rewindSpeed)):(i.swapSpeed("slideSpeed"),t.setTimeout(function(){i.isCss3Finish=!0},i.options.slideSpeed)),i.transition3d(e)):!0===n?i.css2slide(e,i.options.paginationSpeed):"rewind"===n?i.css2slide(e,i.options.rewindSpeed):i.css2slide(e,i.options.slideSpeed);i.afterGo()},jumpTo:function(e){"function"==typeof this.options.beforeMove&&this.options.beforeMove.apply(this,[this.$elem]);e>=this.maximumItem||-1===e?e=this.maximumItem:0>=e&&(e=0);this.swapSpeed(0);!0===this.browser.support3d?this.transition3d(this.positionsInArray[e]):this.css2slide(this.positionsInArray[e],1);this.currentItem=this.owl.currentItem=e;this.afterGo()},afterGo:function(){this.prevArr.push(this.currentItem);this.prevItem=this.owl.prevItem=this.prevArr[this.prevArr.length-2];this.prevArr.shift(0);this.prevItem!==this.currentItem&&(this.checkPagination(),this.checkNavigation(),this.eachMoveUpdate(),!1!==this.options.autoPlay&&this.checkAp());"function"==typeof this.options.afterMove&&this.prevItem!==this.currentItem&&this.options.afterMove.apply(this,[this.$elem])},stop:function(){this.apStatus="stop";t.clearInterval(this.autoPlayInterval)},checkAp:function(){"stop"!==this.apStatus&&this.play()},play:function(){var e=this;e.apStatus="play";if(!1===e.options.autoPlay)return!1;t.clearInterval(e.autoPlayInterval);e.autoPlayInterval=t.setInterval(function(){e.next(!0)},e.options.autoPlay)},swapSpeed:function(e){"slideSpeed"===e?this.$owlWrapper.css(this.addCssSpeed(this.options.slideSpeed)):"paginationSpeed"===e?this.$owlWrapper.css(this.addCssSpeed(this.options.paginationSpeed)):"string"!=typeof e&&this.$owlWrapper.css(this.addCssSpeed(e))},addCssSpeed:function(e){return{"-webkit-transition":"all "+e+"ms ease","-moz-transition":"all "+e+"ms ease","-o-transition":"all "+e+"ms ease",transition:"all "+e+"ms ease"}},removeTransition:function(){return{"-webkit-transition":"","-moz-transition":"","-o-transition":"",transition:""}},doTranslate:function(e){return{"-webkit-transform":"translate3d("+e+"px, 0px, 0px)","-moz-transform":"translate3d("+e+"px, 0px, 0px)","-o-transform":"translate3d("+e+"px, 0px, 0px)","-ms-transform":"translate3d("+e+"px, 0px, 0px)",transform:"translate3d("+e+"px, 0px,0px)"}},transition3d:function(e){this.$owlWrapper.css(this.doTranslate(e))},css2move:function(e){this.$owlWrapper.css({left:e})},css2slide:function(e,t){var n=this;n.isCssFinish=!1;n.$owlWrapper.stop(!0,!0).animate({left:e},{duration:t||n.options.slideSpeed,complete:function(){n.isCssFinish=!0}})},checkBrowser:function(){var e=n.createElement("div");e.style.cssText="  -moz-transform:translate3d(0px, 0px, 0px); -ms-transform:translate3d(0px, 0px, 0px); -o-transform:translate3d(0px, 0px, 0px); -webkit-transform:translate3d(0px, 0px, 0px); transform:translate3d(0px, 0px, 0px)";e=e.style.cssText.match(/translate3d\(0px, 0px, 0px\)/g);this.browser={support3d:null!==e&&1===e.length,isTouch:"ontouchstart"in t||t.navigator.msMaxTouchPoints}},moveEvents:function(){if(!1!==this.options.mouseDrag||!1!==this.options.touchDrag)this.gestures(),this.disabledEvents()},eventTypes:function(){var e=["s","e","x"];this.ev_types={};!0===this.options.mouseDrag&&!0===this.options.touchDrag?e=["touchstart.owl mousedown.owl","touchmove.owl mousemove.owl","touchend.owl touchcancel.owl mouseup.owl"]:!1===this.options.mouseDrag&&!0===this.options.touchDrag?e=["touchstart.owl","touchmove.owl","touchend.owl touchcancel.owl"]:!0===this.options.mouseDrag&&!1===this.options.touchDrag&&(e=["mousedown.owl","mousemove.owl","mouseup.owl"]);this.ev_types.start=e[0];this.ev_types.move=e[1];this.ev_types.end=e[2]},disabledEvents:function(){this.$elem.on("dragstart.owl",function(e){e.preventDefault()});this.$elem.on("mousedown.disableTextSelect",function(t){return e(t.target).is("input, textarea, select, option")})},gestures:function(){function r(e){if(void 0!==e.touches)return{x:e.touches[0].pageX,y:e.touches[0].pageY};if(void 0===e.touches){if(void 0!==e.pageX)return{x:e.pageX,y:e.pageY};if(void 0===e.pageX)return{x:e.clientX,y:e.clientY}}}function i(t){"on"===t?(e(n).on(u.ev_types.move,s),e(n).on(u.ev_types.end,o)):"off"===t&&(e(n).off(u.ev_types.move),e(n).off(u.ev_types.end))}function s(i){i=i.originalEvent||i||t.event;u.newPosX=r(i).x-a.offsetX;u.newPosY=r(i).y-a.offsetY;u.newRelativeX=u.newPosX-a.relativePos;"function"==typeof u.options.startDragging&&!0!==a.dragging&&0!==u.newRelativeX&&(a.dragging=!0,u.options.startDragging.apply(u,[u.$elem]));(8<u.newRelativeX||-8>u.newRelativeX)&&!0===u.browser.isTouch&&(void 0!==i.preventDefault?i.preventDefault():i.returnValue=!1,a.sliding=!0);(10<u.newPosY||-10>u.newPosY)&&!1===a.sliding&&e(n).off("touchmove.owl");u.newPosX=Math.max(Math.min(u.newPosX,u.newRelativeX/5),u.maximumPixels+u.newRelativeX/5);!0===u.browser.support3d?u.transition3d(u.newPosX):u.css2move(u.newPosX)}function o(n){n=n.originalEvent||n||t.event;var r;n.target=n.target||n.srcElement;a.dragging=!1;!0!==u.browser.isTouch&&u.$owlWrapper.removeClass("grabbing");u.dragDirection=0>u.newRelativeX?u.owl.dragDirection="left":u.owl.dragDirection="right";0!==u.newRelativeX&&(r=u.getNewPosition(),u.goTo(r,!1,"drag"),a.targetElement===n.target&&!0!==u.browser.isTouch&&(e(n.target).on("click.disable",function(t){t.stopImmediatePropagation();t.stopPropagation();t.preventDefault();e(t.target).off("click.disable")}),n=e._data(n.target,"events").click,r=n.pop(),n.splice(0,0,r)));i("off")}var u=this,a={offsetX:0,offsetY:0,baseElWidth:0,relativePos:0,position:null,minSwipe:null,maxSwipe:null,sliding:null,dargging:null,targetElement:null};u.isCssFinish=!0;u.$elem.on(u.ev_types.start,".owl-wrapper",function(n){n=n.originalEvent||n||t.event;var s;if(3===n.which)return!1;if(!(u.itemsAmount<=u.options.items)){if(!1===u.isCssFinish&&!u.options.dragBeforeAnimFinish||!1===u.isCss3Finish&&!u.options.dragBeforeAnimFinish)return!1;!1!==u.options.autoPlay&&t.clearInterval(u.autoPlayInterval);!0===u.browser.isTouch||u.$owlWrapper.hasClass("grabbing")||u.$owlWrapper.addClass("grabbing");u.newPosX=0;u.newRelativeX=0;e(this).css(u.removeTransition());s=e(this).position();a.relativePos=s.left;a.offsetX=r(n).x-s.left;a.offsetY=r(n).y-s.top;i("on");a.sliding=!1;a.targetElement=n.target||n.srcElement}})},getNewPosition:function(){var e=this.closestItem();e>this.maximumItem?e=this.currentItem=this.maximumItem:0<=this.newPosX&&(this.currentItem=e=0);return e},closestItem:function(){var t=this,n=!0===t.options.scrollPerPage?t.pagesInArray:t.positionsInArray,r=t.newPosX,i=null;e.each(n,function(s,o){r-t.itemWidth/20>n[s+1]&&r-t.itemWidth/20<o&&"left"===t.moveDirection()?(i=o,t.currentItem=!0===t.options.scrollPerPage?e.inArray(i,t.positionsInArray):s):r+t.itemWidth/20<o&&r+t.itemWidth/20>(n[s+1]||n[s]-t.itemWidth)&&"right"===t.moveDirection()&&(!0===t.options.scrollPerPage?(i=n[s+1]||n[n.length-1],t.currentItem=e.inArray(i,t.positionsInArray)):(i=n[s+1],t.currentItem=s+1))});return t.currentItem},moveDirection:function(){var e;0>this.newRelativeX?(e="right",this.playDirection="next"):(e="left",this.playDirection="prev");return e},customEvents:function(){var e=this;e.$elem.on("owl.next",function(){e.next()});e.$elem.on("owl.prev",function(){e.prev()});e.$elem.on("owl.play",function(t,n){e.options.autoPlay=n;e.play();e.hoverStatus="play"});e.$elem.on("owl.stop",function(){e.stop();e.hoverStatus="stop"});e.$elem.on("owl.goTo",function(t,n){e.goTo(n)});e.$elem.on("owl.jumpTo",function(t,n){e.jumpTo(n)})},stopOnHover:function(){var e=this;!0===e.options.stopOnHover&&!0!==e.browser.isTouch&&!1!==e.options.autoPlay&&(e.$elem.on("mouseover",function(){e.stop()}),e.$elem.on("mouseout",function(){"stop"!==e.hoverStatus&&e.play()}))},lazyLoad:function(){var t,n,r,i,s;if(!1===this.options.lazyLoad)return!1;for(t=0;t<this.itemsAmount;t+=1)n=e(this.$owlItems[t]),"loaded"!==n.data("owl-loaded")&&(r=n.data("owl-item"),i=n.find(".lazyOwl"),"string"!=typeof i.data("src")?n.data("owl-loaded","loaded"):(void 0===n.data("owl-loaded")&&(i.hide(),n.addClass("loading").data("owl-loaded","checked")),(s=!0===this.options.lazyFollow?r>=this.currentItem:!0)&&r<this.currentItem+this.options.items&&i.length&&this.lazyPreload(n,i)))},lazyPreload:function(e,n){function r(){e.data("owl-loaded","loaded").removeClass("loading");n.removeAttr("data-src");"fade"===s.options.lazyEffect?n.fadeIn(400):n.show();"function"==typeof s.options.afterLazyLoad&&s.options.afterLazyLoad.apply(this,[s.$elem])}function i(){o+=1;s.completeImg(n.get(0))||!0===u?r():100>=o?t.setTimeout(i,100):r()}var s=this,o=0,u;"DIV"===n.prop("tagName")?(n.css("background-image","url("+n.data("src")+")"),u=!0):n[0].src=n.data("src");i()},autoHeight:function(){function n(){var n=e(i.$owlItems[i.currentItem]).height();i.wrapperOuter.css("height",n+"px");i.wrapperOuter.hasClass("autoHeight")||t.setTimeout(function(){i.wrapperOuter.addClass("autoHeight")},0)}function r(){o+=1;i.completeImg(s.get(0))?n():100>=o?t.setTimeout(r,100):i.wrapperOuter.css("height","")}var i=this,s=e(i.$owlItems[i.currentItem]).find("img"),o;void 0!==s.get(0)?(o=0,r()):n()},completeImg:function(e){return!e.complete||"undefined"!=typeof e.naturalWidth&&0===e.naturalWidth?!1:!0},onVisibleItems:function(){var t;!0===this.options.addClassActive&&this.$owlItems.removeClass("active");this.visibleItems=[];for(t=this.currentItem;t<this.currentItem+this.options.items;t+=1)this.visibleItems.push(t),!0===this.options.addClassActive&&e(this.$owlItems[t]).addClass("active");this.owl.visibleItems=this.visibleItems},transitionTypes:function(e){this.outClass="owl-"+e+"-out";this.inClass="owl-"+e+"-in"},singleItemTransition:function(){var e=this,t=e.outClass,n=e.inClass,r=e.$owlItems.eq(e.currentItem),i=e.$owlItems.eq(e.prevItem),s=Math.abs(e.positionsInArray[e.currentItem])+e.positionsInArray[e.prevItem],o=Math.abs(e.positionsInArray[e.currentItem])+e.itemWidth/2;e.isTransition=!0;e.$owlWrapper.addClass("owl-origin").css({"-webkit-transform-origin":o+"px","-moz-perspective-origin":o+"px","perspective-origin":o+"px"});i.css({position:"relative",left:s+"px"}).addClass(t).on("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend",function(){e.endPrev=!0;i.off("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend");e.clearTransStyle(i,t)});r.addClass(n).on("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend",function(){e.endCurrent=!0;r.off("webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend");e.clearTransStyle(r,n)})},clearTransStyle:function(e,t){e.css({position:"",left:""}).removeClass(t);this.endPrev&&this.endCurrent&&(this.$owlWrapper.removeClass("owl-origin"),this.isTransition=this.endCurrent=this.endPrev=!1)},owlStatus:function(){this.owl={userOptions:this.userOptions,baseElement:this.$elem,userItems:this.$userItems,owlItems:this.$owlItems,currentItem:this.currentItem,prevItem:this.prevItem,visibleItems:this.visibleItems,isTouch:this.browser.isTouch,browser:this.browser,dragDirection:this.dragDirection}},clearEvents:function(){this.$elem.off(".owl owl mousedown.disableTextSelect");e(n).off(".owl owl");e(t).off("resize",this.resizer)},unWrap:function(){0!==this.$elem.children().length&&(this.$owlWrapper.unwrap(),this.$userItems.unwrap().unwrap(),this.owlControls&&this.owlControls.remove());this.clearEvents();this.$elem.attr("style",this.$elem.data("owl-originalStyles")||"").attr("class",this.$elem.data("owl-originalClasses"))},destroy:function(){this.stop();t.clearInterval(this.checkVisible);this.unWrap();this.$elem.removeData()},reinit:function(t){t=e.extend({},this.userOptions,t);this.unWrap();this.init(t,this.$elem)},addItem:function(e,t){var n;if(!e)return!1;if(0===this.$elem.children().length)return this.$elem.append(e),this.setVars(),!1;this.unWrap();n=void 0===t||-1===t?-1:t;n>=this.$userItems.length||-1===n?this.$userItems.eq(-1).after(e):this.$userItems.eq(n).before(e);this.setVars()},removeItem:function(e){if(0===this.$elem.children().length)return!1;e=void 0===e||-1===e?-1:e;this.unWrap();this.$userItems.eq(e).remove();this.setVars()}};e.fn.owlCarousel=function(t){return this.each(function(){if(!0===e(this).data("owl-init"))return!1;e(this).data("owl-init",!0);var n=Object.create(r);n.init(t,this);e.data(this,"owlCarousel",n)})};e.fn.owlCarousel.options={items:5,itemsCustom:!1,itemsDesktop:[1199,4],itemsDesktopSmall:[979,3],itemsTablet:[768,2],itemsTabletSmall:!1,itemsMobile:[479,1],singleItem:!1,itemsScaleUp:!1,slideSpeed:200,paginationSpeed:800,rewindSpeed:1e3,autoPlay:!1,stopOnHover:!1,navigation:!1,navigationText:["prev","next"],rewindNav:!0,scrollPerPage:!1,pagination:!0,paginationNumbers:!1,responsive:!0,responsiveRefreshRate:200,responsiveBaseWidth:t,baseClass:"owl-carousel",theme:"owl-theme",lazyLoad:!1,lazyFollow:!0,lazyEffect:"fade",autoHeight:!1,jsonPath:!1,jsonSuccess:!1,dragBeforeAnimFinish:!0,mouseDrag:!0,touchDrag:!0,addClassActive:!1,transitionStyle:!1,beforeUpdate:!1,afterUpdate:!1,beforeInit:!1,afterInit:!1,beforeMove:!1,afterMove:!1,afterAction:!1,startDragging:!1,afterLazyLoad:!1}})(jQuery,window,document);