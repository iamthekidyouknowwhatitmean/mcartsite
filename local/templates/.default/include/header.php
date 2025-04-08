<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/boot.php";
    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\Localization\Loc;
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/aos/aos.css");
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/main.css");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/assets/vendor/aos/aos.js");
    Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/assets/js/main.js");
    
    Loc::loadMessages(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Компания - шаблон контентной страницы</title>
        <meta name="description" content="Добро пожаловать на сайт компании, лидера в области проминжиниринга">
        <meta name="keywords" content="Проминжиниринг, Инженерные услуги">

        <link href="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/favicon.png" rel="icon">
        <link href="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <?$APPLICATION->ShowHead();?>
        
        
    </head>

    <body class="scrolled">
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <header id="header" class="header d-flex align-items-center">
            <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

                <a href="#" class="logo d-flex align-items-center">
                    <h1 class="sitename"><?=Loc::getMessage("MAIN_NAME");?></h1>
                </a>
                <?$APPLICATION->IncludeComponent(
                "bitrix:menu", 
                "top_menu", 
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "4",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "COMPONENT_TEMPLATE" => "top_menu"
                ),
                false
                );?>
            </div>
        </header>