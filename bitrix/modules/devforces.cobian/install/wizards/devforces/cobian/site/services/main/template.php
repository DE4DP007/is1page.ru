<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();


if (!defined("WIZARD_TEMPLATE_ID"))
	return;

$bitrixTemplateDir = $_SERVER["DOCUMENT_ROOT"]."/bitrix/templates";
	
CopyDirFiles(
	$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/devforces.cobian/install/wizards/devforces/cobian/site/templates", 
	$bitrixTemplateDir, 
	$rewrite = true,
	$recursive = true,
	$delete_after_copy = false
);

$wizard =& $this->GetWizard();
	
if (strlen(WIZARD_SITE_ID)) {
   $obSite = new CSite();
   $t = $obSite->Update(WIZARD_SITE_ID, array(
      'ACTIVE' => "Y",
      'TEMPLATE'=>array(
         array(
            'CONDITION' => "",
            'SORT' => 100,
            'TEMPLATE' => "cobian"
         )
      )
   ));
}

COption::SetOptionString("main", "wizard_template_id", WIZARD_TEMPLATE_ID, false, WIZARD_SITE_ID);
?>
