
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
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
  
    function SERCH_op(a){
		
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
	
    leselect = SRCH.responseText;
   document.getElementById("content").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

SRCH.send("det_paiement="+a);

    }
</script>
<?php
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
  $N16 = $V16->item(0)->nodeValue;
$autre_net=0;
$autre_TVA=0;
$autre_TOTAL=0;
$net=0;
$TVA=0;
$TOTAL=0;
$el="";
$autre_monnaie="";

$prix=0;
$ref=$_GET['id'];
include ("Connection.php");
?>
<table class="tablesorter"  width="100%" > 

			<thead>
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
    				<th><font size="1"><?php echo $N2; ?></h4></th> 
    				<th><font size="1"><?php echo $N3; ?></h4></th> 
					<th><font size="1"><?php echo $N4; ?></h4></th> 
    				 <th><font size="1"><?php echo $N5; ?></h4></th>
    				 
				</tr> 
		</thead>
			<?php
$cmd=mysql_query("select * from balance_purchase  where commande='$ref' ");
$cmd1=mysql_query("select * from allocate_paiment_purchase  where facture='$ref'  AND  valeur!=0");
while($cmdtest=mysql_fetch_array($cmd)){
$facture=mysql_query("select * from balance_invoice_purchase  where id='$cmdtest[4]' ");
$fct=mysql_fetch_array($facture);
$date=$fct[3];
?>


			<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><a href="javascript:SERCH_op('<?php echo $fct[0];?>');"><font size="1"><?php echo $fct[0];?></font> </a></td> 
   					<td><font size="1"><?php echo $fct[4];?></font> </td> 
   					<td><font size="1"><?php echo number_format($fct[1],2,',','.')."&nbsp;".$fct[2];?></font> </td> 
   					<td><font size="1"><?php echo $date; ?></font> </td> 
   					
    				</tr> 
					<?php } ?>
					
					<br>
<?php
while($pay=mysql_fetch_array($cmd1)){
$facture=mysql_query("select * from money  where id='$pay[3]' ");
$fct=mysql_fetch_array($facture);
$bk=mysql_query("select * from bank_account  where Numero_Compte='$fct[6]' ");
$mn=mysql_fetch_array($bk);

$typ=explode('-',$fct[3]);
?>


			<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><a href="javascript:SERCH_op('<?php echo $fct[0];?>');"><font size="1"><?php echo $fct[0];?></font></a> </td> 
   					<td><font size="1"><?php echo $fct[9];?></font> </td> 
   					<td><font size="1"><?php echo number_format($fct[7]-$fct[8],2,',','.')."&nbsp;".$mn[7];?></font> </td> 
   					<td><font size="1"><?php echo $fct[2]; ?></font> </td> 
   					
    				</tr> 
					<?php } ?>
</table>
<div id="content">
   						</div>
 <?php } ?>