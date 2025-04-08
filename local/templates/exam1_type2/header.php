<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
Asset::getInstance()->addCss("/local/templates/exam1_type2/assets/vendor/bootstrap/css/bootstrap.min.css");
Asset::getInstance()->addCss("/local/templates/exam1_type2/assets/vendor/bootstrap-icons/bootstrap-icons.css");
Asset::getInstance()->addCss("/local/templates/exam1_type2/assets/css/style.css");
Asset::getInstance()->addJs("/local/templates/exam1_type2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
Asset::getInstance()->addJs("/local/templates/exam1_type2/assets/js/main.js");

Loc::loadMessages(__FILE__);
global $USER;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/local/templates/exam1_type2/assets/img/favicon.png" rel="icon">
  <?$APPLICATION->ShowHead();?>
  
</head>

<body>  
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    
    <?
    if(($USER -> IsAuthorized()) && ((in_array(10,$USER->GetUserGroupArray())) || (in_array(1,$USER->GetUserGroupArray())))){ // если пользователь админ или аналитик
      $APPLICATION->IncludeComponent(
        "bitrix:system.auth.form",
        "top_auth",
        Array(
          "FORGOT_PASSWORD_URL" => "",
          "PROFILE_URL" => "/training/statistic-na/profile/",
          "REGISTER_URL" => "",
          "SHOW_ERRORS" => "N"
        )
      );
    }
    ?>

  </header><!-- End Header -->


        <?
        
        if(($USER -> IsAuthorized()) && ((in_array(10,$USER->GetUserGroupArray())) || (in_array(1,$USER->GetUserGroupArray())))){
          $APPLICATION->IncludeComponent(
          "bitrix:menu", 
          "menu_statistics", 
          array(
            "ROOT_MENU_TYPE" => "st_first",
            "MAX_LEVEL" => "4",
            "CHILD_MENU_TYPE" => "st_second",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "COMPONENT_TEMPLATE" => "menu_statistics"
          ),
          false
        );
      }
        
        ?>

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1><?=$APPLICATION -> ShowTitle()?></h1>
    </div><!-- End Page Title -->