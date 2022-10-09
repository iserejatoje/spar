<?php
if( !defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) die();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$APPLICATION->ShowTitle();?></title>
    <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/app.min.js');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH  . '/assets/app.min.css');
    $APPLICATION->ShowHead();
    ?>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>

<div class="svgs" style="position: absolute; opacity: 0; visibility: hidden;">
    <svg id="tenge" width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg"><line y1="4" x2="10" y2="4" stroke="black" stroke-width="2"/><path d="M5 5L5 15.5" stroke="black" stroke-width="2"/><line y1="1" x2="10" y2="1" stroke="black" stroke-width="2"/></svg><svg id="tenge-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 11"><path d="M0,3H8V5H0ZM3,5H5v6H3ZM0,0H8V2H0Z"/></svg><svg id="arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.59 13.25"><path d="M12.29.29a1 1 0 0 0 0 1.41l3.88 3.88H1a1 1 0 0 0 0 2h15.18l-3.88 3.88A1 1 0 1 0 13.54 13a1.21 1.21 0 0 0 .16-.16l5.6-5.59a1 1 0 0 0 0-1.4L13.7.29a1 1 0 0 0-1.41 0Z" /></svg>
</div>

<div class="app">
    <div class="app-inner">
        <header>
            <div class="container flex align-items-center">
                <a aria-label="На главную" href="/" class="logotype header-item">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/svg/logo.svg" width="281" height="44" decoding="async" alt="Spar">
                </a>

                <form action="" autocomplete="off" method="get" enctype="application/x-www-form-urlencoded" class="search-form header-item">
                    <label>
                        <input type="text" name="q" placeholder="Начните вводить.." class="search-input form-input">
                        <button class="search-button">
                            <svg width="20" height="21" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.5a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-6 4a6 6 0 1 1 10.89 3.48l4.82 4.81a1 1 0 0 1-1.42 1.42l-4.81-4.82A6 6 0 0 1 2 8.5Z" fill="#B6BDC0"/></svg>
                        </button>
                    </label>
                </form>

                <a href="#" class="btn header-item">
                    <svg width="16" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 8.5a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-2.67 0-8 1.34-8 4v1a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-1c0-2.66-5.33-4-8-4Z" /></svg>
                </a>

                <a href="#" class="btn header-item">
                    <svg width="14" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.14 8.63a1.6 1.6 0 0 0 1.59-1.6 1.6 1.6 0 0 0-1.6-1.58 1.6 1.6 0 0 0-1.58 1.59c0 .87.71 1.59 1.59 1.59Zm0-7.95A6.33 6.33 0 0 1 13.5 7.2c0 2.53-1.95 5.5-5.84 8.93a.8.8 0 0 1-1.05 0C2.73 12.7.78 9.73.78 7.2A6.33 6.33 0 0 1 7.14.68Z" /></svg>
                    <span>Алматы</span>
                </a>
                <a href="#" class="btn header-item">
                    рус
                </a>
            </div>
            <div class="container">
                <nav>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main",
                        Array(
                            "ROOT_MENU_TYPE" => "main",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "main",
                            "USE_EXT" => "N"
                        )
                    );?>
                </nav>
            </div>
        </header>