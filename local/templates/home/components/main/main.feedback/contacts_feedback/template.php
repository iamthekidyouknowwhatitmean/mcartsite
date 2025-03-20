<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <div class="mfeedback">
                    <?if(!empty($arResult["ERROR_MESSAGE"]))
                    {
                        foreach($arResult["ERROR_MESSAGE"] as $v)
                            ShowError($v);
                    }
                    if(!empty($arResult["OK_MESSAGE"]))
                    {
                        ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
                    }
                    ?>
                <form action="#" class="p-5 bg-white border">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                            <input placeholder="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>" type="text" id="fullname" class="form-control" name="user_name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                            <input placeholder="<?=GetMessage("MFT_EMAIL")?>" value="<?=$arResult["AUTHOR_EMAIL"]?>" type="email" id="email" class="form-control" name="user_email" >
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_SUBJECT")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("SUBJECT", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                            <input placeholder="<?=GetMessage("MFT_SUBJECT")?>" value="<?=$arResult["SUBJECT"]?>" type="text" id = "subject" class="form-control" name="user_subject">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label> 
                            <textarea placeholder="Say hello to us" name="MESSAGE" id="message" cols="40" rows="5" class="form-control" ><?=($arResult["MESSAGE"] ?? '')?></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary  py-2 px-4 rounded-0">
                        </div>
                    </div>
                </form>
            </div>



	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
</form>
</div>
