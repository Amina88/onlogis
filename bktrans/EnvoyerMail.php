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
 
 include("index.php");
?>
<form method="Post" action="mail/mail.php" id="formmail" >
<Div id="file_upp">

</Div>
<table>

<tr>
<td ><h5><br><?php echo $N1; ?><font color="red">  *</font></h5>
<input type="text" name="destination" value="" required="required"></td></tr>
<tr>
<td ><h5><?php echo $N2; ?></h5>
<input type="text" name="Sujet" value="" required="required"></td>
</tr>
<tr>
<td  colspan="2" rowspan="8"><h5><?php echo $N3; ?></h5>
<textarea name="message" cols="30" rows="2" style="margin: 0px 127.44792175292969px 10px 0px; width: 800px; height: 86px;" required="required"></textarea>
<input type="submit" value="<?php echo $N4; ?>" class="alt_btn" >
</td></tr>



</table>

<?php  }  ?>


</form>



