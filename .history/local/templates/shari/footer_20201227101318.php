<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
</section>
</div>
</div>
<?endif;?>
<!-- Footer-->
<footer class="section novi-bg novi-bg-img footer-christmas section-md section-md-2 bg-primary" id="ask-question">
    <div class="container">
        <div
            class="row row-fix row-50 justify-content-center justify-content-xl-between align-items-xl-end flex-lg-row-reverse">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 wow fadeInLeft">
                <h4>Хотите задать вопрос?</h4>
                <?$APPLICATION->IncludeComponent(
	"altasib:feedback.form", 
	"footer_form", 
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
		"FORM_ID" => "1",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array(
			0 => "DEFAULT",
		),
		"JQUERY_EN" => "jquery2",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(
			0 => "PHONE",
		),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "ALX_DATE",
		"PROPERTY_FIELDS" => array(
			0 => "FIO",
			1 => "EMAIL",
			2 => "FEEDBACK_TEXT",
		),
		"PROPERTY_FIELDS_REQUIRED" => array(
			0 => "FIO",
			1 => "EMAIL",
			2 => "FEEDBACK_TEXT",
		),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(
			0 => "EMAIL",
		),
		"PROPS_AUTOCOMPLETE_NAME" => array(
			0 => "FIO",
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
		"COMPONENT_TEMPLATE" => "footer_form",
		"COLOR_THEME" => "",
		"COLOR_OTHER" => "#009688"
	),
	false
);?>

            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 wow fadeInRight">
                <h2>Контактная информация</h2>
                <p class="big">Не стесняйтесь связаться с нами, чтобы задать вопрос или оставить отзыв о нашем интернет
                    магазине.</p>
                <div class="info-group">
                    <div class="info-item">
                        <div class="info-header">
                            <svg width="28" height="37" viewBox="0 0 28 37" fill="none"
                                xmlns="https://www.w3.org/2000/svg">
                                <path
                                    d="M14 37C14.1701 37 14.316 36.9627 14.4375 36.8881C14.5833 36.8384 14.7049 36.7513 14.8021 36.627C14.9479 36.4778 15.7135 35.6448 17.099 34.128C18.5087 32.5864 20.0156 30.709 21.6198 28.496C23.224 26.2829 24.6823 23.9083 25.9948 21.372C27.3316 18.8108 28 16.461 28 14.3226C28 12.0847 27.5868 10.083 26.7604 8.31754C25.9583 6.55208 24.901 5.06015 23.5885 3.84173C22.276 2.59845 20.7812 1.65356 19.1042 1.00706C17.4271 0.335685 15.7257 0 14 0C12.2743 0 10.5729 0.323253 8.89583 0.969758C7.24306 1.61626 5.74826 2.56116 4.41146 3.80444C3.09896 5.02285 2.02951 6.52722 1.20312 8.31754C0.401042 10.083 0 12.0847 0 14.3226C0 16.4362 0.65625 18.7611 1.96875 21.2974C3.30556 23.8337 4.77604 26.2208 6.38021 28.4587C7.98438 30.6717 9.47917 32.5491 10.8646 34.0907C12.2743 35.6324 13.0521 36.4778 13.1979 36.627C13.2951 36.7513 13.4045 36.8384 13.526 36.8881C13.6719 36.9627 13.8299 37 14 37ZM9.33333 14.3226C9.33333 13.0047 9.78299 11.8858 10.6823 10.9657C11.6059 10.0208 12.7118 9.54839 14 9.54839C15.2882 9.54839 16.3819 10.0208 17.2812 10.9657C18.2049 11.8858 18.6667 13.0047 18.6667 14.3226C18.6667 15.6405 18.2049 16.7718 17.2812 17.7167C16.3819 18.6368 15.2882 19.0968 14 19.0968C12.7118 19.0968 11.6059 18.6368 10.6823 17.7167C9.78299 16.7718 9.33333 15.6405 9.33333 14.3226Z">
                                </path>
                            </svg>
                            <h5 class="info-title">Брянская обл., г. Жуковка ул. Кирова 38-А</h5>
                        </div>
                    </div>
                </div>
                <p class="rights"><span>&copy;&nbsp;</span><span
                        class="copyright-year"></span><span>.&nbsp;</span><span>Все права защищены</span></p>
            </div>
        </div>
    </div>
</footer>

</div>
<div class="snackbars" id="form-output-global"></div>
<?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/core.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.popup.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.inputmask.bundle.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/masonry.pkgd.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");
    ?>

</html>