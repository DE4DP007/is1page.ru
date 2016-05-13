<?
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
?>
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", ".default", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"EMAIL_TO" => "#EMAIL#",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "7",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => "MESSAGE",	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?>