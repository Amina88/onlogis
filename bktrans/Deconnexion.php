<?php
session_start();
//session_destroy();

if (session_destroy()) {
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
<?php
} else {
echo 'Erreur : impossible de détruire la session !';
}


?>