<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="section novi-section text-center">
    <div class="row no-gutters">
        <?
		foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["VALUE"] as $gallery):?>
        <?$img = CFile::ResizeImageGet($gallery, array('width'=>480, 'height'=>480), BX_RESIZE_IMAGE_EXACT , true);?>
        <div class="col-sm-6 col-lg-3 wow fadeInUp"><img class="img-wide" src="<?=$img["src"]?>" alt="" width="480"
                height="480" />
        </div>
        <?endforeach;
		?>
    </div>
</section>