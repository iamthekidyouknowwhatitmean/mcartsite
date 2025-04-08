<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?
// echo "<pre>";
// print_r($arResult);	
	
?>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<a href="<?=$arItem["LINK"]?>" class="active"><i class="bi <?=$arItem["PARAMS"]["menu_ico"]?>"></i><span><?=$arItem["TEXT"]?></span></a>
	<?else:?>
		<a href="<?=$arItem["LINK"]?>"><i class="bi <?=$arItem["PARAMS"]["menu_ico"]?>"></i><span><?=$arItem["TEXT"]?></span></a>
	<?endif?>
	
<?endforeach?>

<?endif?>
