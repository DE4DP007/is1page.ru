	<!-- Start Footer -->
	<footer> 
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 footer-item">
						<?$APPLICATION->IncludeFile(SITE_DIR . "inc/logo_footer.php", Array(), Array("MODE"=>"html"));?>
						
						<?$APPLICATION->IncludeComponent("bitrix:menu", "social", Array(
							"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "social",
								"COMPONENT_TEMPLATE" => "footer",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => "",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "social",
								"USE_EXT" => "N",
							),
							false
						);?>
					</div>
					<div class="col-md-3 footer-item">
						<div class="row">
							<div class="col-md-5 col-sm-6 col-xs-6">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"footer", 
									array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "links",
										"COMPONENT_TEMPLATE" => "footer",
										"DELAY" => "N",
										"MAX_LEVEL" => "1",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "links",
										"USE_EXT" => "N"
									),
									false
								);?>

							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"footer", 
									array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "links2",
										"COMPONENT_TEMPLATE" => "footer",
										"DELAY" => "N",
										"MAX_LEVEL" => "1",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "links2",
										"USE_EXT" => "N"
									),
									false
								);?>
							</div>
						</div>
					</div>
					<div class="col-md-3 footer-item">
						<?$APPLICATION->IncludeFile(SITE_DIR . "inc/contacts_footer.php", Array(), Array("MODE"=>"html"));?>
					</div>
					<div class="col-md-3 footer-item">
						<?$APPLICATION->IncludeFile(SITE_DIR . "inc/twitter.php", Array(), Array("MODE"=>"html"));?>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
			<?$APPLICATION->IncludeFile(SITE_DIR . "inc/copyright.php", Array(), Array("MODE"=>"html"));?>
		</div>
	</footer>
	<!-- End Footer -->

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.easing-1.3.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
	  <script src="<?=SITE_TEMPLATE_PATH?>/js/html5shiv.min.js"></script>
	  <script src="<?=SITE_TEMPLATE_PATH?>/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- JavaScript animatedBg -->	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/animatedBg/animatedBg-setting.js"></script>
	
	<!-- Scrollspy -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/scrollspy/scrollspy.js"></script>
	
	<!-- Owl Script -->
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl/setting.js"></script>
	
	<!-- masonry -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/masonry/masonry-3.1.4.js"></script>	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/masonry/masonry.filter.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/masonry/setting.js"></script>
	
	<!-- prettyPhoto -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/prettyPhoto/setting.js"></script>
	
	<!-- Parallax -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/parallax/setting.js"></script>
	
	<!--[if lte IE 9]>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/tweecool/jquery.xdomainrequest.min.js"></script>
	<![endif]-->

	<!-- Twitter Feed -->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/tweecool/tweecool.js"></script>
	<script>
(function($) {
  'use strict';
	//Setting Configuration
	$('#tweecool').tweecool({
		//settings
        show_actions: true,
		 username : 'DevForces', 
		 limit : 1,
		 profile_image : false,
        action_reply_icon: '<i class="fa fa-reply"></i>',
        action_retweet_icon: '<i class="fa fa-retweet"></i>',
        action_favorite_icon: '<i class="fa fa-star"></i>',
		show_time : false,
		show_media : false,
		show_media_size: 'thumb'  //values: small, large, thumb, medium 
	});
})(jQuery);
	</script>
	
	<!-- My Script -->
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/validation.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/custom.js"></script>
	<!-- END JAVASCRIPT -->

</body>
</html>