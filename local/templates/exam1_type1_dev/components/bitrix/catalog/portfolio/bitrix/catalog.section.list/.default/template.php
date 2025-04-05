<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
// echo "<pre>";
// print_r($arResult);
// echo "</pre>";
?>

<!-- Portfolio Sections -->
<section class="portfolio-sections section">
	<div class="container">
		<div class="row gy-4">
			<?foreach($arResult["SECTIONS"] as $arItem):?>
				<div class="col-lg-6">
					<div class="service-item position-relative">
						<div class="img">
							<img src="<?=$arItem["PICTURE"]["SRC"]?>" class="img-fluid" alt="">
						</div>
						<div class="details">
							<a href="<?=$arItem["SECTION_PAGE_URL"]?>">
								<?=$arItem["NAME"]?>
							</a>
							<p><?=$arItem["DESCRIPTION"]?></p>
						</div>
					</div>
				</div><!-- End Service Item -->
			<?endforeach?>

		</div>
	</div>
</section><!-- /Portfolio Sections Section -->