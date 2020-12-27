<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<ul class="rd-navbar-nav">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<? if ($APPLICATION->GetCurDir() == "/"):?>
	<?if($arItem["SELECTED"]):?>
		<li class="rd-nav-item active"><a href="<?=$arItem["LINK"]?>" class="rd-nav-link selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="rd-nav-item"><a href="<?=$arItem["LINK"]?>" class="rd-nav-link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	<?else:?>
		<?if($arItem["SELECTED"]):?>
		<li class="rd-nav-item active"><a href="<?=str_replace('#','/#',$arItem["LINK"]) ?>" class="rd-nav-link selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li class="rd-nav-item"><a href="<?=str_replace('#','/#',$arItem["LINK"]) ?>" class="rd-nav-link"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	<?endif;?>

	
<?endforeach?>

</>
<?endif?>