<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllTax.php';
     if($etat){
?>

<head>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
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
  
    function SERCH_op(){
	
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
	
    leselect = SRCH.responseText;
   document.getElementById("centent").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne2.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	Date1=document.getElementById("Date1").value;
	Date2=document.getElementById("Date2").value;
	tax=document.getElementById("tax").value;
	
SRCH.send("search_Tax_period=true"+"&Date1="+Date1+"&Date2="+Date2+"&tax="+tax);


    }
	
</script>
<!-- -->

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
  
    function SERCH_op(){
	
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
	
    leselect = SRCH.responseText;
   document.getElementById("centent").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	search=document.getElementById("search").value;	
	
	FCT=document.getElementById("FCT").value;
	
	CMD=document.getElementById("CMD").value;

SRCH.send("search_Tax_paye="+search+"&FCT="+FCT+"&CMD="+CMD+"&urlC=<?php echo  $urlC; ?>");

    }
	
function 	getdetaille(a){
	document.getElementById("dt"+a.id).innerHTML='<i id="'+a.id+'" class="fa fa-minus-square-o" onclick="Hiddetaille(this);" ></i>';
	document.getElementById("tr"+a.id).style.display = '';
	
	//dt
	//tr
	}
	function 	Hiddetaille(a){
	document.getElementById("dt"+a.id).innerHTML='<i id="'+a.id+'" class="fa fa-plus-square-o" onclick="getdetaille(this);" ></i>';
	document.getElementById("tr"+a.id).style.display = 'none';
	
	//dt
	//tr
	}


function checkAll(ele) {

     var max = document.getElementById('max_CP').value;

  
     if (ele.checked) {
         for (var i = 1; i <= max; i++) {
		   if(document.getElementById("choix"+i)){
		 document.getElementById("choix"+i).innerHTML='<div class="checker" ><span class="checked"><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'" checked="checked"  onClick="checkun('+i+');" onMouseOut="TotallCheck();" ></span></div>';
                    }    
         }
     } else {
         for (var i = 1; i <= max; i++) {
		    if(document.getElementById("choix"+i)){
             document.getElementById("choix"+i).innerHTML='<div class="checker"><span ><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'"   onClick="checkun('+i+');"  onMouseOut="TotallCheck();"  ></span></div>';
        
         }}
     }
 }
 function checkun(ele) {

var inp=document.getElementById("selct"+ele);

     if (inp.checked) {
	
        document.getElementById("choix"+ele).innerHTML='<div class="checker"><span class="checked"><input type="checkbox" checked value="1" id="selct'+ele+'" name="selct'+ele+'"  onClick="checkun('+ele+');"  onMouseOut="TotallCheck();"   ></span></div>';

     } else {
        document.getElementById("choix"+ele).innerHTML='<div class="checker" ><span ><input type="checkbox" value="1"  id="selct'+ele+'"  name="selct'+ele+'"   onClick="checkun('+ele+');"  onMouseOut="TotallCheck();" ></span></div>';
         
         
     }
 }
 



function number_format(number, decimals, dec_point, thousands_sep) {
  
  number = (number + '')
    .replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}
 
 
	
	
	function TotallCheck(){

	max_TAX=document.getElementById("id_Tax").value;
	
	
	
	max=document.getElementById("max_CP").value;
	
	for(j=1;j<=max_TAX;j++){
	
	MN=document.getElementById("TX"+j).value;

	
	
$tot_com=1*0;
	$tot_fct=0*1;
	$tots=0;


	for(i=1;i<=max;i++){
	
		
	if(document.getElementById("V"+MN+i)){
	
	valeur=document.getElementById("V"+MN+i);
	remember=document.getElementById("selct"+i);
	
	if(remember.checked == 1 ){
	var ch3=new Number(valeur.value);
	
	var ch4=new Number($tot_com); 
	$tot_com=Number(ch3+ch4);
	
	
	}
	
	}
	
	if(document.getElementById("A"+MN+i)){
	
	

	valeur=document.getElementById("A"+MN+i);
	remember=document.getElementById("selct"+i);
	
	if(remember.checked == 1 ){
	var ch3=new Number(valeur.value);
	
	var ch4=new Number($tot_fct); 
	$tot_fct=Number(ch3+ch4);
	
	
	}
	
	}
	
	}

	
	
	
	

tot=document.getElementById("total");
	fct=document.getElementById("fct"+MN);
	com=document.getElementById("cmd"+MN);
	tot1=document.getElementById("tt"+MN);
	RST=document.getElementById("Rest"+MN);
	TF=document.getElementById("ttCom"+MN);
	TC=document.getElementById("ttFct"+MN);
	
	tot=Number($tot_fct-$tot_com);

	fct.innerHTML=number_format($tot_fct, 2, ',', '.');
	
	com.innerHTML=number_format(-$tot_com, 2, ',', '.');
	
	tot1.innerHTML=number_format(tot, 2, ',', '.');
	
	RST.value=number_format(tot, 2, '.', '');
	
	TF.value=number_format($tot_com, 2, '.', '');
	
	TC.value=number_format($tot_fct, 2, '.', '');
	
		}
	
	
	
	}
	
	function getAction(){

var max=document.getElementById("id_Tax").value;
test_pay=0;

for(i=1;i<=max;i++){

remember=document.getElementById('ok'+i);
	if(remember.checked == 1 ){	
	test_pay=1;
	}
	}
if(test_pay=="1"){
document.getElementById('go').innerHTML='<button type="submit"  class="btn green"><?php echo $N19; ?></button>';

}else{
document.getElementById('go').innerHTML='<button type="reset"  class="btn"><?php echo $N19; ?></button>';


}
	
	}
	

  </script>


</head>
<?php
include ("Connection.php");
$tax=mysql_query("select * from tax");
$currency=array();
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
?>

 <div class="portlet-body">
			
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="<?php if(!isset($_GET['smtp_envoi'])){ echo 'active';} ?>">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										
									
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											<?php echo $N3; ?> 
											</a>
										</li>
										
										
									</ul>
									</div>

	  				<?php

?> <div class="tab-content no-space">
	       <div class="tab-pane active" id="tab_general">
		   <form  action="MenuUtilisation.php" method="GET">
		   <input type="hidden" value="payee_Tax.php" name="valeur">
		<!-- début -->
		<?php 
		 $s=mysql_query("SELECT DISTINCT Reference, Type_tax FROM  `element_invoice` WHERE TVA !=0 AND etat_pay_tax=0  AND Reference IN ( SELECT id_facture AS Reference FROM invoice WHERE etat_payement =1)");
		 
$C=mysql_query("SELECT DISTINCT reference, Type_tax FROM  `element_purchase` WHERE TVA !=0 AND etat_pay_tax=0  AND reference IN ( SELECT reference AS reference FROM purchase WHERE etat_paiement =1)");


?>


						<div class="portlet-title">
							
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
		<table class="table table-striped table-bordered table-hover" id="sample_6" >
		<thead>
				<tr> 
    				<th><font size="1">#</th> 
    				<th><font size="1"><?php echo $N4; ?></th> 
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N7; ?><input type="checkbox"  value="" onclick="checkAll(this);" onMouseOut="TotallCheck();"   id="dd" ></th>
    				
    				
				</tr> 
			</thead> 
			<tbody> 

			<?php


			$date=date("Y-m-d");
		
			 $c=0;
			while($admin=mysql_fetch_array($s)){
			$c++;
			 if(!in_array("$admin[1]",$currency)){
			   $currency[]=$admin[1];
			   }
			$factur=mysql_query("select * from invoice where id_facture='$admin[0]'");
	$facture=mysql_fetch_array($factur);
			
			$el=mysql_query("select * from element_invoice where Reference='$admin[0]'");
 $tot=0.00;
while($element=mysql_fetch_array($el)){
$prix=$element[2]*$element[3];
$devis=$prix*$element[6];
$TVA=$devis*($element[4]*0.01);
$tot=$tot+$TVA;
}
$tot=$tot*$facture[13];
			?>
			<tr> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N16; ?> <?php echo $admin[0];?>&url=<?php echo $url2.$N16;?>"><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1"><?php echo $admin[1] ?></font></td>
    				<td><font size="1"><?php echo number_format(-1*$tot,2,',','.')."&nbsp;".$MN1[0];?></font></td> 
					<td >
					<input type="hidden" value="<?php echo $admin[1]; ?>" id="Tax<?php echo $c; ?>" name="Tax<?php echo $c; ?>" checked >
					<input type="hidden" value="<?php if($tot<0){ echo -1*$tot;}else{echo $tot ;} ?>" id="<?php if($tot>0){ echo 'V'.$admin[1].$c;}else{echo 'A'.$admin[1].$c;} ?>" name="<?php if($tot>0){ echo 'V'.$admin[1].$c;}else{echo 'A'.$admin[1].$c;} ?>"  >
					<input type="hidden" value="<?php echo $admin[0];?>" id="<?php if($tot>0){ echo 'IdV'.$admin[1].$c;}else{echo 'IdA'.$admin[1].$c;} ?>" name="<?php if($tot>0){ echo 'IdV'.$admin[1].$c;}else{echo 'IdA'.$admin[1].$c;} ?>"  >
					
					<div id="choix<?php echo $c; ?>">
					<input type="checkbox" value="1" id="selct<?php echo $c; ?>" name="selct<?php echo $c; ?>" onMouseOut="TotallCheck();" >
					</div>
					</td>
							</tr> 
		<?php
}

			while($admin=mysql_fetch_array($C)){
			$c++;
			if(!in_array("$admin[1]",$currency)){
			   $currency[]=$admin[1];
			   }
			$factur=mysql_query("select * from purchase where reference='$admin[0]'");
	$facture=mysql_fetch_array($factur);
			
			$el=mysql_query("select * from element_purchase where reference='$admin[0]'");
 $tot=0.00;
while($element=mysql_fetch_array($el)){
$prix=$element[3]*$element[4];
$devis=$prix*$element[6];
$TVA=$devis*($element[7]*0.01);
$tot=$tot+$TVA;
}
$tot=$tot*$facture[9];
			?>
			<tr> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N16." ".$admin[0];?>&url=<?php echo $urlC.$N16;?> "><?php echo $admin[0];?></a></font></td> 
    					<td><font size="1"><?php echo $admin[1] ?></font></td>
    				<td><font size="1"><?php echo number_format($tot,2,',','.')."&nbsp;".$MN1[0];?></font></td> 
					
					<td >
					<input type="hidden" value="<?php echo $admin[1]; ?>" id="Tax<?php echo $c; ?>" name="Tax<?php echo $c; ?>" checked >
					<input type="hidden" value="<?php if($tot<0){ echo -1*$tot;}else{echo $tot ;}  ?>" id="<?php if($tot>0){ echo 'A'.$admin[1].$c;}else{echo 'V'.$admin[1].$c;} ?>" name="<?php if($tot>0){ echo 'A'.$admin[1].$c;}else{echo 'V'.$admin[1].$c;} ?>"  >
					<input type="hidden" value="<?php echo $admin[0];?>" id="<?php if($tot>0){ echo 'IdA'.$admin[1].$c;}else{echo 'IdV'.$admin[1].$c;} ?>" name="<?php if($tot>0){ echo 'IdA'.$admin[1].$c;}else{echo 'IdV'.$admin[1].$c;} ?>"  >
					
					<div id="choix<?php echo $c; ?>">
					<input type="checkbox" value="1" id="selct<?php echo $c; ?>" name="selct<?php echo $c; ?>" onMouseOut="TotallCheck();" >
					
					</div>
					</td>
    				
							</tr> 
		<?php
}		

 
?>
			 <tbody>
				<input type="hidden" value="<?php echo $c; ?>" id="max_CP" name="max_CP"  >
				
			 
			 </table>
	 </div>
<table class="table table-bordered table-hover" >
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N4; ?></th>
					<th><font size="1">(-)</h4></th>
					<th><font size="1">(+)</h4></th> 
					<th><font size="1"><?php echo $N18; ?></th> 
					<th><font size="1"><?php echo $N20; ?></th>
					<th><font size="1"><?php echo $N21; ?></th>
					<th><font size="1"><?php echo $N7; ?></th>
					
    				
    					</tr> 
			</thead> 
	<?php
			$max_tb=0;
			foreach($currency as $c ){
			$max_tb++;
			?>
				<tr class="success"> 
   					 
   					 <td><font size="1"><?php echo $c;  ?></font></td>
					 <input name="TX<?php echo $max_tb; ?>" id="TX<?php echo $max_tb; ?>" value="<?php echo $c;  ?>" type="hidden" >
    				<td><font size="1"><div id="cmd<?php echo $c; ?>"><?php echo number_format(0,2,',','.')."  "?></Div></font>
					<input name="ttCom<?php echo $c; ?>" id="ttCom<?php echo $c; ?>" type="hidden">
					<input name="ttFct<?php echo $c; ?>" id="ttFct<?php echo $c; ?>" type="hidden">
					<input name="Rest<?php echo $c; ?>" id="Rest<?php echo $c; ?>" type="hidden">
					</td> 
    				<td><font size="1"><div id="fct<?php echo $c; ?>"><?php echo number_format(0,2,',','.')."  "?></Div></font></td> 
    				<td><font size="1"><div id="tt<?php echo $c; ?>"><?php echo number_format(0,2,',','.')."  "?></Div></font></td> 
			       
					<input type="Hidden"  min="0" max="0" readonly id="VRT<?php echo $c; ?>" name="MPB<?php echo $c; ?>" style="width:100px;height:35px;" class="form-control" >
					<td>
					<div class="col-md-4">
<select name="Projet<?php echo $c;  ?>" id="D<?php echo $max_tb;  ?>"   class="form-control select2me"  style="width:150px">

<?php 
$doss=mysql_query("select * from files f,categorie c where c.Nom=f.Catagorie and c.appliquer_sur like'100' and  f.etat_dossier='ouvert'  ");

while($ad=mysql_fetch_array($doss)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php } ?>
</select></div>
					</td>
					<td>
					<div class="col-md-4">
<select name="Fournisseur<?php echo $c;  ?>" id="F<?php echo $max_tb;  ?>"    class="form-control select2me"  style="width:150px" >
<?php 
$Four=mysql_query("select * from supplier");
while($admin=mysql_fetch_array($Four)){ ?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?>
</select></div>
					</td>
					
					<td id="ok<?php echo $c; ?>">
					<input type="checkbox" value="" id="ok<?php  echo $max_tb; ?>"   name="ok<?php echo $c; ?>"  onclick="getAction();" onMouseOut="getRequired(this);">
					</td>
					
					</tr> 	
<?php  } ?>	
<input type="hidden" id="id_Tax" value="<?php  echo $max_tb; ?>" name="leng_tax"     >
					
		</table>
		<!-- fin -->
		 <div class="form-actions" >
									<div class="row">
										<div class="col-md-offset-3 col-md-5" id="go">
											<button type="reset"  class="btn"><?php echo $N19; ?></button>
											
										</div>
									</div>
									
									
</div>
						</form>
		   </div>
		
		  
		   
		   <div class="tab-pane" id="tab_reviews">
		<!-- début  -->
		
		
			   	<a onclick="print();" title="print">	<i class="fa fa-print"></i>
							</a>
							<div id="searchbar">
                <form action="" id="form_sample_3" class="form-vertical" >
		<tablE><TR>	
<TD>		
<input   OnkeyUp="SERCH_op();" class="form-control" id="search" type="text" placeholder="<?php echo $N22; ?>,<?php echo $N23; ?>,<?php echo $N24; ?>,<?php echo $N25; ?>...." style="width:200px"/> 
     </TD><TD>           
<select   id="FCT"  onchange="SERCH_op();" class="form-control select2me"  style="width:150px" >
<option value=""></option>
<?php
$s=mysql_query("select id_facture from invoice");
 while($admin=mysql_fetch_array($s)){ ?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?></TD>
<TD>           
<select   id="CMD"  onchange="SERCH_op();"  class="form-control select2me"  style="width:150px" >
<option value=""></option>
<?php
$s=mysql_query("select reference from purchase");
 while($admin=mysql_fetch_array($s)){?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?>

</select></TD>
</TR></TABLE>
				</form>
                </div>
		   <div id="centent">
			<table class="table table-striped table-bordered "  >
							
							<tr> 
   					<td></td> 
					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N25; ?></td> 
   					 
   					
</tr> <?php 
$moneyOut=mysql_query("select * from payement_tax ");
						$t=0;
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[2],2,',','.').' '.$MN1[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[3]; ?></td> 
					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $MOUT[4];?>&titre=<?php echo $N16." ".$MOUT[4];?>&url=<?php echo $urlC.$N16;?> "><?php echo $MOUT[4];?></a></font></td> 
    				
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N26; ?></th>
				<th><font size="1"><?php echo $N27; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from payment_tax_invoice  where id_payment='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){

				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[0]; ?></font></td>
					
				<td><font size="1"><?php echo number_format((-$cmdtest[2]),2,',','.').'&nbsp;'.$MN1[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from payment_tax_purchase  where id_payment='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){


				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[0]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($cmdtest[2]),2,',','.').'&nbsp;'.$MN1[0]; ?></font></td>
				</tr>
				<?php } ?>
					
				
				</tbody>
				</table>
				
				</td>
				<!-- différence -->
				
				</tr>
<?php } ?>
				</table>
			 </div>
		<!-- Fin  -->
		   </div>
		   
		   
		   </div>
		   </div>
	
		  
		     
				
				
			<?php } else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	