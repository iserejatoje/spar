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

<div class="modern">
    <h2>Акции</h2>
    <a href="/aktsii/" class="show-all"><span>Смотреть все</span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>
</div>

<div class="relative">
    <div class="swiper-container overflow">
        <div class="swiper-wrapper">

            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                $picture = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]['ID'],
                    Array("width" => 380, "height" => 210),
                    BX_RESIZE_IMAGE_EXACT, false, false, false, 90);
                ?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="image">
                        <img class="preview_picture"
                             src="<?=$picture["src"]?>"
                             width="380"
                             height="210"
                             loading="lazy"
                             decoding="async"
                             alt="" />
                    </div>

                </a>
            <?endforeach;?>

        </div>
    </div>

    <div class="swiper-navigation swiper-navigation__center">
        <button class="prev"><svg width="25" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m15.73 19-7-7 7-7" stroke="#101010" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        <button class="next"><svg width="25" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m8.73 19 7-7-7-7" stroke="#101010" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
    </div>
</div>

