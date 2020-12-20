<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?//echo'<pre>';print_r($arResult);echo'</pre>';?>
<script type="text/javascript">
$("a.fancyDetail, a.galerytovar").fancybox({
    //"padding": 0,
    "margin": 50,
    "titleShow": true,
    helpers: {
        title: {
            type: 'float'
        },
        thumbs: {
            width: 50,
            height: 50
        }
    }
});
</script>

<div class="catalogElement prod<?=$arResult["ID"]?>">
    <div class="row">
        <div class="col-lg-4 col-xl-4 wow fadeInLeft image">
            <?if(isset($arResult["IMAGE"]["SRC"])){?>
            <a href="<?=$arResult["IMAGE"]["BIG_SRC"]?>" class="galerytovar" rel="galery"><img
                    alt="<?=$arResult["NAME"]?>" src="<?=$arResult["IMAGE"]["SRC"]?>" /></a>
            <?}else{?>
            <img src="<?=$templateFolder?>/images/no_photo.jpg" />
            <?}?>
        </div>
        <div class="col-lg-8 col-xl-8 wow fadeInRight">
            <h1 class="heading-2"><?=$arResult["NAME"]?></h1>
            <p class="big"><?=$arResult["DETAIL_TEXT"]?></p>
            <div class="harakt">
                <?if($arResult["DISPLAY_PROPERTIES"]["YANDEX_DESC"]["VALUE"]["TEXT"]){?>
                <?=htmlspecialcharsBack($arResult["DISPLAY_PROPERTIES"]["YANDEX_DESC"]["VALUE"]["TEXT"])?>
                <?}else{?>
                <table class="haraktAll">
                    <?foreach($arResult["DISPLAY_PROPERTIES"] as $prop){?>
                    <tr>
                        <td class="name"><?=$prop['NAME']?></td>
                        <td>
                            <?if(is_array($prop['DISPLAY_VALUE']) && count($prop['DISPLAY_VALUE']>0)){?>
                            <?
							echo implode(',',$prop['DISPLAY_VALUE']);
							?>
                            <?}else{?>
                            <?=trim($prop['DISPLAY_VALUE'])?>
                            <?}?>
                        </td>
                    </tr>
                    <?}?>
                </table>
                <?}?>
            </div>
            <div class="avalible<?if($arResult[" QUANT"]<=0){?> zakaz
                <?}?>">
                <?if($arResult["QUANT"]>0){?><?=GetMessage("MLIFE_ASZ_CATALOG_SECTION_E_1")?>
                <?}else{?><?=GetMessage("MLIFE_ASZ_CATALOG_SECTION_E_2")?>
                <?}?>
            </div>
            <div class="price heading-6">
                <?=GetMessage("MLIFE_ASZ_CATALOG_ELEMENT_T_1")?>:
                <?if($arResult["PRICE"][$arResult["ID"]]["DISPLAY"]){?>
                <?if(isset($arResult['DISCOUNT'][$arResult["ID"]]['DISCOUNT']) && $arResult['DISCOUNT'][$arResult["ID"]]['DISCOUNT']>0){?>
                <div class="oldPrice"><?=$arResult["PRICE"][$arResult["ID"]]["DISPLAY"]?></div>
                <div class="newPrice">
                    <?=\Mlife\Asz\CurencyFunc::priceFormat($arResult['DISCOUNT'][$arResult["ID"]]['DISCOUNT_PRICE'])?>
                </div>
                <?}else{?>
                <?=$arResult["PRICE"][$arResult["ID"]]["DISPLAY"]?>
                <?}?>
                <?}else{?>
                <?=GetMessage("MLIFE_ASZ_CATALOG_ELEMENT_T_2")?>
                <?}?>
            </div>
            <div class="text"><?=$arResult["PREVIEW_TEXT"]?></div>
            <?if($arResult["PRICE"][$arResult["ID"]]["VALUE"]>0){?>
            <div class="addToCart">
                <a href="#" data-id="<?=$arResult["ID"]?>"
                    class="button button-primary button-nuka"><?=GetMessage("MLIFE_ASZ_CATALOG_SECTION_T_2")?></a>
            </div>
            <?}?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-12 wow fadeInLeft image">
            <?$APPLICATION->IncludeComponent(
				"sprint.editor:blocks",
				".default",
				Array(
					"ELEMENT_ID" => $arResult["ID"],
					"IBLOCK_ID" => $arResult["IBLOCK_ID"],
					"PROPERTY_CODE" => "CONTENT_POLYA",
				),
				$component,
				Array(
					"HIDE_ICONS" => "Y"
				)
			);?>
        </div>
    </div>


    <div class="descrBlock">
    </div>

</div>