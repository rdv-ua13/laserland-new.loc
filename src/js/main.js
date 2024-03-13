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
    this.initBasicTabSlider();
    this.initSliders();
    this.initBasicTabs();
    this.initAccordion();
    this.initTooltips();
    this.initMaskedInput();
    this.initSwitchContent();
    this.initSmoothScrollTo();
    this.initReadmore();
    this.initAudioPlayer();
    this.initAnimatedCounter();
    this.initFancyBehavior();
    this.initContactsMap();
    this.initFormSuccess();
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
                spaceBetween: 12,
            };

            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    basicSlider = null;
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    basicSlider = null;
                    basicSlider = new Swiper('.basic-slider-wrap-' + i + ' [data-basic-slider]', basicSliderSetting);
                }
            }
        });
    }
};

// Initialization basic tab slider
application.prototype.initBasicTabSlider = function () {
    if ($('[data-tabs-slider]').length) {
        const slider = $('[data-tabs-slider]');
        let basicTabSlider = null;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            basicTabSlider = new Swiper('.basic-slider-wrap-' + i + ' [data-tabs-slider]', {
                slidesPerView: 'auto',
                spaceBetween: 12,
                breakpoints: {
                    992: {
                        spaceBetween: 20,
                    },
                }
            });
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.laser-gallery-slider').length) {
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

    if ($('.laser-tariff-slider').length) {
        let sliderTariff = null;

        const sliderTariffSetting = {
            spaceBetween: 12,
            slidesPerView: 'auto',
        };

        reinitSlider();
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(sliderTariff !== null) sliderTariff.destroy(true, true);
                sliderTariff = null;
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                sliderTariff = new Swiper('.laser-tariff-slider', sliderTariffSetting);
            }
        }
    }
};

// Initialization basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('active');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('active');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
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
    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };

    $('.isPhone').click(function(){
        $(this).setCursorPosition(3);
    }).mask("+7-999-999-99-99", { completed: true });
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

// Initialization switch content
application.prototype.initSmoothScrollTo = function () {
    $('.scroll-to-trigger').on('click', function () {
        let currentId = $(this).data('href');

        $('html, body').animate({
            scrollTop: $(currentId).offset().top
        }, 500);
    });
};

// Initialization readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = $(this).data('spoiler-more');
            let currentLessText = $(this).data('spoiler-less');
            let defaultHeight = null;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data('collapsed-height');

            if (window.matchMedia('(min-width: 992px)').matches) {
                defaultHeight = 860;
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                defaultHeight = 1000;
            }

            if ($(this).is('[data-spoiler-more]')) {
                currentMoreText = currentMoreText;
                currentLessText = defaultLessText;
            } else if ($(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = currentLessText;
            } else if (!$(this).is('[data-spoiler-more]') && !$(this).is('[data-spoiler-less]')) {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            spoiler.eq(i).addClass('spoiler-' + i);

            setReadmore();
            $(document).on('click', '.basic-tabs-trigger', function (e) {
                setReadmore();
            });

            function setReadmore() {
                $('.spoiler-' + i).readmore({
                    collapsedHeight: currentElemHeight,
                    embedCSS: false,
                    moreLink: '<div class="spoiler-trigger-wrapper">' +
                        '           <a class="btn-reset btn btn-secondary spoiler-trigger" href="javascript:;">\n' +
                        '               <span class="btn__text">' + currentMoreText + '</span>\n' +
                        '           </a>' +
                        '       </div>',
                    lessLink: '<a class="visually-hidden" href="javascript:;"></a>',
                });
            }
        });
    }
};

