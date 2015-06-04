<script type="text/javascript">

			function OP(){
    var Monnaiexh = null;
        if(window.XMLHttpRequest) 
        Monnaiexh = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        Monnaiexh = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        Monnaiexh = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    Monnaiexh= false;
    }
    return Monnaiexh;
    }
  
    function OPP(){
    var Monnaiexh = OP();

    Monnaiexh.onreadystatechange = function(){
	
    if(Monnaiexh.readyState == 4 && Monnaiexh.status == 200)
        {
    leselect = Monnaiexh.responseText;
	document.getElementById("resultat").innerHTML=leselect;
	
	
	}
    }
	
    // Ici on va voir comment faire du post
    Monnaiexh.open("POST","verification_donne2.php",true);
	
    Monnaiexh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	file=document.getElementById("file").value;
	app=document.getElementById("app").value;

    Monnaiexh.send("OPNOAPP="+file+"&app="+app);
    }

	
</script></head>
<div class="portlet-body">
			
								<div class="tabbable">
									<ul class="nav nav-tabs">
										
										<li class="active">
											<a href="#tab_semain" data-toggle="tab">
											<?php echo $N9;   ?>  </a>
										</li>
										<li class="">
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N10; echo  date("F  Y");  ?> </a>
										</li>
										<li >
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N11; ?></a>
										</li>
									</ul>
								</div>
							<div class="tab-content no-space">
							<div class="tab-pane active" id="tab_semain">
               <div class="portlet box ">
                          
							<div class="portlet-body form">
						
							 
                         
                            <div id="resultat" >
<table class="table table-striped "      > 
			<thead> 
				<tr> 
   					<th><font size="1"><?php echo $N1; ?></h5></th>
					<th><font size="1"><?php echo $N2; ?></h5></th> 
					<th><font size="1"><?php echo $N3; ?></h5></th> 
    				<th><font size="1"><?php echo $N4; ?></h5></th> 
					 <th><font size="1"><?php echo $N5; ?></h5></th> 
					 <th><font size="1"><?php echo $N6; ?></h5></th> 
					 <th><font size="1"><?php echo $N7; ?></h5></th> 
    					</tr> 
			</thead> 
			<tbody> 
			
			
			<?php 
$curr=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN=mysql_fetch_array($curr);
	while($admin=mysql_fetch_array($comm1)){
	$jrnl=mysql_query("select Date,journal,J.id,Libelle,Debit,Credit from detaile_journal DT ,journal J where DT.id_journal=J.id and  Numero_Compte='$admin[0]' and J.Date= CURDATE( ) AND DT.etat=0");
$test_existe=0;
	while($jrnle=mysql_fetch_array($jrnl)){
	$test_existe=1;
	}
	if($test_existe){
	?>
	
<tr style="background:#fcfcfc;height:6px;"  > 
    				<td colspan="7">
					<table>
					<tr>
					<td>
					<font size='1'><b><?php echo $admin[0]; ?></b></font>
					</td><td>
					&nbsp;&nbsp;&nbsp;
					</td>
					<td>
				<font size='1'><b><?php echo $admin[1]; ?></b></font>
					</td>
					<tr>
					</table>
					</td> 
    				
    				
    					</tr> 	
	<?php
	
$total_Debit=0;
$total_Credit=0;
$sold=0;
$jrnl=mysql_query("select Date,journal,J.id,Libelle,Debit,Credit from detaile_journal DT ,journal J where DT.id_journal=J.id and  Numero_Compte='$admin[0]' and J.Date= CURDATE( ) AND DT.etat=0");
	while($jrnle=mysql_fetch_array($jrnl)){

	
?>
			
				<tr   style="background:#fcfcfc;height:6px;"> 
    				<td><font size="1"><?php echo $jrnle[0]; ?></td>
    				<td><font size="1"><?php echo $jrnle[1]; ?></td> 
    				<td><font size="1"><?php echo $jrnle[2]; ?></td> 
    				<td><font size="1"><?php echo $jrnle[3]; ?></td> 
    				<td><font size="1"><?php echo number_format($jrnle[5], 2, ',', ' ').' '.$MN[0]; ?></td> 
    				<td><font size="1"><?php echo number_format($jrnle[4], 2, ',', ' ').' '.$MN[0]; ?></td> 
    				<td><font size="1"><?php echo number_format($jrnle[5]-$jrnle[4], 2, ',', ' ').' '.$MN[0]; ?></td> 
    				
    				
    					</tr> 
				
			
			

			
<?php
$total_Debit=$jrnle[4]+$total_Debit;
$total_Credit=$jrnle[5]+$total_Credit;
$d=$jrnle[5]-$jrnle[4];
$sold=$sold+$d;
 }

?>
<tr  style="background:#ececec;height:6px;"  > 
    				<td colspan="3"><font size="1"></td> 
    				<td colspan="1"><font size="1"><b><?php  echo $N8; ?><?php  //echo $admin[0]; ?> </td> 
    				<td><font size="1"><b><?php echo number_format($total_Credit, 2, ',', ' ').' '.$MN[0]; ?></td> 
    				<td><font size="1"><b><?php echo number_format($total_Debit, 2, ',', ' ').' '.$MN[0]; ?></td> 
    				
					<td><font size="1"><b><?php echo number_format($sold, 2, ',', ' ').' '.$MN[0]; ?></td> 
    				
    				
    					</tr> 
<?php
}}

