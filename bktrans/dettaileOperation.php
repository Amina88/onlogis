<?php
session_start();
include('Connection.php');
 require('DetailOp_pdf.php');
 

$doc = new DOMDocument(); 
				$file_Menu =$_SESSION['lang'];
 
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("DetailOperationExport"); 
				

foreach( $Menu as $employee ) 
{   $V1 = $employee->getElementsByTagName("e1"); 
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
  $N24 = $V24->item(0)->nodeValue;$V25= $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;$V27 = $employee->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;$V28 = $employee->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $employee->getElementsByTagName( "e32" );
  $N32 = $V32->item(0)->nodeValue; $V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $employee->getElementsByTagName( "e37" ); 
  $N37= $V37->item(0)->nodeValue;$V38 = $employee->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V39 = $employee->getElementsByTagName( "e39" ); 
 $N39 = $V39->item(0)->nodeValue;
  $V45 = $employee->getElementsByTagName( "e45" ); 
  $N45 = $V45->item(0)->nodeValue;
  $V46 = $employee->getElementsByTagName( "e46" ); 
  $N46 = $V46->item(0)->nodeValue;
  $V47 = $employee->getElementsByTagName( "e47" ); 
  $N47 = $V47->item(0)->nodeValue;
    $V48 = $employee->getElementsByTagName( "e48" ); 
  $N48 = $V48->item(0)->nodeValue;
    $V49 = $employee->getElementsByTagName( "e49" ); 
  $N49= $V49->item(0)->nodeValue;
   $V50 = $employee->getElementsByTagName( "e50" ); 
  $N50= $V50->item(0)->nodeValue;
$V51 = $employee->getElementsByTagName( "e51" ); 
  $N51 = $V51->item(0)->nodeValue;$V52 = $employee->getElementsByTagName( "e52" ); 
  $N52 = $V52->item(0)->nodeValue;$V53 = $employee->getElementsByTagName( "e53" );  
  $N53 = $V53->item(0)->nodeValue;$V54 = $employee->getElementsByTagName( "e54" );  
  $N54 = $V54->item(0)->nodeValue;$V55 = $employee->getElementsByTagName( "e55" );  
  $N55 = $V55->item(0)->nodeValue;$V56 = $employee->getElementsByTagName( "e56" ); 
  $N56 = $V56->item(0)->nodeValue;$V57 = $employee->getElementsByTagName( "e57" ); 
  $N57 = $V57->item(0)->nodeValue;$V58 = $employee->getElementsByTagName( "e58" ); 
  $N58 = $V58->item(0)->nodeValue;$V59 = $employee->getElementsByTagName( "e59" );  
  $N59 = $V59->item(0)->nodeValue;$V60 = $employee->getElementsByTagName( "e60" ); 
  $N60 = $V60->item(0)->nodeValue;$V61 = $employee->getElementsByTagName( "e61" ); 
  $N61 = $V61->item(0)->nodeValue;$V62 = $employee->getElementsByTagName( "e62" ); 
  $N62 = $V62->item(0)->nodeValue;$V63 = $employee->getElementsByTagName( "e63" ); 
  $N63 = $V63->item(0)->nodeValue;$V64 = $employee->getElementsByTagName( "e64" ); 
  $N64 = $V64->item(0)->nodeValue;$V65 = $employee->getElementsByTagName( "e65" );
  $N65 = $V65->item(0)->nodeValue;$V66 = $employee->getElementsByTagName( "e66" );  
  $N66 = $V66->item(0)->nodeValue;$V67 = $employee->getElementsByTagName( "e67" ); 
  $N67 = $V67->item(0)->nodeValue;$V68 = $employee->getElementsByTagName( "e68" ); 
  $N68 = $V68->item(0)->nodeValue;$V69 = $employee->getElementsByTagName( "e69" ); 
  $N69 = $V69->item(0)->nodeValue;$V70 = $employee->getElementsByTagName( "e70" ); 
  $N70 = $V70->item(0)->nodeValue;$V71 = $employee->getElementsByTagName( "e71" );  
  $N71 = $V71->item(0)->nodeValue;$V72 = $employee->getElementsByTagName( "e72" );  
  $N72 = $V72->item(0)->nodeValue;$V73 = $employee->getElementsByTagName( "e73" );  
  $N73 = $V73->item(0)->nodeValue;$V74 = $employee->getElementsByTagName( "e74" ); 
  $N74 = $V74->item(0)->nodeValue;$V75 = $employee->getElementsByTagName( "e75" ); 
  $N75 = $V75->item(0)->nodeValue;$V76 = $employee->getElementsByTagName( "e76" ); 
  $N76 = $V76->item(0)->nodeValue;$V77 = $employee->getElementsByTagName( "e77" ); 
  $N77 = $V77->item(0)->nodeValue;$V78 = $employee->getElementsByTagName( "e78" ); 
  $N78 = $V78->item(0)->nodeValue;$V79 = $employee->getElementsByTagName( "e79" );
  $N79 = $V79->item(0)->nodeValue;$V80 = $employee->getElementsByTagName( "e80" ); 
  $N80 = $V80->item(0)->nodeValue;$V81 = $employee->getElementsByTagName( "e81" ); 
  $N81 = $V81->item(0)->nodeValue;$V82 = $employee->getElementsByTagName( "e82" ); 
  $N82 = $V82->item(0)->nodeValue;$V83 = $employee->getElementsByTagName( "e83" ); 
  $N83 = $V83->item(0)->nodeValue;$V84 = $employee->getElementsByTagName( "e84" ); 
  $N84 = $V84->item(0)->nodeValue;$V85 = $employee->getElementsByTagName( "e85" ); 
  $N85 = $V85->item(0)->nodeValue;$V86 = $employee->getElementsByTagName( "e86" ); 
  $N86 = $V86->item(0)->nodeValue;$V87 = $employee->getElementsByTagName( "e87" );  
  $N87 = $V87->item(0)->nodeValue;
  $V88 = $employee->getElementsByTagName( "e88" );  
  $N88 = $V88->item(0)->nodeValue;
  $V89 = $employee->getElementsByTagName( "e89" );  
  $N89 = $V89->item(0)->nodeValue;$V90 = $employee->getElementsByTagName( "e90" );  $N90 = $V90->item(0)->nodeValue;
$V91 = $employee->getElementsByTagName( "e91" );  $N91 = $V91->item(0)->nodeValue;

?>
<?php
$Ref="";
$c_nom="";
$c_adr="";
$Ref="";
$titre="";
$tb="";
if(isset($_GET['OpId'])){
$Ref=$_GET['OpId'];
}
if(isset($_GET['titre'])){
$titre=$_GET['titre'];
}
if(isset($_GET['tb'])){
$tb=$_GET['tb'];
}

$totaltab2=array();
$ic=array();
$totaltab3=array();
$totaltab4=array();
$totaltab5=array();
$totaltab6=array();
$totaltab7=array();

$req_cli = mysql_query('select * from entreprise');
while($ent = mysql_fetch_array($req_cli)){
$ent_s = $ent[0];$ent_adr = $ent[1];$ent_tel = $ent[2];$ent_fax = $ent[3];$ent_mail = $ent[4];$ent_site = $ent[5];$ent_nom = $ent[6];
$ent_city = $ent[7];
$ent_pays = $ent[8];
}




$operaton=mysql_query("select * from $tb where id='$Ref'");
$opp=mysql_query("select * from $tb where id='$Ref'");
$admin_rech=mysql_fetch_array($opp);
$monitab2=array();

if($admin_rech!=NULL){

		$admin=mysql_fetch_array($operaton);
		if($tb=="export"){
		$totaltab2[0]["el1"]=$admin[1];
		$totaltab2[0]["el2"]=$admin[3];
		$totaltab2[0]["el3"]=$admin[2];
		$totaltab2[0]["el4"]=$admin[4];
	
		$totaltab3[0]["el1"]=$admin[16];
		$totaltab3[0]["el2"]=$admin[17];
		$totaltab3[0]["el3"]=$admin[7];
		$totaltab3[0]["el4"]=$admin[8];
	
		$totaltab4[0]["el1"]=$admin[5];
		$totaltab4[0]["el2"]=$admin[18];
		$totaltab4[0]["el3"]=$admin[19].' '.$admin[20];
		$totaltab4[0]["el4"]=$admin[22].' '.$admin[23];
		
		$totaltab5[0]["el1"]=$admin[25];
		$totaltab5[0]["el2"]=$admin[26];
		$totaltab5[0]["el3"]=$admin[27];
		
		
		 $totaltab6[0]["el1"]=$admin[33];
		$totaltab6[0]["el2"]=$admin[34];
		$totaltab6[0]["el3"]=$admin[35];
		$totaltab6[0]["el4"]=$admin[36];
		$totaltab6[0]["el5"]=$admin[37];
		$totaltab6[0]["el6"]=$admin[38];
	
	}else{
   	    $totaltab2[0]["el1"]=$admin[0];
		$totaltab2[0]["el2"]=$admin[2];
		$totaltab2[0]["el3"]=$admin[1];
		$totaltab2[0]["el4"]=$admin[3];
	
		$totaltab3[0]["el1"]=$admin[16];
		$totaltab3[0]["el2"]=$admin[17];
		$totaltab3[0]["el3"]=$admin[6];
		$totaltab3[0]["el4"]=$admin[7];
	
		$totaltab4[0]["el1"]=$admin[4];
		$totaltab4[0]["el2"]=$admin[18];
		$totaltab4[0]["el3"]=$admin[19].' '.$admin[20];
		$totaltab4[0]["el4"]=$admin[22].' '.$admin[23];
		
		$totaltab5[0]["el1"]=$admin[25];
		$totaltab5[0]["el2"]=$admin[26];
		$totaltab5[0]["el3"]=$admin[27];
		
		
		 $totaltab6[0]["el1"]=$admin[32];
		$totaltab6[0]["el2"]=$admin[33];
		$totaltab6[0]["el3"]=$admin[34];
		$totaltab6[0]["el4"]=$admin[35];
		$totaltab6[0]["el5"]=$admin[36];
		$totaltab6[0]["el6"]=$admin[37];
	
	}
		$air=mysql_query("select Tracking from $tb where id='$Ref'");
$ocean=mysql_fetch_array($air);
$Date=date('d-m-Y');
$tarck=explode('&!!&',$ocean[0]);
$Rcu=0;
for($i=count($tarck)-1;$i>0;$i--){
$Rcu++;
$info=explode('|!!|',$tarck[$i]);
        $totaltab7["$Rcu"]["el1"]=$info[0];
		$totaltab7["$Rcu"]["el2"]=$info[1];
						
		 } 
			
?>
<?php
$pdf = new PDF_Invoice('P','mm','A4');
$pdf->AddPage();

$pdf->fact_dev( "$titre",date("d-m-Y"),$Ref);
$img=$pdf-> Image('bktrans_data/'.$ent_s,9,10,30);

$pdf->addProvider( $img."\n",
                  "Pays: ".$ent_pays."\n".
				  "City: ".$ent_city."\n".
				  "Adresse: ".$ent_adr."\n" .
				  "Tel: ".$ent_tel."\n".
                  "Fax: ".$ent_fax."\n" .
                  "Email: ".$ent_mail."\n".
				  "Site web: ".$ent_site."\n\n\n");
				




$pdf->SetFont('times','B',8);
		$pdf->SetXY(10,75);
		
		
	
$pdf->Cell($w = 30,7,utf8_decode("$N9"),1,'C',6);
$pdf->Cell($w = 55,7,utf8_decode("$N10"),1,'C',6);
$pdf->Cell($w = 55,7,utf8_decode("$N11"),1,'C',6);
$pdf->Cell($w = 50,7,utf8_decode("$N12"),1,'C',6);
$pdf->Ln();

$pdf->SetFont('times','',7);
foreach ($totaltab2 as $id ) {


$pdf->Cell($w = 30,7,utf8_decode($id["el1"]),1,'L',6);
$pdf->Cell($w = 55,7,utf8_decode($id["el2"]),1,'L',6);
$pdf->Cell($w = 55,7,utf8_decode($id["el3"]),1,'L',6);
$pdf->Cell($w = 50,7,utf8_decode($id["el4"]),1,'L',6);

$pdf->Ln();
}
$pdf->SetFont('times','B',8);
	
		

		
$pdf->Cell($w = 30,7,utf8_decode("$N17"),1,'C',6);
$pdf->Cell($w = 55,7,utf8_decode("$N18"),1,'C',6);
$pdf->Cell($w = 55,7,utf8_decode("$N19"),1,'C',6);
$pdf->Cell($w = 50,7,utf8_decode("$N20"),1,'C',6);


$pdf->SetFont('times','',7);

foreach ($totaltab3 as $id ) {

$pdf->Ln();
$pdf->Cell($w = 30,7,utf8_decode($id["el1"]),1,'L',6);
$pdf->Cell($w = 55,7,utf8_decode($id["el2"]),1,'L',6);
$pdf->Cell($w = 55,7,utf8_decode($id["el3"]),1,'L',6);
$pdf->Cell($w = 50,7,utf8_decode($id["el4"]),1,'L',6);

$pdf->Ln();
}
$pdf->SetFont('times','B',8);
	
		

		
$pdf->Cell($w = 30,7,utf8_decode("$N21"),1,'C',6);
$pdf->Cell($w = 55,7,utf8_decode("$N22"),1,'C',6);
$pdf->Cell($w = 55,7,utf8_decode("$N23"),1,'C',6);
$pdf->Cell($w = 50,7,utf8_decode("$N24"),1,'C',6);


$pdf->SetFont('times','',7);

foreach ($totaltab4 as $id ) {

$pdf->Ln();
$pdf->Cell($w = 30,7,utf8_decode($id["el1"]),1,'L',6);
$pdf->Cell($w = 55,7,utf8_decode($id["el2"]),1,'L',6);
$pdf->Cell($w = 55,7,utf8_decode($id["el3"]),1,'L',6);
$pdf->Cell($w = 50,7,utf8_decode($id["el4"]),1,'L',6);

$pdf->Ln();
}
$pdf->SetFont('times','B',8);
	
		


$pdf->Cell($w = 63,7,utf8_decode("$N26"),1,'C',6);
$pdf->Cell($w = 63,7,utf8_decode("$N27"),1,'C',6);
$pdf->Cell($w = 64,7,utf8_decode("$N28"),1,'C',6);



$pdf->SetFont('times','',7);

foreach ($totaltab5 as $id ) {

$pdf->Ln();
$pdf->Cell($w = 63,7,utf8_decode($id["el1"]),1,'L',6);
$pdf->Cell($w = 63,7,utf8_decode($id["el2"]),1,'L',6);
$pdf->Cell($w = 64,7,utf8_decode($id["el3"]),1,'L',6);

$pdf->Ln();
}

$pdf->Ln();

$pdf->Cell($w = 32,7,utf8_decode("$N72"),1,'C',6);
$pdf->Cell($w = 32,7,utf8_decode("$N76"),1,'C',6);
$pdf->Cell($w = 32,7,utf8_decode("$N74"),1,'C',6);
$pdf->Cell($w = 32,7,utf8_decode("$N75"),1,'C',6);
$pdf->Cell($w = 31,7,utf8_decode("$N73"),1,'C',6);
$pdf->Cell($w = 31,7,utf8_decode("$N71"),1,'C',6);


$pdf->SetFont('times','',7);

foreach ($totaltab6 as $id ) {

$pdf->Ln();
$pdf->Cell($w = 32,7,utf8_decode($id["el1"]),1,'L',6);
$pdf->Cell($w = 32,7,utf8_decode($id["el2"]),1,'L',6);
$pdf->Cell($w = 32,7,utf8_decode($id["el3"]),1,'L',6);
$pdf->Cell($w = 32,7,utf8_decode($id["el4"]),1,'L',6);
$pdf->Cell($w = 31,7,utf8_decode($id["el5"]),1,'L',6);
$pdf->Cell($w = 31,7,utf8_decode($id["el6"]),1,'L',6);

$pdf->Ln();
}
$pdf->Ln();
		





$pdf->SetFont('times','',7);
		$pdf->SetFillColor(255,255,255);
$pdf->Cell($w = 50,7,utf8_decode("$N79"),1,'C',6);
$pdf->Cell($w = 140,7,utf8_decode("$N80"),1,'C',6);
$pdf->Ln();

	
$k=0;
$Compteur=0;
$x = $pdf->x;
$y = $pdf->y;
$pdf->SetXY($x,$y);
foreach ($totaltab7 as $id ) {
$Compteur++;
$x = $pdf->x;
$x1 = $pdf->x;
$y = $pdf->y;
$y1 = $pdf->y;

$nln=0;
$push_right = 0;

$nln1=$pdf->NbLines(50,$id['el1']);
$nln2=$pdf->NbLines(140,$id['el2']);

 $nln=max($nln1,$nln2);

$push_right=0;



$pdf->MultiCell($w = 50,5*$nln,utf8_decode($id["el1"]),1,'L',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);

$pdf->MultiCell($w = 140,5*$nln,utf8_decode($id["el2"]),1,'L',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);

$pdf->Ln();
$x=$x1;
$y=$y1+5*(1+$k);
$k++;

}$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','',7);
$pdf->Write(1,'	Link   :   ','');
$pdf->SetFillColor(255,255,55);
$link = $pdf->AddLink();

$pdf->Write(1,$admin['url'],$admin['url']);

 if(!isset($_GET['charger'])){

 $pdf->Output();
 
 }else{ 
 
 $file="$Ref.pdf";
 $print="F";
$pdf->Output("bktrans_data/$file","$print");
$titre=$_GET['titre'];
$url=$_GET['url'];
header("Location:MenuUtilisation.php?valeur=SendChange.php&id=$Ref&titre=$titre&tb=$tb&url=$url&send_operation=send");
}
}}
?>