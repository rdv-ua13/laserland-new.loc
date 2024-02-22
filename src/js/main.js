document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    /*this.initHeaderScroll();
    this.initBurger();
    this.initPopupMenuMobile();
    this.initHeaderActionsMobile();
    this.initOverlay();
    this.initTabs();
    this.initNotice();
    this.initRegStepper();
    this.initValidationNumCode();
    this.initNavTabs();
    this.initPageContentTabs();
    this.initInnerPageTabs();
    this.initTooltips();
    this.initProgressBar();
    this.initFormProcessing();
    this.initCardFavorite();
    this.initMainscreenSlider();
    this.initTagbarSlider();
    this.initBasicSlider();
    this.initMobileSlider();
    this.initResponsiveCardSlider();
    this.initHandlerCurrentUser();
    this.initPasswordSwitcher();
    this.initSelect2();
    this.initTagSelected();
    this.initMaskedInput();
    this.initAddList();
    this.initDropfiles();
    this.initReadmore();
    this.initAccordion();
    this.initCheckall();
    this.setSettingsBarHeight();
    this.setStaticStarRating();*/

    /*-----------------------*/
    this.initInputSearch();
};

// Initialization header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();

    function setHeaderScroll() {
        if ($(window).scrollTop() > 25) {
            $('.header').addClass("scrolled");
        } else {
            $('.header').removeClass("scrolled");
        }
    }
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

// Initialization burger-menu
application.prototype.initBurger = function () {
    const burger = document?.querySelector('[data-burger]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('burger--active');
        menu?.classList.toggle('burger-menu--active');

        if (menu?.classList.contains('burger-menu--active')) {
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
        $(".overlay").remove();
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger.classList.remove('burger--active');
        menu.classList.remove('burger-menu--active');
    }

    $(document).on("click", function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });
};

// Initialization popup menu mobile
application.prototype.initPopupMenuMobile = function () {
    const menuCall = $('[data-popup-menu-call]');
    const menu = $('[data-popup-menu]');

    menuCall.on('click', function () {
        $(this).siblings('[data-popup-menu]').toggleClass('popup-menu--active');

        if (!$(this).siblings('[data-popup-menu]').hasClass('popup-menu--active')) {
            application.prototype.disableScroll();
        } else {
            application.prototype.enableScroll();
        }
    });

    $(document).on("click", function (e) {
        if ($('.overlay').is(e.target)) {
            menu.removeClass('popup-menu--active');
        }
    });
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($("[data-overlay]").length) {
        const body = $("body");
        const triggerEl = $("[data-overlay]");

        $(triggerEl).on("click", function () {
            body.addClass("overflow-hidden");
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on("click", function (e) {
            if ($(".overlay").is(e.target)) {
                body.removeClass("overflow-hidden");
                $(".overlay").remove();
                return application.prototype.enableScroll();
            }
        });
    }
};

// Initialization actions user mobile
application.prototype.initHeaderActionsMobile = function () {
    if ($(".js-header-actions-mobile-dropdown").length) {
        const mobileTrigger = $(".js-header-actions-mobile-dropdown");
        const actions = $(".header-actions");
        const actionsNoAuth = $(".header-actions-no-auth");
        const actionsCurrentUser = $(".header-actions-current-user");

        $(document).on("click", function (e) {
            if ($(".overlay").is(e.target)) {
                actionsCurrentUser.removeClass("active");
                actionsNoAuth.removeClass("active");
            }
        });

        responsiveHeaderActions();
        $(window).on("resize", responsiveHeaderActions);

        function responsiveHeaderActions() {
            if (window.matchMedia("(max-width: 991.98px)").matches) {
                $(mobileTrigger).on("click", function () {
                    if(actions.hasClass("header-actions--current-user")) {
                        actionsNoAuth.removeClass("active");
                        if(actionsCurrentUser.hasClass("active")) {
                            actionsCurrentUser.removeClass("active");
                            return application.prototype.enableScroll();
                        } else {
                            actionsCurrentUser.addClass("active");
                            return application.prototype.disableScroll();
                        }
                    } else {
                        actionsCurrentUser.removeClass("active");
                        if(actionsNoAuth.hasClass("active")) {
                            actionsNoAuth.removeClass("active");
                            return application.prototype.enableScroll();
                        } else {
                            actionsNoAuth.addClass("active");
                            return application.prototype.disableScroll();
                        }
                    }
                });
            } else {
                actionsCurrentUser.removeClass("active");
                actionsNoAuth.removeClass("active");
                return application.prototype.enableScroll();
            }
        }
    }
};

// Initialization tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        let currentSelected = 1;
        $(".tabs__nav-item").on("click", function () {
            $(".tabs__nav-item").not(this).find(".tabs__nav-btn").removeClass("selected");
            $(this).find(".tabs__nav-btn").removeClass("notice").addClass("selected");

            currentSelected = $(this).find(".tabs__nav-btn").data("target");
            $(this).closest(".tabs").find(".tabs__panel").removeClass("active");
            $(this).closest(".tabs").find(".tabs__panel[data-id='" + currentSelected + "']").addClass("active");
        });
    }
};

