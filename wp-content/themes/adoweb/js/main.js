$(document).ready(function () {

    const swiper = new Swiper('.main_items', {
        slidesPerView: 4,
        spaceBetween: 20,
        pagination: {
            el: '.main_items-pagin',
        },
        navigation: {
            nextEl: '.main_items-arrow.next',
            prevEl: '.main_items-arrow.prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 10
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    })

    $('.top_more-close').click(function () {
        $('.top_more').remove()
    })

    $('.header_place-current').click(function () {
        $('.header_place').toggleClass('active')
    })

    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.header').addClass('active')
        }
        else {
            $('.header').removeClass('active')
        }
    })

    const clientsSlider = new Swiper('.clients_slider', {
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: '.clients_slider-pagin',
        },
        navigation: {
            nextEl: '.clients_slider-arrow.next',
            prevEl: '.clients_slider-arrow.prev',
        },
        breakpoints: {
            320: {
                spaceBetween: 10,
            },
        },
    })


    $('.clients_slide-more').click(function () {
        $(this).prev().addClass('active')
        $(this).remove()
    })


    $('.faq_item-title').click(function () {
        $(this).toggleClass('active')
        $(this).next().slideToggle(400)
    })


    $('.menu_burger, .header_inner-close').click(function () {
        $('.menu_burger, .header_inner').toggleClass('active')
    })



    const catalogItems = new Swiper('.catalog_items', {

        slidesPerView: 'auto',
        pagination: {
            el: '.catalog_items-pagin',
        },
        navigation: {
            nextEl: '.catalog_items-arrow.next',
            prevEl: '.catalog_items-arrow.prev',
        },


        enabled: window.innerWidth < 992,

        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 10, loop: true,
            },
            992: {
                enabled: false,
            }
        },

    });


    const reviewsWrapper = new Swiper('.reviews_wrapper', {

        slidesPerView: 'auto',
        pagination: {
            el: '.reviews_wrapper-pagin',
        },
        navigation: {
            nextEl: '.reviews_wrapper-arrow.next',
            prevEl: '.reviews_wrapper-arrow.prev',
        },


        enabled: window.innerWidth < 992,

        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 10, loop: true,
            },
            992: {
                enabled: false,
            }
        },

    });


    const blogWrapper = new Swiper('.blog_wrapper', {

        slidesPerView: 'auto',
        pagination: {
            el: '.blog_wrapper-pagin',
        },
        navigation: {
            nextEl: '.blog_wrapper-arrow.next',
            prevEl: '.blog_wrapper-arrow.prev',
        },


        enabled: window.innerWidth < 992,

        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 10, loop: true,
            },
            992: {
                enabled: false,
            }
        },

    });


    window.addEventListener('resize', function () {
        catalogItems.enable(window.innerWidth < 992);
        catalogItems.update();
        reviewsWrapper.enable(window.innerWidth < 992);
        reviewsWrapper.update();
        blogWrapper.enable(window.innerWidth < 992);
        blogWrapper.update();
    });

    $('.select').customSelect({
    });


    const advantagesSlider = new Swiper('.advantages_slider', {
        runCallbacksOnInit: true,
        on: {
            init: function () {
                var offer = document.querySelector('.advantages_slide-counter');
                if (!offer) return;
                var totalSlides = Array.from(this.slides || []).filter(function (slide) {
                    return !slide.classList.contains('swiper-slide-duplicate');
                }).length;
                if (!totalSlides) {
                    totalSlides = (this.slides || []).length;
                }
                var currentSlide = (typeof this.realIndex === 'number' ? this.realIndex : this.activeIndex) + 1;
                offer.innerHTML = '<span>' + String(currentSlide).padStart(2, '0') + '</span>' + ' <span>/</span> ' + String(totalSlides).padStart(2, '0');
            },
            slideChange: function () {
                var offer = document.querySelector('.advantages_slide-counter');
                if (!offer) return;
                var totalSlides = Array.from(this.slides || []).filter(function (slide) {
                    return !slide.classList.contains('swiper-slide-duplicate');
                }).length;
                if (!totalSlides) {
                    totalSlides = (this.slides || []).length;
                }
                var currentSlide = (typeof this.realIndex === 'number' ? this.realIndex : this.activeIndex) + 1;
                offer.innerHTML = '<span>' + String(currentSlide).padStart(2, '0') + '</span>' + ' <span>/</span> ' + String(totalSlides).padStart(2, '0');
            }
        }
    })





    $(document).on('click', '.popup_btn', function () {
        event.preventDefault();
        const idPopup = $(this).attr('href');
        $('body, html').addClass('modalOpen')
        $.fancybox.close();
        $.fancybox.open({
            src: `#${idPopup}`,
            type: 'inline',
            touch: false,
            autoFocus: false,
            beforeClose: function () {
                $('body, html').removeClass('modalOpen')
            }

        });
    });


    const parkItems = new Swiper('.park_items', {
        slidesPerView: 3,
        spaceBetween: 20,
        pagination: {
            el: '.main_items-pagin',
        },
        navigation: {
            nextEl: '.main_items-arrow.next',
            prevEl: '.main_items-arrow.prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 'auto',
                spaceBetween: 10
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    })




    const salesSlider = new Swiper('.sales_slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.sales_slider-pagin',
        },
        navigation: {
            nextEl: '.sales_slider-arrow.next',
            prevEl: '.sales_slider-arrow.prev',
        },
    })

    $('.popup_calc-next').click(function () {
        $('.popup_calc-step.active').removeClass('active')
            .next().addClass('active')
    })

    $('.cookie_body-close').click(function () {
        $(this).parent().remove()
    })


    $(".range_price").slider({
        range: "min",
        value: 25000,
        min: 0,
        max: 100000,
        slide: function (event, ui) {
            $(".range_price-value").text(ui.value + "$");
        }
    });
    $(".range_price-value").text($(".range_price").slider("value") + "$");


    $(".range_width").slider({
        range: "min",
        value: 18690,
        min: 3000,
        max: 50000,
        slide: function (event, ui) {
            $(".range_width-value").text(ui.value + " км");
        }
    });
    $(".range_width-value").text($(".range_width").slider("value") + " км");

    $('.popup_calc-model').click(function () {

        var checkedCount = $('.popup_calc-model input:checked').length;

        $('.popup_calc-model_count span').text(checkedCount + ' шт');
    });





})
