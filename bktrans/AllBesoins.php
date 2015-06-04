<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

require'includes/recAllBesoins.php';
if($etat)
{
?>
<script type="text/javascript">

	function findordre(){
    var ordre = null;
        if(window.XMLHttpRequest) 
        ordre = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        ordre = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        ordre = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    ordre= false;
    }
    return ordre;
    }
  
    function findordr(c,b){
	
    var ordre = findordre();

    ordre.onreadystatechange = function(){
	
    if(ordre.readyState == 4 && ordre.status == 200)
        {
	
    leselect = ordre.responseText;
   document.getElementById("centent").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    ordre.open("POST","verification_donne.php",true);
	
    ordre.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
	cb=document.getElementById("search").value;
	indice=c;
		etat=document.getElementById("etat").value;
	pay=document.getElementById("factur").value;
	max=document.getElementById("max").value;
	
ordre.send("search_commande="+cb+"&indice="+indice+"&ordre="+b+"&etat="+etat+"&pay="+pay+"&max="+max+"&OP=");

    }
</script>


<?php
include ("Connection.php");

$s=mysql_query("select * from purchase where confirmation=1  AND etat_paiement='0' AND operation='' order by reference ASC ");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

?>
<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
		<table class="table  table-bordered table-hover" id="sample_1" >
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N4; ?></th>
					<th><font size="1"><?php echo $N5; ?></th>
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N7; ?></th> 
    				<th><font size="1"><?php echo $N8; ?></th>
					<th><font size="1"><?php echo $N29; ?></th>
					<th><font size="1"><?php echo $N9; ?></th>
    				<th><font size="1"><?php echo $N28; ?></th>
					<th><font size="1"><?php echo $N10; ?></th>
					<th><font size="1"><?php echo $N11; ?></th>
					
				</tr> 
			</thead>
           <tbody>			
			<?php while($admin=mysql_fetch_array($s)){
			
			$trmp= mysql_query("SELECT terme_paiement  from  `supplier` where Nom_Soc='$admin[1]'");
			 $trmpfour=mysql_fetch_array($trmp);
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			   $client = str_replace('&','%26',$admin[1]);
			   $Titre = str_replace(' ','%20',$N27);
			   $Titr = str_replace(' ','%20',$N28);
			   $client = str_replace(' ','%20',$client);
			   $date=date("Y-m-d");
			 $Auj = explode('-',$date);
			 $val_echue=0;
			 if($admin[17]!=NULL){
			 $ann=$trmpfour[0]/365;
			 
			 $anne=explode('.',$ann);
			 if(isset($anne[1])){
			 $moi=($anne[1]*365)/30;
			 }else{
			 $moi=0;
			 }
			 $moiss=explode('.',$moi);
			 if(isset($moiss[1])){
			 $jour=$moiss[1]*30;
			 }else{
			 $jour=0.0;
			 }
			 $jours=explode('.',$jour);
			 
			 $DateF = explode('-',$admin[17]);
			 $jours=$jours[0]+$DateF[2];
		
			 if($jours>30){
			 $mois=$moiss[1]+1;
			 $jours=$jours-30;
			 }
			 $mois=$moiss[0]+$DateF[1];
			  $anne=$anne[0]+$DateF[0];
			  if($mois>12){
			 $mois=$mois-12;
			$anne=$anne+1;
			 }
			
			 $j=sprintf("%02d",$jours);
			 $m=sprintf("%02d",$mois);
			 $a=sprintf("%04d",$anne);
			 
			// sprintf('%02d',$mois)/sprintf('%04d',$anne)";
			$anECH=$a-$DateF[0];
			$mECH=$m-$DateF[1];
			$jECH=$j-$DateF[2];
			$val_echue=($anECH*360)+($mECH*30)+($jECH);
			$val_echue=$val_echue*(-1);
			}
			
			$FR=substr ($admin[1], 0,8 );
			?>		
				<tr > 
   					 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N30." ".$admin[0];?>&url=<?php echo $url2.$N31;?> "><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1">
					<a  title="<?php echo $admin[1]; ?>" href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $admin[1];?>&mdf=0&titre=<?php echo $admin[1]; ?>&url=<?php echo$url3?>">
					<?php echo $FR; ?></font></td> 
    				<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[17];?></font></td>
					<td><font size="1"><?php echo $val_echue;?></font></td> 
					<td><font size="1"><?php echo number_format($tot1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					
					<td><font size="1"><?php   echo $admin[5]; ?></font></td> 
					

<?php
$finalstate = "";
$etat = $admin[6];
if ($etat == 1){
$finalstate =  '<span class="label label-sm label-info">'.$N13.'</span>';
}
else{
$finalstate =  '<span class="label label-sm label-info">'.$N14.'</span>';
}
$fin = "";
$eta = $admin[8];
if ($eta == 1){
$fin = "<a href=MenuUtilisation.php?valeur=detaille_payement.php&titre=$admin[0]&id=$admin[0]><span class='label label-sm label-success'>$N15</span>";
}else{
if($admin[19]=="1"){
$fin = '<span class="label label-sm label-warning">'.$N22.'</span>';
}else{
$fin = '<span class="label label-sm label-danger">'.$N14.'</span>';
}
}

if($admin[17]==NULL){
$recpt="MenuUtilisation.php?valeur=reception_factures.php&titre=$Titr&id=$admin[0]";
$RcptStat =  '<a href='.$recpt.'>
<span class="label label-sm label-danger">'.$N14.'</span>';
}else{
$recpt="MenuUtilisation.php?valeur=reception_factures.php&titre=$Titr&id=$admin[0]";
$RcptStat =  '<a href='.$recpt.'>
<span class="label label-sm label-success">'.$N13.'</span>';}
?>
					
					<td><font size="2"><?php echo $RcptStat;?></font></td> 
					<td><font size="2"><?php echo $finalstate;?></font></td> 
					
					<td>
					<?php echo $fin;?>
					</td> 
					 
    				
				</tr> 				
<?php  }  ?>
         </tbody>
      </table>
    </div>
</div>
<?php  
 } else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	