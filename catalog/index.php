<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");
?>
<?$APPLICATION->IncludeComponent(
	"mlife:asz.multicatalog", 
	"super", 
	array(
		"IBLOCK_TYPE" => "mlife_asz_catalog",
		"IBLOCK_ID" => "6",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "10",
			1 => "",
		),
		"PAGE_ELEMENT_COUNT" => "9",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
			2 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "COLOR",
			1 => "DIAMETR",
			2 => "",
			3 => "",
		),
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PRICE" => array(
			0 => "2",
			1 => "",
		),
		"CACHE_GROUPS" => "N",
		"COMPONENT_TEMPLATE" => "super",
		"ZAKAZ" => "N",
		"PROPERTY_CODE_LABEL" => array(
			0 => "",
			1 => "",
		),
		"TOVAR_DAY" => array(
			0 => "",
			1 => "",
		),
		"USE_FILTER_SUPER" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_ID#/",
			"filter" => "#SECTION_ID#/filter_#FILTER_ID#/",
			"filtersection" => "filter_#FILTER_ID#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>