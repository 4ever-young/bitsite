<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "тестовое значени");
$APPLICATION->SetPageProperty("keywords_inner", "Отзывы");
$APPLICATION->SetPageProperty("title", "отзывы, компания, мебель");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
?>

Text here....
    <p>заголовок <? $APPLICATION->ShowTitle();?></p>
    <p>свойства <? $APPLICATION->ShowProperty("test");?></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>