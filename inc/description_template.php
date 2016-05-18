<div class="container" id="description">
	<div class="row">
		<div class="col-md-7 col-md-push-5 img-desc text-center">
            <br><br>
			<img src="/bitrix/templates/cobian/images/blueeye.jpg" class="img-responsive img-rounded" title="Интеллектуальные системы" alt="Интеллектуальные системы">
            <br>
            <div class="text-center">
                <a data-toggle="collapse" data-target="#aboutfulltext" href="#aboutfulltext" class="btn btn-success">Читать подробнее</a>
                <a href="#" class="btn btn-default">Скачать прайслист</a>
                <a href="#footingfeedback" class="btn btn-primary">Написать нам</a>
            </div>
            <br><br>
		</div>
		<div class="col-md-5 col-md-pull-7 content-desc">
			<h4>О компании</h4>
			<p>
                <?$APPLICATION->IncludeFile(SITE_DIR . "inc/description_small.php", Array(), Array("MODE"=>"html"));?>
			</p>
            <p><b>Мы предлагаем следующие услуги:</b></p>
            <div class="container-fluid">
                <ul class="list-checked col-md-6">
                    <li>Проектирование</li>
                    <li>Монтаж</li>
                </ul>
                <ul class="list-checked  col-md-6">
                    <li>Пусконаладка</li>
                    <li>Сопровождение</li>
                </ul>
            </div>
		</div>
        <div id="aboutfulltext" class="col-md-12 panel-collapse collapse" aria-expanded="false">
            <?$APPLICATION->IncludeFile(SITE_DIR . "/inc/description_fulltext.php", Array(), Array("MODE"=>"html"));?>
        </div>
	</div>
</div>
</section>
<div class="clearfix">
</div>
<br>