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

<div class="container">
    <div class="breadcrumbs">
        <a href="/">Главная</a>
        <div class="divider"></div>
        <span>Медиа</span>
    </div>

    <h1>Новости</h1>

    <div class="news-cards news-grid">

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $picture = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]['ID'],
                Array("width" => 1180, "height" => 440),
                BX_RESIZE_IMAGE_PROPORTIONAL, false, false, false, 90);
            ?>

            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="image">
                    <img src="<?=$picture["src"]?>"
                         width="380"
                         height="210"
                         decoding="async"
                         alt="" />
                </div>
                <div class="title"><?=$arItem['NAME'];?></div>
                <div class="date"><?=getHumanDate($arItem['TIMESTAMP_X']);?></div>
            </a>

        <?endforeach;?>

    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>

</div>
