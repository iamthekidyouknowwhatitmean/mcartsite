<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Статистика");
?>

<?
  if($USER -> IsAuthorized()){
    LocalRedirect("dashboard/");
  }

  ?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>