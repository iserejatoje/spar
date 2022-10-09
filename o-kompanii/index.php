<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>

<div class="container">
    <div class="breadcrumbs">
        <a href="/">Главная</a>
        <div class="divider"></div>
        <span>О компании</span>
    </div>

    <h1>О компании</h1>

    <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/spar.jpg" width="1180" height="440" class="br20" alt="Spar" decoding="async">

    <div class="text-left-side">
        <p>SPAR - известная во всем мире сеть супермаркетов. SPAR работает в 48 странах на четырех континентах. Магазины SPAR можно встретить в Европе, Индии, Австралии, Китае и даже в Африке.</p>
        <p>SPAR основан в 1932 году в Нидерландах Адриааном ван Веллом как добровольная сеть бакалейщиков. Это был ответ независимых ритейлеров появлению крупных торговых сетей в Европе.</p>
        <p>Сегодня SPAR — это крупнейшая в мире добровольная сеть розничной торговли продуктами питания, насчитывающая более 13 тысяч магазинов. Ежедневно более 370 000 наших сотрудников обеспечивают передовой сервис для 14 миллионов покупателей</p>
    </div>

    <div class="legend">
        <div class="legend-block br20">
            <img src="<?=SITE_TEMPLATE_PATH;?>/svg/icon.svg" alt="" width="110" height="105" class="spruce" decoding="async">
            <div class="legend-text">
                <p>
                    Начальное название магазина было DE SPAR, оно сложилось из первых букв девиза <b>«Door Eendrachtig Samenwerken Profiteren Allen Regelmatig»</b>, что переводится с нидерландского как «Все выигрывают от сотрудничества». Уже почти 90 лет компания SPAR следует этому принципу, открывая супермаркеты свежих продуктов по всему миру.
                </p>

                <p>
                    Вскоре название сократилось до <b>SPAR</b>, которое на нидерландском языке означает «ель» — изящное вечнозеленое растение, священное дерево европейских народов, символ долгой жизни. С самого начала изображение этого дерева было использовано в качестве символа сети
                </p>
            </div>
        </div>

        <div class="history-photos">
            <img class="history-photos__item" src="<?=SITE_TEMPLATE_PATH;?>/images/about/history_1.jpg" decoding="async" alt="" width="381" height="210">
            <img class="history-photos__item" src="<?=SITE_TEMPLATE_PATH;?>/images/about/history_2.jpg" decoding="async" alt="" width="381" height="210">
        </div>
    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/inc/production.php');
    ?>

    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "news_slider",
        array(
            "COMPONENT_TEMPLATE" => "news_slider",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => "3",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "DETAIL_PICTURE",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "STRICT_SECTION_CHECK" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SET_STATUS_404" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        ),
        false
    );?>

</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>