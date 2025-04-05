<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if (!empty($arResult)):?>
    <nav id="navmenu" class="navmenu">
        <ul>
            <?
            $i = 0;
            while($i < count($arResult)):
            ?>
                <?if(!($arResult[$i]["IS_PARENT"])):?>
                    <li><a href="<?=$arResult[$i]["LINK"]?>"><?=$arResult[$i]["TEXT"]?></a></li>
                <?else:
                    $result = showMenu($i,$arResult,$arResult[$i]["DEPTH_LEVEL"]+1);
                    $i = $result;
                    
                endif;?>
            <?$i++;?>
            <?endwhile?>
        </ul>
    </nav>
<?endif?>