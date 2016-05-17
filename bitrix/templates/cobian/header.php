<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>	<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>	<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de">  <!--<![endif]-->
<head>
	
	<title><?$APPLICATION->ShowTitle()?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">

	<?$APPLICATION->ShowHead();?>

	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.css",true);

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css",true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/overwrite.css",true);

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl/owl.carousel.css",true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl/owl.theme.css",true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl/owl.transitions.css",true);

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/masonry.css",true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/prettyPhoto.css",true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/icons.css",true);

	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css",true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/skins/default.css",true);
	?>

	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/ie9.css">
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/ie8.css">
	<![endif]-->
	
</head>


<body id="home">
<div id="panel" style="z-index:99999999; position:fixed; width:100%;"><?$APPLICATION->ShowPanel();?></div>

	<div class="scroll top">
		<a href="#home"><span class="fa fa-chevron-up"></span></a>
	</div>
	
	<!-- Start Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top"<?if ($USER->IsAdmin()):?> style="padding-top:144px;"<?endif?>>
		<!-- Start Submenu -->
		<div class="submenu">
			<span class="ribbon"></span>
			<div class="container">
				<?$APPLICATION->IncludeFile(SITE_DIR . "inc/contacts.php", Array(), Array("MODE"=>"html"));?>
			</div>
		</div>	
		<!-- End Submenu -->
		
		<!-- Start Mainmenu -->
		<div class="mainmenu">
			<div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">
					<?$APPLICATION->IncludeFile(SITE_DIR . "inc/logo_top.php", Array(), Array("MODE"=>"html"));?>  
				  </a>
				</div>

				<!-- Navigation Menu -->
				<div class="collapse navbar-collapse" id="myMenu">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
						"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "top",
							"COMPONENT_TEMPLATE" => ".default",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => "",
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "N",
						),
						false
					);?>
				</div>
			</div>
		</div>	
		<!-- End Mainmenu -->
	</nav>
	<!-- End Navigation -->
	
	<div class="clearfix"></div>
	
	<!-- Start Home -->
	<section id="AnimatedBg" class="home bg-animate"<?if ($USER->IsAdmin()):?> style="padding-top:144px;"<?endif?>>
		<div class="home-container">
			<div class="container">
				<div class="row">
					<?$APPLICATION->IncludeFile(SITE_DIR . "inc/banner_text.php", Array(), Array("MODE"=>"html"));?>
				</div>
			</div>
		</div>
		<?/*<div class="street"></div>*/?>
	</section>
	<!-- End Home -->
	<div class="clearfix"></div>
   