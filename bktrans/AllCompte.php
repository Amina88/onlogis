<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllCompte.php';
				if($etat){
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
   document.getElementById("donnes").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SearchIN.open("POST","verification_donne.php",true);
	
    SearchIN.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	Searche=document.getElementById("Search_inv").value;	
	
	FCT=document.getElementById("Facture").value;
	mx=document.getElementById("max_suiv").value;
	

SearchIN.send("SearchINV_compte="+Searche+"&FCT="+FCT+"&mx="+mx);

    }
	
	//sss
function Search(){
    var SRCH = null;
        if(window.XMLHttpRequest) 
        SRCH = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        SRCH = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        SRCH = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    SRCH= false;
    }
    return SRCH;
    }
  
    function SERCH_op(){
	
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
	
    leselect = SRCH.responseText;
   document.getElementById("centent").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	search=document.getElementById("search").value;	
	
	FCT=document.getElementById("FCT").value;
	
	CMD=document.getElementById("CMD").value;

SRCH.send("search_compte="+search+"&FCT="+FCT+"&CMD="+CMD);

    }
	
function 	getdetaille(a){
	document.getElementById("dt"+a.id).innerHTML='<i id="'+a.id+'" class="fa fa-minus-square-o" onclick="Hiddetaille(this);" ></i>';
	document.getElementById("tr"+a.id).style.display = '';
	
	//dt
	//tr
	}
	function 	Hiddetaille(a){
	document.getElementById("dt"+a.id).innerHTML='<i id="'+a.id+'" class="fa fa-plus-square-o" onclick="getdetaille(this);" ></i>';
	document.getElementById("tr"+a.id).style.display = 'none';
	
	//dt
	//tr
	}
</script>


