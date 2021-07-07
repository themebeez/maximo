'use strict';

var body = document.querySelector('body');

var taleBlogInit = {

	init: function() {
		this.bannerInit();
		this.toggleSearch();
		this.backToTop();
		this.toggleComment();
		this.stickyNav();
		this.offCanvasNav();
		this.mobileNavToggle();
	},

	bannerInit: function() {
		if ( body.classList.contains('maximo-banner-slider-enabled') ) {
			const bannerSlider = new Swiper( '#maximo-banner-container', {
                loop: true,
                slidesPerView: 1,
                direction: 'horizontal',
                speed: 700,
                autoplay : {
                    delay: 4500
                },
                navigation: {
                    nextEl: '.maximo-banner-button-next',
                    prevEl: '.maximo-banner-button-prev',
                },
                pagination: {
                    el: '.maximo-banner-pagination',
                    type: 'bullets',
                    clickable: true,
                },
            } );
		}
	},

	toggleSearch: function() {
		var searchEle = document.querySelector("#maximo-header-search");
		if ( searchEle ) {
			searchEle.addEventListener('click', function(e){
				e.preventDefault();
				var searchContainerEle = document.querySelector('#maximo-main-header-search-element .maximo-search-container');
				searchContainerEle.classList.toggle('maximo-hide');
			});
		}
	},

	backToTop: function() {
		var scrollTopEle = document.querySelector("#maximo-scroll-top-btn");
		if ( scrollTopEle ) {
			window.addEventListener('scroll', function(){			
				if ( window.pageYOffset > 300 ) {
					scrollTopEle.classList.remove('maximo-hide-stb');
				} else {
					scrollTopEle.classList.add('maximo-hide-stb');
				}
			});
			scrollTopEle.addEventListener('click',function(e){
				e.preventDefault();
				window.scrollTo({
					top: 0,
					behavior: 'smooth'
				});
			});
		}
	},

	toggleComment: function() {
		if ( body.classList.contains('maximo-has-togglable-comments-box') ) {
			var commentToggleEle = document.querySelector('#maximo-cmnt-tgl-btn');
			commentToggleEle.addEventListener('click',function(e){
				e.preventDefault();
				var commentsWrapEle = document.querySelector('#comments');
				commentsWrapEle.classList.toggle('maximo-show');
			});
		}
	},

	stickyNav: function() {
		if ( body.classList.contains('maximo-sticky-main-navigation-enabled') ) {
			var stickyMainNav = new Sticky( '.maximo-sticky-main-navigation', {
                wrap: true,
                stickyClass: 'maximo-sticky-enabled'
            } );
		}
	},

	offCanvasNav: function() {
		var offCanvasNavActionEles = document.querySelectorAll('#maximo-mobile-nav-toggle-btn, #maximo-mobile-nav-overlay, #maximo-mobile-nav-close-btn');
		[].forEach.call(offCanvasNavActionEles, function(offCanvasNavActionEle){
			offCanvasNavActionEle.addEventListener('click', function(e){
				e.preventDefault();
			    var offCanvasNavOverlay = document.querySelector('#maximo-mobile-nav-overlay');
				var offCanvasNavEle = document.querySelector('#maximo-mobile-nav-container');
				offCanvasNavOverlay.classList.toggle('display-mobile-nav-overlay');
				offCanvasNavEle.classList.toggle('display-mobile-nav');
			});
		});
	},

	mobileNavToggle: function() {
		var subMenuDropdownActionEles = document.querySelectorAll('.dropdown-btn');
		[].forEach.call(subMenuDropdownActionEles, function(subMenuDropdownActionEle){
			subMenuDropdownActionEle.addEventListener('click',function(e){
				e.preventDefault();
				var subMenuEle = subMenuDropdownActionEle.nextElementSibling;
				subMenuEle.classList.toggle('display-sub-menu');

				var dropDownIconEle = subMenuDropdownActionEle.firstChild;
				console.log(dropDownIconEle);
				if ( dropDownIconEle.classList.contains('icon-arrow-down') ) {
					dropDownIconEle.classList.remove('icon-arrow-down');
					dropDownIconEle.classList.add('icon-arrow-up');
				} else {
					dropDownIconEle.classList.remove('icon-arrow-up');
					dropDownIconEle.classList.add('icon-arrow-down');
				}
			});
		});
	}
}

taleBlogInit.init();