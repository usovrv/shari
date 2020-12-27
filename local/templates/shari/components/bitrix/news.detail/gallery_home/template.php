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

<div class="gallery">
        <?
		foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["VALUE"] as $gallery):?>
        <?$img = CFile::ResizeImageGet($gallery, array('width'=>480, 'height'=>480), BX_RESIZE_IMAGE_PROPORTIONAL , true);?>
        <div>
            <a data-fancybox="gallery" class="fancybox" rel="media-gallery" href="<?=$img["src"]?>">
                <img src="<?=$img["src"]?>" alt=""/>
            </a>
        </div>
        <?endforeach;
		?>
</div>