'use strict';

var body = document.body;

let __TBAlignFullEmbedsResizeAction = () => {
    var clientWidth = document.body.scrollWidth;
    var alignFullEmbeds = document.querySelectorAll('.alignfull iframe');
    if ( alignFullEmbeds.length > 0 ) {
        [].forEach.call( alignFullEmbeds, (alignFullEmbed) => {
            var embedWidth = alignFullEmbed.getAttribute('width');
            var embedHeight = alignFullEmbed.getAttribute('height');
            alignFullEmbed.setAttribute('width', clientWidth);
            var fullHeight = ( clientWidth / embedWidth ) * embedHeight;
            alignFullEmbed.setAttribute('height', fullHeight);           
        });
    }
};


let __TBAlignFullWrapperResizeAction = () => {
    var clientWidth = document.body.scrollWidth;
    var alignFullWrappers = document.querySelectorAll('.alignfull');
    if ( alignFullWrappers.length > 0 ) {
        [].forEach.call( alignFullWrappers, (alignFullWrapper) => {
            alignFullWrapper.style.maxWidth = clientWidth+'px';
        });
    }
};

let __TBResponsiveEmbedsAction = () => {
    var proportion, parentWidth;
    // Loop iframe elements.
    document.querySelectorAll( 'iframe' ).forEach( function( iframe ) {
        // Only continue if the iframe has a width & height defined.
        if ( iframe.width && iframe.height ) {
            // Calculate the proportion/ratio based on the width & height.
            proportion = parseFloat( iframe.width ) / parseFloat( iframe.height );
            // Get the parent element's width.
            parentWidth = parseFloat( window.getComputedStyle( iframe.parentElement, null ).width.replace( 'px', '' ) );
            // Set the max-width & height.
            iframe.style.maxWidth = '100%';
            iframe.style.maxHeight = Math.round( parentWidth / proportion ).toString() + 'px';
        }
    } );
};


let __TBSearchModalOpenAction = () => {
    var searchModal = document.querySelector('#maximo-search-modal');
    searchModal.classList.toggle('maximo-open-search-modal');
    body.classList.toggle('maximo-search-modal-opened');
};

let __TBNavModalOpenAction = () => {
    var offCanvasNavOverlay = document.querySelector('#maximo-mobile-nav-overlay');
    var offCanvasNavEle = document.querySelector('#maximo-mobile-nav-container');
    offCanvasNavOverlay.classList.toggle('display-mobile-nav-overlay');
    offCanvasNavEle.classList.toggle('display-mobile-nav');
    body.classList.toggle('maximo-mobile-nav-opened');
};

let _TBFocusNavModalOpenBtn = () => {
    document.getElementById('maximo-mobile-nav-toggle-btn').focus();
};

let _TBFocusNavModalCloseBtn = () => {
    document.getElementById('maximo-mobile-nav-close-btn').focus();
};

let __TBFocusSearchModalOpenBtn = () => {
    document.getElementById("maximo-header-search").focus();
}

let __TBFocusSearchModalCloseBtn = () => {
    document.getElementById("maximo-search-modal-close-btn").focus();
}

let __TBEnabledDarkModeBtnClasses = ( skinSwitcherBtnEle ) => {
    body.classList.remove('maximo-dark-mode-disabled');
    body.classList.add('maximo-dark-mode-enabled');    
    skinSwitcherBtnEle.classList.remove('maximo-show-dark-icon');
    skinSwitcherBtnEle.classList.remove('maximo-hide-light-icon');
    skinSwitcherBtnEle.classList.add('maximo-show-light-icon');
    skinSwitcherBtnEle.classList.add('maximo-hide-dark-icon');
}


let __TBDisabledDarkModeBtnClasses = ( skinSwitcherBtnEle ) => {
    body.classList.remove('maximo-dark-mode-enabled');
    body.classList.add('maximo-dark-mode-disabled');
    skinSwitcherBtnEle.classList.remove('maximo-show-light-icon');
    skinSwitcherBtnEle.classList.remove('maximo-hide-dark-icon');
    skinSwitcherBtnEle.classList.add('maximo-show-dark-icon');
    skinSwitcherBtnEle.classList.add('maximo-hide-light-icon');
}

