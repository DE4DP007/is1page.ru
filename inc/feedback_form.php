<?require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');?>

<?//<section class="feedback_block">?>
<div class="cta-area" id="footingfeedback">
    <div class="bg-primary pattern parallax"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="ct-action">
                    <h4 class="title-one">Если Вы заинтересованы в сотрудничестве,</h4>
                    <h4 class="title-two">а также по любым интересующим вопросам Вы можете написать нам</h4>

                    <?$APPLICATION->IncludeComponent("bitrix:main.feedback", ".default", Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "EMAIL_TO" => "info@intellesys.ru",	// E-mail, на который будет отправлено письмо
                        "EVENT_MESSAGE_ID" => "7",	// Почтовые шаблоны для отправки письма
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
                        "REQUIRED_FIELDS" => "MESSAGE",	// Обязательные поля для заполнения
                        "USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
                    ),
                        false
                    );?>
                </div>

            </div>
        </div>
    </div>
</div>
<?//</section>?>

