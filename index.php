<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет магазин");
?>
<!--Swiper-->
<section class="swiper-container swiper-slider swiper-slider-3 context-dark" data-loop="true">
    <div class="swiper-wrapper">
        <div class="swiper-slide" data-slide-bg="<?=SITE_TEMPLATE_PATH?>/images/landing-christmas-01-1920x1080.jpg">
            <div class="particles-js" id="particles-js-1"></div>
            <div class="swiper-slide-caption section-inset-27">
                <div class="container">
                    <div
                        class="row row-fix row-30 justify-content-between flex-md-row-reverse align-items-md-center align-items-xl-start">
                        <div class="col-sm-10 col-md-6 col-xl-7 col-xxl-7">
                            <div class="pl-md-3 pl-lg-0">
                                <h1 class="title-christmas" data-caption-animate="fadeInUp" data-caption-delay="100">
                                    <span><img src="<?=SITE_TEMPLATE_PATH?>/images/landing-christmas-02-195x182.png"
                                            alt="" width="195" height="182" />Ё</span>лочные украшения для всей семьи
                                </h1>
                                <!-- <p class="big" data-caption-animate="fadeInUp" data-caption-delay="250">Get
                                    unforgettable impressions from this year’s<br class="d-none d-xl-block">Christmas
                                    Event at NY Entertainment Center.</p> -->
                                <!-- <div class="countdown" data-caption-animate="fadeInUp" data-caption-delay="400" data-time="22 Aug 2020 14:00" data-format="dhms" data-type="until"></div> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-5 col-xxl-4">
                            <div class="box-form-2 novi-bg" data-caption-animate="fadeInRight" data-caption-delay="100">
                                <h4>Заказать звонок</h4>
                                <?$APPLICATION->IncludeComponent(
	"altasib:feedback.form", 
	"header_form", 
	array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_HREF_LINK" => "Y",
		"ADD_LEAD" => "N",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CATEGORY_SELECT_NAME" => "Выберите категорию",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "Y",
		"COLOR_SCHEME" => "BRIGHT",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "2",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array(
			0 => "DEFAULT",
		),
		"JQUERY_EN" => "N",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(
			0 => "PHONE",
		),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "NAME",
		"PROPERTY_FIELDS" => array(
			0 => "PHONE",
			1 => "NAME",
		),
		"PROPERTY_FIELDS_REQUIRED" => array(
			0 => "PHONE",
			1 => "NAME",
		),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(
		),
		"PROPS_AUTOCOMPLETE_NAME" => array(
			0 => "NAME",
		),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
			0 => "PHONE",
		),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"REQUIRED_SECTION" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "romus.us@yandex.ru",
		"SEND_IMMEDIATE" => "Y",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "Y",
		"SHOW_MESSAGE_LINK" => "Y",
		"SPEC_CHAR" => "N",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_INPUT_LABEL" => "",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "N",
		"WIDTH_FORM" => "100%",
		"COMPONENT_TEMPLATE" => "header_form",
		"COLOR_THEME" => "",
		"COLOR_OTHER" => "#009688"
	),
	false
);?>

                                <div class="unit unit-spacing-6 align-items-center">
                                    <div class="unit-left">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="https://www.w3.org/2000/svg">
                                            <path
                                                d="M15 0C12.9297 0 10.9863 0.400391 9.16992 1.20117C7.35352 1.98242 5.76172 3.05664 4.39453 4.42383C3.04688 5.77148 1.97266 7.35352 1.17188 9.16992C0.390625 10.9863 0 12.9297 0 15C0 17.0703 0.390625 19.0137 1.17188 20.8301C1.97266 22.6465 3.04688 24.2383 4.39453 25.6055C5.76172 26.9531 7.35352 28.0176 9.16992 28.7988C10.9863 29.5996 12.9297 30 15 30C17.0703 30 19.0137 29.5996 20.8301 28.7988C22.6465 28.0176 24.2285 26.9531 25.5762 25.6055C26.9434 24.2383 28.0176 22.6465 28.7988 20.8301C29.5996 19.0137 30 17.0703 30 15C30 12.9297 29.5996 10.9863 28.7988 9.16992C28.0176 7.35352 26.9434 5.77148 25.5762 4.42383C24.2285 3.05664 22.6465 1.98242 20.8301 1.20117C19.0137 0.400391 17.0703 0 15 0ZM15 4.6875C15.5078 4.6875 15.9473 4.87305 16.3184 5.24414C16.6895 5.61523 16.875 6.05469 16.875 6.5625C16.875 7.07031 16.6895 7.50977 16.3184 7.88086C15.9473 8.25195 15.5078 8.4375 15 8.4375C14.4922 8.4375 14.0527 8.25195 13.6816 7.88086C13.3105 7.50977 13.125 7.07031 13.125 6.5625C13.125 6.05469 13.3105 5.61523 13.6816 5.24414C14.0527 4.87305 14.4922 4.6875 15 4.6875ZM18.75 25.3125H11.25C10.9766 25.3125 10.752 25.2246 10.5762 25.0488C10.4004 24.873 10.3125 24.6484 10.3125 24.375C10.3125 24.1016 10.4004 23.877 10.5762 23.7012C10.752 23.5254 10.9766 23.4375 11.25 23.4375H14.0625V13.125H11.25C10.9766 13.125 10.752 13.0371 10.5762 12.8613C10.4004 12.6855 10.3125 12.4609 10.3125 12.1875C10.3125 11.9141 10.4004 11.6895 10.5762 11.5137C10.752 11.3379 10.9766 11.25 11.25 11.25H15C15.2734 11.25 15.498 11.3379 15.6738 11.5137C15.8496 11.6895 15.9375 11.9141 15.9375 12.1875V23.4375H18.75C19.0234 23.4375 19.248 23.5254 19.4238 23.7012C19.5996 23.877 19.6875 24.1016 19.6875 24.375C19.6875 24.6484 19.5996 24.873 19.4238 25.0488C19.248 25.2246 19.0234 25.3125 18.75 25.3125Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="unit-body">
                                        <p class="small">Нажимаю кнопку "Заказать", Вы соглашаетесь с политикой
                                            обработки данных</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Swiper Pagination-->
    <!-- <div class="swiper-pagination"></div> -->
    <!--Swiper Navigation-->
    <!-- <div class="swiper-button-prev">
            <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="https://www.w3.org/2000/svg">
              <path d="M10.3634 0L0 10L10.3634 20L14 16.4909L7.27327 10L14 3.50913L10.3634 0Z"></path>
            </svg>
          </div>
          <div class="swiper-button-next">
            <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="https://www.w3.org/2000/svg">
              <path d="M3.63664 0L14 10L3.63664 20L0 16.4909L6.72673 10L0 3.50913L3.63664 0Z"></path>
            </svg>
          </div> -->
