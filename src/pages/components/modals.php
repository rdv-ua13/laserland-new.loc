<?/* Позвоните мне */?>
<div id="modal_test" class="modal">
    <div class="modal__header">
        <div class="modal__title h3">Забронировать игру</div>
    </div>
    <div class="modal__content">
        <form class="modal__form" action="#" method="">
            <div class="modal__form-item success-msg">
                <div class="success-msg__view">
                    <svg class="icon icon-fill icon-xl icon-green">
                        <use href="img/sprite.svg#fill-checkbox-rec-1"></use>
                    </svg>
                </div>
                <div class="success-msg__descr">
                    <div class="success-msg__descr-item success-msg__title h3">Мы приняли вашу заявку</div>
                    <div class="success-msg__descr-item gray7-color">В ближайшее время с вами свяжется менеджер для уточнения деталей</div>
                    <div class="success-msg__descr-item"><a class="link link-tdu" href="javascript:;">Отправить еще одну</a></div>
                </div>
            </div>

            <div class="modal__form-item field-wrapper">
                <div class="titled-input">
                    <div class="input-title">Ваше имя</div>
                    <div class="input-wrapper has-icon-l">
                        <input
                                id="ui-input-search-example-1"
                                class="input-reset input"
                                type="text"
                                name=""
                                value=""
                                placeholder="Ваше имя"
                                autocomplete="off"
                        >
                        <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                            <svg class="icon icon-sm icon-fill icon-cyan">
                                <use href="img/sprite.svg#fill-profile-2user-fill"></use>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal__form-item field-wrapper">
                <div class="titled-input">
                    <div class="input-title">Номер телефона</div>
                    <div class="input-wrapper has-icon-l">
                        <input
                                id="ui-input-search-example-1"
                                class="input-reset input"
                                type="text"
                                name=""
                                value=""
                                placeholder="Номер телефона"
                                autocomplete="off"
                        >
                        <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                            <svg class="icon icon-sm icon-fill icon-cyan">
                                <use href="img/sprite.svg#fill-call-calling"></use>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal__form-item field-wrapper">
				<?/* change type to "submit" */?>
                <button class="btn-reset btn btn-primary" type="button" data-form-success>
                    <span class="btn__text">Забронировать игру</span>
                </button>
            </div>
            <div class="modal__form-item field-wrapper">
                <div class="gray7-color fz-caption">Отправляя заявку, я соглашаюсь с условиями <a class="link link-tdu" href="javascript:;">Политики конфиденциальности</a></div>
            </div>
        </form>
    </div>
</div>