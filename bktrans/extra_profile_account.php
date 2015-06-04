<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?> 
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<?php
if(isset($_POST['Sauvgarder'])){
$nom=$_POST['nom'];
$tel1=$_POST['tel'];
$adress=$_POST['adr'];
$occupation=$_POST['occupation'];
$mail=$_SESSION['login'];
$url=$_GET['url'];
$etat_up=mysql_query("Update users set Nom_prenom='$nom',Telphone='$tel1',adress='$adress',occupation='$occupation' where Email='$mail'") ;

$link="MenuUtilisation.php?valeur=extra_profile_account.php&url=$url";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";	
</script>
<?php }
?>


<?php
if(isset($_POST['Sauvgarder2'])){
$mail=$_SESSION['login'];
$pwd=$_POST['password'];
$fullname=$_POST['fullname'];
$pwd=md5($pwd);
$etat_up=mysql_query("Update users set password='$pwd',Nom_Utilisateur='$fullname' where Email='$mail'") ;
//$_SESSION = array();
session_destroy();
$link="../index.php";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";	
</script>
<?php } ?>
<?php 
if(isset($_POST['Sauvgarder_avatar'])){
$mail=$_SESSION['login'];
$url=$_GET['url'];
$avatar=$_POST['avatare'];
$etat_up=mysql_query("Update users set avatar='$avatar' where Email='$mail'") ;

$link="MenuUtilisation.php?valeur=extra_profile_account.php&url=$url";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";	
</script>
<?php }
?>




  <?php 
 foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue; 
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" );  $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" );  $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" );  $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" );  $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" );  $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" );  $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" );  $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" );  $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" );  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" );  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" );  $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" );  $N23 = $V23->item(0)->nodeValue;
  $V24 = $employee->getElementsByTagName( "e24" );  $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" );  $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" );  $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" );  $N27 = $V27->item(0)->nodeValue;
  $V28 = $employee->getElementsByTagName( "e28" );  $N28 = $V28->item(0)->nodeValue;

  

  

		$mail=$_SESSION['login'];
		$url=$_GET['url'];
		$Users=mysql_query("select * from users where Email ='$mail'");
		$usr=mysql_fetch_array($Users);
		?>
		<script type="text/javascript">