// Initialization notice
application.prototype.initNotice = function () {
    $(document).on("click", ".notice", function () {
        $(this).find(".notice-elem").removeClass("active");
    });
};

// Initialization validation num code
application.prototype.initValidationNumCode = function () {
    if($(".authreg--recovery").length) {
        let in1 = document.getElementById('recoveryFormValidationCode1'),
            ins = document.querySelectorAll('.js-forminput-recovery-num'),
            splitNumber = function (e) {
                let data = e.data || e.target.value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
                if (!data) return; // Shouldn't happen, just in case.
                if (data.length === 1) return; // Here is a normal behavior, not a paste action.

                popupNext(e.target, data);
            },
            popupNext = function (el, data) {
                el.value = data[0]; // Apply first item to first input
                data = data.substring(1); // remove the first char.
                if (el.nextElementSibling && data.length) {
                    // Do the same with the next element and next data
                    popupNext(el.nextElementSibling, data);
                }
            };

        ins.forEach(function (input) {
            /**
             * Control on keyup to catch what the user intent to do.
             * I could have check for numeric key only here, but I didn't.
             */
            input.addEventListener('keyup', function (e) {
                // Break if Shift, Tab, CMD, Option, Control.
                if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                    return;
                }

                // On Backspace or left arrow, go to the previous field.
                if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT") {
                    this.previousElementSibling.select();
                } else if (e.keyCode !== 8 && this.nextElementSibling) {
                    this.nextElementSibling.select();
                }

                // If the target is populated to quickly, value length can be > 1
                if (e.target.value.length > 1) {
                    splitNumber(e);
                }
            });

            /**
             * Better control on Focus
             * - don't allow focus on other field if the first one is empty
             * - don't allow focus on field if the previous one if empty (debatable)
             * - get the focus on the first empty field
             */
            input.addEventListener('focus', function (e) {
                // If the focus element is the first one, do nothing
                if (this === in1) return;

                // If value of input 1 is empty, focus it.
                if (in1.value == '') {
                    in1.focus();
                }

                // If value of a previous input is empty, focus it.
                // To remove if you don't wanna force user respecting the fields order.
                if (this.previousElementSibling.value == '') {
                    this.previousElementSibling.focus();
                }
            });
        });

        /**
         * Handle copy/paste of a big number.
         * It catches the value pasted on the first field and spread it into the inputs.
         */
        in1.addEventListener('input', splitNumber);
    }
};

// Initialization navigation pages tabs
application.prototype.initNavTabs = function () {
    if ($(".js-main-section-tabs").length) {
        const swiperNavTabs = new Swiper(".js-main-section-tabs", {
            slidesPerView: "auto",
            spaceBetween: 0,
        });
    }
};

// Initialization page-content tabs
application.prototype.initPageContentTabs = function () {
    if ($(".js-page-content-tabs").length) {
        const swiperPageContentTabs = new Swiper(".js-page-content-tabs", {
            slidesPerView: "auto",
            spaceBetween: 32,
        });
    }
};

