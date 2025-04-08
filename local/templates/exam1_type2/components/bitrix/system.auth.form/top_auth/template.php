<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>
<nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
			<form action="<?=$arResult["AUTH_URL"]?>">
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
            		<span class="d-none d-md-block dropdown-toggle ps-2"><?=$arResult["USER_LOGIN"]?></span>
          		</a>
				<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
					<li class="dropdown-header">
             			<h6><?=$arResult["USER_LOGIN"]?></h6>
            		</li>
					<li>
              			<hr class="dropdown-divider">
            		</li>
					<li>
						<a class="dropdown-item d-flex align-items-center" href="<?=$arResult["PROFILE_URL"]?>">
							<i class="bi bi-person"></i>
							<span><?=GetMessage("AUTH_PROFILE")?></span>
						</a>
					</li>
					<li>
              			<hr class="dropdown-divider">
            		</li>
					<li>
						<div class="col-12 mb-3 mt-3 d-flex justify-content-center">
							<?foreach ($arResult["GET"] as $key => $value):?>
								<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
							<?endforeach?>
							<?=bitrix_sessid_post()?>
							<input type="hidden" name="logout" value="yes" />
							<button 
							class="btn btn-secondary btn-sm"
							type="submit"
							name="logout_butt"
							value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>"   
							>
							<?=GetMessage("AUTH_LOGOUT_BUTTON")?>
							</button>
						</div>
					</li>
				</ul>
			</form>
		</li>
    </ul>
</nav>
</div>
