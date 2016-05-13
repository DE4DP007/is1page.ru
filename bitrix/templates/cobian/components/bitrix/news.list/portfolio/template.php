<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?
	foreach($arResult["ITEMS"] as $arItem){
		$category[$arItem["DISPLAY_PROPERTIES"]["TYPE"]["VALUE_XML_ID"]] = $arItem["DISPLAY_PROPERTIES"]["TYPE"]["DISPLAY_VALUE"];	
	}
?>

    <section id="portfolio">
        <div class="container">
            <!-- Start Title -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1 title-section">
                    <h4 class="title">
                        <span>наши работы<?//=GetMessage("PORTFOLIO");?></span>
                        Завершенные объекты безопасности<?//=GetMessage("PORTFOLIO_DES");?></h4>
                    <div class="line"><i class="icon icon-24 icon-image"></i></div>
                </div>
            </div>
            <!-- End Title -->
            <!-- Start gallery filter  -->
            <ul class="filter-items">
                <li data-filter="" class="active">All</li>
				
				<?foreach($category as $code => $name):?>
                <li data-filter="<?=$code?>"><?=$name?></li>
				<?endforeach?>
            </ul>
            <!-- End gallery filter -->
            <!-- Start Images Gallery -->
            <div class="row">
                <div id="gallery" class="masonry  gallery">
                    <div class="grid-sizer col-md-3 col-sm-4 col-xs-12"></div>
					
					<?foreach($arResult["ITEMS"] as $arItem):?>
                    <div data-filter="<?=$arItem["DISPLAY_PROPERTIES"]["TYPE"]["VALUE_XML_ID"]?>" class="grid-item col-md-3 col-sm-4 col-xs-12">
                        <div class="wrap-gallery">
                            <div class="img-wrapper">
                                <a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="hover zoom"  data-pretty="prettyPhoto"></a>
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive" alt="<?=$arItem["NAME"]?>">
                            </div>
                            <div class="title-gallery">
                                <h5><a href="#"><?=$arItem["NAME"]?></a></h5>
                            </div>
                        </div>
                    </div>
					<?endforeach?>

                </div>
            </div>
            <!-- End Images Gallery -->
        </div>
    </section>
	<div class="clearfix"></div>