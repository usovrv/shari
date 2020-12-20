<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
	"mlife:asz.basket.full", 
	"checkout", 
	array(
		"FINDUSER" => "Y",
		"FINDEMAIL" => "Y",
		"NOEMAIL" => "USER",
		"LOGIN" => "PREFIX",
		"LOGIN_PREFIX" => "user_",
		"PROP_NAME" => "NAME",
		"PROP_EMAIL" => "EMAIL",
		"PROP_LOCATION" => "REGION",
		"GROUP_ADMIN" => array(
			0 => "1",
		),
		"NOEMAIL_USER" => "1",
		"FINDEMAIL_NOAUT" => "Y",
		"ORDERPRIV" => "N",
		"ORDERPRIV_USERID" => "1",
		"ORDERPRIV_GROUP" => array(
		),
		"GROUP_ADDUSER" => array(
		),
		"QUANT" => "N",
		"COMPONENT_TEMPLATE" => "checkout",
		"ZAKAZ" => "N",
		"ZAKAZ_TEXT" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>