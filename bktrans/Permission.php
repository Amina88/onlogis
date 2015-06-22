<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php
if("$permission[1]"=="Administrateur" || "$permission[12]"=='12'){
include ("Connection.php");
if(isset($_POST['Sauvgarder_permiss_ion'])){
$max=$_POST['max_CP'];
$user=$_POST['user'];
for($i=1;$i<=$max;$i++){
if(isset($_POST["selct$i"])){
$val=$_POST["selct$i"];

$etat=mysql_query("insert into services values('$user','$i')");

}else{
$etat=mysql_query("delete from  services where user='$user' and Service='$i'");
}
}
$pfx=$user;
$succes="error";
$titremsg=$N119;
if($etat){    
$succes=$titremsg.' : '.$pfx.'  '.$N133; 
$user1=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user1',  '$succes',  '$date_time', NULL)");
}

$titre=$_POST['titre'];
$url=$_POST['urll'];
$link="MenuUtilisation.php?valeur=Permission.php&titre=$titre&url=$url&etat_up=$etat&email=$user&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
  <?php
}elseif(isset($_POST['etatchangedata'])){

include ("Connect.php");

$table=$_POST['data'];
$email=$_POST['user'];
$etat=mysql_query("delete from  `user_database` where user='$email'")or die(mysql_error());
foreach($table as $dt){
$etat=mysql_query("insert into   `user_database`value('$dt','$email')")or die(mysql_error());
}
$succes="error";
$titremsg=$N119;
if($etat){    
$succes=$titremsg.' : '.$email.'  '.$N133; 
$user1=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user1',  '$succes',  '$date_time', NULL)");
}
  include ("Connection.php");

$titre=$_GET['titre'];
$url=$_GET['urll'];
$link="MenuUtilisation.php?valeur=Permission.php&titre=$titre&url=$url&etat_up=$etat&email=$email&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
  <?php
}else{
$url=$N35.".".$N36.".".$N38;
$url2=$N35.".".$N36.".";
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
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
$N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
$N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
$N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
$N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
$N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
$N18 = $V18->item(0)->nodeValue;$V19 = $employee->getElementsByTagName( "e19" ); 
$N19 = $V19->item(0)->nodeValue;$V20 = $employee->getElementsByTagName( "e20" ); 
$N20 = $V20->item(0)->nodeValue;$V21 = $employee->getElementsByTagName( "e21" ); 
$N21 = $V21->item(0)->nodeValue;$V22 = $employee->getElementsByTagName( "e22" ); 
$N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
$N23 = $V23->item(0)->nodeValue;$V24 = $employee->getElementsByTagName( "e24" ); 
$N24 = $V24->item(0)->nodeValue;$V25 = $employee->getElementsByTagName( "e25" ); 
$N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
$N26 = $V26->item(0)->nodeValue;$V27 = $employee->getElementsByTagName( "e27" ); 
$N27 = $V27->item(0)->nodeValue;$V28 = $employee->getElementsByTagName( "e28" ); 
$N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
$N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
$N30 = $V30->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
$N31 = $V31->item(0)->nodeValue;
$V32 = $employee->getElementsByTagName( "e32" );$N32 = $V32->item(0)->nodeValue;
$V33 = $employee->getElementsByTagName( "e33" );$N33 = $V33->item(0)->nodeValue;
$V34 = $employee->getElementsByTagName( "e34" );$N34 = $V34->item(0)->nodeValue;
$V35 = $employee->getElementsByTagName( "e35" );$N35 = $V35->item(0)->nodeValue;
$V36 = $employee->getElementsByTagName( "e36" );$N36 = $V36->item(0)->nodeValue;
$V37 = $employee->getElementsByTagName( "e37" );$N37 = $V37->item(0)->nodeValue;
$V38 = $employee->getElementsByTagName( "e38" );$N38 = $V38->item(0)->nodeValue;
$V39 = $employee->getElementsByTagName( "e39" );$N39 = $V39->item(0)->nodeValue;
$V40 = $employee->getElementsByTagName( "e40" );$N40 = $V40->item(0)->nodeValue;
$V41 = $employee->getElementsByTagName( "e41" );$N41 = $V41->item(0)->nodeValue;
$V42 = $employee->getElementsByTagName( "e42" );$N42 = $V42->item(0)->nodeValue;
$V43 = $employee->getElementsByTagName( "e43" );$N43 = $V43->item(0)->nodeValue;
$V44 = $employee->getElementsByTagName( "e44" );$N44 = $V44->item(0)->nodeValue;
$V45 = $employee->getElementsByTagName( "e45" );$N45 = $V45->item(0)->nodeValue;
$service=array("$N4","$N5","$N6","$N7","$N8","$N9","$N10","$N11","$N12","$N13","$N14","$N15","$N16","$N17","$N18","$N19","$N20","$N21","$N22","$N23","$N24","$N25","$N26","$N27","$N28","$N29","$N30","$N31","$N32","$N33","$N34","$N37","$N38","$N39","$N40","$N41","$N42","$N44","$N45");

?>
<script type="text/javascript"> 
function checkAll(ele) {

     var max = document.getElementById('max_CP').value;

  
     if (ele.checked) {
         for (var i = 1; i <= max; i++) {
		   if(document.getElementById("choix"+i)){
		 document.getElementById("choix"+i).innerHTML='<div class="checker" ><span class="checked"><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'" checked="checked"  onClick="checkun('+i+');" onMouseOut="TotallCheck();" ></span></div>';
                    }    
         }
     } else {
         for (var i = 1; i <= max; i++) {
		    if(document.getElementById("choix"+i)){
             document.getElementById("choix"+i).innerHTML='<div class="checker"><span ><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'"   onClick="checkun('+i+');"  onMouseOut="TotallCheck();"  ></span></div>';
        
         }}
     }
 }
 function checkun(ele) {

var inp=document.getElementById("selct"+ele);

     if (inp.checked) {
	
        document.getElementById("choix"+ele).innerHTML='<div class="checker"><span class="checked"><input type="checkbox" checked value="1" id="selct'+ele+'" name="selct'+ele+'"  onClick="checkun('+ele+');"  onMouseOut="TotallCheck();"   ></span></div>';

     } else {
        document.getElementById("choix"+ele).innerHTML='<div class="checker" ><span ><input type="checkbox" value="1"  id="selct'+ele+'"  name="selct'+ele+'"   onClick="checkun('+ele+');"  onMouseOut="TotallCheck();" ></span></div>';
         
         
     }
 }
 
  </script> <div class="portlet-body">
			
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N2; ?></a>
										</li>
										
										
									</ul>
									</div>
									<div class="tab-content no-space">
										
										  <div class="tab-pane active" id="tab_general">
										 
										 
   <form  action="MenuUtilisation.php?valeur=Permission.php" method="Post">
		   

		

					
		<table class="table table-striped table-bordered table-hover"  >
		<thead>
				<tr> 
    				<th><font size="1">#</th> 
    				<th><font size="1"><?php echo $N1; ?></th> 
					<th><font size="1"><?php echo $N2; ?><input type="checkbox"  value="" onclick="checkAll(this);" onMouseOut="TotallCheck();"   id="dd" ></th>
    				
    				
				</tr> 
			</thead> 
			<tbody> 

			<?php 
              
			for($i=1;$i<=count($service);$i++){ ?>
			<tr> <td><font size="1"><?php echo $i; ?></a></font></td>
			<td><font size="1"><?php echo $service[$i-1]; ?></a></font></td> 
			<td><div id="choix<?php echo $i; ?>"><input type="checkbox" value="<?php echo $i; ?>" id="selct<?php echo $i; ?>" name="selct<?php echo $i; ?>" onMouseOut="TotallCheck();" <?php $user=$_GET['email'];$req=mysql_query("select * from  services where user='$user' and Service='$i'"); if(mysql_fetch_array($req)){ echo "checked" ;} ?> ></div></td>
		<?php } ?>
			 <tbody>
				<input type="hidden" value="<?php echo $i; ?>" id="max_CP" name="max_CP"  >
				<input type="hidden" value="<?php echo $_GET['email']; ?>" id="user" name="user"  >
				<input type="hidden" value="<?php echo $_GET['url']; ?>" id="user" name="urll"  >
				<input type="hidden" value="<?php echo $_GET['titre']; ?>" id="user" name="titre"  >
				
			 
			 </table>
			  
			 <br>
			<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
<button  class="btn blue-hoki"  name="Sauvgarder_permiss_ion" type="submit"><?php echo $N3; ?></button>
											
										
									</a>
									</div>
									 </div>									
                                    </div>
                    
			<br />
		
			</form>
			</div>
		 <div class="tab-pane" id="tab_meta">
				<form  action="MenuUtilisation.php?valeur=Permission.php&email=<?php echo $_GET['email']; ?>&urll=<?php echo $_GET['url']; ?>&titre=<?php echo $_GET['titre']; ?>" method="POST">		
                 <div class="portlet-body" >
				  <table class="table table-striped table-bordered table-hover" >
				<thead>
			
				<tr> 
    				 <th><font size="1">#</font></th>
    				 <th><font size="1"><?php echo $N35; ?></font></th> 
    				 <th><font size="1"><?php echo $N36; ?></font></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php
			
		$data=	$_SESSION['databases'];
			include ("Connect.php"); 
			$requete=mysql_query("select * from control_panel where databese='$data' ");
		$emaild=$_GET['email'];
		$i=0;
			while($email=mysql_fetch_array($requete)){
			$i++;
			$requetee=mysql_query("SELECT * FROM `user_database` WHERE `database`='$email[0]' AND `user`='$emaild'");
			
		
		
$us=mysql_fetch_array($requetee);

?>
			
				<tr> 
    				<td><font size="1"><?php echo $i;?></td> 
    				<td><font size="1"><?php echo $email[2];?></td> 
				<td><font size="1"><input type="checkbox" name="data[]" <?php if($us){echo "checked";}  ?> value="<?php echo $email[0] ;?>"><font size="1"><input type="hidden" name="user" value="<?php echo $emaild ;?>"></td> 
</tr>
<?php } ?>	</tbody>	</table>	
<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
<button  class="btn blue-hoki"  name="etatchangedata" type="submit"><?php echo $N3; ?></button>
											
										
									</a>
									</div>
									 </div>									
                                    </div>		
					</form>					 </div>
										 </div>
										 </div> </div>
           					
		<?php
}
}
			
 
?>
<?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php }?>