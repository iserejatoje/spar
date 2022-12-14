<?php
use \Bitrix\Main\Data\Cache;
\Bitrix\Main\Loader::includeModule('iblock');
$cache = Cache::createInstance();

$shops = [];

if ($cache->initCache(3600, 'shop', 'spar')) {
    $shops = $cache->getVars();
    $cache->output();
} elseif ($cache->startDataCache()) {

    $el = new CIBlockElement();
    $getList = $el->GetList(
        array('SORT' => 'ASC',),
        array('IBLOCK_ID' => IB_SHOPS, 'ACTIVE' => 'Y'),
        false,
        false,
        array(
            'ID',
            'IBLOCK_ID',
            'NAME',
            'PROPERTY_COORDINATES',
            'PROPERTY_TIME',
            'PROPERTY_ADDRESS'
        )
    );

    while ($ob = $getList->GetNextElement()) {
        $fields = $ob->GetFields();
        $shops[] = [
                'shop_id' => $fields['ID'],
                'name' => $fields['NAME'],
                'time' => $fields['PROPERTY_TIME_VALUE'],
                'coordinates' => $fields['PROPERTY_COORDINATES_VALUE'],
                'address' => $fields['PROPERTY_ADDRESS_VALUE']
        ];
    }
    $cache->endDataCache($shops);
}

?>
<script>
    let shopListData = <?=CUtil::PHPToJSObject($shops); ?>;
</script>

<style>
    footer {
        margin-top: 0 !important;
    }
</style>

<div class="map-wrapper">

    <div id="map" class="map"></div>

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
                <?
                foreach ($shops as $shop) {
                    $coordinates = explode(',', $shop['coordinates']);
                    ?>
                    <a href="#" rel="nofollow" class="map-item" data-lat="<?=$coordinates[0];?>" data-lng="<?=$coordinates[1];?>" data-shop="<?=$shop['shop_id'];?>">
                        <div class="shop-name"><?=$shop['name'];?></div>
                        <div class="shop-address"><?=$shop['address'];?></div>
                        <div class="shop-time"><?=$shop['time'];?></div>
                    </a>
                    <?
                }
                ?>
            </div>
        </div>
    </div>
</div>

