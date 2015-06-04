<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
	<link rel="stylesheet" href="css/tb.css" type="text/css" media="screen" />
<body>
<?php
 if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ 


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
include ("Connection.php");
$s=mysql_query("select * from custemer");
$id=$_GET['id'];
$tb=$_GET['tb'];
 if($_GET['type']=='ocean'){
$code="BL";
		 }elseif($_GET['type']=='Air'){ 
		 $code="LTA";
 }else{ 		
  $code="CMR";
 }
?>
<table >
	<caption><?php echo $N1; ?></caption>
	<thead>
	<tr class="odd">
		<th class="col"><?php echo $N2; ?></th>
		<th scope="col" abbr="Home"><?php echo $N3; ?></th>
		<th scope="col" abbr="Home Plus"><?php echo $N4; ?></th>	
		<th scope="col" abbr="Business"><?php echo $N5; ?></th>
		<th scope="col" abbr="Business"><?php echo $N6; ?></th>
		<?php if($_GET['type']=='Ocean'){?>
		<th scope="col" abbr="Business Plus"><?php echo $N7; ?></th>
		<?php }elseif($_GET['type']=='Air'){ ?>
		<th scope="col" abbr="Business Plus"><?php echo $N8; ?></th>
		<?php }else{ ?>
		<th scope="col" abbr="Business Plus"><?php echo $N9; ?></th>
		<?php } ?>
		
	</tr>	
	</thead>
    
	<tbody>
 	<tr>
		<td><a href="ATTexonoration.php?option=attext&id=<?php echo $id; ?>&code=<?php echo $code; ?>"  target="_link"><img src="images/html.png"></a></td>
		<td><a href="ATTexonoration.php?option=attexn&id=<?php echo $id; ?>&code=<?php echo $code; ?>"  target="_link"><img src="images/html.png"></a></td>
		<td><a href="ATTexonoration.php?option=Endirect&id=<?php echo $id; ?>&code=<?php echo $code; ?>"  target="_link"><img src="images/html.png"></a></td>
		<td><a href="ATTexonoration.php?option=OrdreT&id=<?php echo $id; ?>&code=<?php echo $code; ?>"  target="_link"><img src="images/html.png"></a></td>
		<td><a href="DelivryNote.php?id=<?php echo $id; ?>&tb=<?php echo $tb; ?>"  target="_link"><img src="images/html.png"></a></td>
		<?php if($_GET['type']=='Ocean'){?>
<td><a href="MenuUtilisation.php?valeur=form_BL.php&option=BL&id=<?php echo $id; ?>&code=<?php echo $code; ?>&titre=<?php echo $N7; ?>" ><img src="images/html.png"></a></td>
		<?php }elseif($_GET['type']=='Air'){ ?>
<td><a href="ATTexonoration.php?option=AWB&id=<?php echo $id; ?>&code=<?php echo $code; ?>"  target="_link"><img src="images/html.png"></a></td>
		
				<?php }else{ ?>
<td><a href="ATTexonoration.php?option=CMR&id=<?php echo $id; ?>&code=<?php echo $code; ?>"  target="_link"><img src="images/html.png"></a></td>

				<?php } ?>
	</tr>	
 	 
 
</table>
<?php } }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>