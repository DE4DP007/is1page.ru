<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="col-md-12">
	<div class="row">
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="contactform" class="validateform" name="leaveContact">
	<?=bitrix_sessid_post()?>
	<input name="submit" value="submit" type="hidden">
		<div class="clearfix"></div>
		<div id="sendmessage<? if(strlen($arResult["OK_MESSAGE"]) > 0):?> class="show"<?endif?>">
			<div class="alert alert-info marginbot35">
				<strong><?=GetMessage("MESSAGE_SEND")?></strong><br>
			</div>
		</div>
		<div id="errormessage"<? if(!empty($arResult["ERROR_MESSAGE"])):?> class="show"<?endif?>>
			<div class="alert alert-info marginbot35 errorborder">
				<strong><?foreach($arResult["ERROR_MESSAGE"] as $v){ echo $v;}?></strong><br>
			</div>
		</div>
		<ul class="listForm">
			<li>
				<label><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>:</label>
				<input class="form-control input-name input-lg" type="text"  name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" data-rule="maxlen:4" data-msg="<?=GetMessage("ZAPOLNITE_POLE")?>" placeholder="<?=GetMessage("VVEDITE_IMYA")?>">
				<div class="validation"></div>
			</li>
			<li>
				<label><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>:</label>
				<input class="form-control input-email input-lg" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" data-rule="email" data-msg="<?=GetMessage("VVEDITE_EMAIL_ERROR")?>" placeholder="<?=GetMessage("VVEDITE_EMAIL")?>">
				<div class="validation"></div>
			</li>
			<li class="full-list">
				<label><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>:</label>
				<textarea class="form-control input-lg" rows="8" name="MESSAGE" data-rule="required" data-msg="<?=GetMessage("ENTER_MESSAGE_ERROR")?>" placeholder="<?=GetMessage("ENTER_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
				<div class="validation"></div>
			</li>

			<?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<li class="full-list">
				<label class="label_captcha"><?=GetMessage("MFT_CAPTCHA_CODE")?></label>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="190" height="49" class="captcha" alt="CAPTCHA">
				<input type="text" data-rule="required" data-msg="<?=GetMessage("ENTER_CODE")?>" name="captcha_word" size="30" maxlength="50" value="" class="form-control input-name input-lg captchainput" >
				<div class="validation"></div>
			</li>
			<?endif;?>

			<li class="full-list last-list">
				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-warning btn-lg btn-block">
			</li>
		</ul>
	</form>
	</div>
</div>
