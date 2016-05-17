<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
	<div class="testimonial cp-bottom" id="review">
		<div class="bg-primary pattern parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 wrap-testimonial">
					<div id="testimonial" class="owl-carousel">
					<? $i=0; foreach($arResult["ITEMS"] as $arItem): ++$i;?>
						<?if($i%2!=0):?>
							<div class="item">
								<div class="row">
									<div class="col-md-8 col-sm-8 col-md-push-4 col-sm-push-4 content">
										<blockquote class="right">
											<p>
												<?=$arItem["PREVIEW_TEXT"]?>
											</p>
											<footer>
												<b><?=str_replace("-","",$arItem["NAME"])?></b><?=(!empty($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]))?" ".str_replace("-","",$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]):"";?>
											</footer>
										</blockquote>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/testimonial/arrow-left.png" class="arrow left" alt="">
									</div>
									<div class="col-md-4 col-sm-4 col-md-pull-8 col-sm-pull-8 photo">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="alignleft" alt="<?=$arItem["NAME"]?>">
									</div>
								</div>
							</div>
						<?else:?>
							<div class="item"> 
								<div class="row">
									<div class="col-md-8 col-sm-8 content">
										<blockquote>
											<p>
												<?=$arItem["PREVIEW_TEXT"]?>
											</p>
											<footer class="text-right">
												<b><?=str_replace("-","",$arItem["NAME"])?></b><?=(!empty($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]))?" ".str_replace("-","",$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]):"";?>
											</footer>
										</blockquote>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/testimonial/arrow-right.png" class="arrow right" alt="">
									</div>
									<div class="col-md-4 col-sm-4 photo">
										<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="alignright" alt="<?=$arItem["NAME"]?>">
									</div>
								</div>
							</div>
						<?endif?>
					<?endforeach?>
					</div>
				</div>
			</div>
			<ul id="author" class="owl-carousel list-author">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<li>
					<h6><?=$arItem["NAME"]?> <?=(!empty($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]))?"<small>".$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]."</small>":"";?></h6>
				</li>
			<?endforeach?>
			</ul>
			<div class="bg-dark"></div>
		</div>
	</div>
	<div class="clearfix"></div>