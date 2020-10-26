<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AUTH_FORGOT_PASSWORD_URL" => "/avtorizatsiya/restore.php",
		"AUTH_REGISTER_URL" => "/avtorizatsiya/reg.php",
		"AUTH_SUCCESS_URL" => "/avtorizatsiya/profile.php"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>