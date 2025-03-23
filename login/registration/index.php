<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
$APPLICATION -> AddChainItem($APPLICATION->GetTitle(),$APPLICATION->GetCurDir());

?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"reg",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(),
		"SET_TITLE" => "N",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "/",
		"USER_PROPERTY" => array("UF_GROUP"),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>