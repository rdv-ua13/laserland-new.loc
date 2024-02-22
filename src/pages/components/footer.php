    </main>

    <footer class="footer">
		<?/* if(!strpos($_SERVER["REQUEST_URI"], "registration.php") && !strpos($_SERVER["REQUEST_URI"], "auth.php")) : */?>
            <div class="footer__head">
                <div class="container">
                    <div class="row">
                        <div class="col col-6 col-md-4 col-lg-2">
                            <ul class="list-reset footer__head-list">
                                <li><a href="javascript:;">Экодела</a></li>
                                <li><a href="javascript:;">Организаторы</a></li>
                                <li><a href="javascript:;">Аналитика</a></li>
                            </ul>
                        </div>
                        <div class="col col-6 col-md-4 col-lg-2">
                            <ul class="list-reset footer__head-list">
                                <li><a href="javascript:;">О Фонде</a></li>
                                <li><a href="javascript:;">Контакты</a></li>
                                <li><a href="javascript:;">Реквизиты</a></li>
                            </ul>
                        </div>
                        <div class="col col-12 col-md-4 col-lg-3">
                            <div class="footer__head-contacts">
                                <div class="footer__head-contacts-item">
                                    <div class="footer__head-title">Мы в социальных сетях</div>
                                    <ul class="list-reset social">
                                        <li class="social__item">
                                            <a
                                                    href="javascript:;"
                                                    target="_blank"
                                                    class="social__link social__link--vk"
                                                    aria-label="Наша страничка во Вконтакте"
                                            >
                                                <svg class="icon social__icon">
                                                    <use href="img/sprite.svg#soc-logo-vk"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a
                                                    href="javascript:;"
                                                    target="_blank"
                                                    class="social__link social__link--ok"
                                                    aria-label="Наша страничка в Одноклассниках"
                                            >
                                                <svg class="icon social__icon">
                                                    <use href="img/sprite.svg#soc-logo-ok"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a
                                                    href="javascript:;"
                                                    target="_blank"
                                                    class="social__link social__link--fb"
                                                    aria-label="Наша страничка в Фэйсбук"
                                            >
                                                <svg class="icon social__icon">
                                                    <use href="img/sprite.svg#soc-logo-fb"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer__head-contacts-item">
                                    <div class="footer__head-title">Почта для связи с командой</div>
                                    <a href="javascript:;" class="link link--green footer__head-contacts-link">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#mail"></use>
                                        </svg>
                                        <span>info@voleco.ru</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-lg-5">
                            <div class="footer__head-subscribe">
                                <div class="footer__head-title">Почта для связи с командой</div>
                                <form id="" class="form-subscribe" method="" action="javascript:;">
                                    <div class="form-subscribe__field">
                                        <input
                                                class="input-reset form-subscribe__input"
                                                type="text"
                                                name="Подписаться"
                                                placeholder="Введите электронную почту..."
                                        >
                                    </div>
                                    <div class="form-subscribe__field">
                                        <div class="custom-checkbox">
                                            <input class="custom-checkbox__input" type="checkbox" checked>
                                            <div class="custom-checkbox__agree">
                                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с <a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-subscribe__field">
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Подписаться</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?/* endif; */?>
        <div class="footer__bottom <? if(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>footer__bottom-authreg<? endif; ?>">
            <div class="container">
                <ul class="list-reset footer__bottom-list">
                    <li><?= date('Y'); ?> &#169; <a href="javascript:;">VOLECO.RU</a></li>
					<? if(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
                        <li><a href="javascript:;">Обработка персональных данных</a></li>
                        <li><a href="javascript:;">Правила использования сайта</a></li>
					<? else : ?>
                        <li><a href="javascript:;">Политика конфиденциальности</a></li>
                        <li><a href="javascript:;">Публичная оферта о добровольном пожертвовании</a></li>
                        <li><a href="javascript:;">Правила использования сайта</a></li>
                        <li>produced by <a href="javascript:;">STICKYHANDS</a></li>
					<? endif; ?>
                </ul>
            </div>
        </div>
    </footer>

	<? if(strpos($_SERVER["REQUEST_URI"], "lk-org-profile-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-project-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-task-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-task-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-petition-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-contact-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-about-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-additional-settings.php")) : ?>
        <div class="page-content-settings-bar">
            <div class="container page-content-settings-bar__container">
                <div class="page-content-settings-bar__action">
                    <? if(strpos($_SERVER["REQUEST_URI"], "lk-org-profile-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-task-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-petition-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-contact-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-about-settings.php")
                    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-additional-settings.php")) : ?>
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Сохранить</span>
                        </button>
					<? elseif(strpos($_SERVER["REQUEST_URI"], "lk-org-create-project-settings.php")) : ?>
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Сохранить и создать экодело в проекте</span>
                        </button>
                        <button class="btn-reset btn btn--fill btn--gray">
                            <span class="btn__text">Сохранить</span>
                        </button>
					<? elseif(strpos($_SERVER["REQUEST_URI"], "lk-org-create-task-settings.php")) : ?>
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Сохранить</span>
                        </button>
                        <button class="btn-reset btn btn--fill btn--gray">
                            <span class="btn__text">Сохранить и создать новую задачу</span>
                        </button>
                    <? endif; ?>
                </div>
                <div class="page-content-settings-bar__cancel">
                    <button class="btn-reset btn btn--noframe">
                        <span class="btn__text">Отменить</span>
                    </button>
                </div>
            </div>
        </div>
	<? endif; ?>

	<?/* Вариант подключения скриптов без 'defer'
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>*/?>
</body>
</html>