
					<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php 

$urloffre=$N14.".".$N18;

if("$permission[1]"=="Administrateur" || "$permission[38]"=='38'){ 
foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;$V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;$V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;$V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
$N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
$N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
$N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
$N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
$N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
$N18 = $V18->item(0)->nodeValue;
?>

<script type="text/javascript">

function Search(){
    var SRCH = null;
        if(window.XMLHttpRequest) 
        SRCH = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        SRCH = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        SRCH = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    SRCH= false;
    }
    return SRCH;
    }
  
    function SERCH_op(a){
		
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
	
    leselect = SRCH.responseText;
   document.getElementById("content").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

SRCH.send("advenced="+a);

    }
	
	
	function Searche(){
    var SRCHE = null;
        if(window.XMLHttpRequest) 
        SRCHE = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        SRCHE = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        SRCHE = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    SRCHE= false;
    }
    return SRCHE;
    }
  
    function Searche_view(a){
		
    var SRCHE = Searche();

    SRCHE.onreadystatechange = function(){
	
    if(SRCHE.readyState == 4 && SRCHE.status == 200)
        {
	
    leselect = SRCHE.responseText;
   document.getElementById("view_web").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCHE.open("POST","view_webmanegement.php",true);
	
    SRCHE.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
h=document.getElementById("1").checked; 
b=document.getElementById("2").checked; 
c=document.getElementById("3").checked; 
d=document.getElementById("4").checked; 
e=document.getElementById("5").checked; 
f=document.getElementById("6").checked; 
if(h || b || c || d || e || f){
if(document.getElementById("periode1")){
pr1=document.getElementById("periode1").value;
pr2=document.getElementById("periode2").value;
SRCHE.send("advenced="+a+"&a="+h+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&periode1="+pr1+"&periode2="+pr2);
}else if(document.getElementById("date1")){
pr1=document.getElementById("date1").value;
pr2=document.getElementById("date2").value;
SRCHE.send("advenced="+a+"&a="+h+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&date1="+pr1+"&date2="+pr2);
}else{
pr1=document.getElementById("datee1").value;
pr2=document.getElementById("datee2").value;
m1=document.getElementById("m1").value;
m2=document.getElementById("m2").value;
SRCHE.send("advenced="+a+"&a="+h+"&b="+b+"&c="+c+"&d="+d+"&e="+e+"&f="+f+"&datee1="+pr1+"&datee2="+pr2+"&m1="+m1+"&m2="+m2);

}
}  


  }
</script></head>

<?php

include ("Connection.php");
?>
<div class="portlet-body form">
							<form role="form" action="Rapport_Management.php" method="POST">
								<div class="form-body">
							

					<div class="note note-info note-shadow">
						<p>
						<?php echo $N10; ?>
						</p>
					</div>
					<p>
					<?php echo $N11; ?>
					</p><br>
<h4><?php echo $N12; ?></h4>
<ul class="list-unstyled"><li>
																			<label><span class="badge badge-success">1 </span><span ><input   type="checkbox"   id="1" name="1" ></span><?php echo $N13 ; ?></label></li>
																			<li><span class="badge badge-success">2 </span><label><span><input type="checkbox"  id="2" name="2" ></span><?php echo $N14 ; ?></label></li>
																			<li><span class="badge badge-success">3 </span><label><span ><input type="checkbox" id="3" name="3" ></span><?php echo $N15 ; ?></label></li>
																			<li><span class="badge badge-success">4 </span><label><span ><input type="checkbox" id="4" name="4" ></span><?php echo $N17 ; ?></label></li>
																			<li><span class="badge badge-success">5 </span><label><span ><input type="checkbox" id="5" name="5" ></span><?php echo $N16 ; ?></label></li>
																			<li><span class="badge badge-success">6 </span><label><span ><input type="checkbox" id="6" name="6" ></span><?php echo $N18 ; ?></label></li>
																			
																		</ul>
<h4><?php echo $N1; ?>  :</h4>
							
									
									<div class="form-group">
										<label><?php echo $N2; ?></label>
										<select class="form-control input-miduim" onchange="SERCH_op(this.value);">
											<option value="periode"><?php echo $N3; ?></option>
											<option value="an"><?php echo $N4; ?></option>
											<option value="dy"><?php echo $N5; ?></option>
											
										</select>
									</div>
									<div id="content">
									<table>
									<tr>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="periode1" id="periode1">
										<?php  $fn=mysql_query("select * from financial_period "); 
										
										while($fin=mysql_fetch_array($fn)){
										?>
											<option value="<?php  echo $fin[0]; ?>"><?php echo $fin[2].'  to  '.$fin[3]; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									<td><label>&nbsp;&nbsp; <?php echo $N6; ?> &nbsp;&nbsp;</label></td>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="periode2" id="periode2">
										<?php  $fn=mysql_query("select * from financial_period "); 
										
										while($fin=mysql_fetch_array($fn)){
										?>
											<option value="<?php  echo $fin[0]; ?>"><?php echo $fin[2].'  to  '.$fin[3]; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									</tr>
									</table>
			
   						</div>
								
						
			<div class="actions">
								<button type="button"   onclick="Searche_view(0);" class="btn btn-circle btn-default">
								<i class="icon-eye"></i>
								<span class="hidden-480">
								Web view </span>
								</button>
								<button type="submit"   class="btn btn-circle btn-default">
								<i class="fa fa-file-pdf-o"></i>
								<span class="hidden-480">
								PDF view</span>
								</button><a href="#" class="btn btn-circle btn-default">
								<i class="fa fa-cloud-download"></i>
								<span class="hidden-480">
								Download</span>
								</a>
							</div>
						</div>
								
							</form>
					<div id="view_web">
					
					</div>
			
			
			
			<?php }}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
					
					