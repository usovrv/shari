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
<section class="section novi-bg novi-bg-img section-md section-md-9 bg-default" id="testimonials">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2><?=$arResult["NAME"];?></h2>
            <p class="big"><?=$arResult["DESCRIPTION"];?></p>
        </div>
        <div class="row row-30 justify-content-center wow fadeInUp" data-wow-delay=".03s">
            <?//test($arResult);?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
            <div class="col-sm-8 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="quote-christmas">
                    <div class="quote-christmas-body">
                        <q class="heading-6">
                            <?echo $arItem["PREVIEW_TEXT"];?>
                        </q>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="https://www.w3.org/2000/svg">
                            <path
                                d="M0.374058 18.9575C2.79449 15.5941 3.65893 7.64416 1.06561 1.22307L19.7376 0C20.3715 1.12114 20.2562 5.25918 14.7237 12.8422C7.80824 22.321 -2.04637 22.321 0.374058 18.9575Z"
                                fill="#1DC5A3"></path>
                        </svg>
                    </div>
                    <div class="quote-christmas-footer">
                        <div class="unit unit-spacing-md align-items-center">
                            <div class="unit-left">
                                <?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>74, 'height'=>74), BX_RESIZE_IMAGE_EXACT, true);?>
                                <img class="quote-christmas-image" src="<?=$img["src"]?>" alt="<?echo $arItem["
                                    NAME"];?>"
                                width="74" height="74" />
                            </div>
                            <div class="unit-body">
                                <h6 class="quote-christmas-name">
                                    <?echo $arItem["NAME"];?>
                                </h6>
                                <div class="quote-christmas-date small">
                                    <?
                                    $arParams["DATE_CREATE"]="j F Y";
                                    echo CIBlockFormatProperties::DateFormat($arParams["DATE_CREATE"], MakeTimeStamp($arItem["TIMESTAMP_X"], CSite::GetDateFormat()));
                                    ?>
                                    <?//=$arItem["TIMESTAMP_X"];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>