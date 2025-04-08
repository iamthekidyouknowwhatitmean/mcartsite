<?
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";

use Bitrix\Main\Application;
$res = Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory();
if($res !== '/training/'){?>
    <main class="main">
		<!-- Page Title -->
		<div class="page-title dark-background">
			<div class="container position-relative">
				<h1><?=$APPLICATION -> ShowTitle()?></h1>
				<p><?=$APPLICATION -> ShowProperty("page_text_under_title")?></p>
				<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"breadcrumb_dev", 
	array(
		"PATH" => "",
		"SITE_ID" => "t1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "breadcrumb_dev"
	),
	false
);?>
			</div>
		</div><!-- End Page Title -->
<?}?>