<?php

function showMenu($i,$subitems,$depth){?>
    <li class="dropdown">
        <a href="<?=$subitems[$i]["LINK"]?>"><span><?=$subitems[$i]["TEXT"]?></span>
            <i class="bi bi-chevron-down toggle-dropdown"></i>
        </a>
        <ul>
            <?
            $i++;
            while($subitems[$i]["DEPTH_LEVEL"] === $depth){    
                if($subitems[$i]["IS_PARENT"]){
                    $result = showMenu($i,$subitems,$depth+1);
                    $i = $result;
                }
                else{?>
                    <li><a href="<?=$subitems[$i]["LINK"]?>"><?=$subitems[$i]["TEXT"]?></a></li>
                <?}?>
                <?
                $i++;
            }
            ?>
        </ul>
    </li>
    <?
    $i = $i - 1;
    return $i;?>
<?}?>
