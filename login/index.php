<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
$APPLICATION -> AddChainItem($APPLICATION->GetTitle(),$APPLICATION->GetCurDir());

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}


?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"REGISTER_URL" => "/login/registration/",
		"SHOW_ERRORS" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>