// Initialization inner-page-tabs
application.prototype.initInnerPageTabs = function () {
    if ($(".inner-page-tabs").length) {
        initTabBehavior();
        initTabsSlider();

        function initTabBehavior() {
            const tabBlock = $(".inner-page-tabs");
            let currentSelected = 0;
            let currentTabBlockId = null;
            $(".inner-page-tabs__nav-item").on("click", function () {
                currentTabBlockId = $(this).closest(tabBlock).data("tab");

                $(".inner-page-tabs__nav-item").not(this).find(".inner-page-tabs__link").removeClass("selected");
                $(this).find(".inner-page-tabs__link").removeClass("notice").addClass("selected");

                currentSelected = $(this).find(".inner-page-tabs__link").data("target");
                $(".inner-page-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".inner-page-tabs-content__panel").removeClass("active");
                $(".inner-page-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".inner-page-tabs-content__panel[data-id='" + currentSelected + "']").addClass("active");
            });
        }

        function initTabsSlider() {
            if($(".inner-page-tabs.swiper").closest(".tasks")) {
                const swiperTasksInnerPageTabsSettings = {
                    slidesPerView: "auto",
                    spaceBetween: 12,
                    direction: "horizontal",
                    breakpoints: {
                        992: {
                            spaceBetween: 0,
                            direction: "vertical",
                            mousewheel: true,
                        }
                    },
                };
                let swiperTasksInnerPageTabs = null;

                reinitSlider();
                $(window).on("resize", reinitSlider);

                function reinitSlider() {
                    if (window.matchMedia("(max-width: 991.98px)").matches) {
                        swiperTasksInnerPageTabs = null;
                        swiperTasksInnerPageTabs = new Swiper(".tasks .inner-page-tabs.swiper", swiperTasksInnerPageTabsSettings);
                    } else {
                        swiperTasksInnerPageTabs = null;
                    }
                }

            } else {
                const swiperInnerPageTabs = new Swiper(".inner-page-tabs.swiper", {
                    slidesPerView: "auto",
                    spaceBetween: 16,
                    breakpoints: {
                        992: {
                            spaceBetween: 32,
                        }
                    },
                });
            }
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

// Initialization cards progress bar
application.prototype.initProgressBar = function () {
    if ($(".js-progress").length) {
        $(".js-progress").each(function (i, e) {
            let curValue = $(e).find(".progress-bar-data__value").data("value");
            let curMaxValue = $(e).find(".progress-bar-data__max").data("max");
            let curIndicator = $(e).find(".progress-bar__indicator");
            let curProgressLine = $(e).find(".progress-bar__line");

            function result(curValue, curMaxValue) {
                let res = ((curValue / curMaxValue) * 100).toFixed(2);
                return res;
            }

            curIndicator.val(result(curValue, curMaxValue));
            let curProgressLineValue = curIndicator.val() * 1 + "%";
            curProgressLine.css({
                "width" : curProgressLineValue
            });
        });
    }
};

// Initialization registration stepper
application.prototype.initRegStepper = function () {
    if($(".bs-stepper").length) {
        window.steppers = {
            registration: new Stepper($('.bs-stepper')[0])
        };
    }
    // if($(".bs-stepper").length) {
    //     let stepper = new Stepper($('.bs-stepper')[0]);
    //
    //     $(".js-stepper-trigger").on("click", function () {
    //         let nextStep = $(this).data("index-next");
    //
    //         switch(nextStep) {
    //             case 2:
    //                 stepper.to(2);
    //                 break;
    //             case 3:
    //                 stepper.to(3);
    //                 break;
    //             default:
    //                 stepper.to(1);
    //         }
    //     });
    // }
};

// Initialization form processing
application.prototype.initFormProcessing = function () {
    function getFormData($form) {
        let unindexed_array = $form.serializeArray();
        let indexed_array = {};
        $.map(unindexed_array, function (n, i) {
            indexed_array[n["name"]] = n["value"];
        });
        return indexed_array;
    }

    // $(document).on("submit", ".form", function (e) {
    //   e.preventDefault();
    //   let currentForm = $(this);
    //   let formData = getFormData(currentForm);
    //
    //   // $.ajax({
    //   //   type: "POST",
    //   //   url: "forms.php",
    //   //   dataType: "json",
    //   //   data: getFormData(currentForm),
    //   //   success: function (currentForm) {
    //   //     console.log("success");
    //   //   },
    //   //   error: function () {
    //   //     console.log("error");
    //   //   }
    //   // });
    //   BX.ajax.runAction('dev:core.registration.checkPrimaryData', {
    //     data: {
    //       'post': formData,
    //     }
    //   }).then(
    //       response => {
    //         if (response.data.result === 'success') {
    //           console.log('SUCCESS! Go to the next step');
    //         } else {
    //           console.log(response.data.errors);
    //         }
    //       },
    //       error => {
    //         //сюда будут приходить все ответы, у которых status !== 'success'
    //         console.log(error);
    //       }
    //   );
    //   return false;
    // });

    $(document).on('submit', '.js-register-step-1', function (e) {
        e.preventDefault();
        let $currentForm = $(this);
        let formData = getFormData($currentForm);
        let $submitBtn = $currentForm.find('[type="submit"]');
        BX.ajax.runAction('dev:core.registration.checkPrimaryData', {
            data: {
                'post': formData,
            }
        }).then(
            response => {
                if (response.data.result === 'success') {
                    let nextStep = parseInt($submitBtn.data('index-next'));
                    window.steppers.registration.to(nextStep);
                    console.log('SUCCESS! Go to the next step');
                } else {
                    console.log(response.data.errors);
                }
            },
            error => {
                //сюда будут приходить все ответы, у которых status !== 'success'
                console.log(error);
            }
        );
        return false;
    });

    $(document).on('submit', '.js-register-final', function (e) {
        e.preventDefault();
        let $currentForm = $(this);
        let userType = $currentForm.data('user-type');


        let formData = getFormData($currentForm);
        let $submitBtn = $currentForm.find('[type="submit"]');

        let $step1form = $('.js-register-step-1[data-user-type="' + userType + '"]');
        let step1formData = getFormData($step1form);

        let merged = {...step1formData, ...formData};

        BX.ajax.runAction('dev:core.registration.checkAllAndRegister', {
            data: {
                'post': merged,
            }
        }).then(
            response => {
                console.log(response.data);
                if (response.data.result === 'success') {
                    if (response.data.redirect) {
                        window.location.href = response.data.redirect;
                    }
                } else {
                    // errors
                }
            },
            error => {
                //сюда будут приходить все ответы, у которых status !== 'success'
                console.log(error);
            }
        );
        return false;
    });
};

// Initialization cards button "favorite"
application.prototype.initCardFavorite = function () {
    $(document).on("click", ".card", function (e) {
        let $buttonFav = $(this).find('.js-card-favorite');
        if ($buttonFav.is(e.target)) {
            e.stopPropagation();
            e.preventDefault();

            $buttonFav.toggleClass("selected");
            // todo: ajax проверить success or wrong, добавить класс selected
        }
    });
};

// Initialization mainscreen slider
application.prototype.initMainscreenSlider = function () {
    if ($(".js-mainscreen-slider").length) {
        const mainscreenSliderSettings = {
            slidesPerView: 1,
            spaceBetween: 0,
            direction: "horizontal",
            effect: "fade",
            pagination: {
                el: ".js-mainscreen-slider .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    direction: "vertical",
                },
            }
        };
        let mainscreenSlider = new Swiper(".js-mainscreen-slider", mainscreenSliderSettings);
    }
};

// Initialization tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($(".js-tag-bar-slider").length) {
        const currentSlider = $(".js-tag-bar-slider");

        currentSlider.each(function (i) {
            currentSlider.eq(i).addClass("js-tag-bar-slider-" + i);

            let tagbarSlider = new Swiper(".js-tag-bar-slider-" + i, {
                slidesPerView: "auto",
                spaceBetween: 8,
                direction: "horizontal",
                mousewheel: true,
            });
        });
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($(".basic-slider-ecodelo").length) {
        const ecodeloSlider = new Swiper(".basic-slider-ecodelo .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-ecodelo .swiper-button-next",
                prevEl: ".basic-slider-ecodelo .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-petition").length) {
        const petitionSlider = new Swiper(".basic-slider-petition .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-petition .swiper-button-next",
                prevEl: ".basic-slider-petition .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-fundraising").length) {
        const fundraisingSlider = new Swiper(".basic-slider-fundraising .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-fundraising .swiper-button-next",
                prevEl: ".basic-slider-fundraising .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-media").length) {
        const basicSliderMediaSliderSettings = {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        };
        let basicSliderMediaSlider = null;

        reinitSlider();
        $(window).on("resize", reinitSlider);

        function reinitSlider() {
            if (window.matchMedia("(max-width: 767.98px)").matches) {
                basicSliderMediaSlider = null;
                basicSliderMediaSlider = new Swiper(".basic-slider-media .js-basic-slider", basicSliderMediaSliderSettings);
            }
        }
    }

    if ($(".basic-slider-interests").length) {
        const interestsSlider = new Swiper(".basic-slider-interests .js-basic-slider", {
            slidesPerView: "auto",
            spaceBetween: 12,
            slidesPerGroup: 1,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-interests .swiper-button-next",
                prevEl: ".basic-slider-interests .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 24,
                },
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 24,
                },
                1328: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 24,
                }
            }
        });
    }

    if ($(".basic-slider-partners").length) {
        const partnersSlider = new Swiper(".basic-slider-partners .js-basic-slider", {
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 12,
            direction: "horizontal",
            navigation: {
                nextEl: ".basic-slider-partners .swiper-button-next",
                prevEl: ".basic-slider-partners .swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    spaceBetween: 12,
                },
                992: {
                    slidesPerView: 8,
                    slidesPerGroup: 8,
                    spaceBetween: 20,
                },
                1328: {
                    slidesPerView: 10,
                    slidesPerGroup: 10,
                    spaceBetween: 20,
                }
            }
        });
    }
};

