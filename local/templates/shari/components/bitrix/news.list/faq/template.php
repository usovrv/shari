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
<section class="section novi-bg novi-bg-img section-md bg-default">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2><?=$arResult["NAME"];?></h2>
            <p class="big"><?=$arResult["DESCRIPTION"];?></p>
        </div>
        <div class="row row-xxl-50 row-40 offset-xl-top-72 justify-content-center justify-content-lg-start">
<?//test($arResult);?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
            <div class="col-md-10 col-lg-6 wow fadeInUp" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <h4><?echo $arItem["NAME"];?></h4>
                <p>
                    <?echo $arItem["PREVIEW_TEXT"];?>
                </p>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>