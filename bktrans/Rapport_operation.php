<?php
session_start();
include('Connection.php');
require('opeation.php');

$DD=$_POST['DD'];
$DF=$_POST['DF'];
$TLX=$_POST['Tax'];
 $PRT1=0;
 $PRT2=0;
 $PRT3=0;
 $PRT4=0;
  $Tax1="AND 1=1";
  $Tax="AND 1=1";
 if($TLX!=""){
 $tt=explode('LO',$Tax);
 if(!isset( $tt[1])){
 $Tax=" AND Ref_doss='$TLX'";
 $Tax1="";
 }else{
 $Tax="";
 $Tax1=" AND Dossier='$TLX'";

 }
 }
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
$pdf->fact_dev( "Rapport des opérations ", "");
$date=date("d/m/Y");

$pdf->addDate(utf8_decode($com_dc));
$pdf->addEcheance($date);

//seconde page


function LoadDataResum($Tax,$DD,$DF)

{
$PT=0;
$QT=0;
$PTE=0;
$QTE=0;
$MN1=mysql_query("select * from import where type_operation='Ocean Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$MN=mysql_query("select * from import where type_operation='Ocean Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
while($PC=mysql_fetch_array($MN1)){
//echo "select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_import where id_operation='$PC[11]' group by id_operation ";
$PP=mysql_query("select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_import where id_operation='$PC[11]' group by id_operation ");
$TOTQP=mysql_fetch_array($PP);
$PT=$PT+$TOTQP[0];
$QT=$QT+$PC[15];
}


$MN1=mysql_num_rows($MN);
$EX1=mysql_query("select * from export where type_operation='Ocean Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$EX=mysql_query("select * from export where type_operation='Ocean Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
while($PC=mysql_fetch_array($EX1)){
$PP=mysql_query("select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_export where id_operation='$PC[0]' group by id_operation ");
$TOTQP=mysql_fetch_array($PP);
$PTE=$PTE+$TOTQP[0];
$QTE=$QTE+$PC[15];
}
$T=mysql_num_rows($EX);
    // Lecture des lignes du fichie
	
        $data[0] =array(utf8_decode('Import'),utf8_decode("$MN1"),"$PT  KG","$QT");
        $data[1] =array(utf8_decode('Export'),utf8_decode("$T"),"$PTE KG","$QTE");
        
      
    return $data;
	
}
function LoadDataResumAir($Tax,$DD,$DF)

{
$PT=0;
$QT=0;
$PTE=0;
$QTE=0;
$MN1=mysql_query("select * from import where type_operation='Air Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$MN=mysql_query("select * from import where type_operation='Air Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
while($PC=mysql_fetch_array($MN1)){
//echo "select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_import where id_operation='$PC[11]' group by id_operation ";
$PP=mysql_query("select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_import where id_operation='$PC[11]' group by id_operation ");
$TOTQP=mysql_fetch_array($PP);
$PT=$PT+$TOTQP[0];
$QT=$QT+$PC[15];
}


$MN1=mysql_num_rows($MN);
$EX1=mysql_query("select * from export where type_operation='Air Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$EX=mysql_query("select * from export where type_operation='Air Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
while($PC=mysql_fetch_array($EX1)){
$PP=mysql_query("select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_export where id_operation='$PC[0]' group by id_operation ");
$TOTQP=mysql_fetch_array($PP);
$PTE=$PTE+$TOTQP[0];
$QTE=$QTE+$PC[15];
}
$T=mysql_num_rows($EX);
    // Lecture des lignes du fichie
	
        $data[0] =array(utf8_decode('Import'),utf8_decode("$MN1"),"$PT  KG","$QT");
        $data[1] =array(utf8_decode('Export'),utf8_decode("$T"),"$PTE KG","$QTE");
        	
    return $data;
}
function LoadDataResumRaod($Tax,$DD,$DF)

{
$PT=0;
$QT=0;
$PTE=0;
$QTE=0;
$MN1=mysql_query("select * from import where type_operation='Road Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$MN=mysql_query("select * from import where type_operation='Road Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
while($PC=mysql_fetch_array($MN1)){
//echo "select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_import where id_operation='$PC[11]' group by id_operation ";
$PP=mysql_query("select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_import where id_operation='$PC[11]' group by id_operation ");
$TOTQP=mysql_fetch_array($PP);
$PT=$PT+$TOTQP[0];
$QT=$QT+$PC[15];
}


$MN1=mysql_num_rows($MN);
$EX1=mysql_query("select * from export where type_operation='Road Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$EX=mysql_query("select * from export where type_operation='Road Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
while($PC=mysql_fetch_array($EX1)){
$PP=mysql_query("select SUM(Poids) as PT  ,SUM(Quantite) as QT  from piece_export where id_operation='$PC[0]' group by id_operation ");
$TOTQP=mysql_fetch_array($PP);
$PTE=$PTE+$TOTQP[0];
$QTE=$QTE+$PC[15];
}
$T=mysql_num_rows($EX);
    // Lecture des lignes du fichie
	
        $data[0] =array(utf8_decode('Import'),utf8_decode("$MN1"),"$PT  KG","$QT");
        $data[1] =array(utf8_decode('Export'),utf8_decode("$T"),"$PTE KG","$QTE");
              
    return $data;
	
}

function LoadDataResumLogistics($Tax,$DD,$DF)

{
$MN=mysql_query("select * from location where Date_debut	 >= '$DD' AND Date_debut <= '$DF' $Tax ");
$MN1=mysql_num_rows($MN);
$ETA=mysql_query("select * from location where Date_debut	 >= '$DD' AND Date_debut <= '$DF' $Tax  AND Etat=0 ");
$ET=mysql_num_rows($ETA);
$EX=mysql_query("select * from magasinage where    Date_debut >= '$DD' AND Date_debut <= '$DF' $Tax ");
$T=mysql_num_rows($EX);
$ETM=mysql_query("select * from magasinage where Date_debut	 >= '$DD' AND Date_debut <= '$DF' $Tax  AND Etat=0 ");
$ETAM=mysql_num_rows($ETM);
$LS=mysql_query("select * from  logistics_services where  Date >= '$DD' AND Date <= '$DF' $Tax ");
$LSS=mysql_num_rows($LS); 
$ETL=mysql_query("select * from logistics_services where Date	 >= '$DD' AND Date <= '$DF' $Tax  AND Etat=0 ");
$ETAL=mysql_num_rows($ETL);// Lecture des lignes du fichie
	
         $data[0] =array(utf8_decode('Location'),utf8_decode("$MN1"),"$ET",$MN1-$ET);
        $data[1] =array(utf8_decode('Magasinage'),utf8_decode("$T"),"$ETAM",$T-$ETAM);
        $data[3] =array(utf8_decode('Autre service'),utf8_decode("$LSS"),"$ETAL",$LSS-$ETAL);
        
      
      
    return $data;
	
}
$header1 = array(utf8_decode('type'),utf8_decode('Quantité'),utf8_decode('Poid'),utf8_decode('Nbre Conteneur/pièce')) ;
$header2 = array(utf8_decode('type'),utf8_decode('Quantité'),utf8_decode('Poid'),utf8_decode('N° pièce')) ;
$header3 = array(utf8_decode('type'),utf8_decode('Quantité'),utf8_decode('Inactif'),utf8_decode('Actif')) ;

if($Tax!=""){
// Titres des colonnes
// Chargement des données

$data = LoadDataResum($Tax,$DD,$DF);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$MN=mysql_query("select * from import where type_operation='Ocean Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$MN1=mysql_num_rows($MN);
$EX=mysql_query("select * from export where type_operation='Ocean Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$T=mysql_num_rows($EX);
$TT=$MN1+$T;
$pdf->Write(5,utf8_decode('                       Type    : OCEAN	'));
$pdf->Write(5,utf8_decode("                       Nombre des opérations    :  $TT"));

$pdf->Ln();
$pdf->Ln();
$pdf->FancyTableResum($header1,$data);

$data = LoadDataResumAir($Tax,$DD,$DF);
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode('             '));
$MN=mysql_query("select * from import where type_operation='Air Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$MN1=mysql_num_rows($MN);
$EX=mysql_query("select * from export where type_operation='Air Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$T=mysql_num_rows($EX);
$TT=$MN1+$T;
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode('                       Type    : Air	'));
$pdf->Write(5,utf8_decode("                       Nombre des opérations    :  $TT"));

$pdf->Ln();
$pdf->Ln();
$pdf->FancyTableResum($header2,$data);

$data = LoadDataResumRaod($Tax,$DD,$DF);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode('   '));
$MN=mysql_query("select * from import where type_operation='Road Import'   AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$MN1=mysql_num_rows($MN);
$EX=mysql_query("select * from export where type_operation='Road Export'  AND Date >= '$DD' AND Date <= '$DF' $Tax ");
$T=mysql_num_rows($EX);
$TT=$MN1+$T;
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode('                       Type    : Road	'));
$pdf->Write(5,utf8_decode("                       Nombre des opérations    :  $TT"));

$pdf->Ln();
$pdf->Ln();
$pdf->FancyTableResum($header1,$data);

}
if($Tax1!=""){
$data = LoadDataResumLogistics($Tax1,$DD,$DF);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode('   '));
$MN=mysql_query("select * from location where Date_debut	 >= '$DD' AND Date_debut <= '$DF' $Tax1 ");
$MN1=mysql_num_rows($MN);
$EX=mysql_query("select * from magasinage where    Date_debut >= '$DD' AND Date_debut <= '$DF' $Tax1 ");
$T=mysql_num_rows($EX);
$LS=mysql_query("select * from  logistics_services where  Date >= '$DD' AND Date <= '$DF' $Tax1 ");
$LSS=mysql_num_rows($LS);
$TT=$MN1+$T+$LSS;
$pdf->Ln();$pdf->SetFont('Arial','B',10);
$pdf->Write(5,utf8_decode('                       Type    : Logistics	'));
$pdf->Write(5,utf8_decode("                       Nombre des services    :  $TT"));

$pdf->Ln();
$pdf->Ln();
$pdf->FancyTableResum($header3,$data);
}

$pdf->Output();

?>