document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initBurger();
    this.initOverlay();
    this.initBasicSlider();
    this.initSliders();
    this.initAccordion();
    this.initTooltips();
    this.initMaskedInput();
    this.initSwitchContent();
};

// Initialization disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialization enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialization device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialization burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });

        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let basicSlider = null;

        slider.each(function (i) {
            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                direction: 'horizontal'
            };

            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    basicSlider = null;
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    basicSlider = null;
                    basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
                }
            }
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.laser-gallery-slider').length) {
        /*let sliderGallery = new Swiper('.laser-gallery-slider', {
            spaceBetween: 12,
            slidesPerView: 'auto',
            breakpoints: {
                    992: {
                        spaceBetween: 20,
                        /!*slidesPerView: 2,*!/
                        initialSlide: 1,
                        loop: true,
                    },
                }
        });*/


        /*let sliderGallery = null;

        const sliderGalleryDesktopSetting = {
            spaceBetween: 20,
            slidesPerView: 'auto',
            initialSlide: 1,
            loop: true,
        };
        const sliderGalleryMobileSetting = {
            spaceBetween: 12,
            slidesPerView: 'auto',
        };

        reinitSlider();
        /!*setTimeout(function () {
            location.reload(true);
        }, 1);*!/
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                /!*if(sliderGallery !== null) sliderGallery = null;*!/
                if(sliderGallery !== null) sliderGallery.destroy(true, true);
                sliderGallery = null;

                sliderGallery = new Swiper('.laser-gallery-slider', sliderGalleryDesktopSetting);
                sliderGallery.update();
                console.log("reinit");
                console.log("success");
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                /!*if(sliderGallery !== null) sliderGallery = null;*!/
                if(sliderGallery !== null) sliderGallery.destroy(true, true);
                sliderGallery = null;

                sliderGallery = new Swiper('.laser-gallery-slider', sliderGalleryMobileSetting);
                sliderGallery.update();
                console.log("reinit");
                console.log("success2");
            }
        }*/

        //попробуй в @media вставить полную инициализацию без выноса свойств слайдера в const
        let sliderGallery = null;

        const sliderGalleryDesktopSetting = {
            spaceBetween: 20,
            slidesPerView: 'auto',
            initialSlide: 1,
            loop: true,
        };
        const sliderGalleryMobileSetting = {
            spaceBetween: 12,
            slidesPerView: 'auto',
        };

        reinitSlider();
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if(sliderGallery !== null) sliderGallery.destroy(true, true);
            sliderGallery = null;

            if (window.matchMedia('(min-width: 992px)').matches) {
                sliderGallery = new Swiper('.laser-gallery-slider', sliderGalleryDesktopSetting);
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                sliderGallery = new Swiper('.laser-gallery-slider', sliderGalleryMobileSetting);
            }
        }
    }

    if ($('.laser-script-slider').length) {
        let sliderScript = new Swiper('.laser-script-slider', {
            spaceBetween: 12,
            slidesPerView: 'auto',
            navigation: {
                nextEl: '.laser-script-slider-wrapper .swiper-button-next',
                prevEl: '.laser-script-slider-wrapper .swiper-button-prev',
            },
            breakpoints: {
                    992: {
                        spaceBetween: 20,
                    },
                }
        });
    }
};

// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        initAccordionResponsive();
        $(window).on("resize", initAccordionResponsive, reloadAccordionResponsive);

        function reloadAccordionResponsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResponsive() {
            $(".accordion__collapse").hide();

            $(".js-accordion-btn").on("click", function () {
                if (!$(this).hasClass("open")) {
                    $(this).addClass("open");
                    $(this).closest(".accordion__item").addClass("active");
                    $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                    $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                } else if ($(this).hasClass("open")) {
                    $(this).removeClass("open");
                    $(this).closest(".accordion__item").removeClass("active");
                    $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                    setTimeout(function () {
                        $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                    }, 160);
                }
            });
        }
    }
};

// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        tippy(".tooltip", {
            allowHTML: true,
            trigger: "mouseenter click",
        });
    }
};

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization switch content
application.prototype.initSwitchContent = function () {
    $('.switch-content').on('click', function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });
};