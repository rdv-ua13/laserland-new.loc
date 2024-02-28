<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/Aeonik Pro TRIAL.otf" as="font" type="font/opentype" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Aeonik Pro TRIAL.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/ui.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>
<body>
    <div class="ui">
        <div class="container-fluid">
            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Colors</h3>

                <div class="ui-row">
                    <div class="ui-color">
                        <span class="ui-color__item tooltip" data-tippy-content="--black-color" style="background-color: var(--black-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--white-color" style="background-color: var(--white-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray1-color" style="background-color: var(--gray1-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray2-color" style="background-color: var(--gray2-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray3-color" style="background-color: var(--gray3-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray4-color" style="background-color: var(--gray4-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray5-color" style="background-color: var(--gray5-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray6-color" style="background-color: var(--gray6-color);"></span>
                        <span class="ui-color__item light tooltip" data-tippy-content="--gray7-color" style="background-color: var(--gray7-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--gray8-color" style="background-color: var(--gray8-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--cyan1-color" style="background-color: var(--cyan1-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--cyan2-color" style="background-color: var(--cyan2-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--cyan3-color" style="background-color: var(--cyan3-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--orange-color" style="background-color: var(--orange-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--red-color" style="background-color: var(--red-color);"></span>
                        <span class="ui-color__item tooltip" data-tippy-content="--green-color" style="background-color: var(--green-color);"></span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Icons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">использование use ==> sprite.svg#id_из_тултип / file-name.svg#file-name</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="#fill-3dcube">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-3dcube"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-box-2">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-box-2"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-cake">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-cake"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-call-calling">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-call-calling"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-checkbox-rec">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-checkbox-rec"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-checkbox-rec-1">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-checkbox-rec-1"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-clock">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-clock"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-coffee">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-coffee"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-cross">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-cross"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-emoji-happy">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-emoji-happy"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-empty-wallet">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-empty-wallet"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-flash-circle">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-flash-circle"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-format-square">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-format-square"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-minus-rec">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-minus-rec"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-pause">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-pause"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-people">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-people"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-pin">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-pin"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-play">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-play"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-play-video">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-play-video"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-plus">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-plus"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-plus-rec">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-plus-rec"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-profile-2user-fill">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-profile-2user-fill"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-sms">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-sms"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-tree">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-tree"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-trophy">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-trophy"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-video">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-video"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-zoom-in">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-fill">
                                <use href="img/sprite.svg#fill-zoom-in"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-soc-in">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#fill-soc-in"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-soc-vk">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#fill-soc-vk"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-soc-tg">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#fill-soc-tg"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#fill-soc-wa">
                            <!--start ui content-->
                            <svg class="icon icon-md icon-fill">
                                <use href="img/sprite.svg#fill-soc-wa"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#stroke-arrow-nav-left">
                            <!--start ui content-->
                            <svg class="icon icon-nav icon-stroke">
                                <use href="img/sprite.svg#stroke-arrow-nav-left"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="#stroke-menu">
                            <!--start ui content-->
                            <svg class="icon icon-sm icon-stroke">
                                <use href="img/sprite.svg#stroke-menu"></use>
                            </svg>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Buttons</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">default</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-primary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-primary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-cross"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-cross"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-secondary'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-secondary">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-cross"></use>
                                </svg>
                                <span class="btn__text">Кнопка</span>
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-cross"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">alternative buttons</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-square'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-square">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-cross"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip  bg-light" data-tippy-content="class='btn-reset btn btn-nav btn-nav--light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-nav btn-nav--light">
                                <svg class="icon icon-nav icon-stroke btn__icon">
                                    <use href="img/sprite.svg#stroke-arrow-nav-left"></use>
                                </svg>
                                <svg class="icon icon-nav icon-stroke btn__icon btn__icon-hover">
                                    <use href="img/sprite.svg#stroke-arrow-nav-left"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip  bg-dark" data-tippy-content="class='btn-reset btn btn-nav btn-nav--dark'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-nav btn-nav--dark">
                                <svg class="icon icon-nav icon-stroke btn__icon">
                                    <use href="img/sprite.svg#stroke-arrow-nav-left"></use>
                                </svg>
                                <svg class="icon icon-nav icon-stroke btn__icon btn__icon-hover">
                                    <use href="img/sprite.svg#stroke-arrow-nav-left"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip  bg-light" data-tippy-content="class='btn-reset btn btn-icon btn-icon--light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon btn-icon--light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-plus"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip  bg-light" data-tippy-content="class='btn-reset btn btn-icon btn-icon--light active'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon btn-icon--light active">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-plus"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip  bg-dark" data-tippy-content="class='btn-reset btn btn-icon btn-icon--dark'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon btn-icon--dark">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-plus"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='btn-reset btn btn-play'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-play">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-play-video"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Controls</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">chip</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='chip chip-cyan'">
                            <!--start ui content-->
                            <span class="chip chip-cyan">Light</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='chip chip-orange'">
                            <!--start ui content-->
                            <span class="chip chip-orange">Max</span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">tab</div>
                    </div>
                    <div class="ui-tooltip-set  bg-dark">
                        <span class="tooltip" data-tippy-content="class='tab'">
                            <!--start ui content-->
                            <span class="tab">Витамины</span>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='tab active' active">
                            <!--start ui content-->
                            <span class="tab active">Витамины</span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Fields</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">input</div>
                    </div>
                    <div class="ui-tooltip-set  bg-dark">
                        <span class="tooltip" data-tippy-content="default">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper has-icon-l has-icon-r">
                                    <input
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label class="input-icon input-icon-l">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#fill-cross"></use>
                                        </svg>
                                    </label>
                                    <label class="input-icon input-icon-r">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#fill-cross"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="split">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper input-wrapper-split has-icon-l">
                                    <input
                                            class="input-reset input"
                                            type="search"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label class="input-icon input-icon-l">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#fill-cross"></use>
                                        </svg>
                                    </label>
                                    <button class="btn-reset btn btn-md btn-primary" type="button">
                                        <span class="btn__text">Забронировать</span>
                                    </button>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
    </div>
</body>
</html>