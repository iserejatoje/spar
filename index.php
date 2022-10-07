<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("SPAR - Главная");
?>

<?$APPLICATION->IncludeComponent("bitrix:news", "frontpage_sale_slider", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"IBLOCK_ID" => "1",	// Инфоблок
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"USE_FILTER" => "N",	// Показывать фильтр
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_FOLDER" => "/aktsii/",	// Каталог ЧПУ (относительно корня сайта)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"SEF_URL_TEMPLATES" => array(
			"news" => "/aktsii/",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
<div class="front-page__slider container">
    <div class="large-slider swiper-container">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/slider.png" alt="" width="1181" height="441" decoding="async">
            </a>
            <a href="#" class="swiper-slide">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/slider.png" alt="" width="1181" height="441" decoding="async">
            </a>
            <a href="#" class="swiper-slide">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/frontpage/slider.png" alt="" width="1181" height="441" decoding="async">
            </a>
        </div>
    </div>
    <div class="large-pagination swiper-pagination"></div>
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
        </a>    </div>
</div>

<div class="sale-slider">
    <div class="container">
        <div class="modern">
            <h2>Акции</h2>
            <a href="" class="show-all"><span>Смотреть все</span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>
        </div>

        <div class="relative">
            <div class="swiper-container overflow">
                <div class="swiper-wrapper">

                    <a href="#" class="swiper-slide card">
                        <div class="image">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/slider_1.jpg" width="381" height="210" alt="" decoding="async" loading="lazy">
                        </div>
                    </a>
                    <a href="#" class="swiper-slide card">
                        <div class="image">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/slider_2.jpg" width="381" height="210" alt="" decoding="async" loading="lazy">
                        </div>
                    </a>
                    <a href="#" class="swiper-slide card">
                        <div class="image">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/slider_3.jpg" width="382" height="210" alt="" decoding="async" loading="lazy">
                        </div>
                    </a>
                    <a href="#" class="swiper-slide card">
                        <div class="image">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/slider_1.jpg" width="381" height="210" alt="" decoding="async" loading="lazy">
                        </div>
                    </a>

                </div>
            </div>

            <div class="swiper-navigation swiper-navigation__center">
                <button class="prev"><svg width="25" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m15.73 19-7-7 7-7" stroke="#101010" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
                <button class="next"><svg width="25" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m8.73 19 7-7-7-7" stroke="#101010" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="production">
        <h2>Свое производство</h2>

        <div class="tab-list" data-component="production-page">
            <button class="tab active">Пекарня</button>
            <button class="tab">Кулинария</button>
            <button class="tab">Кондитерка</button>
        </div>

        <div class="production-block">
            <div class="production-page">
                Каждый день выпекаем для вас свежий хлеб и ароматную выпечку. Для нашей хлебобулочной продукции мы пользуемся только проверенной рецептурой и самыми качественными ингредиентами

                <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/bread.jpg" alt="" width="375" height="250" decoding="async">
            </div>
            <div class="production-page" style="display: none;">
                Каждый день выпекаем для вас свежий хлеб и ароматную выпечку.
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/bread.jpg" alt="" width="375" height="250" decoding="async">

            </div>
            <div class="production-page" style="display: none;">
                Для нашей хлебобулочной продукции мы пользуемся только проверенной рецептурой и самыми качественными ингредиентами
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/about/bread.jpg" alt="" width="375" height="250" decoding="async">

            </div>
        </div>
    </div></div>

<div class="media-block">
    <div class="container">
        <div class="modern">
            <h2>Медиа</h2>
            <a href="" class="show-all"><span>Смотреть все</span> <svg width="20" height="13"><use xlink:href="#arrow"></use></svg></a>
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
    <style>
        footer {
            margin-top: 0 !important;
        }
    </style>

    <div class="map-wrapper">
        <div id="map" class="map" data-pin="svg/pin.svg"></div>
        <div class="container">
            <div class="badge">
                <form action="" autocomplete="off" method="get" enctype="application/x-www-form-urlencoded" class="search-form header-item">
                    <label class="search-label">
                        <input type="text" name="q" placeholder="Поиск по адресу" class="search-input form-input">
                        <button class="search-button">
                            <svg width="20" height="21" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.5a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-6 4a6 6 0 1 1 10.89 3.48l4.82 4.81a1 1 0 0 1-1.42 1.42l-4.81-4.82A6 6 0 0 1 2 8.5Z" fill="#B6BDC0"></path></svg>
                        </button>
                    </label>
                    <button class="map-filter__button" type="button">Фильтры <svg width="12" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.23.79 6.1 4.67 9.99.79a1 1 0 1 1 1.4 1.41L6.82 6.79a1 1 0 0 1-1.41 0L.8 2.2A1 1 0 0 1 .8.79a1.02 1.02 0 0 1 1.43 0Z" fill="#101010"/></svg></button>
                </form>
                <div class="scroll-inner" data-simplebar data-simplebar-auto-hide="false">
                    <div class="map-item">
                        <div class="shop-name">EUROSPAR</div>
                        <div class="shop-address">Алматы, ул. Абая, 156</div>
                        <div class="shop-time">9:00-23:00</div>
                    </div>
                    <div class="map-item">
                        <div class="shop-name">EUROSPAR</div>
                        <div class="shop-address">Алматы, ул. Абая, 156</div>
                        <div class="shop-time">9:00-23:00</div>
                    </div>
                    <div class="map-item">
                        <div class="shop-name">EUROSPAR</div>
                        <div class="shop-address">Алматы, ул. Абая, 156</div>
                        <div class="shop-time">9:00-23:00</div>
                    </div>
                    <div class="map-item">
                        <div class="shop-name">EUROSPAR</div>
                        <div class="shop-address">Алматы, ул. Абая, 156</div>
                        <div class="shop-time">9:00-23:00</div>
                    </div>
                    <div class="map-item">
                        <div class="shop-name">EUROSPAR</div>
                        <div class="shop-address">Алматы, ул. Абая, 156</div>
                        <div class="shop-time">9:00-23:00</div>
                    </div>
                    <div class="map-item">
                        <div class="shop-name">EUROSPAR</div>
                        <div class="shop-address">Алматы, ул. Абая, 156</div>
                        <div class="shop-time">9:00-23:00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>