var __TBJsInit = {

    init: function() {
        this.lightDarkModeSwitchAction();
        this.backToTop();
        this.toggleComment();
        this.stickyNav();
        this.offCanvasNav();
        this.mobileNavSubmenuToggleBtn();
        this.mobileNavSubmenuToggleAction();
        this.searchModal();
        this.elementStyles();
        this.windowResizeEvents();
        this.escCloseAnyModal();
        this.bannerInit();
        
    },

    lightDarkModeSwitchAction: function() {

        var bodyActiveSkinVal = body.getAttribute('data-active_skin');

        if ( body.classList.contains('maximo-dark-mode-switcher-enabled') ) {     
            var themeSkin;
            var bodySkinVal = body.getAttribute('data-skin');
            
            if ( localStorage ) {
                if ( ! localStorage.getItem( 'maximoBlogThemeSkin' ) ) {
                    localStorage.setItem('maximoBlogThemeSkin', bodySkinVal );
                    themeSkin = bodySkinVal;
                } else {
                    themeSkin = localStorage.getItem('maximoBlogThemeSkin');
                }
            }       

            body.setAttribute('data-skin',themeSkin);
            var skinSwitcherBtnEle = document.getElementById('maximo-light-dark-mode-switch-btn');
            if ( skinSwitcherBtnEle ) {                
                if ( themeSkin != bodyActiveSkinVal ) {
                    __TBEnabledDarkModeBtnClasses( skinSwitcherBtnEle );
                } else {
                    body.classList.add('maximo-dark-mode-disabled');
                }
                skinSwitcherBtnEle.addEventListener('click', (e) => {
                    var localStorageThemeSkin = localStorage.getItem('maximoBlogThemeSkin');
                    if ( localStorageThemeSkin === bodyActiveSkinVal ) {
                        localStorage.setItem('maximoBlogThemeSkin', 'maximo-theme-dark' );
                        body.setAttribute('data-skin', 'maximo-theme-dark');
                        __TBEnabledDarkModeBtnClasses( skinSwitcherBtnEle );
                    } else {
                        localStorage.setItem('maximoBlogThemeSkin', bodyActiveSkinVal );
                        body.setAttribute('data-skin', bodyActiveSkinVal);
                        __TBDisabledDarkModeBtnClasses( skinSwitcherBtnEle );
                    }
                });
            }
        } else {
            body.setAttribute('data-skin',bodyActiveSkinVal);
        }

        
    },

    searchModal: function() {
        var searchEle = document.querySelector("#maximo-header-search");
        if ( searchEle ) {
            searchEle.addEventListener('click', (e) => {
                e.preventDefault();
                __TBSearchModalOpenAction();
                setTimeout(function() {
                    document.querySelector('#maximo-search-modal form.maximo-search-form input[type="search"]').focus();
                }, 800);
                
            });
        }

        var searchModalCloseEle = document.querySelector('#maximo-search-modal-close-btn');
        if (searchModalCloseEle) {
            searchModalCloseEle.addEventListener('click', (e) => {
                e.preventDefault();
                __TBSearchModalOpenAction();
                __TBFocusSearchModalOpenBtn();
            });
        }

        document.getElementById('maximo-search-form-close-link').addEventListener( 'focus', (event) => {
            event.preventDefault();
            __TBFocusSearchModalCloseBtn();
        });
    },

    backToTop: function() {
        var scrollTopEle = document.querySelector("#maximo-scroll-top-btn-wrapper");
        if ( scrollTopEle ) {
            window.addEventListener( 'scroll', () => {           
                if ( window.pageYOffset > 300 ) {
                    scrollTopEle.classList.remove('maximo-hide-stb');
                } else {
                    scrollTopEle.classList.add('maximo-hide-stb');
                }
            });
            scrollTopEle.addEventListener( 'click', (e) => {
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
            if ( commentToggleEle ) {
                commentToggleEle.addEventListener('click', (e) => {
                    e.preventDefault();
                    var commentsWrapEle = document.querySelector('#comments');
                    commentsWrapEle.classList.toggle('maximo-show');
                });
            }
        }
    },

    stickyNav: function() {
        if ( body.classList.contains('maximo-sticky-main-navigation-enabled') ) {

            var headerEle = document.querySelector('#masthead');

            var headerEleHeight = headerEle.offsetHeight;

            var stickyNavEle = document.querySelector('.maximo-sticky-main-navigation');

            var stickyNavEleHeight = stickyNavEle.offsetHeight;

            var documentEle = document.documentElement;

            var windowEle = window;

            var prevScroll = windowEle.scrollY || documentEle.scrollTop;

            var curScroll;

            var direction = 0;

            var prevDirection = 0;

            var checkScroll = () => {
                /*
                ** Find the direction of scroll
                ** 0 - initial, 1 - up, 2 - down
                */

                curScroll = window.scrollY || documentEle.scrollTop;

                if (curScroll >= prevScroll) { 
                    //scrolled up
                    direction = 2;
                } else { 
                    //scrolled down
                    direction = 1;
                }

                if (direction !== prevDirection) {

                    if ( direction === 2 && curScroll > headerEleHeight ) { 
                        stickyNavEle.setAttribute('style', 'top: -' + headerEleHeight + 'px;');
                        stickyNavEle.classList.add('maximo-sticky-enabled');
                        if ( ! body.classList.contains( 'maximo-transparent-header-enabled' ) ) {
                            body.setAttribute('style', 'padding-top: ' + stickyNavEleHeight + 'px;');
                        }
                        stickyNavEle.classList.remove('maximo-sticky-show');
                        prevDirection = direction;
                    } 

                    if ( direction === 1 ) {
                        stickyNavEle.setAttribute('style', 'top: 0;');
                        stickyNavEle.classList.add('maximo-sticky-show');
                        prevDirection = direction;
                    }
                }

                if ( curScroll <= headerEleHeight ) {
                    if ( ! body.classList.contains( 'maximo-transparent-header-enabled' ) ) {
                        body.setAttribute('style', 'padding-top: 0;');
                    }
                    stickyNavEle.classList.remove('maximo-sticky-show');
                    stickyNavEle.classList.remove('maximo-sticky-enabled');
                }
                
                prevScroll = curScroll;
            };
              
            window.addEventListener('scroll', checkScroll);
        }
    },

    offCanvasNav: function() {
        var offCanvasNavActionEles = document.querySelectorAll('#maximo-mobile-nav-toggle-btn, #maximo-mobile-nav-overlay, #maximo-mobile-nav-close-btn');
        [].forEach.call( offCanvasNavActionEles, (offCanvasNavActionEle) => {
            offCanvasNavActionEle.addEventListener( 'click', (event) => {
                event.preventDefault();
                __TBNavModalOpenAction();
                if ( offCanvasNavActionEle.id === 'maximo-mobile-nav-toggle-btn' ) {
                    _TBFocusNavModalCloseBtn();
                } else {
                    _TBFocusNavModalOpenBtn();
                }
            });
        });

        document.getElementById('maximo-mobile-nav-close-link').addEventListener( 'focus', (event) => {
            event.preventDefault();
            _TBFocusNavModalCloseBtn();
        });
    },

    mobileNavSubmenuToggleBtn: function() {
        var subMenuLiEles = document.querySelectorAll('#maximo-mobile-nav .menu-item-has-children');
        if (subMenuLiEles.length > 0) {
            [].forEach.call(subMenuLiEles, (subMenuLiEle) => {
                var immediateAEle = subMenuLiEle.firstChild;
                immediateAEle.insertAdjacentHTML('afterend', '<a href="#" class="dropdown-btn"><i class="fi fi-angle-down" aria-hidden="true"></i></a>');
            });
        }
    },

    mobileNavSubmenuToggleAction: function() {
        var subMenuDropdownActionEles = document.querySelectorAll('.dropdown-btn');
        if (subMenuDropdownActionEles.length > 0){
            [].forEach.call(subMenuDropdownActionEles, (subMenuDropdownActionEle) => {
                subMenuDropdownActionEle.addEventListener('click', (e) => {
                    e.preventDefault();
                    var subMenuEle = subMenuDropdownActionEle.nextElementSibling;
                    console.log(subMenuEle.offsetHeight);
                    subMenuEle.classList.toggle('display-sub-menu');
                    var dropDownIconEle = subMenuDropdownActionEle.firstChild;
                    if ( dropDownIconEle.classList.contains('fi-angle-down') ) {
                        dropDownIconEle.classList.remove('fi-angle-down');
                        dropDownIconEle.classList.add('fi-angle-up');
                    } else {
                        dropDownIconEle.classList.remove('fi-angle-up');
                        dropDownIconEle.classList.add('fi-angle-down');
                    }
                });
            });
        }

        var subMenuDropdownIcons = document.querySelectorAll('.dropdown-btn i');
        if (subMenuDropdownIcons.length > 0){
            subMenuDropdownIcons.forEach( (subMenuDropdownIcon) => {
                if (subMenuDropdownIcon.classList.contains('fi-angle-right')) {
                    subMenuDropdownIcon.classList.remove('fi-angle-right');
                    subMenuDropdownIcon.classList.add('fi-angle-down');
                }
            });
        }
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

    elementStyles: function() {        
        __TBAlignFullWrapperResizeAction();            
        __TBAlignFullEmbedsResizeAction();
    },

    escCloseAnyModal: function() {
        document.body.addEventListener('keyup', (e) => {
            var escKey;
            if ("key" in e) {
                escKey = (e.key === "Escape" || e.key === "Esc");
            } else {
                escKey = (e.keyCode === 27);
            }
            if (escKey) {
                if (body.classList.contains('maximo-search-modal-opened')){
                    __TBSearchModalOpenAction();
                    __TBFocusSearchModalOpenBtn();
                }
                if (body.classList.contains('maximo-mobile-nav-opened')){
                    __TBNavModalOpenAction();
                    _TBFocusNavModalOpenBtn();
                }
            }
        });
    },

    windowResizeEvents: function() {
        window.addEventListener('resize', () => {
            __TBAlignFullEmbedsResizeAction();
            __TBAlignFullWrapperResizeAction();
            __TBResponsiveEmbedsAction();
        });
    }
}

__TBJsInit.init();