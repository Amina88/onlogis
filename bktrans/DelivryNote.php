<?php
include('Connection.php');
require('DlevryNote.php');
?>
<?php
$dd=$_GET['id'];
$tb=$_GET['tb'];
$four="dd";
$TVA=0;
$TOTAL=0;
$monnaie="";
$f_nom = "";$f_mail ="";$f_t1= "";$f_t2="";$f_fax="";$f_adr="";
//Les requetes
$OP=mysql_query("select client,type,Designation_comercial	 from $tb  where id='$dd';");
$element=mysql_query("select * from finalinvoice where facture='$dd';");
$tab = ("select Objet as desig, Dimension as qte, Quantite as pu, Poids as net, Numero_contener as tva , Poid_chargeable as tt ,id_operation as id from piece_$tb where id_operation='$dd'");
$req_com = mysql_query('select client,date_lancement,Date_paiment ,Monnaie from invoice where id_facture="'.$dd.'";');
$req_cli = mysql_query('select * from entreprise');
while($ent = mysql_fetch_array($req_cli)){
$ent_s = $ent[0];$ent_adr = $ent[1];$ent_tel = $ent[2];$ent_fax = $ent[3];$ent_mail = $ent[4];$ent_site = $ent[5];$ent_nom = $ent[6];
}
while($com=mysql_fetch_array($req_com)){
$com_f = $com[0];$com_dc=$com[1];$com_de=$com[2];
$MONEY = $com[3];
}
$OPRT= mysql_fetch_array($OP);
$req_provider = mysql_query("select * from custemer where Nom_Soc='$OPRT[0]'");
while($admin= mysql_fetch_array($req_provider)){
$f_nom = $admin[0];$f_mail = $admin[5];$f_t1= $admin[6];$f_t2=$admin[7];$f_fax=$admin[13];$f_adr=$admin[12];
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
$img=$pdf-> Image('bktrans_data/'.$ent_s,15,8,40);
$pdf->addSociete( $img."\n",
                  $ent_adr."\n" .
                  "Tel: ".$ent_tel."\n".
                  "Fax: ".$ent_fax."\n" .
                  "Email: ".$ent_mail."\n".
				  "Site web: ".$ent_site."\n");
$pdf->addProvider($f_nom."\n",
                  $f_adr."\n".
                  "Tel : ".$f_t1."--".$f_t2."\n".
                  "Fax : ".$f_fax."\n" .
                  "Email : ".$f_mail);
$pdf->fact_dev( "bon de livraison ", $dd );
$pdf->Ln();
$pdf->SetFont('Arial','B',10);

//$pdf->Write(5,utf8_decode(" TO :                                  $OPRT[0] "));$pdf->Ln();
//$pdf->addDate($com_dc);
//$pdf->addEcheance($com_de);
//creation du tableau de commande
$pdf->AddCol('desig',10,utf8_decode('N°'),'L');
$pdf->AddCol('qte',30,utf8_decode('Objet'),'C');
$pdf->AddCol('net',35,utf8_decode('Nbr pièce'),'C');
$pdf->AddCol('tva',35,utf8_decode('Poids'),'C');
$pdf->AddCol('pu',35,utf8_decode('Dimention'),'C');
$pdf->AddCol('tt',40,utf8_decode('Numéro Conteneur '),'C');
//$pdf->AddCol('monnaie',1,' ','C');
$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',7);
$pdf->Write(5,utf8_decode("LTA/BL/CMR             :             $OPRT[1] "));
$pdf->Ln();$pdf->SetFont('Arial','B',7);
$pdf->Write(5,utf8_decode("Désignation Commercial :             $OPRT[2]"));$pdf->Ln();



$prop=array('HeaderColor'=>array(192,192,192),'color1'=>array(255,255,255), 'color2'=>array(255,255,255), 'padding'=>3);
$pdf->Table($tab,$prop);


$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$date=date('d/m/Y');$pdf->Ln();$pdf->Ln();
$pdf->Write(5,utf8_decode(" Client Name :            $OPRT[0] "));$pdf->Ln();$pdf->Ln();
$pdf->Write(5,utf8_decode("Date :         $date "));$pdf->Ln();$pdf->Ln();
$pdf->Write(5,utf8_decode("Signature"));$pdf->Ln();

$pdf->Output();
?>