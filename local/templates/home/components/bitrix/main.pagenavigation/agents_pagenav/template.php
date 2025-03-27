<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();
$this->setFrameMode(true);

?>
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
				<?if ($arResult["CURRENT_PAGE"] > 1):?>
					<?if ($arResult["START_PAGE"] > 1):?>
						<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate(1))?>">1</a>
						<?if ($arResult["START_PAGE"] > 2):?>
							<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate(round($arResult["START_PAGE"] / 2)))?>">...</a>
						<?endif;?>
					<?endif;?>
				<?endif;?>

				<?do{
					if ($arResult["START_PAGE"] == $arResult["CURRENT_PAGE"]):
						?><a href="#" class ="active"><?=$arResult["START_PAGE"]?></a>
					<?else:?>
						<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["START_PAGE"]))?>"><?=$arResult["START_PAGE"]?></a>
					<?endif?>
					<?$arResult["START_PAGE"]++;
				}
				while($arResult["START_PAGE"] <= $arResult["END_PAGE"]); // все, что связано с концом списка
					
				
				
				if($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]):
					if ($arResult["END_PAGE"] < $arResult["PAGE_COUNT"]):
						if ($arResult["END_PAGE"] < ($arResult["PAGE_COUNT"] - 1)):
							?><a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate(round($arResult["END_PAGE"] + ($arResult["PAGE_COUNT"] - $arResult["END_PAGE"]) / 2)))?>">...</a><?
						endif;
						?><a  href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><?=$arResult["PAGE_COUNT"]?></a><?
					endif;
				endif;
				?>
		</div>
    </div>  
</div>
