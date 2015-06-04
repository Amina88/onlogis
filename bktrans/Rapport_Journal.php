<?php
session_start();
include('Connection.php');
require('JournalComptable.php');
 $DD=$_POST['DD'];
 $DF=$_POST['DF'];


$Tax="TVA";
 $PRT1=0;
 $PRT2=0;
 $PRT3=0;
 $PRT4=0;
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
$FIMP="";
if(isset($_POST['FIMP'])){
$FIMP=$_POST['FIMP'];
}

$com_dc=$DD." jusq'au ".$DF;
$f_nom = "";$f_mail ="";$f_t1= "";$f_t2="";$f_fax="";$f_adr="";
$req_cli = mysql_query('select * from entreprise');
while($ent = mysql_fetch_array($req_cli)){
$ent_s = $ent[0];$ent_adr = $ent[1];$ent_tel = $ent[2];$ent_fax = $ent[3];$ent_mail = $ent[4];$ent_site = $ent[5];$ent_nom = $ent[6];
}

$pdf = new PDF_Invoice('P','mm','A3');

$pdf->AddPage();
$img=$pdf-> Image('bktrans_data/'.$ent_s,15,8,40);
$pdf->addSociete( $img."\n",
                  $ent_adr."\n" .
                  "Tel: ".$ent_tel."\n".
                  "Fax: ".$ent_fax."\n" .
                  "Email: ".$ent_mail."\n".
				  "Site web: ".$ent_site."\n");
				  


$pdf->fact_dev( "Le Journal Comptable", "");
$date=date("d/m/Y");

$pdf->addDate(utf8_decode($com_dc));
$pdf->addEcheance($date);

//seconde page


function LoadDataResum($Tax,$DD,$DF,$PRT3,$PRT4)

{
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
$comm2=mysql_query("select * from journal where date >='$DD' and date <='$DF'  ");
    // Lecture des lignes du fichier
	 $data = array();
	while($admin=mysql_fetch_array($comm2)){
$total_Debit=0;
$total_Credit=0;
$jrnl=mysql_query("select * from detaile_journal where id_journal='$admin[0]'");

			while($jrnle=mysql_fetch_array($jrnl)){

   $total_Debit=$jrnle[4]+$total_Debit;
$total_Credit=$jrnle[5]+$total_Credit;
	
        // $data[] =array(utf8_decode('$admin[0]'),utf8_decode("$Tax Sur les ventes"),number_format($PRT1, 2, '.', ' ').' '.$MN1[0]);
        $data[] =array(utf8_decode("$admin[0]"),utf8_decode("$admin[1]"),utf8_decode("$jrnle[1]"),utf8_decode("$jrnle[2]"),utf8_decode("$jrnle[3]"),number_format($jrnle[4], 2, ',', ' ').' '.$MN1[0],number_format($jrnle[5], 2, ',', ' ').' '.$MN1[0]);
        
         
	}
	
	$data[] =array(utf8_decode("Fin"),utf8_decode("N° Piece  :  $admin[3]               Date   :   $admin[2]"),utf8_decode(""),utf8_decode(""),utf8_decode("Total"),number_format($total_Debit, 2, ',', ' ').' '.$MN1[0],number_format($total_Debit, 2, ',', ' ').' '.$MN1[0]);
             
}	
    return $data;
	
}
// Titres des colonnes
$header1 = array(utf8_decode('N°'),utf8_decode('Journal'),utf8_decode('Numéro Compte'),utf8_decode('Compte'),utf8_decode('Libéllé'),utf8_decode('Débit'),utf8_decode('Crédit')) ;
// Chargement des données

$data = LoadDataResum($Tax,$DD,$DF,$PRT3,$PRT4);
$pdf->Ln();
$pdf->Ln();

$pdf->FancyTableResum($header1,$data);
$pdf->SetFont('Arial','B',10);



$pdf->Output();

?>