<?php
session_start();
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
	
}else{
$data=array();
$data2=array();
$i=0;
include ("Connect.php");
$j=0;
$req=mysql_query("SELECT * FROM `control_panel` ");
while($nom=mysql_fetch_array($req)){
$j++; 
$data2[$j][]=$nom[0];
$data2[$j][]=$nom[2];
}
		$emaild=$_SESSION['login'];
			$requetee=mysql_query("SELECT * FROM `user_database` WHERE `user`='$emaild'");
while($us=mysql_fetch_array($requetee)){
$req=mysql_query("SELECT * FROM `control_panel` WHERE `databese`='$us[0]'");
$nom=mysql_fetch_array($req);

$i++;
$data[$i][]=$us[0];
$data[$i][]=$nom[2];


}
$py = new DOMDocument(); 
$doc = new DOMDocument(); 
$file_Menu=$_SESSION['liste_pays'];
$py->load($file_Menu); 
$pays=$py->getElementsByTagName("PY"); 	

$file_Menu =$_SESSION['lang_Manu'];
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("MenuUtilisation"); 

				
foreach( $Menu as $Menu_util ) 
{ 
                                  $V1 = $Menu_util->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $Menu_util->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $Menu_util->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $Menu_util->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $Menu_util->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $Menu_util->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $Menu_util->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $Menu_util->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $Menu_util->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $Menu_util->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $Menu_util->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $Menu_util->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $Menu_util->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $Menu_util->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $Menu_util->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $Menu_util->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;$V17 = $Menu_util->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;$V18 = $Menu_util->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;$V19 = $Menu_util->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V20 = $Menu_util->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;$V21 = $Menu_util->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;$V22 = $Menu_util->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $Menu_util->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V24 = $Menu_util->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue;$V25= $Menu_util->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $Menu_util->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;$V27 = $Menu_util->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;$V28 = $Menu_util->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;$V29 = $Menu_util->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;$V30 = $Menu_util->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;$V31 = $Menu_util->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $Menu_util->getElementsByTagName( "e32" );
  $N32 = $V32->item(0)->nodeValue;$V33 = $Menu_util->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $Menu_util->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $Menu_util->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $Menu_util->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $Menu_util->getElementsByTagName( "e37" ); 
  $N37= $V37->item(0)->nodeValue; $V38 = $Menu_util->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V39 = $Menu_util->getElementsByTagName( "e39" ); 
  $N39 = $V39->item(0)->nodeValue;$V40 = $Menu_util->getElementsByTagName( "e40" ); 
  $N40 = $V40->item(0)->nodeValue;$V41 = $Menu_util->getElementsByTagName( "e41" ); 
  $N41 = $V41->item(0)->nodeValue;$V42 = $Menu_util->getElementsByTagName( "e42" ); 
  $F42 = $V42->item(0)->nodeValue;$V43 = $Menu_util->getElementsByTagName( "e43" ); 
  $N43 = $V43->item(0)->nodeValue;$V44 = $Menu_util->getElementsByTagName( "e44" ); 
  $N44 = $V44->item(0)->nodeValue;$V45 = $Menu_util->getElementsByTagName( "e45" ); 
  $N45 = $V45->item(0)->nodeValue;$V46 = $Menu_util->getElementsByTagName( "e46" ); 
  $N46 = $V46->item(0)->nodeValue;$V47 = $Menu_util->getElementsByTagName( "e47" ); 
  $N47 = $V47->item(0)->nodeValue;$V48 = $Menu_util->getElementsByTagName( "e48" ); 
  $N48 = $V48->item(0)->nodeValue;$V49 = $Menu_util->getElementsByTagName( "e49" ); 
  $N49 = $V49->item(0)->nodeValue;$V50 = $Menu_util->getElementsByTagName( "e50" ); 
  $N50 = $V50->item(0)->nodeValue;$V51 = $Menu_util->getElementsByTagName( "e51" ); 
  $N51 = $V51->item(0)->nodeValue;$V52 = $Menu_util->getElementsByTagName( "e52" ); 
  $N52 = $V52->item(0)->nodeValue;$V53 = $Menu_util->getElementsByTagName( "e53" ); 
  $N53 = $V53->item(0)->nodeValue;$V54 = $Menu_util->getElementsByTagName( "e54" ); 
  $N54 = $V54->item(0)->nodeValue;$V55 = $Menu_util->getElementsByTagName( "e55" ); 
  $N55 = $V55->item(0)->nodeValue;$V56 = $Menu_util->getElementsByTagName( "e56" ); 
  $N56 = $V56->item(0)->nodeValue;$V57 = $Menu_util->getElementsByTagName( "e57" ); 
  $N57 = $V57->item(0)->nodeValue;$V58 = $Menu_util->getElementsByTagName( "e58" ); 
  $N58 = $V58->item(0)->nodeValue;$V59 = $Menu_util->getElementsByTagName( "e59" ); 
  $N59 = $V59->item(0)->nodeValue;$V60 = $Menu_util->getElementsByTagName( "e60" ); 
  $N60 = $V60->item(0)->nodeValue;$V61 = $Menu_util->getElementsByTagName( "e61" ); 
  $N61 = $V61->item(0)->nodeValue;$V62 = $Menu_util->getElementsByTagName( "e62" ); 
  $N62 = $V62->item(0)->nodeValue;$V63 = $Menu_util->getElementsByTagName( "e63" ); 
  $N63 = $V63->item(0)->nodeValue;$V64 = $Menu_util->getElementsByTagName( "e64" ); 
  $N64 = $V64->item(0)->nodeValue;$V65 = $Menu_util->getElementsByTagName( "e65" ); 
  $N65 = $V65->item(0)->nodeValue;$V66 = $Menu_util->getElementsByTagName( "e66" ); 
  $N66 = $V66->item(0)->nodeValue;$V67 = $Menu_util->getElementsByTagName( "e67" ); 
  $N67 = $V67->item(0)->nodeValue;$V68 = $Menu_util->getElementsByTagName( "e68" ); 
  $N68 = $V68->item(0)->nodeValue;$V69 = $Menu_util->getElementsByTagName( "e69" ); 
  $N69 = $V69->item(0)->nodeValue;$V70 = $Menu_util->getElementsByTagName( "e70" ); 
  $N70 = $V70->item(0)->nodeValue;$V71 = $Menu_util->getElementsByTagName( "e71" ); 
  $N71 = $V71->item(0)->nodeValue;$V72 = $Menu_util->getElementsByTagName( "e72" ); 
  $N72 = $V72->item(0)->nodeValue;$V73 = $Menu_util->getElementsByTagName( "e73" ); 
  $N73 = $V73->item(0)->nodeValue;$V74 = $Menu_util->getElementsByTagName( "e74" ); 
  $N74 = $V74->item(0)->nodeValue;$V75 = $Menu_util->getElementsByTagName( "e75" ); 
  $N75 = $V75->item(0)->nodeValue;$V76 = $Menu_util->getElementsByTagName( "e76" ); 
  $N76 = $V76->item(0)->nodeValue;$V77  =$Menu_util->getElementsByTagName( "e77" ); 
  $N77 = $V77->item(0)->nodeValue;$V78  =$Menu_util->getElementsByTagName( "e78" ); 
  $N78 = $V78->item(0)->nodeValue;$V79  =$Menu_util->getElementsByTagName( "e79" ); 
  $N79 = $V79->item(0)->nodeValue;$V81  =$Menu_util->getElementsByTagName( "e81" ); 
  $N81 = $V81->item(0)->nodeValue;$V82  =$Menu_util->getElementsByTagName( "e82" ); 
  $N82 = $V82->item(0)->nodeValue;$V83  =$Menu_util->getElementsByTagName( "e83" ); 
  $N83 = $V83->item(0)->nodeValue;$V84  =$Menu_util->getElementsByTagName( "e84" ); 
  $N84 = $V84->item(0)->nodeValue; $V85 =$Menu_util->getElementsByTagName( "e85" );  
  $N85 = $V85->item(0)->nodeValue; $V86 = $Menu_util->getElementsByTagName( "e86" );  
  $N86 = $V86->item(0)->nodeValue;$V87  = $Menu_util->getElementsByTagName( "e87" );  
  $N87 = $V87->item(0)->nodeValue;$V88  = $Menu_util->getElementsByTagName( "e88" ); 
  $N88 = $V88->item(0)->nodeValue;$V89  = $Menu_util->getElementsByTagName( "e89" );  
  $N89 = $V89->item(0)->nodeValue;$V90  = $Menu_util->getElementsByTagName( "e90" );  
  $N90 = $V90->item(0)->nodeValue;$V91  = $Menu_util->getElementsByTagName( "e91" );  
  $N91 = $V91->item(0)->nodeValue;$V92  = $Menu_util->getElementsByTagName( "e92" );  
  $N92 = $V92->item(0)->nodeValue;$V93  = $Menu_util->getElementsByTagName( "e93" );  
  $N93 = $V93->item(0)->nodeValue;$V94  = $Menu_util->getElementsByTagName( "e94" );  
  $N94 = $V94->item(0)->nodeValue;$V95  = $Menu_util->getElementsByTagName( "e95" );  
  $N95 = $V95->item(0)->nodeValue;$V96  = $Menu_util->getElementsByTagName( "e96" );  
  $N96 = $V96->item(0)->nodeValue;$V97  = $Menu_util->getElementsByTagName( "e97" );  
  $N97 = $V97->item(0)->nodeValue;$V98  = $Menu_util->getElementsByTagName( "e98" );  
  $N98 = $V98->item(0)->nodeValue;$V99  = $Menu_util->getElementsByTagName( "e99" );  
  $N99 = $V99->item(0)->nodeValue;$V100  = $Menu_util->getElementsByTagName( "e100" );  
  $N100 = $V100->item(0)->nodeValue;$V101  = $Menu_util->getElementsByTagName( "e101" );  
  $N101 = $V101->item(0)->nodeValue;$V102  = $Menu_util->getElementsByTagName( "e102" );  
  $N102 = $V102->item(0)->nodeValue;
  $V103  = $Menu_util->getElementsByTagName( "e103" );  $N103 = $V103->item(0)->nodeValue;
  $V104  = $Menu_util->getElementsByTagName( "e104" );  $N104 = $V104->item(0)->nodeValue;
  $V105  = $Menu_util->getElementsByTagName( "e105" );  $N105 = $V105->item(0)->nodeValue;
  $V106  = $Menu_util->getElementsByTagName( "e106" );  $N106 = $V106->item(0)->nodeValue;
  $V107  = $Menu_util->getElementsByTagName( "e107" );  $N107 = $V107->item(0)->nodeValue;
  $V108  = $Menu_util->getElementsByTagName( "e108" );  $N108 = $V108->item(0)->nodeValue;
  $V109  = $Menu_util->getElementsByTagName( "e109" );  $N109 = $V109->item(0)->nodeValue;
  $V110  = $Menu_util->getElementsByTagName( "e110" );  $N110 = $V110->item(0)->nodeValue;
  $V111  = $Menu_util->getElementsByTagName( "e111" );  $N111 = $V111->item(0)->nodeValue;

  $V112  = $Menu_util->getElementsByTagName( "e112" );  $N112 = $V112->item(0)->nodeValue;
  $V113  = $Menu_util->getElementsByTagName( "e113" );  $N113 = $V113->item(0)->nodeValue;
  $V114  = $Menu_util->getElementsByTagName( "e114" );  $N114 = $V114->item(0)->nodeValue;
  $V115  = $Menu_util->getElementsByTagName( "e115" );  $N115 = $V115->item(0)->nodeValue;
  $V116  = $Menu_util->getElementsByTagName( "e116" );  $N116 = $V116->item(0)->nodeValue;
  $V117  = $Menu_util->getElementsByTagName( "e117" );  $N117 = $V117->item(0)->nodeValue;
  $V118  = $Menu_util->getElementsByTagName( "e118" );  $N118 = $V118->item(0)->nodeValue;
  $V119  = $Menu_util->getElementsByTagName( "e119" );  $N119 = $V119->item(0)->nodeValue;
  $V120  = $Menu_util->getElementsByTagName( "e120" );  $N120 = $V120->item(0)->nodeValue;
  $V121  = $Menu_util->getElementsByTagName( "e121" );  $N121 = $V121->item(0)->nodeValue;
  $V122 = $Menu_util->getElementsByTagName( "e122" );   $N122 = $V122->item(0)->nodeValue;
   $V123 = $Menu_util->getElementsByTagName( "e123" );  $N123 = $V123->item(0)->nodeValue;
   $V124 = $Menu_util->getElementsByTagName( "e124" );  $N124 = $V124->item(0)->nodeValue;
   $V125 = $Menu_util->getElementsByTagName( "e125" );  $N125 = $V125->item(0)->nodeValue;
   $V126 = $Menu_util->getElementsByTagName( "e126" );  $N126 = $V126->item(0)->nodeValue;
   $V127 = $Menu_util->getElementsByTagName( "e127" );  $N127 = $V127->item(0)->nodeValue;
   $V128 = $Menu_util->getElementsByTagName( "e128" );  $N128 = $V128->item(0)->nodeValue;
   $V129 = $Menu_util->getElementsByTagName( "e129" );  $N129 = $V129->item(0)->nodeValue;
   $V130 = $Menu_util->getElementsByTagName( "e130" );  $N130 = $V130->item(0)->nodeValue;
   $V131 = $Menu_util->getElementsByTagName( "e131" );  $N131 = $V131->item(0)->nodeValue;
   $V132 = $Menu_util->getElementsByTagName( "e132" );  $N132 = $V132->item(0)->nodeValue;
   $V133 = $Menu_util->getElementsByTagName( "e133" );  $N133 = $V133->item(0)->nodeValue;
   $V134 = $Menu_util->getElementsByTagName( "e134" );  $N134 = $V134->item(0)->nodeValue;
   $V135 = $Menu_util->getElementsByTagName( "e135" );  $N135 = $V135->item(0)->nodeValue;
   $V136 = $Menu_util->getElementsByTagName( "e136" );  $N136 = $V136->item(0)->nodeValue;
   $V137 = $Menu_util->getElementsByTagName( "e137" );  $N137 = $V137->item(0)->nodeValue;
   $V138 = $Menu_util->getElementsByTagName( "e138" );  $N138 = $V138->item(0)->nodeValue;
   $V139 = $Menu_util->getElementsByTagName( "e139" );  $N139 = $V139->item(0)->nodeValue;
   $V140 = $Menu_util->getElementsByTagName( "e140" );  $N140 = $V140->item(0)->nodeValue;
   $V141 = $Menu_util->getElementsByTagName( "e141" );  $N141 = $V141->item(0)->nodeValue;
   $V142 = $Menu_util->getElementsByTagName( "e142" );  $N142 = $V142->item(0)->nodeValue;
   $V143 = $Menu_util->getElementsByTagName( "e143" );  $N143 = $V143->item(0)->nodeValue;
   $V144 = $Menu_util->getElementsByTagName( "e144" );  $N144 = $V144->item(0)->nodeValue;
   $V145 = $Menu_util->getElementsByTagName( "e145" );  $N145 = $V145->item(0)->nodeValue;
   $V146 = $Menu_util->getElementsByTagName( "e146" );  $N146 = $V146->item(0)->nodeValue;
   $V147 = $Menu_util->getElementsByTagName( "e147" );  $N147 = $V147->item(0)->nodeValue;
   $V148 = $Menu_util->getElementsByTagName( "e148" );  $N148 = $V148->item(0)->nodeValue;
   $V149 = $Menu_util->getElementsByTagName( "e149" );  $N149 = $V149->item(0)->nodeValue;
   $V150 = $Menu_util->getElementsByTagName( "e150" );  $N150 = $V150->item(0)->nodeValue;
   $V151 = $Menu_util->getElementsByTagName( "e151" );  $N151 = $V151->item(0)->nodeValue;
   $V152 = $Menu_util->getElementsByTagName( "e152" );  $N152 = $V152->item(0)->nodeValue;
   $V153 = $Menu_util->getElementsByTagName( "e153" );  $N153 = $V153->item(0)->nodeValue;
   $V154 = $Menu_util->getElementsByTagName( "e154" );  $N154 = $V154->item(0)->nodeValue;
   $V155 = $Menu_util->getElementsByTagName( "e155" );  $N155 = $V155->item(0)->nodeValue;
   $V156 = $Menu_util->getElementsByTagName( "e156" );  $N156 = $V156->item(0)->nodeValue;
   $V157 = $Menu_util->getElementsByTagName( "e157" );  $N157 = $V157->item(0)->nodeValue;
   $V158 = $Menu_util->getElementsByTagName( "e158" );  $N158 = $V158->item(0)->nodeValue;
   $V159 = $Menu_util->getElementsByTagName( "e159" );  $N159 = $V159->item(0)->nodeValue;
   $V160 = $Menu_util->getElementsByTagName( "e160" );  $N160 = $V160->item(0)->nodeValue;
   $V161 = $Menu_util->getElementsByTagName( "e161" );  $N161 = $V161->item(0)->nodeValue;
   $V162 = $Menu_util->getElementsByTagName( "e162" );  $N162 = $V162->item(0)->nodeValue;
   $V163 = $Menu_util->getElementsByTagName( "e163" );  $N163 = $V163->item(0)->nodeValue;
   $V164 = $Menu_util->getElementsByTagName( "e164" );  $N164 = $V164->item(0)->nodeValue;
 $urlCod="$N35.$N36.$N39"; 
 $ttcode="$N39"; 
 
 $error_form=$N1;
  

     include ("Connection.php");
						$email=$_SESSION['login'];
						$user=mysql_query("select * from  users where Email='$email'");
                        $userinfo=mysql_fetch_array($user);
						$_SESSION['nom']=$userinfo['Nom_prenom'];
						
						
   $request=mysql_query("select * from  entreprise  ");
  $admina=mysql_fetch_array($request);
  
 $usr=mysql_query("select * from  users where Email='$email' and type_acces='Administrateur'");
  $util=mysql_fetch_array($usr);
  $permission=array();
if($util){
$permission[1]='Administrateur';
 for($i=2;$i<40;$i++){
$permission[$i]=0;

}
}else{
 for($i=1;$i<=39;$i++){
$permission[$i]=0;

}
 $service=mysql_query("select * from  services where user='$email'");
 while($serv=mysql_fetch_array($service)){
$permission[$serv[1]]=$serv[1];
}
  }

?>
<html lang="fr">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Logistics </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<style type="text/css" media="print"> 
#noimprime{ 
display:none; 
}

</style>
<style type="text/css" media="print"> 
.noimprime { 
display:none; 
}

</style>

<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">  -->


<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN:File Upload Plugin CSS files-->
<link href="../assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
<link href="../assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
<link href="../assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
<!-- END:File Upload Plugin CSS files-->
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../assets/admin/pages/css/inbox.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="images/icn_photo.png"/>
<script type="text/javascript"> 
function confirmLink(theLink)
{
    var is_confirmed = confirm("<?php echo $N43; ?>");
   
    return is_confirmed;
} 

  function getRate(from, to) {

    var script = document.createElement('script');
    script.setAttribute('src', "http://query.yahooapis.com/v1/public/yql?q=select%20rate%2Cname%20from%20csv%20where%20url%3D'http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes%3Fs%3D"+from+to+"%253DX%26f%3Dl1n'%20and%20columns%3D'rate%2Cname'&format=json&callback=parseExchangeRate");
    document.body.appendChild(script);
  }
  var ident;
 function parseExchangeRate(data) {

    var name = data.query.results.row.name;
    var rate = parseFloat(data.query.results.row.rate, 10);
	document.getElementById(ident).value=rate;
	
   

  }
  function getDesvise(orig,dest,spaceaff){
 ident=spaceaff; 
  getRate(orig, dest);
 
  }
  function changerdevise(nom,id){
	
  destin=document.getElementById('monnaie').value ;
  // destin=document.getElementById('devise'+RegExp.$1).value = leselect;

   getDesvise(nom.value,destin,"devise"+id);
    }
  function comparerDate(date1,date2,message){
	
		var d1 = document.getElementById(date1).value;
		var d2 = document.getElementById(date2).value;
		var msg = document.getElementById(message);


dat1 = new Date(d2);
dat2 = new Date(d1);
tmp = dat2 - dat1;
if(tmp<0){
msg.innerHTML='<font size=1 color="red" >(*)<?php echo $N154; ?></font>';
document.getElementById(date1).value='';
}else{
if(!isNaN(tmp)){
msg.innerHTML='';
}
}
}

    
</script>
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo ">

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
		<a href="indexbord.php?valeur=dashboard.php&titre=<?php echo $N44; ?>&url=<?php echo $N44; ?>">
					
			<img src="bktrans_data/<?php echo $admina[0]; ?>" style="width:100px;height:40px;" alt="logo" class="logo-default"/>
			
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
				
					
					
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						<?php echo $_SESSION['nom'];
						?> </span>
						<?php
						if($userinfo['avatar']!=NULL){
						?>					
						<img alt="" class="img-circle" src="<?php echo $userinfo['avatar'];?>"/>
						<?php }else{?>
						<img alt="" class="img-circle" src="../assets/admin/layout4/img/avatar.png"/>
						<?php }?>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
							
								<a href="MenuUtilisation.php?valeur=extra_profile_account.php&url=<?php echo $_SESSION['nom'].".".$N121; ?>">
								<i class="icon-user"></i> <?php echo $N121; ?> </a>
							</li>
							
							<li>
								<a href="MenuUtilisation.php?valeur=AllMAILEnvoiyer.php&titre=<?php echo $N112; ?>&url=<?php echo $_SESSION['nom'].".".$N113; ?>">
								<i class="icon-envelope-open"></i><?php echo $N112; ?>
								</a>
							</li>
							
							<li class="divider">
							</li>
							<li>
								<a href="../extra_lock.php">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="Deconnexion.php">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
				
					
					
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<?php echo $_SESSION['databasesname']; ?>
						</a>
						<?php if($util){ ?>
						<ul class="dropdown-menu dropdown-menu-default">
							<?php  foreach ($data2 as $datas){ ?>
							<li>
								<a href="indexbord.php?valeur=dashboard.php&titre=<?php echo $N44; ?>&url=<?php echo $N44; ?>&forwardto.php&db=<?php echo $datas[0]; ?>&namedtbse=<?php echo  $datas[1]; ?>">
							<?php echo  $datas[1]; ?> </a>
							</li>
							<?php  } ?>				
						</ul>
			<?php  }else{ ?>
						<ul class="dropdown-menu dropdown-menu-default">
							<?php  foreach ($data as $datas){ ?>
							<li>
								<a href="indexbord.php?valeur=dashboard.php&titre=<?php echo $N44; ?>&url=<?php echo $N44; ?>&forwardto.php&db=<?php echo $datas[0]; ?>&namedtbse=<?php echo  $datas[1]; ?>">
							<?php echo  $datas[1]; ?> </a>
							</li>
							<?php  } ?>						
						</ul><?php  } ?>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="indexbord.php?valeur=dashboard.php&titre=<?php echo $N44; ?>&url=<?php echo $N44; ?>">
					<i class="icon-home"></i>
					<span class="title"><?php echo $N44; ?></span>
					</a>
				</li>
				<?php  if("$permission[1]"=="Administrateur" || "$permission[5]"=='5' || "$permission[6]"=='6' || "$permission[7]"=='7'){  ?>
				<li class="active ">
					<a href="javascript:;">
					<i class="icon-rocket"></i>
					<span class="title"><?php echo $N14; ?></span>
					<span class="arrow  open"></span>
					</a>
					<ul class="sub-menu">
					<?php  if("$permission[1]"=="Administrateur" || "$permission[5]"=='5'){ ?>
						<li>
							<a href="">
							<?php echo $N15; ?>
							<span class="arrow "></span>
							</a>
								<ul class="sub-menu">
								
						<li>
						
							<a href="MenuUtilisation.php?valeur=AjouterClient.php&titre=<?php echo $N16; ?>&url=<?php echo $N14.".".$N15.".".$N16; ?>">
							<?php echo $N16; ?></a>
							
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=Allclient.php&titre=<?php echo $N17; ?>&url=<?php echo $N14.".".$N15.".".$N17; ?>">
							<?php echo $N17; ?></a>
						</li>
						
					
					</ul>
						</li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[6]"=='6'){ ?>
						<li>
							<a href="">
							<?php echo $N18; ?>
							<span class="arrow "></span>
							</a>
								<ul class="sub-menu">
								<li>
							<a href="MenuUtilisation.php?valeur=Ajouteroffre.php&titre=<?php echo $N63; ?>&url=<?php echo $N14.".".$N18.".".$N63; ?>">
							<?php echo $N63; ?></a>
							
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AllOffre.php&titre=<?php echo $N64; ?>&url=<?php echo $N14.".".$N18.".".$N64; ?>">
							<?php echo $N64; ?></a>
						</li>
					 
					</ul>
						</li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[7]"=='7'){ ?>
							<li>
							<a href="">
							<?php echo $N103; ?>
							<span class="arrow "></span>
							</a>
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=Gestion_Frais.php&titre=<?php echo $N104; ?>&url=<?php echo $N14.".".$N103.".".$N104; ?>">
							<?php echo $N104; ?></a>
						</li>
						</ul>
						</li>
						<?php  } ?>
					</ul>
				</li>
				<?php } 
		 if("$permission[1]"=="Administrateur" || "$permission[1]"=='1' || "$permission[3]"=='3' || "$permission[18]"=='18'){ 
		 ?>
				<li class="active ">
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title"><?php echo $N4; ?></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<?php if("$permission[1]"=="Administrateur" || "$permission[1]"=='1'){ 
					?>
					
						<li>
							<a href="">
						<i class="fa fa-folder"></i>
							<?php echo $N5; ?>
							<span class="arrow "></span>
							</a>
					<ul class="sub-menu">
					
						<li>
							<a href="MenuUtilisation.php?valeur=AjouterDossier.php&titre=<?php echo $N6; ?>&url=<?php echo $N4.".".$N5.".".$N6; ?>">
							<?php echo $N6; ?></a>
							
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AllDossier.php&titre=<?php echo $N7; ?>&url=<?php echo $N4.".".$N5.".".$N7; ?>">
						
							<?php echo $N7; ?></a>
						</li>
						
					
					</ul>
					
						</li>
						<?php }  if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ ?>
						
						
						<li>
							
							<a href="">
							<i class="icon-basket"></i>
							<?php echo $N8; ?><span class="arrow "></span>
							</a>
							<ul class="sub-menu">
                            <li>
							<a href="MenuUtilisation.php?valeur=AllOperation.php&titre=<?php echo $N9; ?>&url=<?php echo $N4.".".$N8.".".$N9; ?>">
							<i class="icon-home"></i>
							<?php echo $N9; ?></a>
							
						</li>
						<li>
							<a href="">
							<i class="icon-basket"></i>
							<?php echo $N10; ?><span class="arrow "></span></a>
							<ul class="sub-menu">
							<li>
							
							<a href="MenuUtilisation.php?valeur=AjouterAirExport.php&titre=<?php echo $N10."&nbsp;Air Export"; ?>&url=<?php echo $N4.".".$N8.".".$N10.".Air Export"; ?>">
							<i class="fa fa-plane"></i><i class="fa fa-arrow-up"></i>
							Air Export</a>
							
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AjouterOceanExport.php&titre=<?php echo $N10."&nbsp;Ocean Export"; ?>&url=<?php echo $N4.".".$N8.".".$N10.".Ocean Export"; ?>">
							Ocean Export</a>
						</li><li>
							<a href="MenuUtilisation.php?valeur=AjouterRoadExport.php&titre=<?php echo $N10."&nbsp;Road Export"; ?>&url=<?php echo $N4.".".$N8.".".$N10.".Road Export"; ?>">
							<i class="fa fa-truck"></i><i class="fa fa-arrow-up"></i>
							Road Export</a>
						</li><li>
							<a href="MenuUtilisation.php?valeur=AjouterAirImport.php&titre=<?php echo $N10."&nbsp;Air Import"; ?>&url=<?php echo $N4.".".$N8.".".$N10.".Air Import"; ?>"><i class="fa fa-plane"></i><i class="fa fa-arrow-down"></i>
							Air Import</a>
						</li><li>
							<a href="MenuUtilisation.php?valeur=AjouterOceanImport.php&titre=<?php echo $N10."&nbsp;Ocean Import"; ?>&url=<?php echo $N4.".".$N8.".".$N10.".Ocean Import"; ?>">
							Ocean Import</a>
						</li><li>
							<a href="MenuUtilisation.php?valeur=AjouterRoadImport.php&titre=<?php echo $N10."&nbsp;Road Import"; ?>&url=<?php echo $N4.".".$N8.".".$N10.".Road Import"; ?>">
							<i class="fa fa-truck"></i><i class="fa fa-arrow-down"></i>
							Road Import</a>
						</li>
							</ul>
							
						</li>
						
						<li  >
							<a href="">
							<i class="icon-pencil"></i>
							<?php echo $N79; ?><span class="arrow"></span>
							</a>
             <ul class="sub-menu">
						<li>
							<a href="MenuUtilisation.php?valeur=AllLocation.php&titre=<?php echo $N89;?>&url=<?php echo $N4.".".$N8.".".$N79.".".$N81; ?>">
							<?php echo $N81; ?></a>
							
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AllMagasinage.php&titre=<?php echo $N90; ?>&url=<?php echo $N4.".".$N8.".".$N79.".".$N82; ?>">
							<?php echo $N82; ?></a>
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=Service_logistique.php&titre=<?php echo $N91;?>&url=<?php echo $N4.".".$N8.".".$N79.".".$N83; ?>">
							<?php echo $N83; ?></a>
						</li>
					<?php	if("$permission[1]"=="Administrateur" || "$permission[18]"=='18') { ?>
						
						<li>
							<a href="">
							<?php echo $N86; ?><span class="arrow "></span></a>
							<!--debut-->
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterEquipment.php&titre=<?php echo $N87; ?>&url=<?php echo $N8.".".$N79.".".$N86.".".$N87; ?>">
							<?php echo $N87; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AllEquipment.php&titre=<?php echo $N88; ?>&url=<?php echo $N8.".".$N79.".".$N86.".".$N88; ?>">
							<?php echo $N88; ?></a>
						    </li>
							</ul>
							<!--fin-->
						</li>
						<?php } ?>
					
				</ul>
						</li>
					</ul>
					
						</li><?php } if("$permission[1]"=="Administrateur" || "$permission[4]"=='4'){ ?>
					
						<li>
							<a href="">
							<i class="icon-tag"></i>
							<?php echo $N11; ?>
							<span class="arrow "></span>
							
							</a>
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=<?php echo $N45; ?>&url=<?php echo $N4.".".$N11.".".$N41; ?>">
							<?php echo $N41; ?></a>
							
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=<?php echo $N66; ?>&url=<?php echo $N4.".".$N11.".".$N65; ?>">
							<?php echo $N65; ?></a>
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AllCommande.php&titre=<?php echo $N46; ?>&url=<?php echo $N4.".".$N11.".".$N12; ?>">
							<?php echo $N12; ?></a>
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&titre=<?php echo $N47; ?>&url=<?php echo $N4.".".$N11.".".$N13; ?>">
							<?php echo $N13; ?></a>
						</li>
				
					</ul>
						</li>
						<?php  } ?>
					</ul>
				</li><?php  } ?>
					<?php if("$permission[1]"=="Administrateur" || "$permission[8]"=='8') { ?>
					
						<li class="active ">
							<a href="javascript:;">
					<i class="icon-diamond"></i>
					<span class="title"><?php echo $N20; ?></span>
					<span class="arrow  open"></span>
					</a>
							<!--debut-->
							<ul class="sub-menu">
						<?php 	if("$permission[1]"=="Administrateur" || "$permission[36]"=='36') { ?>
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterFacture.php&titre=<?php echo $N50; ?>&url=<?php echo $N20.".".$N21; ?>">
							<?php echo $N21; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=<?php echo $N66; ?>&url=<?php echo $N20.".".$N65; ?>">
							<?php echo $N65; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterFactureperiodique.php&titre=<?php echo $N62; ?>&url=<?php echo $N20.".".$N61; ?>">
							<?php echo $N61; ?></a>
						    </li>
							<?php } ?>
							<li>
							<a href="MenuUtilisation.php?valeur=AllFacture.php&titre=<?php echo $N51; ?>&url=<?php echo $N20.".".$N22; ?>">
							<?php echo $N22; ?></a>
						    </li>
							</ul>
							<!--fin-->
						</li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[13]"=='13'|| "$permission[14]"=='14' || "$permission[15]"=='15') { ?>
				
				<li class="active ">
					<a href="javascript:;">
					<i class="icon-bar-chart"></i>
					<span class="title"><?php echo $N19; ?></span>
					<span class="arrow  open"></span>
					</a>
					<ul class="sub-menu">
					<?php if("$permission[1]"=="Administrateur" || "$permission[13]"=='13') { ?>
						<li>
							<a href="">
							<?php echo $N23; ?><span class="arrow "></span></a>
							<!--debut-->
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterCompte.php&titre=<?php echo $N52; ?>&url=<?php echo $N19.".".$N23.".".$N52; ?>">
							<?php echo $N24; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AllCompte.php&titre=<?php echo $N53; ?>&url=<?php echo $N19.".".$N23.".".$N53; ?>">
							<?php echo $N25; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=ArgentEntre.php&titre=<?php echo $N97; ?>&url=<?php echo $N19.".".$N23.".".$N97; ?>">
							<?php echo $N97; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=Transactionbancaire.php&titre=<?php echo $N54; ?>&url=<?php echo $N19.".".$N23.".".$N54; ?>">
							<?php echo $N26; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AllCommandePretApeye.php&titre=<?php echo $N55; ?>&url=<?php echo $N19.".".$N23.".".$N27; ?>">
							<?php echo $N27; ?></a>
						    </li>
							</ul>
							<!--fin-->
						</li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[14]"=='14') { ?>
						
						<li>
							<a href="">
							<?php echo $N72; ?><span class="arrow "></span></a>
							<!--debut-->
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AllTax.php&titre=<?php echo $N72; ?>&url=<?php echo $N19.".".$N72.".".$N72; ?>">
							<?php echo $N72; ?></a>
						    </li>
							</ul>
							<!--fin-->
						</li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[15]"=='15') { ?>
						
						<li>
							<a href="">
							<?php echo $N28; ?><span class="arrow "></span></a>
							<!--debut-->
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterBesoin.php&titre=<?php echo $N56; ?>&url=<?php echo $N19.".".$N28.".".$N29; ?>">
							<?php echo $N29; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AllBesoins.php&titre=<?php echo $N57; ?>&url=<?php echo $N19.".".$N28.".".$N30; ?>">
							<?php echo $N30; ?></a>
						    </li>
							
						<li>
							<a href="MenuUtilisation.php?valeur=AllDossierEntreprise.php&Depense=true&titre=<?php echo $N151; ?>&url=<?php echo $N19.".".$N28.".".$N151; ?>">
	
							<?php echo $N151; ?></a>
						</li>
						
					
					
					
						
							</ul>
							<!--fin-->
							
						</li><?php }  ?>
						
						<?php } if("$permission[1]"=="Administrateur" || "$permission[17]"=='17') { ?>
						
						<li>
							<a href="">
							<?php echo $N67; ?><span class="arrow "></span></a>
							<!--debut-->
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterMatriel.php&titre=<?php echo $N68; ?>&url=<?php echo $N19.".".$N67.".".$N68; ?>">
							<?php echo $N68; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=AllMatriel.php&titre=<?php echo $N69; ?>&url=<?php echo $N19.".".$N67.".".$N69; ?>">
							<?php echo $N69; ?></a>
						    </li>
							</ul>
							<!--fin-->
						</li>
						
					</ul>
				</li><?php }  
						 ?>
				<?php if("$permission[1]"=="Administrateur" || "$permission[16]"=='16') { ?>
					
						<li class="active ">
							<a href="javascript:;">
					<i class="fa fa-truck"></i>
					<span class="title">&nbsp;<?php echo $N32; ?></span>
					<span class="arrow  open"></span>
					</a>
							<!--debut-->
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=AjouterFournisseur.php&titre=<?php echo $N59; ?>&url=<?php echo $N32.".".$N33; ?>">
							<?php echo $N33; ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=Fournisseur.php&titre=<?php echo $N34; ?>&url=<?php echo $N32.".".$N34; ?>">
							<?php echo $N34; ?></a>
						    </li>
							</ul>
							<!--fin-->
						</li>
						<?php } ?>
						<?php if("$permission[1]"=="Administrateur" || "$permission[19]"=='19') { ?>
					
						<li class="active ">
							<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title"><?php echo $N74; ?></span>
					<span class="arrow  open"></span>
					</a>
							<!--debut-->
							<ul class="sub-menu">
							<li >
							<a href="javascript:;">
					<span class="title"><?php echo $N161; ?></span>
					<span class="arrow  "></span>
					</a><ul class="sub-menu">
							
							
							<li>
							<a href="MenuUtilisation.php?valeur=Gestion_rapport_operation.php&titre=<?php echo $N102; ?>&url=<?php echo $N74.".".$N102; ?>">
							<?php echo $N102 ?></a>
						    </li>
							</ul>
							</li>
							
							<li >
							<a href="javascript:;">
					<span class="title"><?php echo $N160; ?></span>
					<span class="arrow  "></span>
					</a><ul class="sub-menu">
                              <li>
							<a href="MenuUtilisation.php?valeur=Gestion_rapport_Tax.php&titre=<?php echo $N76; ?>&url=<?php echo $N74.".".$N75; ?>">
							<?php echo $N75; ?></a>
						    </li><?php  if("$permission[1]"=="Administrateur" || "$permission[38]"=='38') { ?>
							<li>
							<a href="MenuUtilisation.php?valeur=Manegement_rapport.php&titre=<?php echo $N164; ?>&url=<?php echo $N74.".".$N164; ?>">
							<?php echo $N164 ?></a>
						    </li>
							<?php } if("$permission[1]"=="Administrateur" || "$permission[32]"=='32') { ?>
							<li>
							<a href="MenuUtilisation.php?valeur=Journal.php&titre=<?php echo $N155; ?>&url=<?php echo $N74.".".$N155; ?>">
							<?php echo $N155 ?></a>
						    </li>
							<?php } if("$permission[1]"=="Administrateur" || "$permission[33]"=='33') { ?>
							<li>
							<a href="MenuUtilisation.php?valeur=GrandLivre.php&titre=<?php echo $N156; ?>&url=<?php echo $N74.".".$N156; ?>">
							<?php echo $N156 ?></a>
						    </li>
							<li>
							<a href="MenuUtilisation.php?valeur=GrandLivreTiers.php&titre=<?php echo $N159; ?>&url=<?php echo $N74.".".$N159; ?>">
							<?php echo $N159 ?></a>
						    </li>
							<?php } if("$permission[1]"=="Administrateur" || "$permission[34]"=='34') { ?>
							<li>
							<a href="MenuUtilisation.php?valeur=BalanceCompte.php&titre=<?php echo $N157; ?>&url=<?php echo $N74.".".$N157; ?>">
							<?php echo $N157 ?></a>
						    </li><li>
							<a href="MenuUtilisation.php?valeur=BalanceTiers.php&titre=<?php echo $N158; ?>&url=<?php echo $N74.".".$N158; ?>">
							<?php echo $N158 ?></a>
						    </li>
							<?php } ?>
							</ul>
							<!--fin-->
						</li></ul></li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[10]"=='10' || "$permission[9]"=='9') { ?>
				
				<li class="active ">
					<a href="">
					<i class="icon-puzzle"></i>
					<span class="title"><?php echo $N98; ?></span>
					<span class="arrow open "></span>
					</a>
					
				<ul class="sub-menu">
				<?php if("$permission[1]"=="Administrateur" || "$permission[9]"=='9') { ?>
						
						<li>
							<a href="">
							<?php echo $N99; ?><span class="arrow "></span></a>
						
						
						<ul class="sub-menu">
						
						<li>
							<a href="MenuUtilisation.php?valeur=AjouterPersonel.php&titre=<?php echo $N100; ?>&url=<?php echo $N98.".".$N99.".".$N100; ?>">
							<?php echo $N100; ?></a>
						</li>
						
						<li>
							<a href="MenuUtilisation.php?valeur=ListePersonels.php&titre=<?php echo $N101; ?>&url=<?php echo $N98.".".$N99.".".$N101; ?>">
							<?php echo $N101; ?></a>
						</li>
						
					</ul>
					</li>
					<?php } if("$permission[1]"=="Administrateur" || "$permission[10]"=='10') { ?>
						
					<li>
							<a href="">
							<?php echo $N115; ?><span class="arrow "></span></a>
						
						
						<ul class="sub-menu">
						<li>
							<a href="MenuUtilisation.php?valeur=Paiement_salaire.php&titre=<?php echo $N116; ?>&url=<?php echo $N98.".".$N115.".".$N116; ?>">
							<?php echo $N116; ?></a>
						</li>
						
					</ul>
					</li>
					<?php  }  ?>
					</ul>
				</li>
				<?php } ?>
				<!-- END ANGULARJS LINK -->
					<?php if("$permission[1]"=="Administrateur" || "$permission[11]"=='11' || "$permission[12]"=='12' ){  ?>
				<li class="active">
					<a href="">
					<i class="icon-settings"></i>
					<span class="title"><?php echo $N35; ?></span>
					<span class="arrow open"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="">
							<?php echo $N36; ?><span class="arrow "></span></a>
							<ul class="sub-menu">
						<?php if("$permission[1]"=="Administrateur" || "$permission[12]"=='12') { ?>
						
						<li>
							<a href="MenuUtilisation.php?valeur=AllUser.php&titre=<?php echo $N38; ?>&url=<?php echo $N35.".".$N36.".".$N38; ?>">
							<?php echo $N38; ?></a>
						</li>
						<?php } if("$permission[1]"=="Administrateur" || "$permission[11]"=='11') { ?>
						
						<li>
							<a href="MenuUtilisation.php?valeur=Configuration_Profil.php&titre=<?php echo $N37; ?>&url=<?php echo $N35.".".$N36.".".$N37; ?>">
							<?php echo $N37; ?></a>
						</li>
						<li>
							<a href="MenuUtilisation.php?valeur=Codes.php&titre=<?php echo $N39; ?>&url=<?php echo $N35.".".$N36.".".$N39; ?>">
							<?php echo $N39; ?></a>
						</li><li>
							<a href="MenuUtilisation.php?valeur=DefaultSetting.php&titre=<?php echo $N70; ?>&url=<?php echo $N35.".".$N36.".".$N71; ?>">
							<?php echo $N71; ?></a>
						</li><li>
							<a href="MenuUtilisation.php?valeur=Financ_periode.php&titre=<?php echo $N78; ?>&url=<?php echo $N35.".".$N36.".".$N77; ?>">
							<?php echo $N77; ?></a>
						</li>
						     <li>
							<a href="MenuUtilisation.php?valeur=Gestion_Cat.php&titre=<?php echo $N85; ?>&url=<?php echo $N35.".".$N36.".".$N84; ?>">
							<?php echo $N84; ?></a>
						     </li>
							 <li>
							<a href="MenuUtilisation.php?valeur=Gestion_Kpi.php&titre=<?php echo $N117; ?>&url=<?php echo $N35.".".$N36.".".$N117; ?>">
							<?php echo $N117; ?></a>
						     </li>
							 <li>
							<a href="MenuUtilisation.php?valeur=Documentation.php&titre=<?php echo $N162; ?>&url=<?php echo $N35.".".$N36.".".$N163; ?>">
							<?php echo $N163; ?></a>
						     </li>
							<?php } ?>
						
							</ul>
						</li>
						
						<li>
							<a href="">
							<?php echo $N40; ?><span class="arrow "></span></a>
							<ul class="sub-menu">
							<li>
							<a href="MenuUtilisation.php?valeur=Notify.php&titre=<?php echo $N40; ?>&url=<?php echo $N35.".".$N40.".".$N40; ?>">
							<?php echo $N40; ?></a>
						</li>
						</ul>
						</li>
						<?php
}


						if("$permission[1]"=="Administrateur" ) { ?>
						<li>
							
							<li>
							<a href="MenuUtilisation.php?valeur=historic.php&titre=<?php echo $N122; ?>&url=<?php echo $N35.".".$N122; ?>">
							<?php echo $N122; ?></a>
						</li>
						
						</li>
						<?php  }  ?>
					</ul>
				</li>
					
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			
			<ul class="page-breadcrumb breadcrumb" id="noimprime">
			<?php if(isset($_GET['url']) ){ 
				$url=explode('.',$_GET['url']);
				$c=0;
				$n=count($url);
				foreach ($url as $s){ 
				
				if($c==$n-1){
				?>
				<li>
					<a href=""><?php echo $s; ?></a>
					
				</li>
		
				<?php 
				} else{?>
				<li>
					<a href=""><?php echo $s; ?></a>
					<i class="fa fa-circle"></i>
				</li> 
				<?php
				
				
				}
				$c++;
				}
				}  ?>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
			
				<div class="col-md-12">
						<div class="portlet light">
							<div class="portlet-title">
							<?php 
							
		if(isset($_GET['msg'])){
		$msg=$_GET['msg'];
		if($_GET['etat_up']==1){
		?>
		<div class="alert alert-block alert-success fade in">
								<button type="button" class="close" data-dismiss="alert"></button>
								<p>
									<?php echo $msg;?> 
								</p>
								
							</div>
							<?php
}else{
?>
		<div class="alert alert-block alert-danger fade in">
								<button type="button" class="close" data-dismiss="alert"></button>
								<p>
									<?php echo $msg;?> 
								</p>
								
							</div>
							<?php		
}
		}else{
		if(isset($_GET['etat_up'])){
		if($_GET['etat_up']==1){
		?>
		<div class="alert alert-block alert-success fade in">
								<button type="button" class="close" data-dismiss="alert"></button>
								<h4 class="alert-heading">Succes</h4>
								
								
							</div>
							<?php
		
		}else{
		?>
		<div class="alert alert-block alert-danger fade in">
								<button type="button" class="close" data-dismiss="alert"></button>
								<h4 class="alert-heading">Error</h4>
								
								
							</div>
							<?php
		}
		
		}else{
		 }} ?>
						
							
							<br>
							
								<div class="caption">
								<?php if(isset($_GET['titre'])){?>
									<i class="icon-basket font-green-sharp"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									<?php  echo strtoupper($_GET['titre']); } ?> </span>
									<span class="caption-helper"></span>
									
									
									
								</div>
							
							
				</div>
			<?php 
				if(isset($_GET['valeur'])){
				$var=$_GET['valeur'];
				$page=explode(".",$var);
				
				$doc = new DOMDocument(); 
				$pays_liste = new DOMDocument(); 
				$file =$_SESSION['lang'];
				
 
$doc->load($file); 
$employees = $doc->getElementsByTagName($page[0]); 

  

//var_dump($permission);
//var_dump($util);
//echo "select * from  users where Email='$email' and type_acces='Administrateur'";
				
	include($var);
				
				}
				?>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
<?php $date=date('Y'); ?>
		 <footer>
			<hr />
			<p><?php echo $F42; ?> <?php echo $date; ?> <a href="http://<?php echo $admina[5]; ?>" target="_blank"><?php echo $admina[5]; ?></a></p>
		</footer>

	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="../assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>

<script type="text/javascript" src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="../assets/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN:File Upload Plugin JS files-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="../assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="../assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="../assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="../assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="../assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="../assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>


<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/table-advanced.js"></script>
<script src="../assets/global/scripts/datatable.js"></script>
<script src="../assets/admin/pages/scripts/form-wizard.js"></script>
<script src="../assets/admin/pages/scripts/form-validation.js"></script>
<script src="../assets/admin/pages/scripts/inbox.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/inboxoperation.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!--<script src="../assets/admin/pages/scripts/ecommerce-products-edit.js"></script>-->
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
 
 FormValidation.init();
 FormWizard.init();
 TableAdvanced.init();
Profile.init(); 
		 
			
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php }} ?>