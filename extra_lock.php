<?php
session_start();
$_SESSION['databases']="bktragpo_mr";
unset($_SESSION['pwd']);
if(isset($_POST['password'])){
$login=$_SESSION['login'];
$pwd=$_POST['password'];
$password=md5($pwd);
include ("bktrans/Connection.php");

$result1=mysql_query("select * from users where Email='$login'");

 while($row = mysql_fetch_row($result1)){
 if($row[0]==$login && $row[1]==$password){
 $_SESSION['login']=$login;
 $_SESSION['pwd']=$password;
 
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
 }else{
 ?>
 <script type="text/javascript"> 
document.location.href="extra_lock.php";
	
  </script>
<?php
 }
 }}else{
 
?>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Login Options - Lock Screen 1</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<?php 
include ("bktrans/Connection.php");
$mail=$_SESSION['login'];
$Users=mysql_query("select * from users where Email ='$mail'");
$usr=mysql_fetch_array($Users);
$request=mysql_query("select Nom_Entreprise from  entreprise  ");
$admina=mysql_fetch_array($request);
$ENT=$admina[0];
?>

<body>
<div class="page-lock">
	<div class="page-logo">
	 
			 
	 
	
		<a class="brand" href="">
		 <?php echo $ENT ?>
		</a>
	</div>
	<div class="page-body">
		<div class="lock-head">
			 Verrouill&eacute;
		</div>
		<div class="lock-body">
			<div class="pull-left lock-avatar-block">
				<img src="<?php echo $usr['avatar']; ?>" class="lock-avatar">
			</div>
			<form class="lock-form pull-left" action="" method="post" >
				<h4><?php echo  substr ($usr['Nom_prenom'], 0,16 ); ?></h4>
				<div class="form-group">
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success uppercase">Login</button>
				</div>
			</form>
		</div>
		<div class="lock-bottom">
			<a href="index.php">vous &ecirc;tes pas <?php echo  $usr['Nom_prenom']; ?>?</a>
		</div>
	</div>
	<div class="page-footer-custom">
	    Tous les droits res&eacute;rv&eacute; &copy; 2015 www.bktrans.mr
	</div>
</div>
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
<script src="assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php } ?>