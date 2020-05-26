jQuery(document).ready(function () {

    function preloader() {
        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
        var preloader = jQuery('#preloader');
        if (!isMobile) {
            setTimeout(function () {
                preloader.addClass('preloaded');
            }, 800);
            setTimeout(function () {
                preloader.remove();
            }, 2000);
        } else {
            preloader.remove();
        }
    };
    preloader()

    // sliders
    jQuery('.first__slider,.last__slider').slick({
        arrows: false,
        dots: true,
        infinite: true,
        lazyLoad: "progressive",
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        autoplay: false,
        adaptiveHeight: true,
        autoplaySpeed: 3500,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    dots: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    dots: false,
                }
            },
        ]
    });

    jQuery('.slider__brands').slick({
        arrows: true,
        dots: false,
        infinite: true,
        lazyLoad: "progressive",
        slidesToShow: 5,
        slidesToScroll: 2,
        autoplay: false,
        adaptiveHeight: true,
        autoplaySpeed: 3500,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    jQuery('.category__slider,.category__slider-second').slick({
        arrows: false,
        dots: false,
        infinite: false,
        lazyLoad: "progressive",
        slidesToShow: 3,
        variableWidth: true,
        autoplay: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    dots: false,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToScroll: 2,
                    slidesToShow: 1,
                    arrows: false,
                    dots: false,
                    // centerMode: true,
                }
            }
        ]
    });

    jQuery('.new__product-slider,.best__product-slider').slick({
        arrows: true,
        dots: false,
        infinite: true,
        lazyLoad: "progressive",
        slidesToScroll: 3,
        slidesToShow: 5,
        variableWidth: true,
        autoplay: false,
        autoplaySpeed: 3500,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    dots: false,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToScroll: 2,
                    slidesToShow: 1,
                    arrows: false,
                    dots: false,
                    // centerMode: true,
                }
            }
        ]
    });

    // card-product slider

    jQuery('.slider-for').slick({
        arrows: false,
        dots: false,
        infinite: false,
        autoplay: false,
        lazyLoad: "progressive",
        asNavFor: '.slider-nav',
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    dots: false,
                    draggable: true,
                    fade: false,
                }
            },
            // {
            //     breakpoint: 480,
            //     settings: {
            //         centerMode: true,
            //         slidesToShow: 1,
            //         arrows: false,
            //         dots: false,
            //     }
            // }
        ]
    });


    jQuery('.slider-nav').slick({
        arrows: true,
        dots: false,
        lazyLoad: "progressive",
        asNavFor: '.slider-for',
        slidesToShow: 4,
        infinite: false,
        autoplay: false,
        focusOnSelect: true,
        draggable: false,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1,
                    arrows: false,
                    dots: false,
                }
            }
        ]
    });


    //  mobile-menu

    jQuery('.burger').click(function () {
        jQuery('.burger,.menu__items,.mobile__content').toggleClass('active');
        jQuery('html,body').toggleClass('lock');
    })
    jQuery('.close-menu').click(function () {
        jQuery('.burger,.menu__items,.mobile__content').removeClass('active');
    })

    // category dropdown menu

    jQuery(".category__link").click(function (e) {
        jQuery('.category,.category__link').toggleClass('active', 'slow')
        e.preventDefault()
    });

    void function () {
        "use strict";

        const categoriesItems = document.querySelectorAll('.category__menu-items>li');
        const categoriesSubMenuItems = document.querySelectorAll('.box__sub-menu>*');

        Array.from(categoriesItems).forEach(item => {
            item.addEventListener('mouseenter', (e) => {
                showSubcategory(e);
            })
        });

        Array.from(categoriesSubMenuItems).forEach(item => {
            item.addEventListener('mouseleave', hideSubcategories);

        });

        function hideSubcategories() {
            Array.from(categoriesSubMenuItems).forEach(item => item.style.display =
                'none');
        }

        function showSubcategory(e) {
            hideSubcategories();
            const selectSubcategory = document.querySelector(
                `.category__sub-menu${e.target.dataset.filter}`);
            selectSubcategory.style.display = 'block';
        }
    }();

    // show text

    jQuery('.product__description-show').click(function () {
        jQuery('.product__description').toggleClass('hide');
        if (jQuery('.product__description').hasClass('hide')) {
            jQuery('.product__description-show').html('Читать полностью');
        } else {
            jQuery('.product__description-show').html('Скрыть');
        }
        return false;
    });

    // rotate ::after
    jQuery('.product__description-show').on('click', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass('close')
    });

    // cabinet-dropdown

    jQuery('.dropdown__btn').click(function () {
        jQuery('.cabinet__dropdown,.dropdown__btn').toggleClass('active')
    });
})
