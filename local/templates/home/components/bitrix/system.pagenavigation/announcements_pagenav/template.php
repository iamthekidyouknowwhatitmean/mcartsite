<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array $arResult
 * @var array $arParam
 * @var CBitrixComponentTemplate $this
 */

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

?>
<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">
			<?
			$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
			$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

			?>
				<?
				if ($arResult["NavPageNomer"] > 1):
					if ($arResult["nStartPage"] > 1):
						if($arResult["bSavePage"]):
							?><a  href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a><?
						else:
							?><a  href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a><?
						endif;

						if ($arResult["nStartPage"] > 2):
							?><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nStartPage"] / 2)?>">...</a><?
						endif;
					endif;
				endif;

				do
				{
					if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
						?><a href="#" class ="active"><?=$arResult["nStartPage"]?></a><?
					elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
						?><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a><?
					else:
						?><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a><?
					endif;
					$arResult["nStartPage"]++;
				}

				while($arResult["nStartPage"] <= $arResult["nEndPage"]); // все, что связано с концом списка
					if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
						if ($arResult["nEndPage"] < $arResult["NavPageCount"]):
							if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):
								?><a  href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] + ($arResult["NavPageCount"] - $arResult["nEndPage"]) / 2)?>">...</a><?
							endif;
							?><a  href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a><?
						endif;
					endif;
				?>
			</nav>
		</div>
    </div>  
</div>