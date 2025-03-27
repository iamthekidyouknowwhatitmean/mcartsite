<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();
 
$eventManager->addEventHandler('', 'AgentsOnAfterAdd', 'clearAgentsReferenceCache');
$eventManager->addEventHandler('', 'AgentsOnAfterUpdate', 'clearAgentsReferenceCache');
$eventManager->addEventHandler('', 'AgentsOnAfterDelete', 'clearAgentsReferenceCache');
 
function clearAgentsReferenceCache($event)
{
    $arParameters = $event->getParameters();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $arParameters["TABLE_NAME"]);
}