// Initialization audio player
application.prototype.initAudioPlayer = function () {
    {
        class AudioPlayer extends HTMLElement {
            playing = false;
            volume = 2;
            prevVolume = 2;
            initialized = false;
            bufferPercentage = 75;
            nonAudioAttributes = new Set(['title', 'buffer-percentage']);

            constructor() {
                super();

                this.attachShadow({mode: 'open'});
                this.render();
            }

            static get observedAttributes() {
                return [
                    // audio tag attributes
                    // https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
                    'src', 'muted', 'crossorigin', 'loop', 'preload', 'autoplay',
                    // the name of the audio
                    'title',
                    // the percentage of the frequency buffer data to represent
                    // if the dataArray contains 1024 data points only a percentage of data will
                    // be used to draw on the canvas
                    'buffer-percentage'
                ];
            }

            async attributeChangedCallback(name, oldValue, newValue) {
                switch (name) {
                    case 'src':
                        this.initialized = false;
                        this.render();
                        this.initializeAudio();
                        break;
                    case 'muted':
                        this.toggleMute(Boolean(this.audio?.getAttribute('muted')));
                        break;
                    case 'title':
                        this.titleElement.textContent = newValue;
                        break;
                    case 'buffer-percentage':
                        this.bufferPercentage = Number(newValue) || 75;
                        break;
                    default:
                }

                this.updateAudioAttributes(name, newValue);
            }

            updateAudioAttributes(name, value) {
                if (!this.audio || this.nonAudioAttributes.has(name)) return;

                // if the attribute was explicitly set on the audio-player tag
                // set it otherwise remove it
                if (this.attributes.getNamedItem(name)) {
                    this.audio.setAttribute(name, value ?? '')
                } else {
                    this.audio.removeAttribute(name);
                }
            }

            initializeAudio() {
                if (this.initialized) return;

                this.initialized = true;

                this.audioCtx = new AudioContext();
                this.gainNode = this.audioCtx.createGain();
                this.analyserNode = this.audioCtx.createAnalyser();
                this.track = this.audioCtx.createMediaElementSource(this.audio);

                this.analyserNode.fftSize = 2048;
                this.bufferLength = this.analyserNode.frequencyBinCount;
                this.dataArray = new Uint8Array(this.bufferLength);
                this.analyserNode.getByteFrequencyData(this.dataArray);

                this.track
                    .connect(this.gainNode)
                    .connect(this.analyserNode)
                    .connect(this.audioCtx.destination);

                this.changeVolume();
            }

            attachEvents() {
                this.volumeBar.parentNode.addEventListener('click', e => {
                    if (e.target === this.volumeBar.parentNode) {
                        this.toggleMute();
                    }
                }, false);

                this.playPauseBtn.addEventListener('click', this.togglePlay.bind(this), false);

                this.volumeBar.addEventListener('input', this.changeVolume.bind(this), false);

                this.progressBar.addEventListener('input', (e) => this.seekTo(this.progressBar.value), false);

                this.audio.addEventListener('loadedmetadata', () => {
                    this.progressBar.max = this.audio.duration;
                    this.durationEl.textContent = this.getTimeString(this.audio.duration);
                    this.updateAudioTime();
                });

                this.audio.addEventListener('error', (e) => {
                    this.titleElement.textContent = this.audio.error.message;
                    this.playPauseBtn.disabled = true;
                });

                this.audio.addEventListener('timeupdate', () => {
                    this.updateAudioTime(this.audio.currentTime);
                });

                this.audio.addEventListener('ended', () => {
                    this.playing = false;
                    this.playPauseBtn.textContent = 'play';
                    this.playPauseBtn.classList.remove('playing');
                }, false);

                this.audio.addEventListener('pause', () => {
                    this.playing = false;
                    this.playPauseBtn.textContent = 'play';
                    this.playPauseBtn.classList.remove('playing');
                }, false);

                this.audio.addEventListener('play', () => {
                    this.playing = true;
                    this.playPauseBtn.textContent = 'pause';
                    this.playPauseBtn.classList.add('playing');
                }, false);
            }

            async togglePlay() {
                if (this.audioCtx.state === 'suspended') {
                    await this.audioCtx.resume();
                }

                if (this.playing) {
                    return this.audio.pause();
                }

                return this.audio.play();
            }

            getTimeString(time) {
                const secs = `${parseInt(`${time % 60}`, 10)}`.padStart(2, '0');
                const min = parseInt(`${(time / 60) % 60}`, 10);

                return `${min}:${secs}`;
            }

            changeVolume() {
                this.volume = Number(this.volumeBar.value);

                if (Number(this.volume) > 1) {
                    this.volumeBar.parentNode.className = 'volume-bar over';
                } else if (Number(this.volume) > 0) {
                    this.volumeBar.parentNode.className = 'volume-bar half';
                } else {
                    this.volumeBar.parentNode.className = 'volume-bar';
                }

                if (this.gainNode) {
                    this.gainNode.gain.value = this.volume;
                }
            }

            toggleMute(muted = null) {
                this.volumeBar.value = muted || this.volume === 0 ? this.prevVolume : 0;
                this.changeVolume();
            }

            seekTo(value) {
                this.audio.currentTime = value;
            }

            updateAudioTime() {
                this.progressBar.value = this.audio.currentTime;
                this.currentTimeEl.textContent = this.getTimeString(this.audio.currentTime);
            }

            style() {
                return `
                    <style>
                        :host {
                            width: 100%;
                        }
                        
                        * {
                            box-sizing: border-box;
                        }
                        
                        .audio-player {
                            position: relative;
                            display: flex;
                            align-items: center;
                            min-height: 48px;
                            height: 48px;
                            margin: 0;
                            padding: 6px 16px 6px 8px;
                            border-radius: 8px;
                            background-color: var(--gray6-color);
                            color: var(--white-color);
                        }
                        
                        .play-btn {
                            min-width: 36px;
                            width: 36px;
                            min-height: 36px;
                            height: 36px;
                            padding: 8px;
                            overflow: hidden;
                            border: none;
                            background: url("img/fill-play-cyan.svg#fill-play-cyan") center center/20px 20px no-repeat;
                            appearance: none;
                            text-indent: -999999px;
                            cursor: pointer;
                        }
                        
                        .play-btn.playing {
                            background: url("img/fill-pause-cyan.svg#fill-pause-cyan") center center/20px 20px no-repeat;
                        }
                        
                        .progress-indicator {
                            position: relative;
                            display: flex;
                            flex: 1;
                            justify-content: flex-end;
                            align-items: center;
                            gap: 16px;
                            min-height: 20px;
                            height: 20px;
                            line-height: 20px;
                        }
                        
                        .progress-bar {
                            z-index: 2;
                            position: absolute;
                            flex: 1;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            min-width: calc(100% - 56px);
                            width: calc(100% - 56px);
                            margin: 0;
                            overflow: hidden;
                            border-radius: 2px;
                            background: var(--gray5-color);
                            appearance: none;
                            cursor: pointer;
                        }
                        
                        .progress-bar::-webkit-slider-thumb {
                            min-width: 0;
                            width: 0;
                            min-height: 2px;
                            height: 2px;
                            border-radius: 2px;
                            box-shadow: -300px 0 0 300px #00BBDD;
                            appearance: none;
                        }
                        
                        .progress-bar::-moz-range-thumb {
                            min-width: 0;
                            width: 0;
                            min-height: 2px;
                            height: 2px;
                            border-radius: 2px;
                            box-shadow: -300px 0 0 300px #00BBDD;
                            appearance: none;
                        }
                        
                        .progress-bar::-ms-thumb {
                            min-width: 0;
                            width: 0;
                            min-height: 2px;
                            height: 2px;
                            border-radius: 2px;
                            box-shadow: -300px 0 0 300px #00BBDD;
                            appearance: none;
                        }
                        
                        .current-time {
                            position: relative;
                            z-index: 1;
                            display:flex;
                            justify-content: flex-end;
                            align-items: center;
                            min-width: 40px;
                            width: 40px;
                            color: var(--gray7-color);
                            cursor: default;
                        }
                        
                        .volume-bar,
                        .duration,
                        canvas {
                            display: none;
                        }
                        
                        @media (min-width: 992px) {
                            .audio-player {
                                min-height: 52px;
                                height: 52px;
                                padding: 8px 16px 8px 8px;
                            }
                            .progress-indicator {
                                font-size: 14px;
                            }
                        }
                        @media (max-width: 991.98px) {
                            .progress-indicator {
                                font-size: 12px;
                            }
                        }
                    </style>
                `
            }

            render() {
                this.shadowRoot.innerHTML = `
                    ${this.style()}
                    <figure class="audio-player">
                        <audio style="display: none"></audio>
                        <button class="play-btn" type="button">play</button>
                        <div class="progress-indicator">
                            <span class="current-time">00:00</span>
                            <input type="range" max="100" value="0" class="progress-bar">
                            <span class="duration">00:00</span>
                            <canvas class="visualizer"></canvas>
                        </div>
                        <div class="volume-bar">
                            <input type="range" min="0" max="2" step="0.01" value="${this.volume}" class="volume-field">
                        </div>
                    </figure>
                `;

                this.audio = this.shadowRoot.querySelector('audio');
                this.playPauseBtn = this.shadowRoot.querySelector('.play-btn');
                this.volumeBar = this.shadowRoot.querySelector('.volume-field');
                this.progressIndicator = this.shadowRoot.querySelector('.progress-indicator');
                this.currentTimeEl = this.progressIndicator.children[0];
                this.progressBar = this.progressIndicator.children[1];
                this.durationEl = this.progressIndicator.children[2];
                this.canvas = this.shadowRoot.querySelector('canvas');

                this.canvasCtx = this.canvas.getContext("2d");
                // support retina display on canvas for a more crispy/HD look
                const scale = window.devicePixelRatio;
                this.canvas.width = Math.floor(this.canvas.width* scale);
                this.canvas.height = Math.floor(this.canvas.height * scale);
                this.volumeBar.value = this.volume;

                // if rendering or re-rendering all audio attributes need to be reset
                for (let i = 0; i < this.attributes.length; i++) {
                    const attr = this.attributes[i];
                    this.updateAudioAttributes(attr.name, attr.value);
                }

                this.attachEvents();
            }
        }

        customElements.define('audio-player', AudioPlayer);
    }
};

