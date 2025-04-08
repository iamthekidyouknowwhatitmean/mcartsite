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
?>
<section class="section">

<style>
  .table-detail .label {
	font-weight: 600;
	color: rgba(1, 41, 112, 0.6);
  }
  .table-detail .row {
	margin-bottom: 20px;
  }
  .table-detail .backurl {
	margin-top: 40px;
	margin-bottom: 20px;
  }
</style>

<div class="row">
  <div class="col-lg-12">
	  <div class="card table-detail">
		<div class="card-body">
		  <h5 class="card-title">ID - <?=$arResult["ID"]?></h5>

  		<?foreach($arResult["DISPLAY_PROPERTIES"] as $arItem):?>
		  <div class="row">
			<div class="col-2 label"><?=$arItem["NAME"]?></div>
			<div class="col-4 "><?=$arItem["VALUE"]?></div>
		  </div>
		<?endforeach;?>
		<p><a href="<?=$arResult["LIST_PAGE_URL"]?>"><?=GetMessage("BACK")?></a></p>

		</div>
	  </div>
  </div>
</div>

</section>