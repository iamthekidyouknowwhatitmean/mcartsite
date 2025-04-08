
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $fl_show;

global $USER;
$groupID = 10; # ID группы
 
if (in_array($groupID,$USER->GetUserGroupArray())){
    echo 'Пользователь состоит в группе!';
} else {
    echo 'Пользователь вне группы...';
}
if (!empty($arResult)):?>
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <?
    $i = 0;
    while($i < count($arResult)):
    ?>
      <?if(!($arResult[$i]["IS_PARENT"])):?>
        <li class="nav-item">
          <a class="nav-link collapsed" href="<?=$arResult[$i]["LINK"]?>">
            <i class="bi <?=$arResult[$i]["PARAMS"]["menu_ico"]?>"></i>
            <span><?=$arResult[$i]["TEXT"]?></span>
          </a>
        </li>
      <?else:?>
        <?$depth = $arResult[$i+1]["DEPTH_LEVEL"];?>
        <li class="nav-item">
          <?
           $targetName = explode('/',$arResult[$i]["LINK"]);
          ?>
          <a class="nav-link collapsed" data-bs-target="#<?=$targetName[3]?>-nav" data-bs-toggle="collapse" href="<?=$arResult[$i]["LINK"]?>">
            <i class="bi <?=$arResult[$i]["PARAMS"]["menu_ico"]?>"></i><span><?=$arResult[$i]["TEXT"]?></span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="<?=$targetName[3]?>-nav" class="nav-content collapse <?if($arResult[$i]["SELECTED"]):?>show<?endif;?>" data-bs-parent="#sidebar-nav">
            <?++$i?>
            <?while($arResult[$i]["DEPTH_LEVEL"] === $depth):?>
              <li>
                <a href="<?=$arResult[$i]["LINK"]?>" <?if($arResult[$i]["SELECTED"]):?> class ="active"<?$fl_show = true;?><?endif?>>
                  <i class="bi bi-circle"></i><span><?=$arResult[$i]["TEXT"]?></span>
                </a>
              </li>
              <?$i++?>
            <?endwhile;?>
            <?$i--?>
          </ul>
        </li>
      <?endif;?>
      <?$i++?>
    <?endwhile;?>
    </ul>
</aside>


<?endif;?>