<?php
session_start();
include('Connection.php');
require('Taxes.php');

$DD=$_POST['DD'];
$DF=$_POST['DF'];
$Tax=$_POST['Tax'];
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

$pdf = new PDF_Invoice('P','mm','A4');

$pdf->AddPage();
$img=$pdf-> Image('bktrans_data/'.$ent_s,15,8,40);
$pdf->addSociete( $img."\n",
                  $ent_adr."\n" .
                  "Tel: ".$ent_tel."\n".
                  "Fax: ".$ent_fax."\n" .
                  "Email: ".$ent_mail."\n".
				  "Site web: ".$ent_site."\n");
				  
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->fact_dev( "Rapport des Taxes ", "");
$date=date("d/m/Y");

$pdf->addDate(utf8_decode($com_dc));
$pdf->addEcheance($date);

//seconde page

function LoadData($FIMP,$Tax,$PRT1,$DD,$DF)
{
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
 $data = array();
$etat="AND  I.etat_payement='1'";
if($FIMP!=""){
$etat="";
}
$rech_prd = mysql_query("select  I.Reference,id_facture,I.client,date_lancement,Ref_operration,Type_tax,E.Quantite*E.Prix*E.devis*E.TVA*0.01 As Total,I.Taux,E.TVA ,I.Resume_facture from invoice I ,element_invoice E where  I.date_lancement >= '$DD' AND I.date_lancement <= '$DF'  AND E.Reference=I.id_facture AND E.Type_tax='$Tax' $etat  GROUP BY  Reference");
  
 while($info = mysql_fetch_array($rech_prd)){
 $TT=0;
	$payment_tax = mysql_query("select *  from  payment_tax_invoice  where Reference='$info[1]'");
$rest = mysql_fetch_array($payment_tax);
$TX = mysql_query("select *  from Tax WHERE Nom_tax='$Tax'");
$TAX = mysql_fetch_array($TX);
$etat='impayé';
if($rest){
$etat='payée';
}
$tt=$info[6]*$info[7];
        $data[] =array($info[4],$info[1],$info[2],utf8_decode("$info[9]"),$info[8]."%",utf8_decode("$etat"),number_format($tt, 2, '.', ' ').' '.$MN1[0]);
  $PRT1= $PRT1+$tt;
  $TT=$TT+$PRT1;
  }
		$_SESSION['PRT1']=$PRT1;
		$_SESSION['TPRT1']=$PRT1;
    return $data;
}
function LoadDataNOTVA($FIMP,$Tax,$PRT2,$DD,$DF)
{
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
 $data = array();
$etat="AND  I.etat_payement='1'";
if($FIMP!=""){
$etat="";
}
$rech_prd = mysql_query("select  I.Reference,id_facture,I.client,date_lancement,Ref_operration,Type_tax,(E.Quantite*E.Prix*E.devis) As Total,I.Taux,E.TVA ,I.Resume_facture,I.etat_payement from invoice I ,element_invoice E  where I.date_lancement >= '$DD' AND I.date_lancement <= '$DF'  AND E.Reference=I.id_facture AND E.Type_tax='$Tax' $etat  GROUP BY  Reference");
 $TT=0;
 while($info = mysql_fetch_array($rech_prd)){

$etat='impayé';
if($info[10]==1){
$etat='payée';
}
$tt=$info[6]*$info[7];
        $data[] =array($info[4],$info[1],$info[2],utf8_decode("$info[9]"),$info[8]."%",utf8_decode("$etat"),number_format($tt, 2, '.', ' ').' '.$MN1[0]);
		  $PRT2= $PRT2+$tt;
		   $TT=$TT+$PRT2;
    }
		$_SESSION['PRT2']=$PRT2;	
		$_SESSION['TPRT2']=$PRT2;	
    return $data;

}