<head>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
			
				<?php 
				
				include ("Connection.php");
				$s=mysql_query("select * from bank_account  ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);

				?>
		<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N19; ?></a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											<?php echo $N20; ?></a>
										</li>
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											<?php echo $N21; ?> 
											</a>
										</li>
										
									</ul>
									</div>		
									<div class="tab-content no-space">
									<div class="tab-pane active" id="tab_general">
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
					 <th align="center" colspan="3"><font size="1"><?php echo $N6; ?></th>
                      <th><font size="1"><?php echo $N8; ?></th> 					 
					  <th><font size="1"><?php echo $N7; ?></th> 					 
					  <th><font size="1"><?php echo $N33; ?></th> 					 
                       <th><font size="1"><?php echo $N9; ?></th> 
				</tr> 
			</thead> 
			<tbody>
			<?php 
			while($admin=mysql_fetch_array($s)){
			$argent=mysql_query("select * from money where num_compte=$admin[0] order by Date desc LIMIT 0 ,1 ");
		

$argente=mysql_fetch_array($argent);


?>
			 
				<tr > 
    				<td><font size="1"><?php echo $admin[1]."(".$admin[0].")";?></td> 
    				<td ><font size="1" ><a  title="<?php echo $N11; ?>" href="MenuUtilisation.php?valeur=ArgentEntre.php&titre=<?php echo $admin[1].'('.$admin[0].')'; ?>&Num=<?php echo $admin[0];?>&url=<?php echo $url.'.'.$N11; ?>" ><font color="#0babf6" ><i class="fa fa-sort-amount-asc"></i></a></td> 
					<td ><font size="1" align="center"><a title="<?php echo $N13; ?>" href="MenuUtilisation.php?valeur=ArgentSortie.php&titre=<?php echo $admin[1].'('.$admin[0].')'; ?>&Num=<?php echo $admin[0];?>&url=<?php echo $url.'.'.$N13; ?>"> <font color="#0babf6" ><i class="fa fa-sort-amount-desc"></i></a></td> 
					<td><font size="1"><a  title="<?php echo $N14; ?>" href="MenuUtilisation.php?valeur=virement.php&Num=<?php echo $admin[0];?>&titre=<?php echo $N14.' : '.$admin[1].'('.$admin[0].')'; ?>&url=<?php echo $url.'.'.$N14; ?>" ><font color="#0babf6" ><i class="fa fa-refresh"></i></a></td> 
    				<td><font size="1"><?php echo number_format($admin[6],2,',','.')."  ".$admin[7];?></td> 

					<td><font size="1"><?php echo $argente[2];?></td> 
					<td><font size="1"><?php echo number_format($admin[8],2,',','.')."  ".$admin[7];?></td> 
	<td><a  title="<?php echo $N16; ?>" href="MenuUtilisation.php?valeur=ModifierCompte.php&titre=<?php echo $N15; ?>   :<?php echo $admin[1].'('.$admin[0].')'; ?>&Num=<?php echo $admin[0];?>&url=<?php echo $url.'.'.$N16;; ?>" ><i class="fa fa-pencil-square-o"></i></a>
						<a   onclick="return confirmLink(this);"  title="<?php echo $N17; ?>" href="MenuUtilisation.php?valeur=deleteCompteBancaire.php&Num=<?php echo $admin[0];?>&titre=<?php echo $titre; ?>&url=<?php echo $url; ?>"><i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
			 
			
<?php }
?></tbody>
			 </table>
			 
			 </div> </div> </div>
			   <div class="tab-pane" id="tab_meta">	
			
			   	<a onclick="print();" title="print">	<i class="fa fa-print"></i>
							</a>
							<div id="searchbar">
                <form action="" id="form_sample_3" class="form-vertical" >
		<tablE><TR>	
<TD>		
<input   OnkeyUp="SERCH_op();" class="form-control" id="search" type="text" placeholder="<?php echo $N22; ?>,<?php echo $N23; ?>,<?php echo $N24; ?>,<?php echo $N25; ?>...." style="width:200px"/> 
     </TD><TD>           
<select   id="FCT"  onchange="SERCH_op();" class="form-control select2me"  style="width:150px" >
<option value=""></option>
<?php
$s=mysql_query("select id_facture from invoice");
 while($admin=mysql_fetch_array($s)){ ?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?></TD>
<TD>           
<select   id="CMD"  onchange="SERCH_op();"  class="form-control select2me"  style="width:150px" >
<option value=""></option>
<?php
$s=mysql_query("select reference from purchase");
 while($admin=mysql_fetch_array($s)){?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?>

</select></TD>
</TR></TABLE>
				</form>
                </div>
		   <div id="centent">
			<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td></td> 
   					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N25; ?></td> 
   					<td><font size="1"><b><?php echo $N27; ?></td> 
   					<td><font size="1"><b><?php echo $N28; ?></td> 
   					
</tr> <?php 
$moneyOut=mysql_query("select * from money where type='out' order by id desc");
						$t=0;
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
						$BC=mysql_query("select * from bank_account where Numero_Compte=$MOUT[6]");
		$BNK=mysql_fetch_array($BC)
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $MOUT[9]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[7],2,',','.').' '.$BNK[7]; ?></td> 
					
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N31; ?></th>
				<th><font size="1"><?php echo $N32; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from allocate_paiment_purchase  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select monnaie from vuepurchasetotale   where BonCommande='$MOUT[0]'");
$Moniee=mysql_fetch_array($MOnie);
				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"><?php echo number_format((-1*$cmdtest[2]),2,',','.').'&nbsp;'.$Moniee[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from allocate_paiment_invoice  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select Monnaie from invoice   where id_facture='$cmdtest[1]'");
$Monieee=mysql_fetch_array($MOnie);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$test=explode("$maxpayIdAv[0]",$cmdtest[1]);
$sign=1;
if(isset($test[1])){
$sign=-1;
}

				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($sign*$cmdtest[2]),2,',','.').'&nbsp;'.$Monieee[0]; ?></font></td>
				</tr>
				<?php } ?>
					
				
				</tbody>
				</table>
				<table>
				<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]'");
if($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td>
										<font size="1" ><?php echo $attache[0]; ?></font>
									</td><td>
										&nbsp;<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php }else{ ?>
					<tr>
									
									<td>
										<form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" method="POST">
							<button type="submit" class=" green"><i class="fa fa-paperclip"></i></button>
							</form>
									</td>
								
								</tr>	<?php } ?>	
				</table>
				</td>
				<!-- différence -->
				
				</tr>
