<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recArgentEntre.php';
if($etat){
?>


<script type="text/javascript">
	function Monnaie(){
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
  
    function changemonnaie(abr,a){
    var Monnaiexh = Monnaie();

    Monnaiexh.onreadystatechange = function(){
	
    if(Monnaiexh.readyState == 4 && Monnaiexh.status == 200)
        {
    leselect = Monnaiexh.responseText;
	if(leselect==1){
		document.getElementById('etat').innerHTML="<h4 class=alert_success><?php echo $N1; ?></h4>";
		
		}else{
		document.getElementById('etat').innerHTML="<h4 class=alert_error><?php echo $N2; ?></h4>";
		
		}

	}
    }
	
    // Ici on va voir comment faire du post
    Monnaiexh.open("POST","verification_donne.php",true);
	
    Monnaiexh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    Monnaiexh.send("payyer_facture="+abr);
	
    }
</script>

<?php 
include ("Connection.php");
$Compte=mysql_query("select * from bank_account ");
		
$client=mysql_query("select * from custemer");
$Num="";
	if(isset($_GET['Num'])){
		$Num=$_GET['Num'];
		
		}

$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
$compt="";
$comptee=mysql_query("select * from bank_account ");
$cpt=mysql_fetch_array($comptee);
?><form method="post" action="MenuUtilisation.php?valeur=sauvgared_argent_entree.php" id="form_sample_2" class="form-horizontal">
<input type="hidden" value="<?php echo  $titre; ?>" name="titre">
<input type="hidden" value="<?php echo $url; ?>" name="urlA">

<div class="portlet ">
											<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sort-amount-asc"></i><?php echo $N15; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						
						
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
								<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N4 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="Compte" required="required" />
												<?php while($banque=mysql_fetch_array($Compte)){

if($banque[0]==$Num){
?>
<option value="<?php echo $banque[0];?>" selected><?php echo $banque[1]."(".$banque[0].",$banque[7])"; ?></option>
<?php }else{
?>
<option value="<?php echo $banque[0];?>"><?php echo $banque[1]."(".$banque[0].",$banque[7])"; ?></option>

<?php  }


} ?>
												</select>
											</div>
										</div>
									
								
						
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" min="0" name="Valeur"  value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N6; ?><span class="required">
										 *</span></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Date" value=""  required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											
										</div>
									</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N7 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="methodpayement" required>
<?php if($cpt[3]=='1'){?>
<option value="especes"><?php echo $N8; ?></option>
<?php } if($cpt[5]=='1'){?>
<option value="cheque"><?php echo $N9; ?></option>
<?php } if($cpt[4]=='1'){?>
<option value="virement"><?php echo $N10; ?></option>
<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N13 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="client"  required="required">
<option value=""></option>
<?php while($cl=mysql_fetch_array($client)){?>
<option value="<?php echo $cl[0];?>"><?php echo $cl[0];?></option>
<?php }?>
</select>
												</select>
											</div>
										</div>
										<div class="form-group">
													<label class="col-md-3 control-label"><?php echo $N14; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-8">
														<textarea class="form-control" name="description" required></textarea>
													</div>
												</div>
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N20; ?></button>
											
										</div>
									</div>
									
									
</div>
</div>
</div>
</div>

</form>

<?php } else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>