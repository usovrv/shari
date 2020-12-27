<?
if ($_SERVER['DOCUMENT_URI'] == "/404.php") {
    $_SERVER['REQUEST_URI'] = $_SERVER['DOCUMENT_URI'];
}
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");
?>

<div class="b-default">
	<div class="wrapper">
		<div class="b-default__main">
			<h1><?$APPLICATION->ShowTitle(false);?></h1>
		</div>
		<div class="clear">1</div>
	</div>	
</div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>