<?php

$autre_net=0;
$autre_TVA=0;
$autre_TOTAL=0;
$net=0;
$TVA=0;
$TOTAL=0;
$el="";
$autre_monnaie="";

$prix=0;
$Host = "localhost:3306";
$Users = "root";
$Password = "";
$Database = "logistics";
$idConnect = mysql_connect( $Host, $Users, $Password) ;
$db = mysql_select_db( $Database, $idConnect);


$id=$_GET['id'];
$s=mysql_query("select * from invoice where id_facture='$id'");
$ent=mysql_query("select * from entreprise");

$element=mysql_query("select * from element_invoice where Reference='$id'");

$admin=mysql_fetch_array($s);
$ENT=mysql_fetch_array($ent);
$monnaie=$admin[9];
$monnaie=$admin[9];
require_once('tcpdf_include.php');


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF8', false);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,"","");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$pdf->SetFont('helvetica', '', 10);

// add a page
$pdf->AddPage();

$html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>


td {
padding-bottom: 4px;
    padding-left: 6px;
    padding-top: 5px;
	height:18px;
}

</style>
<table  >
<tr><td></td><td><h4 class="title"><b style="color:#14858f"><center>Facture</b></h4></td><td></td></tr>
<tr><td>
<h5 class="title"><B style="color:#14858f">$ENT[6]</i></b>
<h5 class="title"><b style="color:#14858f">$ENT[2]</b></h2>
<h5 class="title"><b style="color:#14858f">$ENT[3]</b></h2>
<h5 class="title"><b style="color:#14858f">$ENT[4]</b></h2>
<h5 class="title"><b style="color:#14858f">$ENT[4]</b></h2>
<h5 class="title"><b style="color:#14858f">$ENT[1]</b></h2>

</td>
<td></td>
<td>
<h5 class="title"><b style="color:#14858f">Num Facture : $admin[3]</b></h2>
<h5 class="title"><B style="color:#14858f">Client : $admin[5]</i></b>
<h5 class="title"><B style="color:#14858f">Reference client : $admin[10]</i></b>
<h5 class="title"><b style="color:#14858f">Date Lancement :$admin[6]</b></h2>
<h5 class="title"><b style="color:#14858f">Date de paiment :$admin[7]</b></h2>
<h5 class="title"><b style="color:#14858f">$admin[4]</b></h2>
<h5 class="title"><b style="color:#14858f">$admin[0]</b></h2>
</td>
</tr>
</table >
<br><br><br>
<table  cellpadding="0" cellspacing="0" >
 <tr style="border: 0px solid #090303;background-color: #090303;color:#fdfcfc;">
 <td width="300"  align="center"><h5><b>Description</b></h5></td>
  <td width="30" align="center"><h5><b>QT</b></h5></td>
  <td width="80" align="center"><h5><b>PU</b></h5></td>
  <td  width="80" align="center"><h5><b>Net</b></h5></td>
  <td width="80"  align="center"><h5><b>TVA</b></h5></td>
  <td width="80" align="center"><h5><b>TOTAL</b></h5></td>
 </tr>
EOF;
while($el=mysql_fetch_array($element)){
$monnaie=$admin[9];
$qt=$el[2]*$el[6];
$PU=$el[3]*$el[6];
$prix=$qt*$PU;
$tva=($el[4]/100)*$prix;
$total=$tva+$prix;
$net=$net+$prix;
$TVA=$TVA+$tva;
$TOTAL=$TOTAL+$total;
$T=number_format($total,2,',','.');
$TV=number_format($el[4],2,',','.');
$N=number_format($prix,2,',','.');
$PUN=number_format($PU,2,',','.');
$html .= <<<EOF
<tr >
   <td ><h5><b>$el[1]</b></h5></td>
  <td  align="center"><h4><b>$qt</b></h4></td>
  <td align="center"><h5><b>$PUN  $monnaie</b>  </h5></td>
  <td align="center"><h5> <b>$N  $monnaie</b></h5></td>
  <td  align="center"><h5><b>$TV  $monnaie</b></h5></td>
  <td  align="center"><h5><b>$T  $monnaie</b></h5></td>
 </tr>
EOF;
}
$nett=number_format($net,2,',','.');
$TVAA=number_format($TVA,2,',','.');
$TOTALL=number_format($TOTAL,2,',','.');
$html .=<<<EOF
</table>
<table  >
<tr >
  <td  align="right"> <h5><b>NET    $nett  $monnaie</b></h5></td>  </tr><tr>
  <td  align="right"><h5><b>TVA     $TVAA  $monnaie</b></h5></td>  </tr><tr>
  <td  align="right"><h5><b>TOTAL    $TOTALL $monnaie</b></h5></td>
 </tr>

  </table>
EOF;
$a=$admin[12];
$b=$admin[13];
if($a!='' && $b!=''){

$autre_net=$b*$net;
$autre_TVA=$b*$TVA;
$autre_TOTAL=$TOTAL*$b;
$autre_net=number_format($autre_net,2,',','.');
$autre_TVA=number_format($autre_TVA,2,',','.');
$autre_TOTAL=number_format($autre_TOTAL,2,',','.');

$html .=<<<EOF
<table  >
  <tr>
  <td  align="right"><h5>   </h5></td>
  </tr>
  
 <tr>
  <td  align="right"><h5>Total en autre monnaie</h5></td>
  </tr>
   <tr>
  <td  align="right"><h5>   </h5></td>
  </tr>
  
  <tr>
  <td  align="right"><h5> <b>$autre_net $a</b> </h5></td> </tr><tr>
  <td align="right"><h5><b>$autre_TVA $a</b></h5></td>  </tr><tr>
  <td  align="right"><h5><b>$autre_TOTAL $a</b></h5></td>
 </tr>
 </table>
 <h5 class="title"><i style="color:#000000">$admin[2]</i></h5>
EOF;

}else{
$html .=<<<EOF
 <h3 class="title"><i style="color:#000000">$admin[2]</i></h2>
EOF;
}
$html .=<<<EOF
 <h5 class="title"><i style="color:#000000">dernier delai de paiement sera  $admin[1] apres le facturation</i></h5>
EOF;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, 'l');

$pdf->Output();

?>