// Initialization mobile slider
application.prototype.initMobileSlider = function () {
    if ($(".mobile-only-slider").length) {
        const mobilePartnersSliderSetting = {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 12,
            direction: "horizontal",
        };
        let mobilePartnersSlider = null;

        breakpointChecker();
        $(window).on("resize", breakpointChecker);

        function breakpointChecker() {
            if (window.matchMedia("(min-width: 992px)").matches) {
                if(mobilePartnersSlider !== null) mobilePartnersSlider.destroy(true, true);
                mobilePartnersSlider = null;
            }
            else if (window.matchMedia("(max-width: 991.98px)").matches) {
                mobilePartnersSlider = new Swiper(".mobile-only-slider.js-basic-slider", mobilePartnersSliderSetting);
            }
        }
    }
};

// Initialization responsive card slider
application.prototype.initResponsiveCardSlider = function () {
    if ($(".card-list-responsive").length) {
        // init slider on mobile
        if ($(".card-list-responsive.card-list-responsive--desktop-only").length) {
            const mobileCardSliderSetting = {
                slidesPerView: "auto",
                spaceBetween: 12,
                slidesPerGroup: 1,
                direction: "horizontal",
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                        spaceBetween: 24,
                    }
                }
            };
            let mobileCardSlider = null;

            breakpointChecker();
            $(window).on("resize", breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia("(min-width: 992px)").matches) {
                    if(mobileCardSlider !== null) mobileCardSlider.destroy(true, true);
                    mobileCardSlider = null;
                }
                else if (window.matchMedia("(max-width: 991.98px)").matches) {
                    mobileCardSlider = new Swiper(".card-list-responsive--desktop-only .js-basic-slider", mobileCardSliderSetting);
                }
            }
        }
        // init slider on desktop
        else if ($(".card-list-responsive.card-list-responsive--mobile-only").length) {
            const desktopCardSliderSetting = {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 24,
                direction: "horizontal",
                navigation: {
                    nextEl: ".card-list-responsive .swiper-button-next",
                    prevEl: ".card-list-responsive .swiper-button-prev",
                },
                breakpoints: {
                    1328: {
                        slidesPerView: 4,
                        slidesPerGroup: 4,
                        spaceBetween: 24,
                    }
                }
            };
            let desktopCardSlider = null;

            breakpointChecker();
            $(window).on("resize", breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia("(min-width: 992px)").matches) {
                    desktopCardSlider = new Swiper(".card-list-responsive--mobile-only .js-basic-slider", desktopCardSliderSetting);
                }
                else if (window.matchMedia("(max-width: 991.98px)").matches) {
                    if(desktopCardSlider !== null) desktopCardSlider.destroy(true, true);
                    desktopCardSlider = null;
                }
            }
        }
    }
};

