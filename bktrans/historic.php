<?php

require'includes/RecHistoric.php';
  if($etat){


include ("Connection.php");
$s=mysql_query("select * from historic");


require 'views/ViewHistoric.php';
}  else{ 
  ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>