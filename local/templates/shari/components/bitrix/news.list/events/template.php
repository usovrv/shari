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
<section class="section novi-bg novi-bg-img section-md section-md-10 bg-gray-100 position-relative" id="activities">
    <div class="particles-js" id="particles-js-4"></div>
    <div class="container position-relative">
        <div class="text-center wow fadeInUp">
            <h2><?=$arResult["NAME"];?></h2>
            <p class="big"><?=$arResult["DESCRIPTION"];?></p>
        </div>
        <div class="card-activity-group">
			<?$i=1;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
            <div class="card-activity row row-fix row-30 align-items-center justify-content-center wow fadeInUp <?if($i%2==0){echo 'card-activity-revers';}else{}?>"
                id="<?=$this->GetEditAreaId($arItem['ID']);?>">

                <div class="col-md-10 col-lg-6">
                    <?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>610, 'height'=>415), BX_RESIZE_IMAGE_EXACT, true);?>
                    <img class="card-activity-image" src="<?=$img["src"]?>" alt="" width="610" height="415" />
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="card-activity-body">
                        <h4 class="card-activity-title"><a href="#">
                                <?echo $arItem["NAME"];?>
                            </a></h4>
                        <p class="big card-activity-text"><?=$arItem["PREVIEW_TEXT"];?></p>
                        <div class="card-activity-details">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="https://www.w3.org/2000/svg">
                                <path
                                    d="M12 0.5C10.3438 0.5 8.78906 0.820312 7.33594 1.46094C5.88281 2.08594 4.60938 2.94531 3.51562 4.03906C2.4375 5.11719 1.57812 6.38281 0.9375 7.83594C0.3125 9.28906 0 10.8438 0 12.5C0 14.1562 0.3125 15.7109 0.9375 17.1641C1.57812 18.6172 2.4375 19.8906 3.51562 20.9844C4.60938 22.0625 5.88281 22.9141 7.33594 23.5391C8.78906 24.1797 10.3438 24.5 12 24.5C13.6562 24.5 15.2109 24.1797 16.6641 23.5391C18.1172 22.9141 19.3828 22.0625 20.4609 20.9844C21.5547 19.8906 22.4141 18.6172 23.0391 17.1641C23.6797 15.7109 24 14.1562 24 12.5C24 10.8438 23.6797 9.28906 23.0391 7.83594C22.4141 6.38281 21.5547 5.11719 20.4609 4.03906C19.3828 2.94531 18.1172 2.08594 16.6641 1.46094C15.2109 0.820312 13.6562 0.5 12 0.5ZM11.25 2H12.75V5H11.25V2ZM4.5 13.25H1.5V11.75H4.5V13.25ZM12.75 23H11.25V20H12.75V23ZM17.25 13.25H11.625L6.44531 6.35938L7.64062 5.44531L12.375 11.75H17.25V13.25ZM22.5 13.25H19.5V11.75H22.5V13.25Z">
                                </path>
                            </svg>
                            <p>Начало: <?=$arItem["PROPERTIES"]["DATE"]["VALUE"];?></p>
                        </div>
                    </div>
                </div>
			</div>
			<?$i++;?>
            <?endforeach;?>
        </div>
    </div>
</section>