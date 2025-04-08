<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "1",
		"DETAIL_PAGE_URL" => "/#SECTION_ID#/#ELEMENT_ID#/",
		"IBLOCK_ID" => "29",
		"IBLOCK_TYPE" => "content",
		"IS_SEF" => "Y",
		"SECTION_PAGE_URL" => "/#SECTION_ID#/",
		"SEF_BASE_URL" => "/training/portfolio/"
	)
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>