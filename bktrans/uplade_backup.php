<?php
if(isset($_POST["code"])){
$uploaddir = 'backup_data_base/';
$uploadfile = $uploaddir . basename($_FILES['file_date']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['file_date']['tmp_name'], $uploadfile)) {

$link="MettreAjourCodes.php?backup=$uploadfile";
}else{
$link="MettreAjourCodes.php";

}
}else{
$uploaddir = 'backup_data_base/';
$uploadfile = $uploaddir . basename($_FILES['file_date']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['file_date']['tmp_name'], $uploadfile)) {

$link="MettreAjourDateBase.php?backup=$uploadfile";
}else{
$link="MettreAjourDateBase.php";

}

}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>