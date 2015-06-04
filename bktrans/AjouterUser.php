<?php 
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
<?php
}
if("$permission[1]"=="Administrateur" || "$permission[12]"=='1'){ 
$url=$N35.".".$N36.".".$N38;
$titremsg=$N38; 
$titre=$N38;
if(isset($_GET['sv'])){

$doc = new DOMDocument(); 
 
$doc->load($_SESSION['lang_out_Manu']); 
$Menu = $doc->getElementsByTagName("out_Menu"); 
				

foreach( $Menu as $Menu_util ) 
{ 
                                  $V3 = $Menu_util->getElementsByTagName("e3"); 
  $N3 = $V3->item(0)->nodeValue;

$pwd=$_GET['password'];
$password=md5($pwd);
$nom=$_GET['nom'];
$email=$_GET['email'];
$tel1=$_GET['tel1'];
$cin=$_GET['CIN'];
$adress=$_GET['adress'];
$t_acces=$_GET['t_acces'];
$user=$_GET['user'];
include ("Connect_demo.php");
//echo "insert into users values('$email','$password','$t_acces','$nom','$cin','$tel1','$adress')";
$etat_up=mysql_query("insert into users values('$email','$password','$t_acces','$nom','$cin','$tel1','$adress','','','$user')");

include ("Connection.php");
$etat_up=mysql_query("insert into users values('$email','$password','$t_acces','$nom','$cin','$tel1','$adress','','','$user')");


$pfx=$email;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=AllUser.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";



	?>
 <script type="text/javascript"> 
 document.location.href="<?php echo $link; ?>";
 </script>
  
 
<?php


	}
	}else{
		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue; $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;
?>
<script>
function confirmation_pass(){
a=document.getElementById('pwd').value;
b=document.getElementById('pass_conf').value;
if(a != b){
document.getElementById('msg').innerHTML="<font color=red> <?php echo $N1; ?></font>";
document.getElementById('Sub').innerHTML="";
}else{
document.getElementById('Sub').innerHTML='<div class="form-actions" ><div class="row"><div class="col-md-offset-3 col-md-9"><button type="submit" class="btn green" name="sv" ><?php echo $N2; ?></button></div></div></div>';
document.getElementById('msg').innerHTML="";
document.getElementById('pass_conf').required="required";
}
}

function Check()
{
	password = document.getElementById("pwd").value;
	passwordlow = password.toLowerCase();
	majuscule = false;
	
	//On vérifie si il y a des majuscules
	if(password != passwordlow)
	{
		majuscule = true;
	}
	
	taille = password.length;
	numerique = false;
	speciaux = false;
	// On vérifie qu'il y a des chiffres
	for(i=0;i<taille-1;i++)
	{
		caractere = password.substring(i,i+1);
		if(!isNaN(caractere))
		{
			numerique = true;
		}
	}
	if(password.indexOf("@")>=0 || password.indexOf("&")>=0 || password.indexOf(";")>=0|| password.indexOf(":")>=0|| password.indexOf(",")>=0|| password.indexOf("<")>=0|| password.indexOf(">")>=0|| password.indexOf("-")>=0|| password.indexOf("_")>=0|| password.indexOf(")")>=0|| password.indexOf("(")>=0|| password.indexOf("}")>=0|| password.indexOf("{")>=0|| password.indexOf("]")>=0){
	
	speciaux=true;
	}
	
	
	//password.indexOf("@!&;,:(_=></.\]}{")
	if((majuscule==false && numerique==false && speciaux==false))
	{
		if(document.getElementById)
		{
		document.getElementById("faible").style.backgroundColor = 'green';
		document.getElementById("moyen").style.backgroundColor = 'white';
		document.getElementById("elevee").style.backgroundColor = 'white';
		}
	}
	else
	{
		if(speciaux && majuscule && numerique && taille>8 )
		{
			document.getElementById("faible").style.backgroundColor = 'green';
			document.getElementById("moyen").style.backgroundColor = 'green';
			document.getElementById("elevee").style.backgroundColor = 'green';
			
		}else if(majuscule && numerique && taille>=8)
		{
			document.getElementById("faible").style.backgroundColor = 'green';
			document.getElementById("moyen").style.backgroundColor = 'green';
			document.getElementById("elevee").style.backgroundColor = 'white';
		}
		 
	}
}
</script>
<div class="portlet box yellow">
                       <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo strtoupper($_GET['titre']);?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
					<div class="portlet-body form">
						<form action="" class="form-horizontal" method="GET" id="form_sample_2">
						
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N14; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="user" value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N4; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												
												<input  class="form-control" type="password" name="password" id="pwd"
												value=""  required="required" OnKeyUp="Check();" />
											</div>
											<span class="help-block">
											<table border="1" width="200">
<tr>
<td id="faible" align="center" style="background-color :white;">Faible</td>
<td id="moyen" align="center" style="background-color :white;">Moyen</td>
<td id="elevee" align="center" style="background-color :white;">Fort</td>
</tr>
</table>
											 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="password" name="password" id="pass_conf" value=""  OnkeyUp="confirmation_pass();"/>
											</div>
											<span class="help-block" id="msg">
											 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N3; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="email" name="email" value="" required="required"/>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N6; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="t_acces" required>
										   <option></option>
										<option value="Administrateur"><?php echo $N9; ?></option>
                                        <option value="Agent_Finance"><?php echo $N10; ?></option>
                                        <option value="Agent_Operation"><?php echo $N11; ?></option>
																							
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N12; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="nom" value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N7; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="CIN" value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N8; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="tel1" value="" required="required"/>
											</div>
										</div>
									</div>
									<input type="hidden" name="valeur" value="AjouterUser.php" >
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N13; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="adress"   required="required" rows="1" data-error-container="#editor2_error"  ></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									   <div id="Sub">
	
	                                   </div>
									   
									</div>
						</form>
					</div>
			</div>

<?php }} }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>