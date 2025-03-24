<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2024 Bitrix
 */

use Bitrix\Main\Web\Json;

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>
<div class="bx-auth-reg">

<?if($USER->IsAuthorized()):?>

<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
<?
if (!empty($arResult["ERRORS"])):
	foreach ($arResult["ERRORS"] as $key => $error)
		if (intval($key) == 0 && $key !== 0) 
			$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

	ShowError(implode("<br />", $arResult["ERRORS"]));

elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
?>
<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
<?endif?>

<?if($arResult["SHOW_SMS_FIELD"] == true):?>

<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform">
<?
if($arResult["BACKURL"] <> ''):
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
endif;
?>
<input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
<table>
	<tbody>
		<tr>
			<td><?echo GetMessage("main_register_sms")?><span class="starrequired">*</span></td>
			<td><input size="30" type="text" name="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off" /></td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td><input type="submit" name="code_submit_button" value="<?echo GetMessage("main_register_sms_send")?>" /></td>
		</tr>
	</tfoot>
</table>
</form>

<script>
new BX.PhoneAuth({
	containerId: 'bx_register_resend',
	errorContainerId: 'bx_register_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?= Json::encode([
			'signedData' => $arResult["SIGNED_DATA"],
		]) ?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_register_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_register_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_register_resend"></div>

<?else:?>
<div class="site-section">
	<div class="container">



		
		<label class="font-weight-bold"><?=GetMessage("AUTH_REGISTER")?></label>
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				<form class = "p-5 bg-white border" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
				<?
				if($arResult["BACKURL"] <> ''):
				?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
				<?
				endif;
				?>
				<?foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
					<?if($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true):?>
						<tr>
							<td><?echo GetMessage("main_profile_time_zones_auto")?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?></td>
							<td>
								<select name="REGISTER[AUTO_TIME_ZONE]" onchange="this.form.elements['REGISTER[TIME_ZONE]'].disabled=(this.value != 'N')">
									<option value=""><?echo GetMessage("main_profile_time_zones_auto_def")?></option>
									<option value="Y"<?=$arResult["VALUES"][$FIELD] == "Y" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_yes")?></option>
									<option value="N"<?=$arResult["VALUES"][$FIELD] == "N" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_no")?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td><?echo GetMessage("main_profile_time_zones_zones")?></td>
							<td>
								<select name="REGISTER[TIME_ZONE]"<?if(!isset($_REQUEST["REGISTER"]["TIME_ZONE"])) echo 'disabled="disabled"'?>>
						<?foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
									<option value="<?=htmlspecialcharsbx($tz)?>"<?=$arResult["VALUES"]["TIME_ZONE"] == $tz ? " selected=\"selected\"" : ""?>><?=htmlspecialcharsbx($tz_name)?></option>
						<?endforeach?>
								</select>
							</td>
						</tr>
					<?else:?>
						<div class="row form-group">
							<label class="font-weight-bold"><?=GetMessage("REGISTER_FIELD_".$FIELD)?>:<?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span></label><?endif?>
							<?
					switch ($FIELD)
					{
						case "PASSWORD":
							?>
								<div class="col-md-12 mb-3 mb-md-0">
									<input class ="form-control" type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" class="bx-auth-input" />
								</div>
							</div>
				<?if($arResult["SECURE_AUTH"]):?>
								<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
									<div class="bx-auth-secure-icon"></div>
								</span>
								<noscript>
								<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
									<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
								</span>
								</noscript>
				<script>
				document.getElementById('bx_auth_secure').style.display = 'inline-block';
				</script>
				<?endif?>
				<?
							break;
						case "CONFIRM_PASSWORD":
							?>
								<div class="col-md-12 mb-3 mb-md-0">
									<input class="form-control" type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" />
								</div>
							</div>
							
							<?break;

						default:
							// логин и email
							?>

								<div class="col-md-12 mb-3 mb-md-0">
									<input type="text" class="form-control" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>">
								</div>
							</div>
							<?}?>

					<?endif?>
				<?endforeach?>
				<?// ********************* User properties ***************************************************?>
				<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
					
							<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
							<b><?=$arUserField["EDIT_FORM_LABEL"]?></b>:<?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;?><br>
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.field.edit",
										$arUserField["USER_TYPE"]["USER_TYPE_ID"],
										array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "regform"), null, array("HIDE_ICONS"=>"Y"));?>
							<?endforeach;?>
						
				<?endif;?>
				<?// ******************** /User properties ***************************************************?>
				<?
				/* CAPTCHA */
				if ($arResult["USE_CAPTCHA"] == "Y")
					{
						?>
							<table>
								<tr>
									<td colspan="2"><b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
										<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
									</td>
								</tr>
								<tr>
									<td><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></td>
									<td><input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" /></td>
								</tr>
							</table>
						<?
					}
				/* !CAPTCHA */
				?>
					<div class="row form-group">
						<div class="col-md-12">
							<input class="btn btn-primary  py-2 px-4 rounded-0" type="submit" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" />
						</div>
					</div>
					<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
					<?endif //$arResult["SHOW_SMS_FIELD"] == true ?>
					<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>
					<?endif?>
				</form>
			</div>
		</div>
	</div>
</div>
</div>