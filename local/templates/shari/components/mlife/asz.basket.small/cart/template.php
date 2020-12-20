<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<a class="mlfSmallcart1"  href="<?=SITE_DIR?>personal/basket/">
	<div class="header-cart">
		<div class="header-cart__ico">
			<svg>
				<use xlink:href="#cart">
				<svg viewBox="0 0 26 28" id="cart" xmlns="http://www.w3.org/2000/svg"><g data-name="Слой 2"><g data-name="Shape 1" class="ccls-1"><path class="ccls-2" d="M26 8.66v-.18h-.17L5.79 5.3V2.57a.35.35 0 0 0 0-.08v-.1h-.07L1.08.06a.78.78 0 0 0-.6 1.43l3.76 1.59v17A3.18 3.18 0 0 0 7 23.25a3.13 3.13 0 1 0 5.82 1.61 3.08 3.08 0 0 0-.43-1.58h7a3.09 3.09 0 0 0-.43 1.58 3.13 3.13 0 1 0 3.13-3.14H7.41a1.62 1.62 0 0 1-1.62-1.62V18a3.21 3.21 0 0 0 1.62.44h15.42A3.18 3.18 0 0 0 26 15.26V8.7a.07.07 0 0 0 0-.04zm-3.92 14.62a1.58 1.58 0 1 1-1.58 1.58 1.58 1.58 0 0 1 1.58-1.58zm-12.39 0a1.58 1.58 0 1 1-1.58 1.58 1.58 1.58 0 0 1 1.58-1.58zm14.75-8a1.63 1.63 0 0 1-1.62 1.63H7.41a1.62 1.62 0 0 1-1.62-1.62V6.86l18.66 2.58z" data-name="Shape 1"></path></g></g></svg>
				</use>
			</svg>
			<span class="header-cart__count"><?=$arResult["ORDER"]["CNT"]?></span>
		</div>
		<div class="header-cart__box">
			<span class="header-cart__title">Корзина</span>
			<span class="header-cart__price"><?=($arResult["ORDER"]["ITEMSUMFIN_DISPLAY"] > 0) ? $arResult["ORDER"]["ITEMSUMFIN_DISPLAY"] : 0 . ' руб.'?> </span>
		</div>	
	</div>
</a>

<?/*
<a class="mlfSmallcart" href="<?=SITE_DIR?>personal/basket/">
	<?if($arResult["ORDER"]["CNT"]>0){?>
		<div class="cart">Товаров на сумму: <?=$arResult["ORDER"]["ITEMSUMFIN_DISPLAY"]?> (<?=$arResult["ORDER"]["CNT"]?> шт.)</div>
	<?}else{?>
		<div class="cartempty"><?=GetMessage("MLIFE_ASZ_BASKET_SMALL_T_EMPTY")?></div>
	<?}?>
</a>
*/?>
<?if($_REQUEST['ajaxsmallbasket']!=1){?>
<script>
$(document).ready(function(){
	$(document).on("refreshBasket",".mlfSmallcart1",function(){
		$.ajax({
			url: '<?=$APPLICATION->GetCurPage(false)?>',
			data: {ajaxsmallbasket:'1'},
			dataType : "html",
			success: function (data, textStatus) {
				$('.mlfSmallcart1').html(data);
			}
		});
	});
});
</script>
<?}?>