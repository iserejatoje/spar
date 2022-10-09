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
        <a href="/aktsii/">Акции</a>
        <div class="divider"></div>
        <span><?=$arResult['NAME'];?></span>
    </div>

    <h1><?=$arResult['NAME'];?></h1>

    <?
    $picture = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]['ID'],
        Array("width" => 880, "height" => 490),
        BX_RESIZE_IMAGE_PROPORTIONAL, false, false, false, 90)
    ?>

    <img src="<?=$picture["src"]?>" alt="" decoding="async" class="br20">

    <div class="sale-details">
        <div class="sale-period">Период акции: <?=getHumanDate($arResult['PROPERTIES']['SALE_FROM']['VALUE']);?> - <?=getHumanDate($arResult['PROPERTIES']['SALE_TO']['VALUE']);?></div>

        <div class="sale-steps">
            <?
            echo $arResult['PROPERTIES']['STEPS']['~VALUE']['TEXT'];
            ?>
            <!--            <div class="step">-->
            <!--                <button class="btn btn-lime">Зарегистрируй чек</button>-->
            <!--            </div>-->
        </div>

        <div class="sale-description">
            <?= $arResult['DETAIL_TEXT'];?>
        </div>

        <div class="sale-bottom">
            <a href="#">Полные правила акции</a>
            <a href="#">Список победителей</a>
        </div>
    </div>

</div>