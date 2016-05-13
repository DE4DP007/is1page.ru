<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Cobian: Битрикс лендинг пейдж");
?>

	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/about_template.php", Array(), Array("MODE"=>"html"));?>

	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/description_template.php", Array(), Array("MODE"=>"html"));?>
		
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"testimonials", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "testimonials",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_PICTURE",
				2 => "DETAIL_PICTURE",
				3 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#TESTIMONIALS_ID#",
			"IBLOCK_TYPE" => "landing_iblock_type",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "100",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "NAME",
				1 => "COMPANY",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		),
		false
	);?>
		
		
	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/features.php", Array(), Array("MODE"=>"html"));?>
	
	<!-- Start Pricing -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"pricing", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "pricing",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_PICTURE",
				2 => "DETAIL_PICTURE",
				3 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#PRICES_ID#",
			"IBLOCK_TYPE" => "landing_iblock_type",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "100",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "PRICE",
				1 => "PROPLIST",
				2 => "BLOCKSTYLE",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		),
		false
	);?>
	<!-- End Pricing -->

	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/start_work.php", Array(), Array("MODE"=>"html"));?>
	
	<!-- Start Gellery -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"portfolio", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "portfolio",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_PICTURE",
				2 => "DETAIL_PICTURE",
				3 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#PORTFOLIO_ID#",
			"IBLOCK_TYPE" => "landing_iblock_type",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "100",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "TYPE",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		),
		false
	);?>
	<!-- End Gellery -->

	<!-- Start Article -->
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"blog", 
		array(
			"BLOCK_TITLE" => "Блог",
			"BLOCK_DESCRIPTION" => "События нашей компании",

			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "blog",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_PICTURE",
				2 => "DETAIL_PICTURE",
				3 => "",
			),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#BLOG_ID#",
			"IBLOCK_TYPE" => "landing_iblock_type",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "100",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "TYPE",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		),
		false
	);?>
	<!-- End Article -->

	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/feedback.php", Array(), Array("MODE"=>"html"));?>
	<div class="clearfix"></div>

	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/feedback_form.php", Array(), Array("MODE"=>"php"));?>
	<div class="clearfix"></div>

	<?$APPLICATION->IncludeFile(SITE_DIR . "inc/red_footer.php", Array(), Array("MODE"=>"html"));?>
	<div class="clearfix"></div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>