<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$aMenuLinks = Array(
	Array(
		"Главная", 
		"index.php", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Объявления", 
		"announcements/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"О сервисе", 
		"services/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"ЛК продавца", 
		"seller/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,7,8))" 
	),
	Array(
		"ЛК покупателя", 
		"buyer/", 
		Array(), 
		Array(), 
		"CSite::InGroup(array(1,6,8))" 
	)
	
);
?>