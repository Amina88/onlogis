<?php
session_start();

if(isset($_POST['login']) && isset($_POST['pass'])){
$login   =$_POST['login'];
$pwd=$_POST['pass'];
$password=md5($pwd);
$test=0;
include ("bktrans/Connect.php");

$req=mysql_query("SELECT * FROM `control_panel` where databese='bktragpo_demo' ");

while($nom=mysql_fetch_array($req)){
$_SESSION['databasesname']=$nom[2];
}
$_SESSION['databases']="bktragpo_demo";
include ("bktrans/Connection.php");

$result1=mysql_query("select * from users where Nom_Utilisateur='$login'");
 while($row = mysql_fetch_row($result1)){
 $test=1;
 if($row[9]==$login && $row[1]==$password){
 $_SESSION['login']=$row[0];
 $_SESSION['pwd']=$password;


 if($_POST['lang']=="FR"){
  $_SESSION['lang']="langue_translate/FR/langue.xml";
  $_SESSION['lang_Manu']="langue_translate/FR/langue_Menu_Utilisation.xml";
  $_SESSION['lang_out_Manu']="langue_translate/FR/langue_page_out_Menu_utilisation.xml";
  $_SESSION['liste_pays']="langue_translate/FR/liste_pays.xml";
 }elseif($_POST['lang']=="ES")
 
 {
 $_SESSION['lang']="langue_translate/ES/langue.xml";
  $_SESSION['lang_Manu']="langue_translate/ES/langue_Menu_Utilisation.xml";
  $_SESSION['lang_out_Manu']="langue_translate/ES/langue_page_out_Menu_utilisation.xml";
  $_SESSION['liste_pays']="langue_translate/ES/liste_pays.xml";
  
 }else{
 $_SESSION['lang']="langue_translate/EN/langue.xml";
  $_SESSION['lang_Manu']="langue_translate/EN/langue_Menu_Utilisation.xml";
  $_SESSION['lang_out_Manu']="langue_translate/EN/langue_page_out_Menu_utilisation.xml";
  $_SESSION['liste_pays']="langue_translate/EN/liste_pays.xml";
 
 }
  
				$doc = new DOMDocument(); 
				$file =$_SESSION['lang'];
 
$doc->load("bktrans/$file"); 
$employees = $doc->getElementsByTagName('index'); 
foreach($employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); 
  $N1 = $V1->item(0)->nodeValue; 
?>
 <script type="text/javascript"> 
document.location.href="bktrans/indexbord.php?valeur=dashboard.php&url=<?php echo $N1; ?>&titre=<?php echo $N1; ?>";
	
  </script>
 
<?php
  }
 } else{
 ?>
 <script type="text/javascript"> 
document.location.href="index.php";
	
  </script>
<?php
 }
 
 }
 if($test==0){
 ?>
 <script type="text/javascript"> 
document.location.href="index.php";
	
  </script>
<?php
 }
 }else{
 
?>

<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Entreprise</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES 
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
--><link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="bktrans/images/icn_photo.png"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<?php
$_SESSION['databases']="bktragpo_demo";
  include ("bktrans/Connection.php");
     
   $request=mysql_query("select Nom_Entreprise from  entreprise  ");
  $admina=mysql_fetch_array($request);
$ENT=$admina[0];
?>
<FONT color="#fff" size="5"><h3 class="form-title uppercase" ><?php echo $ENT; ?></h3></font>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="index.php" method="post">
		<h3 class="form-title">Sign In</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Enter any username and password. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Username</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="login"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="pass"/>
		
		</div>
		</div>
		<div class="form-group">
										<label class="control-label visible-ie8 visible-ie9">Choose Your Language</label>
										
											<select name="lang" id="select2_sample4"  class="form-control form-control-solid placeholder-no-fix">
										
												<option value="FR" selected>FR</option>
											
												<option value="ES">ES</option>
												
												<option value="US">EN</option>
											
											</select>
										
									</div>
		<div class="form-actions">
			<button type="submit" class="btn blue pull-right">
			Login <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
	
	</form>

	
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2015 &copy; Tous les droits res&eacute;rv&eacute; www.bktrans.mr
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/components-dropdowns.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
  Login.init();
  Demo.init();
            
       // init background slide images
       $.backstretch([
        "assets/admin/pages/media/bg/1.jpg",
        "assets/admin/pages/media/bg/2.jpg",
        "assets/admin/pages/media/bg/3.jpg",
        "assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    ); 
	ComponentsDropdowns.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

<?php } ?>