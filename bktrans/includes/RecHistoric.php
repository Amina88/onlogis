<?php
$etat=false;
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){ 
$etat=true;
}
$url= $N35.".".$N40.".".$N40; 
$titre=$N40;
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
}
?>