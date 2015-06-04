<?php
session_start();
include('Connection.php');
require('invoice2.php');
$doc = new DOMDocument(); 
				$file_Menu =$_SESSION['lang'];
 
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("finalFacture"); 
				

foreach( $Menu as $employee ) 
{    $V3 = $employee->getElementsByTagName( "e3" ); 
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
  $N22 = $V22->item(0)->nodeValue;


?>
<?php
$dd=$_GET['Ref'];
$four=$_GET['client'];
$TVA=0;
$TOTAL=0;
$monnaie="";
$f_nom = "";$f_mail ="";$f_t1= "";$f_t2="";$f_fax="";$f_adr="";
//Les requetes
$Resumfacture=mysql_query("select Resume_facture,Taux ,Monnaie ,date_lancement ,Date_paiment ,Ref ,Reference from invoice where id_facture='$dd';");
$Resumfacturee=mysql_fetch_array($Resumfacture);

$element=mysql_query("select * from finalinvoice where facture='$dd';");
$tab = ('select description as desig, quantite as qte, prix as pu, Net as net, tva as tva , Net+tva as tt, monnaie  ,facture from finalinvoice where facture="'.$dd.'";');
$req_com = mysql_query('select client,date_lancement,Date_paiment ,Monnaie from invoice where id_facture="'.$dd.'";');
$req_cli = mysql_query('select * from entreprise');
while($ent = mysql_fetch_array($req_cli)){
$ent_s = $ent[0];$ent_adr = $ent[1];$ent_tel = $ent[2];$ent_fax = $ent[3];$ent_mail = $ent[4];$ent_site = $ent[5];$ent_nom = $ent[6];
$ent_city = $ent[7];
$ent_pays = $ent[8];
}
while($com=mysql_fetch_array($req_com)){
$com_f = $com[0];$com_dc=$com[1];$com_de=$com[2];
$MONEY = $com[3];
}
$req_provider = mysql_query("select * from custemer where Nom_Soc='$four'");
while($admin= mysql_fetch_array($req_provider)){
$f_nom = $admin[0];$f_mail = $admin[5];$f_t1= $admin[6];$f_t2=$admin[7];$f_fax=$admin[20];$f_adr=$admin[19];
}
while($el=mysql_fetch_array($element)){

$total   = $el[7];
$tva     = $el[6]*$el[9];;
$TVA=$TVA+$tva;
$TOTAL=$TOTAL+$total;
$MONTANT_NET = $TVA + $TOTAL;
}
?>
<?php
$pdf = new PDF_Invoice('P','mm','A4');
$pdf->AddPage();

$pdf->fact_dev( $N22,'' );
$img=$pdf-> Image('bktrans_data/'.$ent_s,140,16,30);
$pdf->addProvider( $img."\n",
                  utf8_decode($N3).": ".$ent_pays."\n".
				  utf8_decode($N4).": ".$ent_city."\n".
				  utf8_decode($N5).": ".$ent_adr."\n" .
				  utf8_decode($N6).": ".$ent_tel."\n".
                  utf8_decode($N7).": ".$ent_fax."\n" .
                  utf8_decode($N8).": ".$ent_mail."\n".
				  utf8_decode($N9).": ".$ent_site."\n\n\n");
				


			$pdf->addSociete("",
                  utf8_decode($N10)."      :$Resumfacturee[3]\n".
                  utf8_decode($N11)."   :$Resumfacturee[4]\n".
                  utf8_decode($N12)."         :$dd\n".utf8_decode($N19)."              :$Resumfacturee[6]\n\n".utf8_decode($N20)." :  " 
                  .$f_nom."\n\n".$f_adr."-".$f_fax."\n\n\n".utf8_decode($N13)." : ".$Resumfacturee[5]."\n");
				  	  
				  
$pdf->Ln();$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode($N21));
$pdf->Ln();$pdf->SetFont('Arial','',7);
$pdf->Write(5,utf8_decode($Resumfacturee[0]));

$pdf->AddCol('',10,utf8_decode('N°'),'C');
$pdf->AddCol('desig',50,utf8_decode($N14),'L');
$pdf->AddCol('qte',20,utf8_decode($N15),'C');
$pdf->AddCol('pu',29,utf8_decode($N16),'C');
$pdf->AddCol('net',29,utf8_decode($N17),'C');
$pdf->AddCol('tva',29,utf8_decode($N18),'C');
$pdf->AddCol('tt',30,utf8_decode('Total '),'C');
$prop=array('HeaderColor'=>array(192,192,192),'color1'=>array(255,255,255), 'color2'=>array(255,255,255), 'padding'=>3);
$pdf->Table($tab,$prop);

$pdf->addtotalfact(number_format($TOTAL,2,',','.'),number_format($TVA,2,',','.'),$MONEY,number_format($MONTANT_NET,2,',','.'));$pdf->Ln();


$pdf->Ln();

if(!isset($_GET['charger'])){

 $pdf->Output();
 
 }else{ 
 
 $file="$dd.pdf";
 $print="F";
$pdf->Output("bktrans_data/$file","$print");
$titre=$_GET['titre'];
$url=$_GET['url'];

header("Location:MenuUtilisation.php?valeur=SendChange.php&id=$dd&titre=$titre: ($dd)&tb=export&url=$url&send_invoice=send");
}}
?>