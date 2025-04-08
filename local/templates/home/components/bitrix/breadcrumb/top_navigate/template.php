<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//delayed function must return a string
if(empty($arResult))
	return "";
$elCount = count($arResult);
$strReturn = '<div>';
              						
for($i = 0; $i < $elCount-2;$i++){
	$link = $arResult[$i]['LINK'];
	$title = $arResult[$i]['TITLE'] ?? '';
	$strReturn .= '<a href='.$link.'>'.$title.'</a><span class="mx-2 text-white">&bullet;</span>';
}

$strReturn .= '<strong class="text-white">'.$arResult[$elCount-1]['TITLE'].'</strong>
			</div>';

return $strReturn;
