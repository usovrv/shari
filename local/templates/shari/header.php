<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="ru">

<head>
    <title>
        <? $APPLICATION->ShowTitle() ?>
    </title>
    <? $APPLICATION->ShowHead(); ?>
    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <style>
    .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
        display: block;
    }
    </style>
</head>

<body>
    <div id="panel">
        <? $APPLICATION->ShowPanel(); ?>
    </div>

    <div class="page">
        <header class="section page-header" id="home">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-promotion rd-navbar-6 context-dark <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>rd-navbar--is-stuck rd-navbar-red<?endif;?>"
                    data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed"
                    data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static"
                    data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px"
                    data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-auto-height="false"
                    data-xl-auto-height="false" data-xxl-auto-height="false">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark"
                                            src="<?=SITE_TEMPLATE_PATH?>/images/logo-default-christmas-444x112.png"
                                            alt="" width="222" height="56" /><img class="brand-logo-light"
                                            src="<?=SITE_TEMPLATE_PATH?>/images/logo-inverse-christmas-444x112.png"
                                            alt="" width="222" height="56" /></a>
                                </div>
                                <?$APPLICATION->IncludeComponent(
	"mlife:asz.basket.small",
	"cart",
Array()
);?>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <?$APPLICATION->IncludeComponent("bitrix:menu","main",Array(
                                    "ROOT_MENU_TYPE"=>"top",
                                    "MAX_LEVEL"=>"1",
                                    "CHILD_MENU_TYPE"=>"top",
                                    "USE_EXT"=>"Y",
                                    "DELAY"=>"N",
                                    "ALLOW_MULTI_SELECT"=>"Y",
                                    "MENU_CACHE_TYPE"=>"N",
                                    "MENU_CACHE_TIME"=>"3600",
                                    "MENU_CACHE_USE_GROUPS"=>"Y",
                                    "MENU_CACHE_GET_VARS"=>""
                                    )
                                    );?>
                                </div>
                                <?$APPLICATION->IncludeComponent(
	"mlife:asz.basket.small",
	"cart",
Array()
);?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Swiper-->
        </header>
        <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
        <section class="section novi-bg novi-bg-img section-md bg-default novi-bg novi-bg-img" id="about">
            <div class="container">
                <div class="row row-40">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "",
                        Array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0"
                        )
                    );?>
                    <?endif;?>