// Initialization handler for current user dropdown menu
application.prototype.initHandlerCurrentUser = function () {
    if ($(".js-current-user-menu").length) {
        $(document).on("click", function (e) {
            if (window.matchMedia("(min-width: 992px)").matches) {
                if (!$(".js-current-user-menu").hasClass("open") && $(".current-user__dropdown").is(e.target)) {
                    $(".js-current-user-menu").addClass("open");
                }
                else if ($(".js-current-user-menu").hasClass("open") && $(".current-user__dropdown").is(e.target)) {
                    $(".js-current-user-menu").removeClass("open");
                }
                else if ($(".current-user__dropdown-menu ul").has(e.target).length) {
                    $(".js-current-user-menu").removeClass("open");
                }
                else if (!$(".js-current-user-menu").is(e.target) && $(".js-current-user-menu").has(e.target).length === 0) {
                    $(".js-current-user-menu").removeClass("open");
                }
            }
        });
    }
};

// Initialization password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
            } else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
            }
        });
    }
};

// Initialization select2 plagin
application.prototype.initSelect2 = function () {
    if ($(".js-select2").length) {
        $(".js-select2").select2({
            allowClear: true,
        });
    }
};

// Initialization tag selected
application.prototype.initTagSelected = function () {
    if ($("label.tag").length) {
        $("label.tag").on("click", function () {
            let elemInput = $(this).find("input[type='checkbox']");
            if(!elemInput.is(":checked")) {
                $(this).removeClass("selected");
            } else if(elemInput.is(":checked")) {
                $(this).addClass("selected");
            }
        });
    }
};

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
};

