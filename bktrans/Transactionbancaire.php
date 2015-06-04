<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	  <?php } 
	  ?>
	  </script> 
	  
	  <script type="text/javascript"> 
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
    SRCH.open("POST","verification_donne2.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	search=document.getElementById("search").value;
		etat=document.getElementById("etat").value;
	max=document.getElementById("max").value;
	stat=document.getElementById("stat").value;
	
SRCH.send("search_Trans="+search+"&max="+max+"&etat="+etat+"&stat="+stat);

    }
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
    ordre.open("POST","verification_donne2.php",true);
	
    ordre.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
	cb=document.getElementById("search").value;
	etat=document.getElementById("etat").value;
	max=document.getElementById("max").value;
	stat=document.getElementById("stat").value;
	indice=c.id;
ordre.send("search_Trans="+cb+"&indice="+indice+"&ordre="+b+"&max="+max+"&etat="+etat+"&stat="+stat);

    }
</script>

<head>

<link href="css/style1.css" rel="stylesheet" type="text/css" />

</head>
<?php

require'includes/recTransactionBancaire.php';
if($etat) {


include ("Connection.php");
$valeur="allocate_argent.php";
$resbanque=mysql_query("select * from  bank_account");
$s=mysql_query("select * from  money  where MN_Non_allue>0 ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
?>


	<div class="portlet box blue">

						<div class="portlet-title">
							
							
						</div>
						<div class="portlet-body" >

<table class="table  table-bordered table-hover" id="sample_1" >
			<thead> 
				<tr > 
    				
    				<th><font size="1"><?php echo $N5; ?></th> 
    				<th><font size="1"><?php echo $N7; ?></th> 
    				 <th><font size="1"><?php echo $N9; ?></th> 
					<th><font size="1"><?php echo $N10; ?></th> 
					<th><font size="1"><?php echo $N12; ?></th> 
    				<th><font size="1"><?php echo $N13; ?></th> 
				
    				<th ><font size="1"><?php echo $N14; ?></h4></th> 
				</tr> 
			</thead> 
			<tbody>
	<?php 
			$i=0;
			while($admin=mysql_fetch_array($s) ){
			$i++;
$banques=mysql_query("select * from  bank_account where Numero_Compte='$admin[6]' ");
$banquess=mysql_fetch_array($banques);
$cl=substr ($admin[9], 0,6 );
 $client = str_replace(' ','%20',$admin[9]);
    ?>
			 
				<tr > 
   					<td><font size="1"><?php echo $admin[0];?></font></td> 
    				<td><font size="1"><?php echo $admin[2];?></font></td>				
					<td><font size="1"><?php echo "$banquess[1]($admin[6])";?></font></td>							
					<td><font size="1"><a  title="<?php echo $admin[9]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $client;?>&mdc=1 &titre=<?php echo $N2.'  : '.$admin[9]; ?>&url=<?php echo$urlcli.$N2?>"><?php echo $cl;?></a></font></td>				
					<td><font size="1"><?php echo number_format($admin[7],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td><font size="1"><?php echo number_format($admin[8],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td width="5"><a href="MenuUtilisation.php?valeur=<?php echo $valeur; ?>&ref=<?php echo $admin[0];?>&client=<?php echo $client;?>&compte=<?php echo $admin[6];?>&url=<?php echo $url.'.'.$N1; ?>&titre=<?php echo $N1; ?>:<?php echo $admin[9];?>"  title="<?php echo $N1; ?>" ><i class="fa fa-tags"></i></a>
					<?php if($admin[3]=='out'){ ?>
					<a  onclick="return confirm('<?php echo $N17; ?>')" href="MenuUtilisation.php?valeur=AjouterAuCaisse.php&ref=<?php echo $client;?>&compte=<?php echo $admin[6];?>" title="<?php echo $N16; ?>" ><i class="fa fa-undo"></i></a>
					<?php }  ?></td>
				</tr> 
				
			
<?php }

?></tbody>
			 </table><br>
</div>
</div>


<?php  }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>