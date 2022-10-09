<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="container">
    <div class="breadcrumbs">
        <a href="/">Главная</a>
        <div class="divider"></div>
        <a href="/">О компании</a>
        <div class="divider"></div>
        <span>Контакты</span>
    </div>

    <h1>Контакты</h1>

    <div class="contacts-row">

        <div class="contacts-list">
            <div class="contacts-list__item">
                <div class="contacts-list__item-place">Центральный офис</div>
                <div class="contacts-list__item-address">
                    <?echo nl2br(\Bitrix\Main\Config\Option::get( "askaron.settings", "UF_OFFICE"));?>
                </div>
            </div>
            <div class="contacts-list__item">
                <div class="contacts-list__item-place">Горячая линия</div>
                <div class="contacts-list__item-address">
                    <a href="tel:<?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_HOT_PHONE");?>"><?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_HOT_PHONE");?></a><br>
                    <?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_HOT_TIME");?>
                </div>
            </div>
            <div class="contacts-list__item">
                <div class="contacts-list__item-place">Партнерство</div>
                <div class="contacts-list__item-address">
                    <a href="tel:<?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_PART_PHONE");?>"><?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_PART_PHONE");?></a><br>
                    <?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_PART_TIME");?>
                </div>
            </div>
            <div class="contacts-list__item">
                <div class="contacts-list__item-place">Работа в SPAR</div>
                <div class="contacts-list__item-address">
                    <a href="tel:<?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_WORK");?>"><?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_WORK");?></a><br>
                    <?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_WORK_TIME");?>
                </div>
            </div>
        </div>

        <div class="hero hero-contacts">
            <div class="hero-title">У вас есть вопросы и предложения?</div>
            <button class="btn btn-gray">Напишите нам</button>
            <div class="hero-bottom">
                или на почту <a href="mailto:<?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_EMAIL");?>"><?echo \Bitrix\Main\Config\Option::get( "askaron.settings", "UF_EMAIL");?></a>
            </div>
        </div>

    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>