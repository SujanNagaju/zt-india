(function ($) {

    var COMMON = {
        init: function () {
            this.cacheDOM();

            $(window).on('resize', this.reCalcOnResize.bind(this))
        },
        cacheDOM: function () {
            this.$body = $('body');
            this.windowWidth = $(window).width();
        },
        reCalcOnResize: function () {
            this.windowWidth = $(window).width();
        }
    };

    var mainNavigation = {
        init: function () {
            this.$mainNavContainer = $('#site-navigation');
            this.$menuToggler = this.$mainNavContainer.find('.menu-toggle');
            this.$mainMenuContainer = this.$mainNavContainer.find('.menu-primary-container');
            this.$mainMenu = this.$mainNavContainer.find('#primary-menu');
            console.log(this.$menuToggler);
            this.$menuToggler.on('click',this.toggleMenu.bind(this));
        },
        toggleMenu: function (e) {
            e.preventDefault();
            this.$mainMenuContainer.toggleClass('shown');
        }
    };// SVG SUPPORT
    var supportSVG = {
        init: function () {
            $('img.svg').each(function () {
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');
                var imgwidth = $img.attr('width');
                var imgheight = $img.attr('height');
                $.get(imgURL, function (data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = $(data).find('svg');
                    // Add replaced image's ID to the new SVG
                    if (typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }

                    // Add replaced image's classes to the new SVG
                    if (typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass + ' replaced-svg');
                        $svg = $svg.attr({
                            width: imgwidth,
                            height: imgheight
                        });
                    }
                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');
                    // Replace image with new SVG
                    $img.replaceWith($svg);
                }, 'xml');
            });
        },
    };

    $(function () {
        COMMON.init();
        mainNavigation.init();
        supportSVG.init();
    });

    // function for closing menu when click outside assigned selector
    jQuery.fn.clickOutside = function (callback) {
        var $me = this;
        $(document).mouseup(function (e) {
            if (!$me.is(e.target) && $me.has(e.target).length === 0) {
                callback.apply($me);
            }
        });
    };

    // adding sticky class on scroll
    $(window).on('scroll', function(){
        var headerHeight = $('.site-header').outerHeight();
        if ($(window).scrollTop() >= headerHeight) {
            $('.site-header').addClass('header-sticky');
        }
        else {
            $('.site-header').removeClass('header-sticky');
        }
    });

    // hamburger menu open/close
    $('.hamburger-menu').on('click', function(){
        $('body').toggleClass('menu-opened');
    }); 
    // closes nav menu when clicked outside the menu + header area
    $('.main-navigation, .site-header').clickOutside(function () {
        $('body').removeClass('menu-opened');
    });

    // matchHeight
    $('.footer-contact-wrap .block-inner').matchHeight();

})(jQuery);