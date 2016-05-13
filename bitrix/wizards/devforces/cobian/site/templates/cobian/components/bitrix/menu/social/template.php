<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (!empty($arResult)):?>
                  <ul class="social-network">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<li><a href="<?=$arItem["LINK"]?>" target="_blank"><span class="fa <?=$arItem["TEXT"]?>"></span></a></li>
<?endforeach?>
                  </ul>
<?endif?>