function LoadDataBC($FIMP,$Tax,$PRT3,$DD,$DF)
{
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
 $data = array();
$etat="AND  I.etat_paiement='1' ";
if($FIMP!=""){
$etat="";
}
$rech_prd = mysql_query("select  I.dossiers,I.reference,I.fournisseur,date_commande,operation,Type_tax,(E.quantite*E.prix_unitaire*E.devise*E.tva*0.01) As Total,I.Taux_monnaie_def,E.TVA , I.description from purchase I ,element_purchase E  where I.date_commande >= '$DD' AND I.date_commande <= '$DF'  AND 	I.etat_commande='1'  AND E.reference=I.reference AND E.Type_tax='$Tax'  $etat  GROUP BY  reference");
 $TT=0;
 while($info = mysql_fetch_array($rech_prd)){
	$payment_tax = mysql_query("select *  from  payment_tax_purchase where Reference='$info[1]' ");

$rest = mysql_fetch_array($payment_tax);

$etat='impayé';
if($rest){
$etat='payée';
}
$tt=$info[6]*$info[7];
        $data[] =array($info[4],$info[1],$info[2],utf8_decode("$info[9]"),$info[8]."%",utf8_decode("$etat"),number_format($tt, 2, '.', ' ').' '.$MN1[0]);
		  $PRT3= $PRT3+$tt;
		   $TT=$TT+$PRT3;
    }
		$_SESSION['PRT3']=$PRT3;
		$_SESSION['TPRT3']=$PRT3;
    return $data;
}
function LoadDataBCNOTVA($FIMP,$Tax,$PRT4,$DD,$DF)
{
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
 $data = array();
$etat="AND  I.etat_paiement='1'";
if($FIMP!=""){
$etat="";
}
$rech_prd = mysql_query("select  I.dossiers,I.reference,I.fournisseur,date_commande,operation,Type_tax,(E.quantite*E.prix_unitaire*E.devise) As Total,I.Taux_monnaie_def,E.TVA , I.description,I.etat_paiement from purchase I ,element_purchase E  where I.date_commande >= '$DD' AND I.date_commande <= '$DF'  AND 	I.etat_commande='1'  AND E.reference=I.reference AND E.Type_tax='$Tax' AND I.confirmation='1' $etat  GROUP BY  reference");
 $TT=0;
 $tt=0;
 while($info = mysql_fetch_array($rech_prd)){
  

$etat='impayé';
if($info[10]==1){
$etat='payée';
}
$tt=$info[6]*$info[7];
        $data[] =array($info[4],$info[1],$info[2],utf8_decode("$info[9]"),$info[8]."%",utf8_decode("$etat"),number_format($tt, 2, '.', ' ').' '.$MN1[0]);
		  $PRT4= $PRT4+$tt;
    }
		$_SESSION['PRT4']=$PRT4;
		$_SESSION['TPRT4']=$PRT4;
    return $data;
}
function LoadDataResum($Tax,$PRT1,$PRT2,$PRT3,$PRT4)

