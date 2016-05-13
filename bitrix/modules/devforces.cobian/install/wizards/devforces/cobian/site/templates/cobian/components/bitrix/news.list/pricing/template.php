<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
if(!empty($arResult["ITEMS"])):
	foreach($arResult["ITEMS"] as $arItem){
		$category[$arItem["DISPLAY_PROPERTIES"]["TYPE"]["VALUE_XML_ID"]] = $arItem["DISPLAY_PROPERTIES"]["TYPE"]["DISPLAY_VALUE"];
	}
?>
	<section id="pricing" class="gray">
		<div class="container">
			<!-- Start Title -->
			<div class="row">
				<div class="col-md-10 col-md-offset-1 title-section">
					<h4 class="title"><span><?=GetMessage("TARIFF_PLANS");?></span> <?=GetMessage("PRICES");?></h4>
					<div class="line"><i class="icon icon-24 icon-clipboard"></i></div>
				</div>
			</div>
			<!-- End Title -->
			<!-- Start Pricing -->
			<div class="row wrap-price">
			<?foreach($arResult["ITEMS"] as $arItem):?>

				<?if(!empty($arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"])){
					$price = explode(".",$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]);
				}?>
				
				<div class="col-md-3">
					<div class="table-price <?=$arItem["DISPLAY_PROPERTIES"]["BLOCKSTYLE"]["VALUE"]?>">
						<div class="title-price">
							<h4><?=$arItem["NAME"]?></h4>
						</div>
						<div class="price">
							<h2><span>$</span><?=(!empty($price[0]))?$price[0]:"";?><?if(!empty($price[1])):?><small class="point">.<?=$price[1]?></small><?endif?></h2>
						</div>
						<?if(!empty($arItem["DISPLAY_PROPERTIES"]["PROPLIST"]["DISPLAY_VALUE"])):?>
							<ul class="list-feature">
								<? $i=0; foreach($arItem["DISPLAY_PROPERTIES"]["PROPLIST"]["DISPLAY_VALUE"] as $value): ++$i;?>
									<li<?if($i%2!=0):?> class="current"<?endif?>><strong><?=$value?></strong></li>
								<?endforeach?>
							</ul>
						<?endif?>
						<div class="footer-price">
							<a href="#contacts" class="btn btn-<?=$arItem["DISPLAY_PROPERTIES"]["BLOCKSTYLE"]["VALUE"]?>"><?=GetMessage("BUTTON_TEXT")?></a>
						</div>
					</div>
				</div>
			<?endforeach?>
		</div>
	</section>
<?endif?>
<div class="clearfix"></div>