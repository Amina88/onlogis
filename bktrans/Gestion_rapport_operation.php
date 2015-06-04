<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } 
  require'includes/recGestionRapportOperation.php';
  if($etat){
  ?>

<head><style type="text/css" media="all">
	.cachediv {
display: none;
}
</style>
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
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N10; ?></a>
										</li>
									</ul>
								</div>
							<div class="tab-content no-space">
                           <div class="tab-pane active" id="tab_general">
						   
						  <div class="portlet box yellow">
                           <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N1; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
							</div>
							<div class="portlet-body form">
						   
							<?php include ("Connection.php");
$request=mysql_query("select * from currency");
$r=mysql_query("select * from  files");
$r1=mysql_query("select * from  files where Reference like('AE%') OR  Reference like('OI%') OR  Reference like('OE%')OR  Reference like('AI%')OR  Reference like('RE%') OR  Reference like('RE%')");

$curr=mysql_query("select * from currency where Monnaie_utliser='1'");
$periode=mysql_query("select * from financial_period");
$comm=mysql_query("select * from purchase");
$com=mysql_fetch_array($comm);


while($admin=mysql_fetch_array($request)){

}

?>
							<form action="Rapport_operation.php" id="form_sample_2" class="form-horizontal" method="post" target=_blank>
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="Tax" >
										   <option value=""><?php echo $N4; ?></option>
											
											<?php while($admin=mysql_fetch_array($r)){?>
                                            <option value=<?php echo $admin[0]; ?>><?php echo $admin[0]; ?><?php echo $admin[1]; ?></option>
                                            <?php } ?>
																							
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"></label>
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
										<label class="control-label col-md-3"></label>
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
											<button type="submit" class="btn green"><?php echo $N9; ?></button>
										</div>
									 </div>
								    </div>
								</div>
							</form>
						</div>
					</div>
				</div>
						<div class="tab-pane " id="tab_meta">
               <div class="portlet box yellow">
                           <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N10; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
							</div>
							<div class="portlet-body form">
						
							 <div class="form-body">
							 <table><tr><td >
				              <div class="form-group">
										<label class="control-label col-md-3">
										</label>
										<div class="col-md-12">
											<select class="form-control select2me"   name="file" id="file"  required>
										   <option value=""><?php echo $N4; ?></option>
											
											<?php while($admin=mysql_fetch_array($r1)){?>
                                            <option value=<?php echo $admin[0]; ?>><?php echo $admin[0]; ?></option>
                                            <?php } ?>
																							
											</select>
										</div>
									</div></td><td>
									<div class="form-group">
										<label class="control-label col-md-3">
										</label>
										<div class="col-md-12">
											<select class="form-control select2me"   name="file" id="app"  required>
										    <option value="0"><?php echo $N13; ?></option>
										    <option value="1"><?php echo $N11; ?></option>
										    <option value=""><?php echo $N12; ?></option> 							
											</select>
										</div>
									</div>
									</td><td>
								<a onclick="OPP();">
								
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green"><?php echo $N9; ?></button>	
										</div>
									 </div>
								   
									</a>
									</td></tr></table>
                          </div>
                         
                            <div id="resultat" >

                              </div>

     </div>
	 </div>
	 </div>
</div>
</div>
<?php }  else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>