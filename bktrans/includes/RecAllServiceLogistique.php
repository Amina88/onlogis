<?php
  $etat=false;
  if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ 
  $etat=true;
	}
$url=$N4.".".$N8.".".$N79.".".$N83;
$url2=$N4.".".$N8.".".$N79.".";
$urlcli=$N14.'.'.$N15.'.';
$urld=$N4.".".$N5;
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" ); $N23 = $V23->item(0)->nodeValue;
  $V24 = $employee->getElementsByTagName( "e24" ); $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" ); $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" ); $N26 = $V26->item(0)->nodeValue;
  
  }
  
  include ("Connection.php");