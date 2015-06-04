<?php
//session_start();
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){

?>
<script type="text/javascript"> 
document.location.href="../index.php";
</script>
  <?php } ?>
<?php

if(isset($_POST['envoi'])){
$user= $_SESSION['login'];
$day=date('Y-m-d H:i:s');
$too=$_POST['to'];
$to=explode(";",$too);
$nomm=$_POST['nom'];
$nom=explode(";",$nomm);
$ccc=$_POST['cc'];
$cc=explode(";",$ccc);
$sub=$_POST['sub'];
$msg=$_POST['msg'];
$m=$_POST['m'];
$url = $_POST['url_snd'];
$titre = $_POST['titre_snd'];
$emplc="../assets/global/plugins/jquery-file-upload/server/php/files";
if(isset($_POST['FIP'])){
$file=$_POST['FIP'];
}
$cmpt=0;
include("sendto.php");

if($to!=NULL){
foreach($to as $t){
$mail->AddAddress("$t", '');

$c_nom=$nom["$cmpt"];
$mail->Subject = "$sub";
$mail->msgHTML("Hello $c_nom <br> $msg");
$mail->AltBody = 'This is a plain-text message body';
if($cc!=NULL){
foreach($cc as $c){
$mail->AddCC("$c");
//echo"$mail->AddCC($c)";
}
}

if(isset($_POST['FIP'])){
$file=$_POST['FIP'];
foreach($file as $elm){
$mail->AddAttachment("$emplc/$elm");  

} 
}
if(!$mail->Send()) {
$res=0;
} else {
$res=1;
}

$too=str_replace("'", "''",$too);
$ccc=str_replace("'", "''",$ccc);
$sub=str_replace("'", "''",$sub);
$msg=str_replace("'", "''",$msg);
$user=str_replace("'", "''",$user);
$etat_up=mysql_query("insert into Mai_envoyer values ('','$day','$too','$ccc','$sub','$msg','$user')");

$cmpt++;
}
}
if(isset($_POST['FIP'])){
foreach($file as $elm){ 
unlink("$emplc/$elm");
}
}

if($res==0){
header("Location:MenuUtilisation.php?valeur=AllMAILEnvoiyer.php&titre=$titre&etat_up=0&url=$url");
}else{
header("Location:MenuUtilisation.php?valeur=AllMAILEnvoiyer.php&titre=$titre&etat_up=1&url=$url&msg=$m");
}


}else{

 include ('Connection.php');
   $m=$N114;
   $url_snd=$_SESSION['login'].".".$N113;
   $titre_snd=$N112;
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 



$to=$_GET['to'];
$nom=$_GET['nom'];
?>

<div class="portlet light">
				<div class="portlet-body">
					<div class="row inbox">
						<div class="col-md-2">
							<ul class="inbox-nav margin-bottom-10">
								
								<li class="compose-btn " >
									<a href="javascript:;" data-title="Compose" class="btn green">
									<i class="fa fa-edit"></i> Compose </a>
								</li>
								<li class="inbox active" style="display:none;">
									<a href="javascript:;" class="btn" data-title="Inbox">
								</a>
									<b></b>
								</li>
								
								
								
							</ul>
						</div>
						<div class="col-md-10">
							<div class="inbox-header">
								
							</div>
							<div class="inbox-loading">
								 Loading...
							</div>
							<div class="inbox-contentdd">
							<form class="inbox-compose form-horizontal" id="fileupload" action="" method="POST" enctype="multipart/form-data">
	<div class="inbox-compose-btn">
		<button class="btn blue" type="submit" name="envoi"><i class="fa fa-check"></i><?php echo $N4; ?></button>
		
	</div>
		<div class="inbox-form-group mail-to">
		<div class="controls controls-to">
			<input type="hidden" class="form-control" name="nom" id="nom"  VALUE="<?php echo $nom; ?>" style="width: 100%;">
			
		</div>
	</div>
	<div class="inbox-form-group mail-to">
		<label class="control-label">To:</label>
		<div class="controls controls-to">
			<input type="text" class="form-control" name="to" id="to"  VALUE="<?php echo $to; ?>" style="width: 100%;" readonly>
			
		</div>
	</div>
	<div class="inbox-form-group input-cc display">
		
		<label class="control-label">Cc:</label>
		<div class="controls controls-cc">
			<input type="text" name="cc" id="cc" class="form-control" style="width: 100%;">
		</div>
	</div>
	
	<div class="inbox-form-group">
		<label class="control-label">Subject:</label>
		<div class="controls">
			<input type="text" class="form-control" name="sub"  VALUE="" style="width: 100%;">
		</div>
	</div>
	<div class="inbox-form-group">
		<textarea class="inbox-editor inbox-wysihtml5 form-control" name="msg" id="tracking" rows="12"></textarea>
	</div>
	<div class="inbox-compose-attachment">
	
		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		<span class="btn green fileinput-button">
		<i class="fa fa-plus"></i>
		<span>
		Add files... </span>
		<input type="file" name="files[]" multiple>
		</span>
		<!-- The table listing the files available for upload/download -->
		<table role="presentation" class="table table-striped margin-top-10">
		<tbody class="files">
		</tbody>
		</table>
	</div>
	<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="name" width="30%"><span>{%=file.name%}</span></td>
        <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
        {% if (file.error) { %}
            <td class="error" width="20%" colspan="2"><span class="label label-danger">Error</span> {%=file.error%}</td>
        {% } else if (o.files.valid && !i) { %}
            <td>
                <p class="size">{%=o.formatFileSize(file.size)%}</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                   <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                   </div>
            </td>
        {% } else { %}
            <td colspan="2"></td>
        {% } %}
        <td class="cancel" width="10%" align="right">{% if (!i) { %}
            <button class="btn btn-sm red cancel">
                       <i class="fa fa-ban"></i>
                       <span>Cancel</span>
                   </button>
        {% } %}</td>
    </tr>
{% } %}
	</script>
	<!-- The template to display files available for download -->
	<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td class="name" width="30%"><span>{%=file.name%}</span></td>
            <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td class="error" width="30%" colspan="2"><span class="label label-danger">Error</span> {%=file.error%}</td>
        {% } else { %}
            <td class="name" width="30%">
                <a href="{%=file.url%}" title="{%=file.name%}" data-gallery="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size" width="40%"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td colspan="2"><input name="FIP[]" id="FIP[]" type="hidden"  value="{%=file.name%}"></td>
        {% } %}
        <td class="delete" width="10%" align="right">
            <button class="btn default btn-sm" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="fa fa-times"></i>
            </button>
        </td>
    </tr>
{% } %}
	</script>
<input type="hidden" name="url_snd"  value="<?php echo $url_snd; ?>" >
<input type="hidden" name="titre_snd"  value="<?php echo $titre_snd; ?>" >
<input type="hidden" name="m"  value="<?php echo $m; ?>" >
	<div class="inbox-compose-btn">
		<button class="btn blue" type="submit" name="envoi"><i class="fa fa-check"></i><?php echo $N4; ?></button>
	
	</div>
	
</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		
<!--[endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN: Page level plugins -->

<script>
jQuery(document).ready(function() {       

   Inboxoperation.init();
});
</script>

<?php } 
} 
?>