// Initialization animated counter
application.prototype.initAnimatedCounter = function () {
    $(allInView);
    $(window).scroll(allInView);
    var viewed = false;

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function allInView() {
        if (isScrolledIntoView($('.numbers')) && !viewed) {
            viewed = true;
            $('.animated-counter').each(function () {
                $(this).removeClass('as-hidden');
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    }
};

// Initialization custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
        }
    });
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contact-map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contact-map__content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialization success notification when form is sended
application.prototype.initFormSuccess = function () {
    $('[data-form-success]').on('click', function () {
        let modal = $(this).closest('.modal');
        let staticModal = $(this).closest('.static-modal');

        if($(this).closest('form').find('input[required]')) {
            console.log($(this));
            if($(this).val() == "") {
                console.log("success");
                /*console.log($(this));*/
                console.log('= ' + $(this).closest('form').find('input[required]').val());
                /*$(':input[required=""],:input[required]').bind('focusout', function(){
                    if ($(this).val() == ""){
                        $(this).focus();
                        //and show some error in whatever way you want
                    }
                });*/




            } else {
                console.log("success222");
            }
        }

        /*
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
        */


        /*modal.addClass('success');
        staticModal.addClass('success');

        setTimeout(function () {
            modal.find('.success-msg').addClass('animated');
            staticModal.find('.success-msg').addClass('animated');
        }, 3000);
        setTimeout(function () {
            modal.removeClass('success');
            staticModal.removeClass('success');
        }, 3490);
        setTimeout(function () {
            modal.find('.success-msg').removeClass('animated');
            staticModal.find('.success-msg').removeClass('animated');
        }, 3500);*/
    });
};