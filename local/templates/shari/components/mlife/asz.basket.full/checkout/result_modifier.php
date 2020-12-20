<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$arProductsID = array();
$key = 0;
foreach($arResult['BASKET_ITEMS'] as $ikey => $arItem)
{
    $arProductsID[] = $arItem['PROD_ID'];
}

$arSelect = array('ID', 'PREVIEW_PICTURE', 'PROPERTY_78');
$arFilter = array('IBLOCK_ID'=>12, 'ID'=>$arProductsID);
$rs = CIBlockElement::GetList(array(SORT=>"ASC"), $arFilter, false, false, $arSelect);
while($ar = $rs->GetNext()){
	
	if(strlen($ar['PROPERTY_78_VALUE']) > 0) $arResult['PROD'][$ar['ID']]['MIN_QUANTITY'] = $ar['PROPERTY_78_VALUE'];
	if(strlen($ar['PREVIEW_PICTURE']) > 0) {
		$arResult['PROD'][$ar['ID']]['PREVIEW_PICTURE'] = CFile::ResizeImageGet($ar['PREVIEW_PICTURE'], Array('width' => 60, 'height' => 60), BX_RESIZE_IMAGE_PROPORTIONAL, false);
	}
	$key++;
}
?>