// Initialization add list
application.prototype.initAddList = function () {
    if ($(".js-add-list").length) {
        $(".js-add-list .add-list__item").each(function (e) {
            $(this).find(".add-list__delete").on("click", function () {
                $(this).closest(".add-list__item").remove();
            });
        });
    }
};

// Initialization drop files
application.prototype.initDropfiles = function () {
    File.prototype.convertToBase64 = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function (e) {
            callback(e.target.result, e.target.error);
        };
        reader.readAsDataURL(this);
    };

    File.prototype.convertToSvgHtml = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function(e) {
            callback(e.target.result, e.target.error);
        }
        reader.readAsText(this);
    };

    const getDataImage = (file, callback) => {
        let filename = file.name,
            idxDot = filename.lastIndexOf(".") + 1,
            extFile = filename.substr(idxDot, filename.length).toLowerCase();

        if (extFile === "jpg" || extFile === "jpeg" || extFile === "png") {
            file.convertToBase64((base64) => {
                callback(base64, false);
            })
        }
        else if(extFile === "svg") {
            file.convertToSvgHtml((svgHtml) => {
                callback(svgHtml, true);
            })
        }
        else {
            alert('Неверный формат файла (Поддерживаемые форматы: jpg, jpeg, png, svg)');
        }
    }

    const getDataDocs = (file, callback) => {
        let filename = file.name,
            idxDot = filename.lastIndexOf(".") + 1,
            extFile = filename.substr(idxDot, filename.length).toLowerCase();

        if (extFile === "jpg" || extFile === "jpeg" || extFile === "png") {
            file.convertToBase64((base64) => {
                callback(base64, false);
            })
        }
        else {
            alert('Неверный формат файла (Поддерживаемые форматы: jpg, jpeg, png, svg)');
        }
    }

    $('body').on('dragenter', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('body').on('dragover', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('body').on('drop', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        let type = $(this).closest('.dropfile').attr('data-type');

        if (type === 'image') {
            for (let i in e.originalEvent.dataTransfer.files) {
                if (e.originalEvent.dataTransfer.files.hasOwnProperty(i)) {
                    let file = e.originalEvent.dataTransfer.files[i];
                    getDataImage(file, (data, isSvg) => {
                        appendImage($(this), data, isSvg);
                    });
                }
            }
        }
        else if (type === 'document') {
            appendDocument($(this), e.originalEvent.dataTransfer.files);
        }
    })

    $('.js-drop-file').on('change', '.js-change-file', function () {
        let type = $(this).closest('.dropfile').attr('data-type');

        if (type === 'image') {
            for (let i in $(this)[0].files) {
                if ($(this)[0].files.hasOwnProperty(i)) {
                    let file = $(this)[0].files[i];
                    if (type === 'image') {
                        getDataImage(file, (data, isSvg) => {
                            appendImage($(this), data, isSvg);
                        });
                    }
                    else if (type === 'document') {
                        getDataDocs(file, (data) => {
                            appendImage($(this), data, isSvg);
                        });
                    }
                }
            }
        }
        else if (type === 'document') {
            appendDocument($(this), $(this)[0].files);
        }
    });

    function appendImage($input, data, isSvg) {
        let image = '',
            $parent = $input.closest('.dropfile');

        if(isSvg) {
            image = data;
        }
        else {
            image = `<img src="` + data + `">`;
        }

        let html = `
                    <div class="dropfile-image__item">
                        ` + image + `
                        <div class="dropfile-image__remove js-remove-image">
                            <svg class="icon btn__icon">
                                <use href="/local/templates/main/img/sprite.svg#trash"></use>
                            </svg>
                        </div>
                        <input class="js-image" type="hidden" name="` + $parent.attr('data-input-name') + `" value='` + data + `'>
                    </div>
                    `;

        if($parent.hasClass('js-upload-cover')) {
            $parent
                .find('.dropfile-image')
                .html(html);
        }
        else if($parent.hasClass('js-upload-avatar')) {
            $parent
                .find('.dropfile-area')
                .addClass('dropfile-image')
                .html(html);
        }
        else if($parent.hasClass('js-upload-photos')) {
            $parent
                .find('.dropfile-gallery')
                .show()
                .append(html);
        }
    }

    function appendDocument($input, files) {
        let $parent = $input.closest('.dropfile'),
            $inputFile = $('<input/>')
                .attr('type', "file")
                .attr('multiple', true)
                .attr('name', $parent.attr('data-input-name'))
                .hide();

        $inputFile.get(0).files = files;

        for (let i in files) {
            if (files.hasOwnProperty(i)) {
                let filename = files[i].name,
                    idxDot = filename.lastIndexOf(".") + 1,
                    extFile = filename.substr(idxDot, filename.length).toLowerCase();

                if (extFile === "doc" || extFile === "docx" || extFile === "xls" ||
                    extFile === "xlsx" || extFile === "ppt" || extFile === "pptx" ||
                    extFile === "txt" || extFile === "pdf"
                ) {
                } else {
                    alert('Неверный формат файла (Поддерживаемые форматы: doc, docx, xls, xlsx, ppt, pptx, txt, pdf)');

                    return false;
                }
            }
        }

        let html = ``;
        for (let i in files) {
            if (files.hasOwnProperty(i)) {
                let filename = files[i].name;

                let $parent = $input.closest('.dropfile'),
                    $inputFile = $('<input/>')
                        .attr('type', "file")
                        .attr('multiple', true)
                        .attr('name', $parent.attr('data-input-name'))
                        .hide();

                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(files[i]);
                $inputFile.get(0).files = dataTransfer.files;

                if ($inputFile.get(0).webkitEntries.length) {
                    $inputFile.get(0).dataset.file = `${dataTransfer.files[0].name}`;
                }

                console.log($inputFile.get(0).files)

                $html = $('<div/>')
                    .addClass('dropfile-documents__item')
                    .html(`<svg class="icon">
                                <use href="/local/templates/main/img/sprite.svg#file"></use>
                            </svg>
                            <div class="dropfile-documents__name">` + filename + `</div>
                            <div class="dropfile-documents__remove js-remove-document">
                                <svg class="icon">
                                    <use href="/local/templates/main/img/sprite.svg#cross"></use>
                                </svg>
                            </div>`)
                    .append($inputFile)

                $parent.find('.dropfile-documents').append($html);
            }
        }

        //$parent.find('.dropfile-documents').append(html);
    }


    $('body').on('click', '.dropfile-image', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $('body').on('click', '.js-remove-image', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let $parent = $(this).closest('.dropfile');

        if($parent.hasClass('js-upload-photos')) {
            $(this).closest('.dropfile-image__item').remove();
        }
        else {
            let html = ``;

            if($parent.hasClass('js-upload-avatar')) {
                $parent.find('')
                html += `<div class="dropfile-descr">
                        <div class="dropfile-descr__view">
                            <svg class="icon">
                                <use href="/local/templates/main/img/sprite.svg#add-image"></use>
                            </svg>
                        </div>
                    </div>`
            }

            $(this).closest('.dropfile-image').html(html);

            if($parent.hasClass('js-upload-avatar')) {
                $parent.find('.dropfile-area').removeClass('dropfile-image');
            }
        }
    });

    $('body').on('click', '.js-remove-document', function (e) {
        e.preventDefault();
        e.stopPropagation();

        console.log('oks')
        $(this).closest('.dropfile-documents__item').remove();
    });
};


// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($(".js-spoiler").length) {
        const spoiler = $(".js-spoiler");

        spoiler.each(function (i) {
            let currentElemHeight = spoiler.eq(i).data("collapsed-height");
            spoiler.eq(i).addClass("js-spoiler-" + i);

            $(".js-spoiler-" + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed btn--green page-content__spoiler-trigger">\n' +
                    '                                        <span class="btn__text">Показать полностью</span>\n' +
                    '                                    </a>',
                lessLink: '<a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed btn--green page-content__spoiler-trigger">\n' +
                    '                                        <span class="btn__text">Скрыть</span>\n' +
                    '                                    </a>'
            });
        });
    }
};

// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        initAccordionResonsive();
        $(window).on("resize", initAccordionResonsive, reloadAccordionResonsive);

        function reloadAccordionResonsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResonsive() {
            $(".accordion__collapse").hide();

            if (window.matchMedia("(max-width: 767.98px)").matches) {
                $(".js-accordion-btn").on("click", function () {
                    if (!$(this).hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(160);
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
            } else if (window.matchMedia("(min-width: 768px)").matches) {
                $(".js-accordion-btn-icon").on("click", function () {
                    if (!$(this).closest(".js-accordion-btn").hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").siblings(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").siblings(".accordion__item").find(".accordion__collapse").slideUp(160);
                        $(this).closest(".accordion__btn").addClass("open");
                        $(this).closest(".accordion__item").addClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                    } else if ($(this).closest(".js-accordion-btn").hasClass("open")) {
                        $(this).closest(".accordion").find(".accordion__btn").removeClass("open");
                        $(this).closest(".accordion__item").removeClass("active");
                        $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                        setTimeout(function () {
                            $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                        }, 160);
                    }
                });
            }
        }
    }
};

