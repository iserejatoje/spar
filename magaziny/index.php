<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Магазины");
?>

<div class="container">
    <div class="breadcrumbs">
        <a href="/">Главная</a>
        <div class="divider"></div>
        <span>Магазины</span>
    </div>

    <h1>Карта магазинов</h1>
</div>

<div class="maxi-map">
    <? include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/inc/map.php'); ?>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>