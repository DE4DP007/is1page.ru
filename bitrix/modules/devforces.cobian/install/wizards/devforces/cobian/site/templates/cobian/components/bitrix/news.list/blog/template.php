<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
	<section id="blog" class="gray">
		<div class="container">
			<!-- Start Title -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1 title-section">
				<h4 class="title"><span><?=$arParams["BLOCK_TITLE"]?></span> <?=$arParams["BLOCK_DESCRIPTION"]?></h4>
					<div class="line"><i class="icon icon-24 icon-compose"></i></div>
				</div>
			</div>
			<!-- End Title -->
			
			<!-- Start Blog -->
			<div class="row">
				<div id="post" class="masonry wrap-post">
					<div class="grid-sizer col-md-6 col-sm-12 col-xs-12"></div>
					
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="grid-item col-md-6 col-sm-12 col-xs-12">

						<div class="row post">
							<div class="col-md-6 col-sm-6 img-post">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive" alt="<?=$arItem["NAME"]?>">
							</div>
							<div class="col-md-6 col-sm-6 content-post">
								<h5>
								<?if(!empty($arItem["DETAIL_TEXT"])):?>
									<a href="#post_<?=$arItem["ID"]?>" rel="prettyPhoto"><?=$arItem["NAME"]?></a>
								<?else:?>
									<?=$arItem["NAME"]?>
								<?endif?>
								</h5>
								<?if(!empty($arItem["DISPLAY_ACTIVE_FROM"])):?>
								<ul class="meta-post">
									<li>
										<?if(!empty($arItem["DETAIL_TEXT"])):?>
											<a href="#post_<?=$arItem["ID"]?>" rel="prettyPhoto"><span class="fa fa-calendar"></span> <?=$arItem["DISPLAY_ACTIVE_FROM"]?></a>
										<?else:?>
											<span class="fa fa-calendar"></span> <?=$arItem["DISPLAY_ACTIVE_FROM"]?>
										<?endif?>
									</li>
								</ul>
								<?endif?>
								<p>
									<?=$arItem["PREVIEW_TEXT"]?>
								</p>
										<?if(!empty($arItem["DETAIL_TEXT"])):?>
											<a href="#post_<?=$arItem["ID"]?>" rel="prettyPhoto" class="btn btn-primary"><?=GetMessage("MORE");?></a>
										<?endif?>
							</div>
						</div>

					</div>
					<div id="post_<?=$arItem["ID"]?>" style="display:none;">
						<?if(!empty($arItem["DETAIL_PICTURE"]["SRC"])):?>
							<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="img-responsive" alt="<?=$arItem["NAME"]?>">
						<?elseif(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive" alt="<?=$arItem["NAME"]?>">
						<?endif?>
						<div class="inline_div">
						<?=$arItem["DETAIL_TEXT"]?>
						</div>
					</div>
					<?endforeach?>
				</div>
			</div>
			<!-- End Blog -->
		</div>
	</section>
	<div class="clearfix"></div>