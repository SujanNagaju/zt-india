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
            this.$menuToggler.on('click', this.toggleMenu.bind(this));
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

    // hamburger menu open/close
    $('.menu-toggle').on('click', function () {
        $('body').toggleClass('body-menu-opened');
    });

    // closes nav menu when clicked outside the main-navigation area
    $(".main-navigation, .menu-toggle").clickOutside(function () {
        $("body").removeClass("body-menu-opened");
    });

    // adding sticky class on scroll
    $(window).on('scroll', function () {
        var headerHeight = $('.site-header').outerHeight();
        if ($(window).scrollTop() >= headerHeight) {
            $('.site-header').addClass('header-sticky');
        }
        else {
            $('.site-header').removeClass('header-sticky');
        }
    });

    // hamburger menu open/close
    $('.hamburger-menu').on('click', function () {
        $('body').toggleClass('menu-opened');
    });
    // closes nav menu when clicked outside the menu + header area
    $('.main-navigation, .site-header').clickOutside(function () {
        $('body').removeClass('menu-opened');
    });

    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    // $(window).on('load', function(){
    //     if($('.stats-block').isInViewport()) {
    //         $('.stats-block h2 span').each(function () {
    //             var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
    //             $(this).prop('Counter', 0).animate({
    //                 Counter: $(this).text()
    //             },
    //             {
    //                 duration: 3000,
    //                 step: function (func) {
    //                     $(this).text(parseFloat(func).toFixed(size));
    //                 }
    //             });
    //         });
    //     }
    // });

    // typewriter effect animation
    if ($('.hero-banner .banner-content').length) {
        var span = document.querySelector(".hero-banner .banner-content span");
        var textArr = span.getAttribute("data-text").split(", ");
        var maxTextIndex = textArr.length;

        var sPerChar = 0.15;
        var sBetweenWord = 1.5;
        var textIndex = 0;

        typing(textIndex, textArr[textIndex]);

        function typing(textIndex, text) {
            var charIndex = 0;
            var maxCharIndex = text.length - 1;

            var typeInterval = setInterval(function () {
                span.innerHTML += text[charIndex];
                if (charIndex == maxCharIndex) {
                    clearInterval(typeInterval);
                    setTimeout(function () { deleting(textIndex, text) }, sBetweenWord * 1000);

                } else {
                    charIndex += 1;
                }
            }, sPerChar * 1000);
        }

        function deleting(textIndex, text) {
            var minCharIndex = 0;
            var charIndex = text.length - 1;

            var typeInterval = setInterval(function () {
                span.innerHTML = text.substr(0, charIndex);
                if (charIndex == minCharIndex) {
                    clearInterval(typeInterval);
                    textIndex + 1 == maxTextIndex ? textIndex = 0 : textIndex += 1;
                    setTimeout(function () { typing(textIndex, textArr[textIndex]) }, sBetweenWord * 1000);
                } else {
                    charIndex -= 1;
                }
            }, sPerChar * 1000);
        }
    }

    $('a[href^="#"]:not(a[href="#"])').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
    });

    // Isotope layoutMode none JS code //
    Isotope.Item.prototype._create = function () {
        this.id = this.layout.itemGUID++;
        this._transn = {
            ingProperties: {},
            clean: {},
            onEnd: {},
        };
        this.sortData = {};
    };
    Isotope.Item.prototype.layoutPosition = function () {
        this.emitEvent("layout", [this]);
    };
    Isotope.prototype.arrange = function (opts) {
        this.option(opts);
        this._getIsInstant();

        this.filteredItems = this._filter(this.items);

        this._isLayoutInited = true;
    };
    Isotope.LayoutMode.create("none");

    // project isotope filter
    $('.project-grid').isotope({
        itemSelector: '.project-card',
        layoutMode: 'none',
    });
    $('.project-filter ul li a').on('click', function () {
        $('.project-filter ul li a').removeClass('active');
        $(this).addClass('active');
        if ($("body").hasClass("home")) {
            var selector = $(this).data("filter");
            $(".project-grid").isotope({
                filter: selector,
            });
        } else {
            var location = $(this).attr("href");
        }
    });

    // faq accordion
    $('.accordion-list .title').on('click', function () {
        $('.accordion-list .content').slideUp().removeClass('content-open');
        $('.accordion-list .title h4').removeClass('icon-open');
        if ($(this).next().is(':hidden')) {
            $(this).next().slideDown().addClass('content-open');
            $(this).find('h4').addClass('icon-open');
        }
        else {
            $(this).next().slideUp().removeClass('content-open');
            $(this).find('h4').removeClass('icon-open');
        }
    });

    // testimonial slider
    $('.testimonial-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        asNavFor: '.testimonial-img-slider',
    });
    $('.testimonial-img-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.testimonial-slider',
    });

    // clients slider
    $('.clients-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 800,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // marquee awards
    $('.awards-marquee').marquee({
        duration: 12000,
        gap: 0,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: true,
        pauseOnHover: true,
    });

    // logo slider
    $('.logo-slider').slick({
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 2,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 800,
        speed: 800,
    });

    // testimonial slider
    $('.portfolio-slider .portfolio-wrapper').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
    });

    // faq dropdown class toggle
    $('.faq-title button').on('click', function () {
        $('.faq-list').not($(this).parents('.faq-list')).removeClass('faq-open');
        $(this).parents('.faq-list').toggleClass('faq-open');
    });


})(jQuery);