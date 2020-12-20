<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <h1 class="heading-2"><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_1")?></h1>
</div>

<div class="basketWrap gp_cart">
    <?if($_REQUEST['ajaxrefresh']==1){
global $APPLICATION;
$APPLICATION->restartBuffer();
}?>

    <?
if($arResult["SHOW_BASKET"] && !$arResult['ORDER_CREATE']){
?>
    <form method="post" id="orderForm" action="<?=$APPLICATION->GetCurPage(false)?>">
        <input type="hidden" name="ajaxrefresh" id="ajaxrefresh" value="" />
        <div class="bill">
            <div class="bill__header">
                <span>*************************************</span>
                <span class="bill__title">ОБЩАЯ СУММА ЧЕКА</span>
                <span>*************************************</span>
            </div>
            <div class="bill__body">
                <p>
                    <span class="bill__product-name">Товары</span><span
                        class="bill__product-price"><?=$arResult["ORDER"]["ITEMSUM_DISPLAY"]?></span>
                </p>
            </div>
            <div class="bill__divider"></div>
            <div class="bill__total">Итого: <span><?=$arResult["ORDER"]["ORDERSUM_DISPLAY"]?></span></div>
        </div>
        <div class="basketItems">

            <?foreach($arResult["BASKET_ITEMS"] as $item){?>
            <div class="b-cart__item" id="p<?=$item["ID"]?>">
                <div class="b-cart__column b-cart__column--photo">
                    <?//test($arResult["PROD"][$item["PROD_ID"]]["DETAIL_PICTURE"]);?>
                    <a href="<?=$arResult["PROD"][$item["PROD_ID"]]["DETAIL_PAGE_URL"]?>">
                        <?
						$img = CFile::ResizeImageGet($arResult["PROD"][$item["PROD_ID"]]["DETAIL_PICTURE"], array('width'=>100, 'height'=>100), BX_RESIZE_IMAGE_PROPORTIONAL, true);
						$arResult["PROD"][$item["PROD_ID"]]["IMG_SRC"] = $img["src"];
					?>
                        <img src="<?=$arResult["PROD"][$item["PROD_ID"]]["IMG_SRC"]?>" />
                    </a>
                </div>
                <div class="b-cart__column b-cart__column--name">
                    <div class="itemName">
                        <a href="<?=$arResult["PROD"][$item["PROD_ID"]]["DETAIL_PAGE_URL"]?>">
                            <?=$item["PROD_NAME"]?>
                        </a>
                    </div>
                    <div class="prodDesc">
                        <?=$item["PROD_DESC"]?>
                    </div>
                </div>
                <div class="b-cart__column b-cart__column--quant quant">
                    <div class="buttonPl">
                        <a href="javascript:void(0);" class="minus" data-id="<?=$item["ID"]?>" data-prod="<?=$item["PROD_ID"]?>"
                            data-min="<?=$arResult["PROD"][$item["PROD_ID"]]["MIN_QUANTITY"]?>">-</a>
                        <input type="text" data-id="<?=$item["ID"]?>" data-prod="<?=$item["PROD_ID"]?>" name="quant"
                            value="<?=intval($item["QUANT"])?>"
                            data-min="<?=$arResult["PROD"][$item["PROD_ID"]]["MIN_QUANTITY"]?>" />
                        <a href="javascript:void(0);" class="plus" data-id="<?=$item["ID"]?>" data-prod="<?=$item["PROD_ID"]?>"
                            data-min="<?=$arResult["PROD"][$item["PROD_ID"]]["MIN_QUANTITY"]?>">+</a>
                    </div>
                </div>
                <div class="b-cart__column b-cart__column--priceall">
                    <?$formatSum = number_format(str_replace(' ', '', $item["PRICE_DISPLAY_ALL"]), 0, ',', ' ');?>
                    <span><?=$formatSum?></span>
                </div>
                <div class="b-cart__column b-cart__column--delete">
                    <a href="javascript:void(0);" class="delete" data-id="<?=$item["ID"]?>" data-prod="<?=$item["PROD_ID"]?>">x</a>
                </div>
            </div>
            <?}?>
        </div>
        <div class="clear_both"></div>
        <?
	$price = explode(' руб', $arResult["ORDER"]["ITEMSUM_DISPLAY"]);
	$price[0] = str_replace(" ", "", $price[0]);
	if($price[0] < 200):?>
        <div class="price_message">Заказы не обрабатываются при общей сумме меньше 500 рублей</div>
        <?endif;?>
        <div class="clear"></div>
        <?if($tovarZakaz && $arParams["ZAKAZ"]=="Y" && strlen($arParams["ZAKAZ_TEXT"])>0){?>
        <p class="zakaz"><?=$arParams["ZAKAZ_TEXT"]?></p>
        <?}?>

        <div class="clear"></div>


        <h4 class="titleOrder"><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_12")?></h4>
        <?if(count($arResult["USERPROPS"])>0){?>
        <table class="userPropsList">
            <?foreach($arResult["USERPROPS"] as $prop){?>
            <?
			if($prop['CODE'] != 'PAYMENT_ID' && $prop['CODE'] != 'OPLATA'){
				if($prop["TYPE"]=='TEXT' || $prop["TYPE"]=='EMAIL'){?>
            <tr>
                <td class="label"><label for="user_<?=$prop['CODE']?>"><?=$prop['NAME']?>
                        <?if($prop["REQ"]=="Y") echo '<font style="color:red;">*</font>';?>
                    </label></td>
                <td class="field"><input type="text" name="user_<?=$prop['CODE']?>" id="user_<?=$prop['CODE']?>"
                        value="<?=$prop['VALUE']?>" /></td>
            </tr>
            <?}elseif($prop["TYPE"]=='TEXTAREA'){?>
            <tr>
                <td class="label"><label for="user_<?=$prop['CODE']?>"><?=$prop['NAME']?>
                        <?if($prop["REQ"]=="Y") echo '<font style="color:red;">*</font>';?>
                    </label></td>
                <td class="field"><textarea type="text" name="user_<?=$prop['CODE']?>"
                        id="user_<?=$prop['CODE']?>"><?=$prop['VALUE']?></textarea></td>
            </tr>
            <?}elseif($prop["TYPE"]=='LOCATION'){?>
            <tr>
                <td class="label"><label for="user_<?=$prop['CODE']?>"><?=$prop['NAME']?>
                        <?if($prop["REQ"]=="Y") echo '<font style="color:red;">*</font>';?>
                    </label></td>
                <td class="field">
                    <select type="text" name="user_<?=$prop['CODE']?>" id="user_<?=$prop['CODE']?>">
                        <?foreach($prop["VALUES"] as $key=>$val){?>
                        <option value="<?=$key?>" <?if($key==$prop["VALUE"]) echo ' selected="selected"' ;?>><?=$val?>
                        </option>
                        <?}?>
                    </select>
                </td>
            </tr>
            <?}
			}?>
            <?}?>
        </table>
        <?}?>
        <div class="clear"></div>
        <input type="hidden" name="orderfin" id="orderfin" value="" />
        <div class="errorsOrder">
            <?if(count($arResult['ORDER_ERROR'])>0){?>
            <?=implode(', ',$arResult['ORDER_ERROR'])?>
            <?}?>
        </div>
        <div class="buttons">
            <a href="javascript:void(0);" class="button button-primary button-nuka"><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_19")?></a>
        </div>
        <div class="privacy-policy__form-order">
            <p>Нажимая на кнопку, вы даете согласие на обработку своих персональных данных и соглашаетесь с <a
                    href="/privacy-policy.php" target="_blank">политикой конфиденциальности.</a></p>
        </div>
    </form>
    <?
}elseif($arResult['ORDER_CREATE']){?>
    <div class="textOrder">
        <p><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_20")?> <b><?=$arResult["ORDERID"]?></b>
            <?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_27")?> <?=date("d.m.Y")?>,
            <?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_21")?>. </p>
        <p><b><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_22")?>:</b> <?=$arResult["ORDER"]["ORDERSUM_DISPLAY"]?></p>
        <p><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_23")?></p>
        <p><b><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_24")?>:</b>
            <font style="color:red"><?=$arResult["ORDERID"]?></font>
            <br /><b><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_25")?>:</b>
            <font style="color:red"><?=$arResult["ORDERPASS"]?></font>
        </p>
        <?
	// $cl = "\\Mlife\\Asz\\Payment\\".$arResult['PAYMENT'][$arResult["ORDER"]["PAYMENT_ID"]]["ACTIONFILE"];
	// if($arResult['PAYMENT'][$arResult["ORDER"]["PAYMENT_ID"]]["ACTIONFILE"] && class_exists($cl)){
		// echo $cl::getPayButton($arResult["ORDER"]["PAYMENT_ID"]);
	// }
	?>
    </div>
    <?}else{?>
    <div class="errorBasket"><?=GetMessage("MLIFE_ASZ_BASKET_FULL_T_26")?></div>
    <?
}
?>
    <?if($_REQUEST['ajaxrefresh']==1){
die();
}?>
</div>
<?//echo '<pre style="font-size:12px;">';print_r($arResult); echo '</pre>';?>