?>
</tbody> 
			 </table><br>
                              </div>

     </div>
	 </div>
	 </div>
	 <div class="tab-pane" id="tab_meta">
              <div class="portlet box ">
                          
							<div class="portlet-body form">
						
							 
                         
                            <div id="resultat" >
<table class="table table-striped "      > 
			<thead> 
				<tr> 
   					<th><font size="1"><?php echo $N1; ?></h5></th>
					<th><font size="1"><?php echo $N2; ?></h5></th> 
					<th><font size="1"><?php echo $N3; ?></h5></th> 
    				<th><font size="1"><?php echo $N4; ?></h5></th> 
					 <th><font size="1"><?php echo $N5; ?></h5></th> 
					 <th><font size="1"><?php echo $N6; ?></h5></th> 
					 <th><font size="1"><?php echo $N7; ?></h5></th> 
    					</tr> 
			</thead> 
			<tbody> 
			
			
			<?php 
$curr=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN=mysql_fetch_array($curr);
	while($admin=mysql_fetch_array($comm2)){
		$jrnl=mysql_query("select Date,journal,J.id,Libelle,Debit,Credit from detaile_journal DT ,journal J where DT.id_journal=J.id and  Numero_Compte='$admin[0]' and J.Date>=$date1 AND DT.etat=0");
$test_existe=0;
	while($jrnle=mysql_fetch_array($jrnl)){
	$test_existe=1;
	}
	if($test_existe){
	?>
	
<tr  style="background:#fcfcfc;height:6px;"> 
    				<td colspan="7">
					<table>
					<tr>
					<td>
					<font size='1'><b><?php echo $admin[0]; ?></b></font>
					</td><td>
					&nbsp;&nbsp;&nbsp;
					</td>
					<td>
				<font size='1'><b><?php echo $admin[1]; ?></b></font>
					</td>
					<tr>
					</table>
					</td> 
    				
    				
    					</tr> 	
	<?php
	
$total_Debit=0;
$total_Credit=0;
$sold=0;
$jrnl=mysql_query("select Date,journal,J.id,Libelle,Debit,Credit from detaile_journal DT ,journal J where DT.id_journal=J.id and  Numero_Compte='$admin[0]' and J.Date>=$date1 AND DT.etat=0");
			while($jrnle=mysql_fetch_array($jrnl)){

	
?>
			
				<tr style="background:#fcfcfc;height:6px;" > 
    				<td><font size="1"><?php echo $jrnle[0]; ?></td>
    				<td><font size="1"><?php echo $jrnle[1]; ?></td> 
    				<td><font size="1"><?php echo $jrnle[2]; ?></td> 
    				<td><font size="1"><?php echo $jrnle[3]; ?></td> 
    				<td><font size="1"><?php echo number_format($jrnle[5], 2, ',', ' ').' '.$MN[0]; ?></td> 
    				<td><font size="1"><?php echo number_format($jrnle[4], 2, ',', ' ').' '.$MN[0]; ?></td> 
    				<td><font size="1"><?php echo number_format($jrnle[5]-$jrnle[4], 2, ',', ' ').' '.$MN[0]; ?></td> 
    				
    				
    					</tr> 
				
			
			

			
<?php
$total_Debit=$jrnle[4]+$total_Debit;
$total_Credit=$jrnle[5]+$total_Credit;
$d=$jrnle[5]-$jrnle[4];
$sold=$sold+$d;
 }

?>
<tr  style="background:#ececec;height:6px;"  > 
    				<td colspan="3"><font size="1"></td> 
    				<td colspan="1"><font size="1"><b><?php  echo $N8; ?><?php  //echo $admin[0]; ?> </td> 
    				<td><font size="1"><b><?php echo number_format($total_Credit, 2, ',', ' ').' '.$MN[0]; ?></td> 
    				<td><font size="1"><b><?php echo number_format($total_Debit, 2, ',', ' ').' '.$MN[0]; ?></td> 
    				
					<td><font size="1"><b><?php echo number_format($sold, 2, ',', ' ').' '.$MN[0]; ?></td> 
    				
    				
    					</tr> 
<?php
}
}
?>
</tbody> 
			 </table><br>
                              </div>

     </div>
	 </div>
	 </div>
                           <div class="tab-pane" id="tab_general">
						   
						  <div class="portlet box yellow">
                           <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N16; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
							</div>
							<div class="portlet-body form">
						   
							
							<form action="GrandLivre_Comptes.php" id="form_sample_2" class="form-horizontal" method="post" target=_blank>
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N18; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me"   name="Tier" > 
<option selected value=""></option>
<?php 
$tier=array();
$Codes=mysql_query("select * from codes");
$i=0;
while($Client=mysql_fetch_array($Codes)){ 
if(!in_array("$Client[0]",$tier)){
 $tier[$i][0]=$Client[1];
 $tier[$i][1]=$Client[0];
 $i++;
 }
}
foreach($tier as $TR){
?>
<option value="<?php echo $TR[0];?>"><?php echo $TR[1];?></option>
<?php }?>
</select></div></div>

									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N14; ?></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="DD" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
									<h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $N5 ;?> </h5>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N15; ?></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="DF" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
									<div class="form-actions">
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N17; ?></button>
										</div>
									 </div>
								    </div>
								</div>
							</form>
						</div>
					</div>
				</div>
						
</div>
</div>