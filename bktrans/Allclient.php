<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>



<script type="text/javascript">
function checkAll(ele) {

     var max = document.getElementById('max_CP').value;


     if (ele.checked) {
         for (var i = 1; i <= max; i++) {
		   if(document.getElementById("choix"+i)){
		 document.getElementById("choix"+i).innerHTML='<div class="checker" ><span class="checked"><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'"  checked="checked"  onClick="checkun('+i+');"  onMouseMove="getAction();" ></span></div>';
            } 
         }
     } else {
	 
         for (var i = 1;i <= max; i++) {
		   if(document.getElementById("choix"+i)){
             document.getElementById("choix"+i).innerHTML='<div class="checker"><span ><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'"   onClick="checkun('+i+');"  onMouseMove="getAction();"   ></span></div>';
        }
         }
     }
 }
 function checkun(ele) {

var inp=document.getElementById("selct"+ele);

     if (inp.checked) {
	
        document.getElementById("choix"+ele).innerHTML='<div class="checker"><span class="checked"><input type="checkbox" checked value="1" id="selct'+ele+'" name="selct'+ele+'"   onClick="checkun('+ele+');" onMouseMove="getAction();"   ></span></div>';

     } else {
        document.getElementById("choix"+ele).innerHTML='<div class="checker" ><span ><input type="checkbox" value="1"  id="selct'+ele+'"  name="selct'+ele+'"  onClick="checkun('+ele+');" onMouseMove="getAction();"   ></span></div>';
         
         
     }
 }


  </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
<script src="../assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>

</head>
<?php
include ("Connection.php");

require'includes/recAllClient.php';
if ($etat){
  

?>
<script type="text/javascript">
function getAction(){


var max=document.getElementById("max_CP").value;
test_pay=0;
for(i=1;i<=max;i++){

remember=document.getElementById('selct'+i);
	if(remember.checked == 1 ){	
	test_pay=1;
	}
	}
if(test_pay=="1"){

document.getElementById('soa').innerHTML='<button type="submit" class="btn blue" name="envoyersoa" ><?php echo $N23; ?></button>';
document.getElementById('mail').innerHTML='<button type="submit" class="btn blue" name="sendmail" ><?php echo $N24; ?></button>';

}else{

document.getElementById('soa').innerHTML='';
document.getElementById('mail').innerHTML='';


}
	
	}
  </script>

<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="tools ">
							</div>
						</div>
						<div class="portlet-body" >
						 <form action="e3.php?p=e" method="post"  />
							<table class="table table-striped table-bordered table-hover" id="sample_1" >
							<thead>
							<tr > 
					
							<th class="noimprime">
							<input type="checkbox"   onClick="checkAll(this)" onMouseMove="getAction();" class="mail-checkbox mail-group-checkbox"/></th>
   					        <th><font size="1"><?php echo $N1; ?></th> 
    				        <th><font size="1"><?php echo $N3; ?></th> 
    				        
    				        <th><font size="1"><?php echo $N18; ?></th> 
    				        <th><font size="1"><?php echo $N22; ?></th> 
					        <th class="noimprime"><font size="1"><?php echo $N5; ?></th> 
				            </tr> 
							</thead>
							<tbody>
							
						
						

			<?php 	$req=mysql_query("select * from custemer ");
			$i=0;
			
			while($admin=mysql_fetch_array($req)){
			$i++;
			$texte = str_replace('&','%26',$admin[0]);
			?>
				
			
				<tr > 
		
   				
				 <input  type="hidden"  name="cli[]"  value="<?php echo $admin[0];?>" >
				
					<td  id="choix<?php echo $i; ?>" class="noimprime">
					<input type="checkbox" value="1" id="selct<?php echo $i; ?>" name="selct<?php echo $i; ?>"  onClick="getAction();" >
					</td>
   					<td><font size="1">
					<a href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $texte;?>&titre=<?php echo $texte.' '; ?><?php echo $N21; ?>&url=<?php echo  $url.$N20 ; ?>&mdc=1" title="<?php echo $N20; ?>">
					<?php echo $admin[0];?></a></td> 
    		
					<td><font size="1"><?php echo $admin[5];?></td> 
					
					<td><font size="1"><?php echo $admin[20]?></td> 
					<td><font size="1"><?php echo $admin[21]?></td> 
    				<td class="noimprime">
					<a href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $texte;?>&titre=<?php echo $N7; ?>: <?php echo $texte; ?>&url=<?php echo  $url.$N8 ; ?>" title="<?php echo $N8; ?>"><i class="fa fa-pencil-square-o"></i></a>
					
					<a href="MenuUtilisation.php?valeur=Statement.php&NomSOC=<?php echo $texte;?>&titre=<?php echo $N19; ?>: <?php echo $texte; ?>&url=<?php echo  $url."Statement" ; ?>" title="Statement of Account"><i class="fa fa-list-alt"></i></a>
				
					<a href="MenuUtilisation.php?valeur=DeleteClient.php&NomSoc=<?php echo $texte; ?>&type=delete"onclick="return confirmLink(this) ;"  title="<?php echo $N9; ?>"><i class="fa fa-trash-o"></i></a>
					<a href="MenuUtilisation.php?valeur=OffreClient.php&Nom_Soc=<?php echo $admin[0];?>&titre=<?php echo $N27; ?> <?php echo $admin[0];?>&url=<?php echo $urlOffre ?>&client=<?php echo $admin[0]; ?>" title="<?php echo $N27; ?> <?php echo $admin[0];?>"><i class="fa fa-file-text"></i></a>
				<a href="MenuUtilisation.php?valeur=operation_client.php&Nom_Soc=<?php echo $admin[0];?>&titre=<?php echo $N25; ?><?php echo $admin[0];?>&url=<?php echo $urlOP; ?>" title="<?php echo $N25; ?> <?php echo $admin[0];?>"><i class="icon-basket"></i></a></td> 
				
    				</tr> 
<?php } 

?>

					
</tbody> 
			 </table>
			 <input  type="hidden"  name="max_CP"  id="max_CP"   value="<?php echo $i; ?>"  class="mail-checkbox" >
			 <table align="center"><tr ><td>
			 <div class="form-actions">
			  <div class="row">
			  <div class="col-md-offset-3 col-md-3" id="soa">
			  </div>
			 </div>
			 </div></td><td></td><td>
			  <div class="form-actions">
			  <div class="row">
			  <div class="col-md-offset-3 col-md-3" id="mail">
			   </div>
			 </div>
			 </div>
			 </td></tr></table>
            </div>
			</div>
			
<?php 
} 

else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
