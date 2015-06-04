<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php 
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;

$ref  = $_GET['reference'];
?>
<form method="post" action="MenuUtilisation.php?valeur=mms.php" enctype="multipart/form-data">
<input type="hidden" name="ref_com" value="<?php print $ref; ?>">
<label><?php echo $N1; ?>:</label><input type="text" name="objet" style="width:500px;"><br>
<label><?php echo $N2; ?>:</label><br>
<textarea name="contenu" id="contenu" style="width:500px; height:83px"></textarea><br>
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
<label><?php echo $N3; ?>:</label><br>
<input type="file" name="piece_jointe[]" /><br>
<input type="file" name="piece_jointe[]" /><br>
<input type="file" name="piece_jointe[]" /><br><br>
<input type="reset" name="reset" value="<?php echo $N4; ?>" /><input type="submit" name="send" value="<?php echo $N5; ?>" />
</form>
<?php
}
?>