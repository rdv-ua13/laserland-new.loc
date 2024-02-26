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
                        <span class="tooltip  bg-light" data-tippy-content="class='btn-reset btn btn-icon btn-icon--hover-rotate-225 btn-icon--light'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon btn-icon--hover-rotate-225 btn-icon--light">
                                <svg class="icon icon-fill btn__icon">
                                    <use href="img/sprite.svg#fill-plus"></use>
                                </svg>
                            </button>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip  bg-dark" data-tippy-content="class='btn-reset btn btn-icon btn-icon--hover-rotate-225 btn-icon--dark'">
                            <!--start ui content-->
                            <button class="btn-reset btn btn-icon btn-icon--hover-rotate-225 btn-icon--dark">
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
                <h3 class="h3 ui-title title-bold text-center">Links</h3>

                <div class="ui-row">
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='link link-primary' (default)">
                            <!--start ui content-->
                            <a class="link link-primary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-secondary'">
                            <!--start ui content-->
                            <a class="link link-secondary" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-invert'" style="padding: 0 8px; background-color: var(--black-color);">
                            <!--start ui content-->
                            <a class="link link-invert" href="javascript:;">Витамины и добавки</a>
                            <!--end ui content-->
                        </span>
                        <span class="tooltip" data-tippy-content="class='link link-tdu'">
                            <!--start ui content-->
                            <a class="link link-tdu" href="javascript:;">Витамины и добавки</a>
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
                    <div class="ui-tooltip-set">
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
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label class="input-icon input-icon-r">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <span class="tooltip" data-tippy-content="search">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Label</div>
                                <div class="input-wrapper input-search-wrapper has-icon-l">
                                    <input
                                            class="input-reset input input-search"
                                            type="search"
                                            name=""
                                            value=""
                                            placeholder="Placeholder"
                                            autocomplete="off"
                                    >
                                    <label class="input-icon input-icon-l">
                                        <svg class="icon icon-sm icon-fill">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </label>
                                    <label class="input-search-action">
                                        <button class="btn-reset btn btn-icon input-delete-btn" type="button">
                                            <svg class="icon icon-fill btn__icon">
                                                <use href="img/sprite.svg#filled-tag-cross"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-reset btn btn-sm input-search-btn" type="submit">
                                            <span class="btn__text">Найти</span>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>

                        <?/* pass
                        <span class="tooltip" data-tippy-content="class='card' (default)">
                            <!--start ui content-->
                            <div class="titled-input">
                                <div class="input-title">Подтверждение пароля</div>
                                <div class="input-wrapper has-icon-r">
                                    <input
                                            class="input-reset input"
                                            type="password"
                                            name=""
                                            value=""
                                            placeholder="Test"
                                            data-password-target
                                            required
                                    >
                                    <label class="input-icon input-icon-btn">
                                        <svg class="icon icon-sm icon-fill icon-default">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                        <svg class="icon icon-sm icon-fill icon-selected">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                        <input
                                                type="checkbox"
                                                class="visually-hidden"
                                                data-password-switcher
                                        >
                                    </label>
                                </div>
                            </div>
                            <!--end ui content-->
                        </span>*/?>
                    </div>
                </div>
            </div>

            <div class="ui-section">
                <h3 class="h3 ui-title title-bold text-center">Content</h3>

                <div class="ui-row">
                    <div class="ui-title">
                        <div class="fz-subtitle">card</div>
                    </div>
                    <div class="ui-tooltip-set">
                        <span class="tooltip" data-tippy-content="class='card' (default)">
                            <!--start ui content-->
                            <span class="card">
                                <a class="card__view" href="javascript:;">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/brand.png"
                                            width="181"
                                            height="84"
                                            alt="Изображение блока"
                                    >
                                </a>
                            </span>
                            <!--end ui content-->
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>

        <h3 class="text-center">Checkbox / Radio buttons (для примера состояний стоит type=checkbox)</h3>
        <div>
            <div class="container-ui">
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="default"
                        >
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox">
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="disabled"
                        >
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input disabled" type="checkbox" disabled>
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="checked"
                        >
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked>
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="checked"
                        >
                            <!--start ui content-->
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox" checked>
                            </div>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="default"
                        >
                            <!--start ui content-->
                            <div class="custom-radio">
                                <input class="custom-radio__input" type="checkbox">
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="disabled"
                        >
                            <!--start ui content-->
                            <div class="custom-radio">
                                <input class="custom-radio__input disabled" type="checkbox" disabled>
                            </div>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="checked"
                        >
                            <!--start ui content-->
                            <div class="custom-radio">
                                <input class="custom-radio__input" type="checkbox" checked>
                            </div>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h4 class="text-center flex-1" style="max-width: 320px">checkbox label</h4>
            <div class="container-ui">
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="default"
                        >
                            <!--start ui content-->
                            <span class="custom-checkbox">
                            <input id="checkbox-ui-1" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-1" class="custom-checkbox__label-for">Label</label>
                        </span>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="disabled"
                        >
                            <!--start ui content-->
                            <span class="custom-checkbox">
                            <input id="checkbox-ui-2" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-2" class="custom-checkbox__label-for">Label</label>
                        </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="default"
                        >
                            <!--start ui content-->
                            <span class="custom-radio">
                            <input id="radio-ui-1" class="custom-radio__input" type="checkbox">
                            <label for="radio-ui-1" class="custom-radio__label-for">Label</label>
                        </span>
                            <!--end ui content-->
                        </div>
                        <div class="tooltip"
                             data-tippy-content="disabled"
                        >
                            <!--start ui content-->
                            <span class="custom-radio">
                            <input id="radio-ui-2" class="custom-radio__input disabled" type="checkbox" disabled>
                            <label for="radio-ui-2" class="custom-radio__label-for">Label</label>
                        </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h4 class="text-center flex-1" style="max-width: 320px">checkbox label + brand</h4>
            <div class="container-ui">
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="default"
                        >
                            <!--start ui content-->
                            <span class="custom-checkbox">
                            <input id="checkbox-ui-3" class="custom-checkbox__input" type="checkbox" checked>
                            <label for="checkbox-ui-3" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="disabled"
                        >
                            <!--start ui content-->
                            <span class="custom-checkbox">
                            <input id="checkbox-ui-4" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-4" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-ui">
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="default"
                        >
                            <!--start ui content-->
                            <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </span>
                        </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
                <div class="col-ui" style="max-width: 148px">
                    <div class="tooltip-ui-set">
                        <div class="tooltip"
                             data-tippy-content="disabled"
                        >
                            <!--start ui content-->
                            <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </span>
                        </span>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Tags</h3>
        <div class="container-ui">
            <div class="col-ui">
                <h4 class="text-center">Tags block (default)</h4>
                <div class="row-ui">
                    <div class="flex-v-center" style="max-width: 355px;">
                        <!--ui content-->
                        <span class="tag-bar">
                        <span class="tag" style="cursor: not-allowed;">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text8-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text5-color);">disabled</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text6-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--accent-purple4-color);
                                    background-color: var(--accent-purple8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                    <use href="img/sprite.svg#tag-sport"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--accent-ceruleanblue1-color);
                                    background-color: var(--accent-ceruleanblue8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                    <use href="img/sprite.svg#tag-building"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--error4-color);
                                    background-color: var(--error9-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                    <use href="img/sprite.svg#tag-alarm"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--warning5-color);
                                    background-color: var(--warning8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                    <use href="img/sprite.svg#tag-pets"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                            </span>
                        </span>
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--info5-color);
                                    background-color: var(--info8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                    <use href="img/sprite.svg#tag-science"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                            </span>
                        </span>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                <h4 class="text-center">Tags block (slider)</h4>
                <div class="row-ui">
                    <div class="flex-v-center" style="max-width: 355px; overflow: hidden;">
                        <!--ui content-->
                        <div class="tag-bar tag-bar--slider swiper js-tag-bar-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--text6-color);
                                            background-color: var(--text8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                            <use href="img/sprite.svg#tag-all"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--success6-color);
                                            background-color: var(--success8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                            <use href="img/sprite.svg#tag-nature"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--accent-purple4-color);
                                            background-color: var(--accent-purple8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                            <use href="img/sprite.svg#tag-sport"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--accent-ceruleanblue1-color);
                                            background-color: var(--accent-ceruleanblue8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                            <use href="img/sprite.svg#tag-building"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--error4-color);
                                            background-color: var(--error9-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                            <use href="img/sprite.svg#tag-alarm"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--warning5-color);
                                            background-color: var(--warning8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                            <use href="img/sprite.svg#tag-pets"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                    </span>
                                </span>
                                </div>
                                <div class="swiper-slide">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--info5-color);
                                            background-color: var(--info8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                            <use href="img/sprite.svg#tag-science"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                                    </span>
                                </span>
                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--max">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag tag--max"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--midi">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag tag--midi"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--mini">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </span>
                    </span>
                    </div>
                    &#8212; span class="tag tag--mini"
                </div>
                Для тегов доделать вариации для mobile/desktop
                <br>
                <h4 class="text-center">Tags-radio</h4>
                <div class="row-ui">
                    <div class="flex-v-center" style="max-width: 355px;">
                        <!--ui content-->
                        <span class="tag-bar">
                        <label class="tag" style="cursor: not-allowed;">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text8-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text5-color);">disabled</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][all]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text6-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][urban]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--accent-ceruleanblue1-color);
                                    background-color: var(--accent-ceruleanblue8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                    <use href="img/sprite.svg#tag-building"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][sport]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--accent-purple4-color);
                                    background-color: var(--accent-purple8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                    <use href="img/sprite.svg#tag-sport"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][alarm]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--error4-color);
                                    background-color: var(--error9-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                    <use href="img/sprite.svg#tag-alarm"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][animal]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--warning5-color);
                                    background-color: var(--warning8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                    <use href="img/sprite.svg#tag-pets"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][science]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--info5-color);
                                    background-color: var(--info8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                    <use href="img/sprite.svg#tag-science"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][nature]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                            </span>
                        </label>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Custom icons</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 150px;">
                        <!--start ui content-->
                        <span class="success-check">
                        <svg class="icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                    </span>
                        <!--end ui content-->
                    </div>
                    &#8212; class="success-check" (default)
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 150px;">
                        <!--start ui content-->
                        <span class="success-check success-check--max">
                        <svg class="icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                    </span>
                        <!--end ui content-->
                    </div>
                    &#8212; class="success-check success-check--max"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 150px;">
                        <!--start ui content-->
                        <span class="success-check success-check--mini">
                        <svg class="icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                    </span>
                        <!--end ui content-->
                    </div>
                    &#8212; class="success-check success-check--mini"
                </div>
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 150px;">
                        <!--start ui content-->
                        <span class="success-check success-check--nameplate">
                        <span class="success-check__content">
                            <svg class="icon success-check__content-icon">
                                <use href="img/sprite.svg#success-check"></use>
                            </svg>
                            <span class="success-check__content-text">Верифицирован</span>
                        </span>
                    </span>
                        <!--end ui content-->
                    </div>
                    &#8212; class="success-check success-check--nameplate"
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Tabs</h3>
        <div class="container-ui">
            <div class="col-ui">
                class="tabs"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="tabs">
                            <ul class="list-reset tabs__nav">
                                <li class="tabs__nav-item">
                                    <button class="btn-reset tabs__nav-btn selected" type="button" data-target="0">
                                        <span class="tabs__nav-btn-content">Tab one</span>
                                        <span class="tabs__nav-btn-num">69</span>
                                    </button>
                                </li>
                                <li class="tabs__nav-item">
                                    <button class="btn-reset tabs__nav-btn notice" type="button" data-target="1">
                                        <span class="tabs__nav-btn-content">Tab two</span>
                                        <span class="tabs__nav-btn-num">1</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tabs__content">
                                <div class="tabs__panel active" data-id="0">
                                    Tabs 1 content
                                </div>
                                <div class="tabs__panel" data-id="1">
                                    Tabs 2 content
                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                tabs-слайдер внутренних страниц
                <div class="row-ui ">
                    <div class="" style="width: 100%;">
                        <!--start ui content-->
                        <div class="inner-page-tabs-wrapper">
                            <div class="inner-page-tabs swiper" data-tab="tab-ui">
                                <div class="inner-page-tabs__nav swiper-wrapper">
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link selected"
                                                type="button"
                                                data-target="0"
                                        >
                                            <span class="inner-page-tabs__link-content">$value</span>
                                            <span class="inner-page-tabs__link-num">18</span>
                                        </a>
                                    </div>
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link"
                                                type="button"
                                                data-target="1"
                                        >
                                            <span class="inner-page-tabs__link-content">$value2</span>
                                            <span class="inner-page-tabs__link-num">28</span>
                                        </a>
                                    </div>
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link"
                                                type="button"
                                                data-target="2"
                                        >
                                            <span class="inner-page-tabs__link-content">$value3</span>
                                            <span class="inner-page-tabs__link-num">38</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?/* ".inner-page-tabs-content" должен располагаться за пределами ".inner-page-tabs-wrapper" */?>
                        <div class="inner-page-tabs-content" data-tab-content="tab-ui">
                            <div class="inner-page-tabs-content__panel active" data-id="0">
                                Tabs 1 content
                            </div>
                            <div class="inner-page-tabs-content__panel" data-id="1">
                                Tabs 2 content
                            </div>
                            <div class="inner-page-tabs-content__panel" data-id="2">
                                Tabs 3 content
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Notice</h3>
        <div class="container-ui">
            <div class="col-ui">
                class="notice" > class="notice-elem active" > class="notice-elem__num"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="notice">
                            <div class="notice-elem active">
                                <span>Title text</span>
                                <span class="notice-elem__num">1</span>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Cards</h3>
        <div class="container-ui">
            <div class="col-ui">
                class="card"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="card-list">
                            <a href="javascript:;" class="card">
                        <span class="card__view">
                            <picture>
                                <source srcset="img/card-photo.webp" type="image/webp">
                                <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                            </picture>
                        </span>
                                <span class="card__descr">
                            <span class="card__tag-bar tag-bar">
                                <span class="tag">
                                    <span
                                            class="tag__content-bg"
                                            style="
                                            border-color: var(--success6-color);
                                            background-color: var(--success8-color);"
                                    ></span>
                                    <span class="tag__content">
                                        <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                            <use href="img/sprite.svg#tag-nature"></use>
                                        </svg>
                                        <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                    </span>
                                </span>
                            </span>
                            <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                            <span class="card__action">
                                <span class="card__action-data">
                                    <span class="card__action-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#pin"></use>
                                        </svg>
                                        <span class="card__action-item-text">г. Москва</span>
                                    </span>
                                    <span class="card__action-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#calendar"></use>
                                        </svg>
                                        <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                    </span>
                                </span>
                                <span class="card__action-btn">
                                    <button class="btn-reset btn btn--fill">
                                        <span class="btn__text">Помочь</span>
                                    </button>
                                </span>
                            </span>
                        </span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                class="card"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="card-list">
                            <a href="javascript:;" class="card">
                            <span class="card__view">
                                <picture>
                                    <source srcset="img/card-photo.webp" type="image/webp">
                                    <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                </picture>
                            </span>
                                <span class="card__descr">
                                <span class="card__tag-bar tag-bar">
                                    <span class="tag">
                                        <span
                                                class="tag__content-bg"
                                                style="
                                                border-color: var(--success6-color);
                                                background-color: var(--success8-color);"
                                        ></span>
                                        <span class="tag__content">
                                            <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                                <use href="img/sprite.svg#tag-nature"></use>
                                            </svg>
                                            <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                        </span>
                                    </span>
                                </span>
                                <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                <span class="card__action">
                                    <span class="card__action-data">
                                        <span class="card__action-progress js-progress">
                                            <span class="card__action-progress-bar progress-bar">
                                                <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                <span class="progress-bar__bg">
                                                    <span class="progress-bar__line"></span>
                                                </span>
                                            </span>
                                            <span class="card__action-progress-data progress-bar-data">
                                                <span class="card__action-progress-current">
                                                    <span class="card__action-progress-data-title">Подписали</span>
                                                    <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                </span>
                                                <span class="card__action-progress-need">
                                                    <span class="card__action-progress-data-title">Нужно подписей</span>
                                                    <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__action-btn">
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Подписать</span>
                                        </button>
                                    </span>
                                </span>
                            </span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                class="card card--projects"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="card-list">
                            <a href="javascript:;" class="card card--projects">
							<span class="card__view">
								<picture>
									<source srcset="img/card-photo-projects.webp" type="image/webp">
									<img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
                                <span class="card__descr">
								<span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
								<span class="card__organizer">
									<span class="card__organizer-logo">
                                        <picture>
                                            <source srcset="img/card-projects-org.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                        </picture>
                                        <span class="card__organizer-logo-check">
                                            <span class="success-check success-check--mini">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#success-check"></use>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
									<span class="card__organizer-descr">
                                        <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                        <span class="card__organizer-activity">12 мероприятий</span>
                                    </span>
									<span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#favorite"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
								</span>
							</span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                class="card card--volunteer"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="card-list">
                            <a href="javascript:;" class="card card--volunteer">
							<span class="card__view">
								<picture>
									<source srcset="img/card-photo-volunteer.webp" type="image/webp">
									<img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
                                <span class="card__descr">
								<span class="card__title">Третьяков Авраам Романович</span>
                                <span class="card__icon-tags">
                                    <span class="card__icon-tag">
                                        <span class="success-check">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#success-check"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__icon-tag">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#coins"></use>
                                        </svg>
                                    </span>
                                </span>
                                <span class="card__favorite">
                                    <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#bookmark"></use>
                                        </svg>
                                    </button>
                                </span>
                                <span class="card__user-descr">
                                    <span class="card__user-descr-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#pin"></use>
                                        </svg>
                                        <span class="card__action-item-text">г. Москва</span>
                                    </span>
                                </span>
                                <span class="card__rate">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                    <span class="card__rate-value">4.8</span>
                                </span>
                                <span class="card__reviews">
                                    <span class="card__reviews-value">Был волонтером 251 раз</span>
                                </span>
                                <span class="card__contact-btn">
                                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                        <span class="btn__text">Написать</span>
                                    </button>
                                </span>
							</span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                class="card card--organizer"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="card-list">
                            <a href="javascript:;" class="card card--organizer">
							<span class="card__view">
								<picture>
									<source srcset="img/card-projects-org.webp" type="image/webp">
									<img loading="lazy" src="img/card-projects-org.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
                                <span class="card__descr">
								<span class="card__title">Ассоциация волонтерских центров</span>
                                <span class="card__icon-tags">
                                    <span class="card__icon-tag">
                                        <span class="success-check">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#success-check"></use>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                                <span class="card__favorite">
                                    <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#bookmark"></use>
                                        </svg>
                                    </button>
                                </span>
                                <span class="card__user-descr">
                                    <span class="card__user-descr-item">
                                        <span class="card__action-item-text">12 экодел</span>
                                    </span>
                                </span>
                                <span class="card__rate">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                    <span class="card__rate-value">4.8</span>
                                </span>
                                <span class="card__reviews">
                                    <span class="card__reviews-value">193 отзыва</span>
                                </span>
                                <span class="card__contact-btn">
                                    <button class="btn-reset btn btn--fill btn--mini">
                                        <span class="btn__text">Готов помогать</span>
                                    </button>
                                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                        <span class="btn__text">Написать</span>
                                    </button>
                                </span>
							</span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
                <br>
                class="card card--more"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="card-list">
                            <a href="javascript:;" class="card card--more">
							<span class="card__descr">
								<span class="card__header h2">2839+</span>
								<span class="card__title">мероприятий доступно на платформе</span>
							</span>
                                <span class="card__link-pointer">
                                <svg class="icon">
                                    <use href="img/sprite.svg#right"></use>
                                </svg>
                            </span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Select (select2)</h3>
        <div class="container-ui">
            <div class="col-ui">
                select class="input-reset form__input form__input--select js-select2"
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <form id="" class="form authreg-form" method="POST" action="">
                            <div class="page-content__section">
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Селект <span class="required-star">*</span></span>
                                    </div>
                                    <div class="form__field">
                                        <select
                                                id=""
                                                name=""
                                                class="input-reset form__input form__input--select2 js-select2"
                                                required
                                        >
                                            <option value="0">Селект 1</option>
                                            <option value="1">Селект 2</option>
                                            <option value="2">Селект 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Modal</h3>
        <div class="container-ui">
            <div class="col-ui">
                <a href="https://fancyapps.com/" target="_blank">Using plugin fancybox</a>
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#pencil"></use>
                            </svg>
                            <span class="btn__text">Вызов модалки fancy</span>
                        </button>

                        <div id="modal-test111" class="modal modal-request" style="display:none;">
                            <div class="modal__content">
                                <div class="modal__title">Учет времени волонтера</div>
                                <div class="modal-fields">
                                    <div class="modal-fields__item modal-request__employee">
                                        <div class="modal-request__employee-view">
                                            <picture>
                                                <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-photo-volunteer.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="Фото карточки"
                                                >
                                            </picture>
                                        </div>
                                        <div class="modal-request__employee-descr">
                                            <div class="modal-request__employee-descr-status">Волонтер</div>
                                            <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item">
                                            <div class="page-content__section-item-title">
                                                <span>Указать время вручную</span>
                                            </div>
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="text"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оценка волонтера</span>
                                        </div>
                                        <div class="form__field">
                                            <div class="page-content__intro-rate">
                                                <div class="page-content__intro-rate-stars">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оставить отзыв</span>
                                        </div>
                                        <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="form__field form__field-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Сохранить</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--gray flex-1">
                                                <span class="btn__text">Сохранить и создать новую задачу</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>

                <br>

                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#pencil"></use>
                            </svg>
                            <span class="btn__text">Вызов модалки fancy</span>
                        </button>

                        <div id="modal-test111" class="modal modal-request" style="display:none;">
                            <div class="modal__content">
                                <div class="modal__title">Учет времени волонтера</div>
                                <div class="modal-fields">
                                    <div class="modal-fields__item modal-request__employee">
                                        <div class="modal-request__employee-view">
                                            <picture>
                                                <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-photo-volunteer.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="Фото карточки"
                                                >
                                            </picture>
                                        </div>
                                        <div class="modal-request__employee-descr">
                                            <div class="modal-request__employee-descr-status">Волонтер</div>
                                            <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item">
                                            <div class="page-content__section-item-title">
                                                <span>Указать время вручную</span>
                                            </div>
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="text"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оценка волонтера</span>
                                        </div>
                                        <div class="form__field">
                                            <div class="page-content__intro-rate">
                                                <div class="page-content__intro-rate-stars">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#favorite"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="page-content__section-item-title">
                                            <span>Оставить отзыв</span>
                                        </div>
                                        <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-fields__item">
                                        <div class="form__field form__field-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Сохранить</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--gray flex-1">
                                                <span class="btn__text">Сохранить и создать новую задачу</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Check all</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%; gap: 15px;">
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input
                                    class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
                                    type="checkbox"
                                    data-checkall-for="checkallTest"
                            >
                            all
                        </div>

                        <div class="custom-checkbox">
                            <input
                                    class="custom-checkbox__input checkall-group"
                                    type="checkbox"
                                    data-checkall-group="checkallTest"
                            >
                            single
                        </div>
                        <div class="custom-checkbox">
                            <input
                                    class="custom-checkbox__input checkall-group"
                                    type="checkbox"
                                    data-checkall-group="checkallTest"
                            >
                            single
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Block text-spoiler</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
                        <div class="page-content__descr-content">
                            <div class="page-content__spoiler js-spoiler" data-collapsed-height="22">
                                <div class="page-content__spoiler-text">Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране. Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране.</div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Pagination</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        <!--start ui content-->
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Tooltip</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%;">
                        tooltip -&nbsp;
                        <!--start ui content-->
                        <span class="tooltip"
                              data-tippy-content="<div class='tooltip-content'>
                                                    <p>Принимает <a href='javascript:;'>HTML</a></p>
                                                    <p>Можно изменить trigger на 'click' в initTooltips() ->
                                                        <a href='javascript:;' style='color: red;'>trigger: 'click'</a>
                                                    </p>
                                                </div>"
                        >
                        <svg class="icon">
                            <use href="img/sprite.svg#help"></use>
                        </svg>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Обёртка для input flatpickr</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="width: 100%; max-width: 500px;">
                        <!--start ui content-->
                        <div class="form__field form__field--flatpickr">
                            <input
                                    id=""
                                    class="input-reset form__input flatpickr"
                                    type="text"
                                    name=""
                                    placeholder=""
                            >
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Banner</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="min-width: 100%;">
                        <!--start ui content-->
                        <div class="banner banner--dark-bg" style="background-color: var(--accent-ceruleanblue1-color);">
                            <div class="banner__decor">
                                <picture>
                                    <source
                                            srcset="img/banner-mobile.webp"
                                            media="(max-width: 767.98px)"
                                            type="image/webp"
                                    >
                                    <source
                                            srcset="img/banner.webp"
                                            media="(min-width: 768px)"
                                            type="image/webp"
                                    >
                                    <img
                                            loading="lazy"
                                            src="img/banner.png"
                                            srcset="img/banner-mobile.png 343w,
                                            img/banner.png 1280w"
                                            sizes="(max-width: 767.98px) 343px,
                                            1280px"
                                            class="image"
                                            width=""
                                            height=""
                                            alt=""
                                    >
                                </picture>
                            </div>
                            <div class="banner__content">
                                <div class="banner__title">XI Международный форум «Арктика: настоящее и будущее»</div>
                                <button class="btn-reset btn btn--white">
                                    <span class="btn__text">Присоединиться к проекту</span>
                                </button>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Star rating (input)</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="min-width: 100%;">
                        <!--start ui content-->
                        <span class="star-rating star-rating--max">
                        <form class="star-rating__container" action="" method="post">
                            <input
                                    id="starrateTestOne"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="5"
                            >
                            <label for="starrateTestOne">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestTwo"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="4"
                            >
                            <label for="starrateTestTwo">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestThree"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="3"
                            >
                            <label for="starrateTestThree">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFour"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="2"
                            >
                            <label for="starrateTestFour">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFive"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="1"
                            >
                            <label for="starrateTestFive">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>
                        </form>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 5stars)</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="min-width: 100%;">
                        <!--start ui content-->
                        <span class="star-rating-wrapper js-star-rating">
                        <span class="star-rating-value">4.8</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 1stars)</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="min-width: 100%;">
                        <!--start ui content-->
                        <span class="star-rating-wrapper star-rating-wrapper--mobile-frame js-star-rating">
                        <span class="star-rating-value">2.2</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <h3 class="text-center">Star rating (static: desk - 1stars/ mob - 1stars)</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="min-width: 100%;">
                        <!--start ui content-->
                        <span class="star-rating-wrapper star-rating-wrapper--frame">
                        <span class="star-rating-value">3.5</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>

        <h3 class="text-center">Requests status</h3>
        <div class="container-ui">
            <div class="col-ui">
                <div class="row-ui ">
                    <div class="flex-v-center" style="min-width: 100%;">
                        <!--start ui content-->
                        <div class="card-list card-list-column">
                            <a href="javascript:;" class="card card--pa-default">
                            <span class="card__view">
                                <picture>
                                    <source srcset="img/card-photo-events.webp" type="image/webp">
                                    <img loading="lazy" src="img/card-photo-events.png" class="image" width="260" height="190" alt="Фото карточки">
                                </picture>
                            </span>
                                <span class="card__descr">
                                <span class="card__title-block">
                                    <span class="card__title-block-name">test1</span>
                                    <span class="card__title-block-subtitle">test1</span>
                                </span>
                                <span class="card__action">
                                    <span class="card__action-data">
                                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                                    </span>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-created">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка создана</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-approved">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка подтверждена</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-done">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка исполнена</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-declined">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка отклонена</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                            </span>
                            </a>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>