// Initialization check all group
application.prototype.initCheckall = function () {
    if ($(".checkall-for").length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $(".checkall-for").each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data("checkall-for");
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(":checked")) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop("checked", false);
                    } else if(checkallForState === true) {
                        checkallFor.prop("checked", true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push("checked");
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push("notChecked");
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === "checked");

                    if(allChecked) checkallFor.removeClass("custom-checkbox__input--checkline");
                }
            });
        }

        function initOnclickCheckallFor() {
            $(".checkall-for").on("click", function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data("checkall-for");

                if(checkallFor.is(":checked")) {
                    checkallFor.prop("checked", true);
                    checkallFor.removeClass("custom-checkbox__input--checkline");
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);
                } else if(!checkallFor.is(":checked")) {
                    checkallFor.prop("checked", false);
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);
                }
            });
        }

        function initOnclickCheckallGroup() {
            $(".checkall-group").on("click", function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data("checkall-group");

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(":checked")) {
                            checkallGroupState.push(false);
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push("checked");
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push("notChecked");
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === "checked");
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === "notChecked");

                    if(allChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", true);
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass("custom-checkbox__input--checkline");
                    } else if(allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", false);
                    } else if(!allChecked && !allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop("checked", true);

                        if(!$(".checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass("custom-checkbox__input--checkline")) {
                            $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass("custom-checkbox__input--checkline");
                        }
                    }
                }
            });
        }
    }
};

// Set height to '.page-content-settings-bar'
application.prototype.setSettingsBarHeight = function () {
    if ($('.page-content-settings-bar').length) {
        const body = $('.has-settings-bar');
        let barsHeight = $('.page-content-settings-bar').outerHeight();
        body.css('padding-bottom', barsHeight);
    }
};

// Set behavior static star-rating
application.prototype.setStaticStarRating = function () {
    if ($('.js-star-rating').length) {
        $('.js-star-rating').each(function (i) {
            const rating = $(this).find('.star-rating');
            const value = parseInt($(this).find('.star-rating-value').text());

            switch (value) {
                case 0:
                    rating.addClass('star-rating-0');
                    break;
                case 1:
                    rating.addClass('star-rating-1');
                    break;
                case 2:
                    rating.addClass('star-rating-2');
                    break;
                case 3:
                    rating.addClass('star-rating-3');
                    break;
                case 4:
                    rating.addClass('star-rating-4');
                    break;
                case 5:
                    rating.addClass('star-rating-5');
                    break;
                default:
                    rating.addClass('star-rating-0');
            }
        });
    }
};


/*------------------------------------*/
// Initialize input-search behavior
application.prototype.initInputSearch = function () {
    if ($('.input-search').length) {
        console.log("success");
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};