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

<div class="front-page__slider">
    <div class="large-slider swiper-container">
        <div class="swiper-wrapper">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                $picture = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]['ID'],
                    Array("width" => 1180, "height" => 440),
                    BX_RESIZE_IMAGE_PROPORTIONAL, false, false, false, 90);
                ?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <img class="preview_picture"
                         src="<?=$picture["src"]?>"
                         width="1180"
                         height="440"
                         decoding="async"
                         alt="" />
                </a>
            <?endforeach;?>

        </div>
    </div>
    <div class="large-pagination swiper-pagination"></div>
</div>