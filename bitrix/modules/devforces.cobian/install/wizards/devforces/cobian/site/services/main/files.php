<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if (!defined("WIZARD_SITE_ID"))
	return;

if (!defined("WIZARD_SITE_DIR"))
	return;
	
$path = str_replace("//", "/", WIZARD_ABSOLUTE_PATH."/site/public/".LANGUAGE_ID."/");

$handle = @opendir($path);
if ($handle)
{
	while ($file = readdir($handle))
	{
		if (in_array($file, array(".", "..")))
			continue; 
		
		$to = ($file == 'upload' ? $_SERVER['DOCUMENT_ROOT'] . '/upload' : WIZARD_SITE_PATH."/".$file);
		
		CopyDirFiles(
			$path.$file,
			$to,
			$rewrite = true, 
			$recursive = true,
			$delete_after_copy = false
		);
	}
	
	if(CModule::IncludeModule("search"))
	{
		CSearch::ReIndexAll(Array(WIZARD_SITE_ID, WIZARD_SITE_DIR));
	}
}
function ___writeToAreasFile($fn, $text)
{
	if(file_exists($fn) && !is_writable($abs_path) && defined("BX_FILE_PERMISSIONS"))
		@chmod($abs_path, BX_FILE_PERMISSIONS);

	$fd = @fopen($fn, "wb");
	if(!$fd)
		return false;

	if(false === fwrite($fd, $text))
	{
		fclose($fd);
		return false;
	}

	fclose($fd);

	if(defined("BX_FILE_PERMISSIONS"))
		@chmod($fn, BX_FILE_PERMISSIONS);
}

WizardServices::PatchHtaccess(WIZARD_SITE_PATH);

CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."_index.php", Array("SITE_DIR" => WIZARD_SITE_DIR));

$arReplace = Array(
	"ADDRESS" => COption::GetOptionString("main", "site_landing_address", GetMessage("wiz_address"), $wizard->GetVar("siteID")),
	"EMAIL" => COption::GetOptionString("main", "site_landing_email", GetMessage("wiz_email"), $wizard->GetVar("siteID")),
	"PHONEONE" => COption::GetOptionString("main", "site_landing_phoneone", GetMessage("wiz_phoneone"), $wizard->GetVar("siteID")),
	"PHONETWO" => COption::GetOptionString("main", "site_landing_phonetwo", GetMessage("wiz_phonetwo"), $wizard->GetVar("siteID")),
	"COPYRIGHT" => COption::GetOptionString("main", "site_landing_copyright", GetMessage("wiz_copyright"), $wizard->GetVar("siteID")),
	"FACEBOOK" => COption::GetOptionString("main", "site_facebook", GetMessage("wiz_facebook"), $wizard->GetVar("siteID")),
	"TWITTER" => COption::GetOptionString("main", "site_twitter", GetMessage("wiz_twitter"), $wizard->GetVar("siteID")),
	"INSTAGRAM" => COption::GetOptionString("main", "site_instagram", GetMessage("wiz_instagram"), $wizard->GetVar("siteID")),
	"LIN" => COption::GetOptionString("main", "site_lin", GetMessage("wiz_lin"), $wizard->GetVar("siteID")),
);

CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."_index.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH.".social.menu.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/banner_text.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/contacts.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/contacts_footer.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/copyright.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/description_template.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/features.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/feedback.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/feedback_form.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/red_footer.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/start_work.php", $arReplace);
CWizardUtil::ReplaceMacros(WIZARD_SITE_PATH."inc/twitter.php", $arReplace);
?>