<?php } ?>
				</table>
			 </div>
			 </div>
			 <div class="tab-pane" id="tab_images">
								<a onclick="print();" title="print">	<i class="fa fa-print"></i>
							</a>
							<div id="searchbar">
                <form action=""  class="form-vertical" >
		<tablE><TR>	
<TD>		
<input   OnkeyUp="SERCH_IN();" class="form-control" id="Search_inv" type="text" placeholder="<?php echo $N22; ?>,<?php echo $N23; ?>,<?php echo $N24; ?>,<?php echo $N25; ?>...." style="width:200px"/> 
     </TD><TD>           
<select   id="Facture"  onchange="SERCH_IN()" class="form-control select2me"  style="width:150px" >
<option value=""></option>
<?php
$s=mysql_query("select id_facture from invoice");
 while($admin=mysql_fetch_array($s)){ ?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?></TD>

</TR></TABLE>
				</form>
                </div>
		   <div id="donnes">
			  <table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td><font size="1"></td> 
   					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N25; ?></td> 
   					<td><font size="1"><b><?php echo $N26; ?></td> 
   					<td><font size="1"><b><?php echo $N28; ?></td> 
   					
</tr> <?php 
$moneyOut=mysql_query("select * from money where type='in' order by Date desc");
						while($MOUT=mysql_fetch_array($moneyOut)){
					$t++;
						$BC=mysql_query("select * from bank_account where Numero_Compte='$MOUT[6]'");
		$BNK=mysql_fetch_array($BC)
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $MOUT[9]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[7],2,',','.').' '.$BNK[7]; ?></td> 
					
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N31; ?></th>
				<th><font size="1"><?php echo $N32; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from allocate_paiment_purchase  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select monnaie from vuepurchasetotale   where BonCommande='$cmdtest[1]'");
$Moniee=mysql_fetch_array($MOnie);
				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"><?php echo number_format((-1*$cmdtest[2]),2,',','.').'&nbsp;'.$Moniee[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from allocate_paiment_invoice  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select Monnaie from invoice   where id_facture='$cmdtest[1]'");
$Monieee=mysql_fetch_array($MOnie);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$test=explode("$maxpayIdAv[0]",$cmdtest[1]);
$sign=1;
if(isset($test[1])){
$sign=-1;
}

				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($sign*$cmdtest[2]),2,',','.').'&nbsp;'.$Monieee[0]; ?></font></td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
				<table>
				<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]'");
if($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td>
										<font size="1" ><?php echo $attache[0]; ?></font>
									</td><td>
										&nbsp;<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php }else{ ?>
					<tr>
									
									<td>
										<form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" method="POST">
							<button type="submit" class=" green"><i class="fa fa-paperclip"></i></button>
							</form>
									</td>
								
								</tr>	<?php } ?>	
				</table>
				</td>
				<!-- différence -->
				
				</tr>
<?php } ?>
				</table>
			 </div>
<input type="hidden" id="max_suiv" value="<?php echo $t; ?>">
			 
			 </div> 
			 <div class="tab-pane" id="tab_reviews">
			 	<a onclick="print();" title="print">	<i class="fa fa-print"></i>
							</a>
			<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N29; ?></td> 
   					<td><font size="1"><b><?php echo $N30; ?></td> 
   					<td><font size="1"><b><?php echo $N28; ?></td> 
   					
</tr> <?php 
$moneyOut=mysql_query("select * from  transfer_money order by Date desc");
						while($MOUT=mysql_fetch_array($moneyOut)){
						$BC=mysql_query("select * from bank_account where Numero_Compte=$MOUT[5]");
		$BNK=mysql_fetch_array($BC);
		$BCD=mysql_query("select * from bank_account where Numero_Compte=$MOUT[3]");
		$BNKD=mysql_fetch_array($BCD);
		?>
							<tr > 							
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $BNKD[1].'('.$BNKD[0].')'; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[6],2,',','.').' '.$BNKD[7]; ?></td> 
					
    				
				</tr>
<?php } ?>
				</table>
			 </div>
			 </div>
			 
<?php	}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	 
		
