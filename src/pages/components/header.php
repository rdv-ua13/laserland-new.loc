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
                        src="img/logo.svg"
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
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#"></use>
                    </svg>
                    <span>+7 (3022) 28-42-58</span>
                </a>
                <div class="header-contacts__address">Краснодар, ул. Уральская, 79/1, СБС Мегамолл</div>
            </div>
            <div class="header-social social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#soc-wa"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Вконтакте">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#soc-vk"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <svg class="icon icon-fill icon-md">
                                <use href="img/sprite.svg#soc-tg"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header-mobile-menu">
                <button
                        class="btn-reset burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#menu"></use>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-close" data-menu-close>
            <svg class="icon icon-fill">
                <use href="img/sprite.svg#cross"></use>
            </svg>
        </div>

        <div class="mobile-menu__item mobile-menu-catalog">
            <button
                    class="btn-reset btn btn-md btn-secondary menu-catalog-spoiler"
                    aria-label="Открыть меню"
                    aria-expanded="false"
                    data-catalog-spoiler
                    data-overlay-transparent
            >
                <svg class="icon icon-fill btn__icon">
                    <use href="img/sprite.svg#menu"></use>
                </svg>
                <span class="btn__text">Каталог</span>
            </button>
        </div>

        <ul class="list-reset mobile-menu-list">
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">О компании</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Доставка и оплата</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Блог</a></li>
            <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;">Контакты</a></li>
        </ul>

        <div class="mobile-menu-footer">
			<?/* todo - стилизовать модалки */?>
            <div class="mobile-menu__item mobile-menu-login">
                <button class="btn-reset btn btn-md btn-primary" data-fancybox data-src="#modal-auth">
                    <span class="btn__text">Войти</span>
                </button>
                <button class="btn-reset btn btn-md btn-primary" data-fancybox data-src="#modal-reg">
                    <span class="btn__text">Регистрация</span>
                </button>
            </div>

            <div class="mobile-menu__item">
                <a class="mobile-menu-contacts" href="tel:+88005553829">
                    <span class="mobile-menu-contacts__num fz-subtitle">8 800 555-38-29</span>
                    <span class="mobile-menu-contacts__caption link-secondary fz-caption">Звонок по РФ бесплатный</span>
                </a>
            </div>
        </div>
    </div>

    <main class="main">