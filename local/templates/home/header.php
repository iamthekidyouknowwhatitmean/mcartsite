<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;
$page = $APPLICATION->GetCurPage();

?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
  <title>HomeSpace &mdash; Colorlib Website Template</title>

  <?$APPLICATION->ShowHead();?>
<?php
  Asset::getInstance()->addString('<link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">');
  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap-datepicker.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<!-- <div class="site-loader"></div> -->
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => SITE_TEMPLATE_PATH . "/includes/header_phone.php"
                )
              );?>
              </a>
              <a href="#">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => SITE_TEMPLATE_PATH . "/includes/header_email.php"
                )
              );?>
              </a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_TEMPLATE_PATH . "/includes/header_media.php"
              )
            );?>
          </div>
        </div>
      </div>    
    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="index.html" class="h5 text-uppercase text-black">
                <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH . "/includes/header_logo.php"
                  )
                );?>
              </a>
            </h1>
          </div>
          <?$APPLICATION->IncludeComponent(
          "bitrix:menu", 
          "top_menu", 
          array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "4",
            "CHILD_MENU_TYPE" => "subtop",
            "USE_EXT" => "N",
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
      </div>
    </div>
    <?if(!($page === '/')):?>
      <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2"><?$APPLICATION -> ShowTitle(false);?></h1>
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "top_navigate", Array(
              "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
              ),
              false
            );?>
          </div>
        </div>
      </div>
    </div>
    <?endif;?>
  </div>