jQuery(document).ready(function () {

    // preloader

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
        autoplay: true,
        adaptiveHeight: true,
        autoplaySpeed: 3500,
        centerMode: true,
    });

    jQuery('.slider__brands').slick({
        arrows: true,
        dots: false,
        infinite: true,
        lazyLoad: "progressive",
        slidesToShow: 5,
        slidesToScroll: 2,
        autoplay: true,
        adaptiveHeight: true,
        autoplaySpeed: 3500,
        responsive: [
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
                breakpoint: 480,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    arrows: true,
                    centerMode: true,
                }
            }
        ]
    });

    jQuery('.new__product-slider,.best__product-slider').slick({
        arrows: true,
        dots: false,
        infinite: true,
        lazyLoad: "progressive",
        slidesToScroll: 2,
        slidesToShow: 5,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3500,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToScroll: 2,
                    slidesToShow: 2,
                    arrows: true,
                    dots: true,
                    // centerMode: true,
                }
            }
        ]
    });

    // card-product slider

    jQuery('.slider-for').slick({
        arrows: false,
        dots: false,
        autoplay: false,
        lazyLoad: "progressive",
        asNavFor: '.slider-nav',
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        centerMode: true,
        swipe: false,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    draggable: false,
                }
            }
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
        infinite: true,
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
    if (window.innerWidth < 425) {
        jQuery(".category__link").click(function (e) {
            jQuery('.category,.category__link').toggleClass('active')
            e.preventDefault()
        });
    }

    if (window.innerWidth > 425) {

        jQuery(".category__link").mouseover(function (e) {
            jQuery('.category,.category__link').toggleClass('active')
            e.preventDefault()
        });
        jQuery('body').click(function () {
            setTimeout(function () {
                jQuery('.category,.category__link').removeClass('active')

            }, 300)
        })

        void function () {

            const categoriesItems = document.querySelectorAll('.category__menu-items>li');
            const categoriesSubMenuItems = document.querySelectorAll('.box__sub-menu>*');

            Array.from(categoriesItems).forEach(item => {
                item.addEventListener('mouseenter', (e) => {
                    showSubcategory(e);
                })
            });

            // Array.from(categoriesSubMenuItems).forEach(item => item.style.display = 'none'
            // );

            function hideSubcategories() {
                Array.from(categoriesSubMenuItems).forEach(item => item.style.display = 'none');
            }

            function showSubcategory(e) {
                hideSubcategories();
                const selectSubcategory = document.querySelector(`.category__sub-menu${e.target.dataset.filter}`);
                selectSubcategory.style.display = 'block';
            }
        }();
    }


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

    // footer menu

    jQuery('#footer .footer__nav ul').on('click', function () {
        jQuery(this).find('li,h4').toggleClass('active')
    })

    // Перемещаю элементы в корзине
    jQuery('.col-1').append(jQuery('#payment'));

})
