<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("page_text_under_title", "ffff");
$APPLICATION->SetTitle("О компании");
$APPLICATION -> AddChainItem($APPLICATION->GetTitle(),$APPLICATION->GetCurDir());

?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>