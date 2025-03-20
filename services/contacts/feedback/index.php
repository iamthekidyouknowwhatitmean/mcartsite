<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION -> AddChainItem($APPLICATION->GetTitle(),$APPLICATION->GetCurDir());

?>

<?$APPLICATION->IncludeComponent(
	"main:main.feedback",
	"contacts_feedback",
	Array(
		"EMAIL_TO" => "truewarrior228@gmail.com",
		"EVENT_MESSAGE_ID" => "",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => ["NAME","EMAIL","MESSAGE","SUBJECT"],
		"USE_CAPTCHA" => "Y"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "feedback_info"
	)
);?>
		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>