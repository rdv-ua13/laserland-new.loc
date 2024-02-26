<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/VisueltPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/VisueltPro-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>              <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>  <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>     <!-- validate -->
    <script defer src="js/messages_ru.js"></script>         <!-- validate -->
    <script defer src="js/popper.js"></script>              <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>       <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>        <!-- fancybox -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <img
                        loading="lazy"
                        src="img/logo.png"
                        class="image"
                        width="115"
                        height="73"
                        alt="Логотип"
                    >
                </a>
            </div>
            <div class="header-menu">
                <a class="header-menu__item" href="javascript:;">Сценарии игры</a>
                <a class="header-menu__item" href="javascript:;">Цены</a>
                <a class="header-menu__item" href="javascript:;">Отзывы</a>
                <a class="header-menu__item" href="javascript:;">Контакты</a>
            </div>
            <div class="header-contacts">
                <a class="header-contacts__tel" href="tel:+73022284258">
                    <svg class="icon icon-fill desktop-only">
                        <use href="img/sprite.svg#fill-call-calling"></use>
                    </svg>
                    <span class="fz-sm">+7 (3022) 28-42-58</span>
                </a>
                <div class="header-contacts__address fz-caption">Краснодар, ул. Уральская, 79/1, СБС&nbsp;Мегамолл</div>
            </div>
            <div class="header-social social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#fill-soc-wa"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Вконтакте">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#fill-soc-vk"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#fill-soc-tg"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header-mobile-menu">
                <button
                        class="btn-reset btn btn-square burger switch-content"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon icon-stroke btn__icon icon-default">
                        <use href="img/sprite.svg#stroke-menu"></use>
                    </svg>
                    <svg class="icon icon-fill btn__icon icon-active">
                        <use href="img/sprite.svg#fill-cross"></use>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="container mobile-menu__container">
            <div class="mobile-menu-header">
                <div class="mobile-menu-header__logo">
                    <a class="logo" href="javascript:;">
                        <img
                                loading="lazy"
                                src="img/logo.png"
                                class="image"
                                width="115"
                                height="73"
                                alt="Логотип"
                        >
                    </a>
                </div>
                <div class="mobile-menu-header__contacts">
                    <a class="header-contacts__tel" href="tel:+73022284258">
                        <svg class="icon icon-fill desktop-only">
                            <use href="img/sprite.svg#fill-call-calling"></use>
                        </svg>
                        <span class="fz-sm">+7 (3022) 28-42-58</span>
                    </a>
                    <div class="header-contacts__address fz-caption">Краснодар, ул. Уральская, 79/1, СБС&nbsp;Мегамолл</div>
                </div>
                <div class="mobile-menu-header__close" data-menu-close>
                    <button
                            class="btn-reset btn btn-square burger switch-content"
                            aria-label="Закрыть меню"
                            aria-expanded="true"
                    >
                        <svg class="icon icon-fill btn__icon">
                            <use href="img/sprite.svg#fill-cross"></use>
                        </svg>
                    </button>
                </div>
            </div>

            <ul class="list-reset mobile-menu-list">
                <li><a class="mobile-menu__item" href="javascript:;">Сценарии игры</a></li>
                <li><a class="mobile-menu__item" href="javascript:;">Цены</a></li>
                <li><a class="mobile-menu__item" href="javascript:;">Отзывы</a></li>
                <li><a class="mobile-menu__item" href="javascript:;">Контакты</a></li>
            </ul>

            <div class="mobile-menu-footer">
                <div class="mobile-menu__social social">
                    <ul class="list-reset social__list">
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#fill-soc-wa"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Вконтакте">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#fill-soc-vk"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#fill-soc-tg"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mobile-menu__action">
                    <button class="btn-reset btn btn-primary">
                        <span class="btn__text">Забронировать</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <main class="main">