</section>
</header>

<!-- About Our Event-->
<section class="section novi-bg novi-bg-img section-md bg-default novi-bg novi-bg-img" id="about">
    <div class="container">
        <div class="row row-40 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2>О нас</h2>
                <p class="big">Новый год – это самый волшебный, самый красивый, самый таинственный и веселый праздник!
                </p>
                <p class="big">Уже с начала декабря города начинают готовится к торжеству: улицы украшены разноцветными
                    огнями, на площадях вырастают величавые ёлки, в витринах магазинов мерцают новогодние гирлянды.
                    Создается ощущение сказки!
                </p>
                <a class="button button-primary button-nuka" href="/about/">Подробнее<span class="button-overlay"
                        style="top: 310.016px; left: 168.875px;"></span></a>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInLeft"><img
                    src="<?=SITE_TEMPLATE_PATH?>/images/landing-christmas-05-720x490.jpg" alt="" width="720"
                    height="490" />
            </div>
        </div>
    </div>
</section>

<!-- Testimonials-->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reviews"
	),
	false
);?>

<!-- Event Activities-->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"events", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "Content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "DATE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "events"
	),
	false
);?>


<!-- Images-->
<?$APPLICATION->IncludeComponent("bitrix:news.detail", "gallery_home", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_CODE" => "",	// Код новости
		"ELEMENT_ID" => "111",	// ID новости
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "7",	// Код информационного блока
		"IBLOCK_TYPE" => "Content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Страница",	// Название категорий
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "GALLERY",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

<!-- FAQ-->
<?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"faq", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "faq"
	),
	false
);*/?>

<!-- Google Map-->
<section class="section" id="contacts">
    <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8438a70cfdc402ae77114e343563abd86690c0dd410bffb3ca62ac39bdb4300d&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true">
    </script>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>