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
				<nav class="breadcrumbs">
					<ol>
						<li><a href="#">Главная</a></li>
						<li><a href="#">Раздел 1</a></li>
						<li><a href="#">Раздел 1.1</a></li>
						<li class="current">Заголовок страницы</li>
					</ol>
				</nav>
			</div>
		</div><!-- End Page Title -->
<?}?>