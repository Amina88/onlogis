<?php
session_start();

$upload_dir = "../bktrans_data/";

if (isset($_FILES["myfile"])) {
include("../Connection.php");
$op=$_POST['operation'];
    $no_files = count($_FILES["myfile"]['name']);
    for ($i = 0; $i < $no_files; $i++) {

        if ($_FILES["myfile"]["error"][$i] > 0) {
            echo "Error: " . $_FILES["myfile"]["error"][$i] . "<br>";
        } else {
$description=$_POST["$i"];
 $nomFichier=$_FILES["myfile"]["name"][$i];

            move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $upload_dir . $_FILES["myfile"]["name"][$i]);
			 $ex = explode('.',$nomFichier);
			 
			rename($upload_dir.$nomFichier,$upload_dir.$op.date("Y-m-d H-i-s").'.'.$ex[count($ex)-1]);
			$file=$op.date("Y-m-d H-i-s").'.'.$ex[count($ex)-1];
		if(isset($_POST['Doc_entreprise'])){
		$requete=mysql_query("insert into attach value('','$description','$file',CURRENT_TIMESTAMP)")or die(mysql_error());
			
		}else{
			$requete=mysql_query("insert into attach_envoi value('$op','$file','$description')");
			}
			}
            
        }
    
    ?>
	
	<div class="alert alert-block alert-success fade in">
								<button type="button" class="close" data-dismiss="alert"></button>
								<h4 class="alert-heading" id="status">Success!</h4>
								<p>
									
								</p>
								
							</div>
	
	<?php
}
?>