{$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
    // Lecture des lignes du fichier
    $data = array();
	$PRT1=$_SESSION['PRT1'];
	$PRT2=$_SESSION['PRT2'];
	$PRT3=$_SESSION['PRT3'];
	$PRT4=$_SESSION['PRT4'];

        $data[0] =array(utf8_decode('partie1'),utf8_decode("$Tax Sur les ventes"),number_format($PRT1, 2, '.', ' ').' '.$MN1[0]);
        $data[1] =array(utf8_decode('partie2'),utf8_decode("$Tax Sur les achats"),utf8_decode(number_format($PRT3, 2, '.', ' ').' '.$MN1[0]));
        $data[2] =array(utf8_decode('partie3'),utf8_decode("Total des ventes (à l'exception de $Tax)"),number_format($PRT2, 2, '.', ' ').' '.$MN1[0]);
        $data[3] =array(utf8_decode('partie4'),utf8_decode("Total des achats (à l'exception de $Tax) ."),number_format($PRT4, 2, '.', ' ').' '.$MN1[0]);
        
        $_SESSION['TT']=$PRT1+$PRT2+$PRT3+$PRT4;
    
		
    return $data;
	
}
// Titres des colonnes
$header1 = array(utf8_decode('N°'),utf8_decode('Description'),utf8_decode('Montant')) ;
$header2 = array(utf8_decode('Facture'),utf8_decode('Opération'),utf8_decode('Client'),utf8_decode('Description'),utf8_decode('Taux'),utf8_decode('Statut'),utf8_decode('Montant')) ;
$header3 = array(utf8_decode('Commande'),utf8_decode('Opération'),utf8_decode('Fournisseur'),utf8_decode('Description'),utf8_decode('Taux'),utf8_decode('Statut'),utf8_decode('Montant')) ;
// Chargement des données
$data2 = LoadData($FIMP,$Tax,$PRT1,$DD,$DF);
$data5 = LoadDataNOTVA($FIMP,$Tax,$PRT2,$DD,$DF);
$data3 = LoadDataBC($FIMP,$Tax,$PRT3,$DD,$DF);
$data4 = LoadDataBCNOTVA($FIMP,$Tax,$PRT4,$DD,$DF);
$data = LoadDataResum($Tax,$PRT1,$PRT2,$PRT3,$PRT4);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',15);
$pdf->Write(5,utf8_decode('                       Une résumé pour les données existe dans le rapport	'));

$pdf->Ln();
$pdf->Ln();
$pdf->FancyTableResum($header1,$data);
$pdf->SetFont('Arial','B',10);
$pdf->Write(2,utf8_decode('                       Total                                                                                                                      '.number_format($_SESSION['TT'], 2, '.', ' ').' '.$MN1[0]));

$pdf->AddPage();$pdf->Ln();$pdf->SetFont('Arial','B',15);
$pdf->Write(5,utf8_decode("Partie 1  - $Tax Sur les ventes."));
$pdf->Ln();
$pdf->Ln();
$pdf->FancyTable($header2,$data2);
$pdf->SetFont('Arial','B',10);
$pdf->Write(2,utf8_decode('                       Total                                                                                                                      '.number_format($_SESSION['TPRT1'], 2, '.', ' ').' '.$MN1[0]));
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,"");
$pdf->Write(5,"");
$pdf->SetFont('Arial','B',15);
$pdf->Write(5,utf8_decode("Partie 2  - $Tax Sur les achats."));
$pdf->Ln();
$pdf->Ln();
$pdf->FancyTable($header2,$data3);
$pdf->SetFont('Arial','B',10);
$pdf->Write(2,utf8_decode('                       Total                                                                                                                      '.number_format($_SESSION['TPRT3'], 2, '.', ' ').' '.$MN1[0]));
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,"");
$pdf->Write(5,"");

$pdf->SetFont('Arial','B',15);
$pdf->Write(5,utf8_decode("Partie 3  - Total des ventes (à l'exception de $Tax) ."));
$pdf->Ln();
$pdf->Ln();
$pdf->FancyTable($header3,$data5);
$pdf->SetFont('Arial','B',10);
$pdf->Write(2,utf8_decode('                       Total                                                                                                                      '.number_format($_SESSION['TPRT2'], 2, '.', ' ').' '.$MN1[0]));
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Write(5,"");
$pdf->Write(5,"");
$pdf->SetFont('Arial','B',15);
$pdf->Write(5,utf8_decode("Partie 4  - Total des achats (à l'exception de $Tax) ."));
$pdf->Ln();
$pdf->Ln();
$pdf->FancyTable($header3,$data4);
$pdf->SetFont('Arial','B',10);
$pdf->Write(2,utf8_decode('                       Total                                                                                                                      '.number_format($_SESSION['TPRT4'], 2, '.', ' ').' '.$MN1[0]));
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Output();

?>