<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("SPAR - Главная");
?>

<div class="container">
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sale_slider", 
	array(
		"COMPONENT_TEMPLATE" => "sale_slider",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "1",
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
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
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

<div class="container">
    <div class="modern">
        <h2>Каталог скидок</h2>
        <a href="" class="show-all"><span>Смотреть все</span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>
    </div>
    <div class="shop-products shop-products__frontpage">
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>

    </div>
</div>
<div class="container">
    <div class="modern">
        <h2>Новинки SPAR</h2>
        <a href="" class="show-all"><span>Смотреть все</span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>
    </div>

    <div class="shop-products shop-products__frontpage">
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
        <a href="#" class="product">
            <div class="product-data">
                <div class="pin">-30%</div>
                <div class="date">до 22.10</div>
            </div>
            <div class="product-image">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/barni.jpg" width="1024" height="625" decoding="async" alt="">
            </div>
            <div class="product-title">
                ПЕЧЕНЬКА<br/>
                Бисквит с кусочками oreo 180 гр
            </div>
            <div class="product-price">
                <div class="product-price__current">
                    900 <svg width="10" height="14"><use xlink:href="#tenge"></use></svg>
                </div>
                <div class="product-price__old">5320 <svg width="8" height="11"><use xlink:href="#tenge-xs"></use></svg></div>
            </div>
        </a>
    </div>
</div>

<div class="sale-slider">
    <div class="container">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"sale", 
	array(
		"COMPONENT_TEMPLATE" => "sale",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "1",
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
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
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
</div>
<div class="container">
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/inc/production.php');
    ?>
</div>

<div class="media-block">
    <div class="container">
        <div class="modern">
            <h2>Медиа</h2>
            <a href="/media/" class="show-all"><span>Смотреть все</span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>
        </div>

        <div class="media-hero">
            <div class="picture">
                <img decoding="async" loading="lazy" src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/media.jpg" width="601" height="400" alt="">
            </div>

            <div class="media-welcome">
                <div class="title">Дебют в Казахстане</div>
                <div class="description">Открытие первого SPAR  в Алматы</div>
                <a href="#" class="btn btn-lime">Перейти!</a>
            </div>
        </div>

        <div class="media-quick">
            <a href="#" class="card">
                <div class="image">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/media-quick.jpg" loading="lazy" width="181" height="150" decoding="async" alt="Доставка продуктов из магазинов">
                </div>
                <div class="content">
                    <div class="tags">
                        <div class="tag tag--gray">Новости</div>
                    </div>
                    <div class="title">Доставка продуктов из магазинов</div>
                    <div class="date">14 июня 2022</div>
                </div>
            </a>
            <a href="#" class="card">
                <div class="image">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/media-quick.jpg" loading="lazy" width="181" height="150" decoding="async" alt="Доставка продуктов из магазинов">
                </div>
                <div class="content">
                    <div class="tags">
                        <div class="tag tag--gray">Новости</div>
                        <div class="tag tag--rose">#forkids</div>
                    </div>
                    <div class="title">Доставка продуктов из магазинов</div>
                    <div class="date">14 июня 2022</div>
                </div>
            </a>
            <a href="#" class="card">
                <div class="image">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/media-quick.jpg" loading="lazy" width="181" height="150" decoding="async" alt="Доставка продуктов из магазинов">
                </div>
                <div class="content">
                    <div class="tags">
                        <div class="tag tag--sky">#for health</div>
                    </div>
                    <div class="title">Доставка продуктов из магазинов</div>
                    <div class="date">14 июня 2022</div>
                </div>
            </a>
        </div>

    </div>
</div>

<div class="container">
    <h2>Адреса магазинов</h2>
</div>

<div class="mini-map">
    <? include($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/inc/map.php'); ?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>