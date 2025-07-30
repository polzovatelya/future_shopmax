<?php

use Bitrix\Main\Application;
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Web\Cookie;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
$application = Application::getInstance();
$context = $application->getContext();
$favorites = json_decode($_COOKIE['favorites'] ?? '[]', true) ?: [];
$wishCount = count($favorites);
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <title><?= $APPLICATION->ShowTitle(); ?></title>

    <?=
    $APPLICATION->SetPageProperty("charset", "utf-8");
    $APPLICATION->SetPageProperty("viewport", "width=device-width, initial-scale=1, shrink-to-fit=no");

    $asset = Asset::getInstance();
    $asset->addString('<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/fonts/icomoon/style.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/magnific-popup.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/jquery-ui.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.theme.default.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/aos.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');

    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery-3.3.1.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery-ui.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/popper.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.magnific-popup.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/aos.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/script.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/assets/js/favorite.js');
    $APPLICATION->ShowHead();


    ?>

</head>
<body>
<?= $APPLICATION->ShowPanel() ?>
<div class="site-wrap">


    <div class="site-navbar bg-white py-2">
        <? $APPLICATION->IncludeComponent(
            "bitrix:search.title",
            "header",
            array(
                "CATEGORY_0" => array("iblock_catalog"),
                "CATEGORY_0_TITLE" => "",
                "CATEGORY_0_iblock_catalog" => array("5"),
                "CHECK_DATES" => "N",
                "CONTAINER_ID" => "title-search",
                "INPUT_ID" => "title-search-input",
                "NUM_CATEGORIES" => "1",
                "ORDER" => "date",
                "PAGE" => "#SITE_DIR#search/index.php",
                "SHOW_INPUT" => "Y",
                "SHOW_OTHERS" => "N",
                "TOP_COUNT" => "5",
                "USE_LANGUAGE_GUESS" => "Y"
            )
        ); ?>


        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include/header_logo.php"
                        )
                    ); ?>
                </div>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top",
                    [
                        "ROOT_MENU_TYPE" => "top",
                        "CHILD_MENU_TYPE" => "sub",
                        "MAX_LEVEL" => 3,
                        "USE_EXT" => "Y",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_THEME" => "site",
                        "ALLOW_MULTI_SELECT" => "N",
                        "DELAY" => "N"
                    ],
                    false
                );
                ?>
                <div class="icons">

                    <a href="" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="<?= SITE_DIR . "favorites/" ?>" class="icons-btn d-inline-block favorite">
                        <span class="icon-heart-o"></span>
                        <span class="number"><?=$wishCount?></span>
                    </a>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR . "include/header_icons.php"
                        )
                    ); ?>
                </div>

            </div>
        </div>
    </div>
