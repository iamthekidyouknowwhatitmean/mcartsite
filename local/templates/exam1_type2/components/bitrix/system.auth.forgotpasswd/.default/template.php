<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);

}
?>
<section class="section">
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
			<div class="card mb-3">
				<div class="card-body">
					
					<form class="row g-3" novalidate name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
					<?
					if ($arResult["BACKURL"] <> '')
					{
					?>
						<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
					<?
					}
					?>
					<input type="hidden" name="USER_LOGIN" value="" />
					<input type="hidden" name="AUTH_FORM" value="Y">
					<input type="hidden" name="TYPE" value="SEND_PWD">
					<div class="pt-4 pb-2">
						<p class="small"><?echo GetMessage("sys_forgot_pass_label")?></p>
					</div>
					
					<div class="pt-4 pb-2">
					<p class="small"><?=GetMessage("sys_forgot_pass_note_email1")?><br /><?=GetMessage("sys_forgot_pass_note_email2")?></p>
					</div>
					
					<div class="col-12">
					<label for="yourUsername" class="form-label"><?=GetMessage("sys_forgot_pass_login1")?></label>
					<input id="yourUsername" class="form-control" type="text" name="USER_LOGIN" maxlength="50" value="" />
					</div>
					
					<div class="col-12">
					<label for="yourEmail" class="form-label"><?=GetMessage("sys_forgot_pass_email")?></label>
					<input id="yourEmail" class="form-control" type="text" name="USER_EMAIL" maxlength="255" value="" />
					</div>

					<?if($arResult["USE_CAPTCHA"]):?>
						<!-- IF USED CAPTCHA -->
						<div class="col-12">
							<label class="form-label"><?echo GetMessage("system_auth_captcha")?></label>
							<div class="input-group has-validation">
								<input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
								<div class="invalid-feedback"><?=GetMessage("sys_forgot_pass_captcha_attention")?></div>
							</div>
						</div>
						<div class="col-12">
							<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" /> <!-- CAPTCHA_CODE -->
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
						</div>
					<!-- END CAPTCHA -->

					<?endif?>

						<div class="col-12">
							<button 
								class="btn btn-primary w-100" type="submit" name="send_account_info"><?=GetMessage("AUTH_SEND")?>
							</button>
						</div>
						<div class="col-12">
							<p class="small mb-0">
								<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
							</p>
						</div>	
					</form>
					
					
					<script>
					document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
					document.bform.USER_LOGIN.focus();
					</script>
				</div>
			</div> 
		</div>
	</div>
</section>