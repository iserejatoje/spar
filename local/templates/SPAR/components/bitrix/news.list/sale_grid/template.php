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

<div class="sale-grid">
    <?foreach($arResult["ITEMS"] as $arItem):?>

        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $picture = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]['ID'],
            Array("width" => 380, "height" => 210),
            BX_RESIZE_IMAGE_EXACT, false, false, false, 90);
        ?>

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <img class="preview_picture"
                 src="<?=$picture["src"]?>"
                 width="380"
                 height="210"
                 decoding="async"
                 alt="" />
        </a>
    <?endforeach;?>
</div>