function SearchINV(){
    var SearchIN = null;
        if(window.XMLHttpRequest) 
        SearchIN = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        SearchIN = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        SearchIN = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    SearchIN= false;
    }
    return SearchIN;
    }
  
    function SERCH_IN(){
	var SearchIN = SearchINV();

    SearchIN.onreadystatechange = function(){
	
    if(SearchIN.readyState == 4 && SearchIN.status == 200)
        {
	
    leselect = SearchIN.responseText;

if(leselect=="0"){
document.getElementById("donnes").innerHTML="<font color='#a94442'>Mot de pass incorrect</font>";
document.getElementById("pass").value="";
document.getElementById("gopass").innerHTML='<button type="reset" class="btn " name="Sauvgarder2"  value="Sauvgarder"><?php echo $N13; ?></button	>';

}else{
document.getElementById("gopass").innerHTML='<button type="submit" class="btn green-haze" name="Sauvgarder2"  value="Sauvgarder"><?php echo $N13; ?></button	>';
document.getElementById("donnes").innerHTML="";
}
 

  
	}
    }
	
    // Ici on va voir comment faire du post
    SearchIN.open("POST","verification_password.php",true);
	
    SearchIN.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	
	pss=document.getElementById("pass").value;
	
if(pss!=''){
SearchIN.send("pass="+pss);
}else{
document.getElementById("gopass").innerHTML='<button type="reset" class="btn " name="Sauvgarder2"  value="Sauvgarder"><?php echo $N13; ?></button	>';

}

    }
	
	function Check()
{
	password = document.getElementById("submit_form_password").value;
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
</script>
<body class="page-header-fixed page-sidebar-closed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->



			<div class="row">
				<div class="col-md-12">
					
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase"><?php echo $N17; ?></span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab"><?php echo $N14; ?></a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab"><?php echo $N15; ?></a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab"><?php echo $N16; ?></a>
											</li>
											
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form  class="form-horizontal"  role="form" action="MenuUtilisation.php?valeur=extra_profile_account.php&url=<?php echo $url;?>" id="form_sample_2" method="post">
													<div class="form-group">
														<label class="control-label"><?php echo $N9; ?></label>
														<input type="text"  name="nom" class="form-control" value="<?php echo $usr['Nom_prenom'];?>" readonly />
													</div>
													
													<div class="form-group">
														<label class="control-label"><?php echo $N11; ?></label>
														<input type="number"  class="form-control" value="<?php echo $usr['Telphone'];?>" name="tel" required/>
													</div>
													<div class="form-group">
														<label class="control-label"><?php echo $N12; ?></label>
														<input type="text"  class="form-control" value="<?php echo $usr['adress'];?>" name="adr" required/>
													</div>
													<div class="form-group">
														<label class="control-label"><?php echo $N18; ?></label>
														<input type="text"  class="form-control" value="<?php echo $usr['occupation'];?>" name="occupation" required/>
													</div>
													
													<div class="margiv-top-10">
													 <button type="submit" class="btn green-haze" name="Sauvgarder"  value="Sauvgarder"><?php echo $N13; ?></button	>
													 </div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												
												<form action="MenuUtilisation.php?valeur=extra_profile_account.php&url=<?php echo $url;?>" method="post" role="form">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
														<?php   
					                                 	$email=$_SESSION['login'];
						                                $user=mysql_query("select * from  users where Email='$email'");
                                                        $userinfo=mysql_fetch_array($user);
						                                if($userinfo['avatar']!=NULL){
														?>
															<div class="fileinput-new thumbnail">
																<img src="<?php echo $userinfo['avatar'];?>" alt=""/>
															</div>
															<?php }else{?>
															<div class="fileinput-new thumbnail" style="width: 45px; height: 45px;">
																<img src="../assets/admin/layout4/img/avatar.png" alt=""/>
															</div>
															<?php }?>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																<?php echo $N22; ?> </span>
																<span class="fileinput-exists">
																<?php echo $N23; ?> </span>
																<input type="file" name="...">
																</span>
																<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																<?php echo $N24; ?> </a>
															</div>
														</div>
														
													</div>
													<div class="margin-top-10">
													<button type="submit" class="btn green-haze" name="Sauvgarder_avatar"  value="Sauvgarder"><?php echo $N13; ?></button>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form  role="form" action="MenuUtilisation.php?valeur=extra_profile_account.php&url=<?php echo $url;?>" class="form-horizontal" id="submit_form" method="POST">
													<div class="form-group">
														<label class="control-label"><?php  echo $N25;?></label>
														<input type="text" class="form-control" name="fullname" id="fullname"  value="<?php echo $userinfo[9];  ?>"  required/>
													</div>
													
													<div class="form-group">
														<label class="control-label"><?php  echo $N19;?></label>
														<input type="password" class="form-control" name="oldpassword" id="pass"  OnMouseOut="SERCH_IN()" required/>
													</div>
													
													<div id="donnes">
													</div>
													<div class="form-group">
														<label class="control-label"><?php  echo $N20;?></label>
														<input type="password" class="form-control" name="password" id="submit_form_password" OnkeyUp="Check();"/>
													
													<span class="help-block">
											<table border="1" width="200">
<tr>
<td id="faible" align="center" style="background-color :white;"><?php  echo $N26;?></td>
<td id="moyen" align="center" style="background-color :white;"><?php  echo $N27;?></td>
<td id="elevee" align="center" style="background-color :white;"><?php  echo $N28;?></td>
</tr>
</table>
											 </span>
													</div>
													<div class="form-group">
														<label class="control-label"><?php  echo $N21;?></label>
														<input type="password" class="form-control" name="rpassword"/>
													</div>
													<div class="margin-top-10" id="gopass">
													 <button type="submit" class="btn  " name="Sauvgarder2"  value="Sauvgarder"><?php echo $N13; ?></button	>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- PRIVACY SETTINGS TAB -->
											
											<!-- END PRIVACY SETTINGS TAB -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>




<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
<?php }?>
</html>