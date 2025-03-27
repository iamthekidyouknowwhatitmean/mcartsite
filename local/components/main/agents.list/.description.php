<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("AGENTS_NAME"),
    "DESCRIPTION" => GetMessage("AGENTS_DESC"),
    "PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "owner_components",
			"NAME" => GetMessage("AGENTS_CHILD_NAME"),
			"SORT" => 10,
		),
	),
);
