<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
$APPLICATION -> AddChainItem($APPLICATION->GetTitle(),$APPLICATION->GetCurDir());
?><?$APPLICATION->IncludeComponent(
	"main:agents.list",
	"",
	Array(
		"AGENTS_COUNT" => "3",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "N",
		"HLBLOCK_TNAME" => "db_agents"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>