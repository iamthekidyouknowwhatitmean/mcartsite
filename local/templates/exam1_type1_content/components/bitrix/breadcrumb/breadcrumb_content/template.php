<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";


$elCount = count($arResult);
$strReturn = '<nav class="breadcrumbs"><ol>';
              						
for($i = 0; $i < $elCount-2;$i++){
	$link = $arResult[$i]['LINK'];
	$title = $arResult[$i]['TITLE'] ?? '';
	$strReturn .= '<li><a href='.$link.'>'.$title.'</a></li>';
}

$strReturn .= '</ol></nav>';

return $strReturn;
