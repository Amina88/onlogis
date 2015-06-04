
<?php

if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){

?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } 
$url_snd=$_SESSION['login'].".".$N113;
$titre_snd=$N112;
$msg=$N114;
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
 include ('Connection.php');
 $id="";
 $tb="export";
 $page="";
 if(isset($_GET['id'])){$id=$_GET['id'];}
 if(isset($_GET['tb'])){$tb=$_GET['tb'];}
 if(isset($_GET['tb'])){$page=$_GET['tb'];}
if(isset($_GET['send_operation'])){

 $s=mysql_query("select id,Ref_doss,client,Tracking  from $tb  where  id='$id'");
$admin=mysql_fetch_array($s);
$C=$admin[2];
$sub=$admin[0].','.$admin[1].','.$admin[2]; 
$req = mysql_query("select AdressMail from custemer where Nom_Soc='$C';");
$tck = mysql_fetch_array($req);
}elseif(isset($_GET['send_invoice'])){
$s=mysql_query("select client  from invoice  where  id_facture='$id'");
$admin=mysql_fetch_array($s);
$C=$admin[0];
$req = mysql_query("select AdressMail from custemer where Nom_Soc='$C';");
$tck = mysql_fetch_array($req);
$sub="";

}elseif(isset($_GET['send_offre'])){
$s=mysql_query("select client  from offre  where  id_offre='$id'");
$admin=mysql_fetch_array($s);
$C=$admin[0];
$req = mysql_query("select AdressMail from custemer where Nom_Soc='$C';");
$tck = mysql_fetch_array($req);
$sub="";

}else{
 $s=mysql_query("select fournisseur  from purchase  where  reference='$id'");
$admin=mysql_fetch_array($s);
$C=$admin[0];
$req = mysql_query("select AdressMail from supplier where Nom_Soc='$C';");
$tck = mysql_fetch_array($req);
$sub="";
}




?>

<div class="portlet light">
				<div class="portlet-body">
					<div class="row inbox">
						<div class="col-md-2" style="display:none;" >
							<ul class="inbox-nav margin-bottom-15">
								<li class="compose-btn "  style="display:none;">
									<a  data-title="Compose" class="btn green">
									<i class="fa fa-edit"></i> Compose </a>
								</li>
								<li class="inbox active" style="display:none;">
									<a href="javascript:;" class="btn" data-title="Inbox">
								</a>
									<b></b>
								</li>
							</ul>
						</div>
						<div class="col-md-12">
							
							<div class="inbox-contentdd">
							<form class="inbox-compose form-horizontal" id="fileupload" action="Envoiyer.php?send=ok" method="POST" enctype="multipart/form-data">
	<div class="inbox-compose-btn">
		</div>
	<div class="inbox-form-group mail-to">
		<label class="control-label">To:</label>
		<div class="controls controls-to">
			<input type="text" required class="form-control" name="destinataire" id="to"  VALUE="<?php echo $tck[0]; ?>" style="width: 100%;">
			
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
			<input type="text" class="form-control" name="objet"  VALUE="<?php echo $sub; ?>" style="width: 100%;">
		</div>
	</div>
	<div class="inbox-form-group">
		<textarea  required class="inbox-editor inbox-wysihtml5 form-control" name="tracking" id="tracking" rows="12"></textarea>
	</div>
	<div class="inbox-form-group">
	<table style="width:100%"><tr><td>
	<a href="bktrans_data/<?php echo "$id.pdf"; ?>"  target="_link" ><?php echo "$id"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></a>
	</td>
	<td>
	<input type="checkbox" value="<?php echo "$id.pdf"; ?>" name="operation_file" id="operation_file" >
	</td>
	</tr>
	<?php $file_attach=mysql_query("select * from attach");
while($docu = mysql_fetch_array($file_attach)){
	?>
	<tr><td>
	<a href="bktrans_data/<?php echo "$docu[2]"; ?>"  target="_link" ><?php echo "$docu[1]"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></a>
	</td>
	<td>
	<input type="checkbox" value="<?php echo "$docu[2]"; ?>" name="attach_ent[]" id="operation_file" >
	</td>
	</tr>
	<?php }  ?>
	
	</table>
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
            <td colspan="2"></td>
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
<input type="hidden" name="msg"  value="<?php echo $msg; ?>" >
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
?>
