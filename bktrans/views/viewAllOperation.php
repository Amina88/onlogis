<script type="text/javascript">
function operation(){
    var op = null;
        if(window.XMLHttpRequest) 
        op = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        op = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        op = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    op= false;
    }
    return op;
    }
  
    function findoperation(c){
	
    var op = operation();

    op.onreadystatechange = function(){
	
    if(op.readyState == 4 && op.status == 200)
        {
	
    leselect = op.responseText;
   document.getElementById("centent").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    op.open("POST","verification_donne.php",true);
    op.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

	cb=document.getElementById("chemp_type").value;
	document.getElementById("chemp_sans").value=c.id;
	 op.send("sans="+c.id+"&type="+cb);
	
if(c.id=="IMP"){
	document.getElementById("sens_operation").innerHTML='<input id="%" onclick="findoperation(this);" type="image"  src="iconnes/ALL.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>&nbsp;<input  id="EXP" onclick="findoperation(this);" type="image" name="export"  value="export" src="iconnes/Export.png" style="width:25px"  title="Export"></input>&nbsp;<input id="IMP" onclick="findoperation(this);" type="image" name="import" value="import" src="iconnes/Import_selected.png" style="width:25px"title="Import" ></input>'

	}else if(c.id=="EXP"){
	document.getElementById("sens_operation").innerHTML='<input id="%" onclick="findoperation(this);" type="image"  src="iconnes/ALL.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>&nbsp;<input  id="EXP" onclick="findoperation(this);" type="image" name="export"  value="export" src="iconnes/Export_selected.png" style="width:25px"  title="Export"></input>&nbsp;<input id="IMP" onclick="findoperation(this);" type="image" name="import" value="import" src="iconnes/Import.png" style="width:25px"title="Import" ></input>'

	}else{
	document.getElementById("sens_operation").innerHTML='<input id="%" onclick="findoperation(this);" type="image"  src="iconnes/ALL_selected.png" style="width:25px" title="<?php echo  $N3 ; ?>">&nbsp;</input><input  id="EXP" onclick="findoperation(this);" type="image" name="export"  value="export" src="iconnes/Export.png" style="width:25px"  title="Export"></input>&nbsp;<input id="IMP" onclick="findoperation(this);" type="image" name="import" value="import" src="iconnes/Import.png" style="width:25px"title="Import" ></input>'

	}
    }
	function op(){
    var o = null;
        if(window.XMLHttpRequest) 
        o = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        o = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        o = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    o= false;
    }
    return o;
    }
  
    function findtype(c){
    var o = op();

    o.onreadystatechange = function(){
	
    if(o.readyState == 4 && o.status == 200)
        {
	
    leselect = o.responseText;
   document.getElementById("centent").innerHTML=leselect;
  

  
	}
    }
	
    // Ici on va voir comment faire du post
    o.open("POST","verification_donne.php",true);
	
    o.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	cb=document.getElementById("chemp_sans").value;
	document.getElementById("chemp_type").value=c.id;
    o.send("sans="+cb+"&type="+c.id);
	if(c.id=="Air"){
	document.getElementById("type_operation").innerHTML='<input id="%" onclick="findtype(this);" type="image" value="ALL" name="All" src="iconnes/ALL.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>&nbsp;<input id="Road" onclick="findtype(this);"type="image" name="Road" src="iconnes/road.png"  style="width:25px" title="Road"></input>&nbsp;<input id="Air" onclick="findtype(this);" type="image" name="Air" src="iconnes/Air_selected.png" style="width:25px" title="Air"></input>&nbsp;<input id="Ocean" onclick="findtype(this);"type="image" name="Ocean" src="iconnes/ocean.png" style="width:25px" title="Ocean"></input>';

	}else if(c.id=="Ocean"){
	document.getElementById("type_operation").innerHTML='<input id="%" onclick="findtype(this);" type="image" value="ALL" name="All" src="iconnes/ALL.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>&nbsp;<input id="Road" onclick="findtype(this);"type="image" name="Road" src="iconnes/road.png"  style="width:25px" title="Road"></input>&nbsp;<input id="Air" onclick="findtype(this);" type="image" name="Air" src="iconnes/Air.png" style="width:25px" title="Air"></input>&nbsp;<input id="Ocean" onclick="findtype(this);"type="image" name="Ocean" src="iconnes/Ocean_selected.png" style="width:25px" title="Ocean"></input>';

	}else if(c.id=="Road"){
	document.getElementById("type_operation").innerHTML='<input id="%" onclick="findtype(this);" type="image" value="ALL" name="All" src="iconnes/ALL.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>&nbsp;<input id="Road" onclick="findtype(this);"type="image" name="Road" src="iconnes/road_selected.png"  style="width:25px" title="Road"></input>&nbsp;<input id="Air" onclick="findtype(this);" type="image" name="Air" src="iconnes/Air.png" style="width:25px" title="Air"></input>&nbsp;<input id="Ocean" onclick="findtype(this);"type="image" name="Ocean" src="iconnes/ocean.png" style="width:25px" title="Ocean"></input>';

	}else{
	document.getElementById("type_operation").innerHTML='<input id="%" onclick="findtype(this);" type="image" value="ALL" name="All" src="iconnes/ALL_selected.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>&nbsp;<input id="Road" onclick="findtype(this);"type="image" name="Road" src="iconnes/road.png"  style="width:25px" title="Road"></input>&nbsp;<input id="Air" onclick="findtype(this);" type="image" name="Air" src="iconnes/Air.png" style="width:25px" title="Air"></input>&nbsp;<input id="Ocean" onclick="findtype(this);"type="image" name="Ocean" src="iconnes/ocean.png" style="width:25px" title="Ocean"></input>';

	}
    }
	</script>
<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="#" data-toggle="dropdown">
									Columns <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<labeltype="checkbox" checked data-column="6"><?php echo $N10 ; ?></label>
										<labeltype="checkbox" checked data-column="7"><?php echo $N11 ; ?></label>
										<labeltype="checkbox" checked data-column="8"><?php echo $N12 ; ?></label>
										<labeltype="checkbox" checked data-column="9"><?php echo $N1 ; ?></label>
										<labeltype="checkbox" checked data-column="10"><?php echo $N13 ; ?></label>
									</div>
								</div>
							</div>
								
						</div>
						<div class="portlet-body">
					<input type="hidden" id="chemp_type" value="<?php echo $type; ?>">
<input type="hidden" id="chemp_sans" value="<?php echo $sans; ?>">
						<table  width="100%"  >
		<tr><td background="#125" id="type_operation" >
<input id="%" onclick="findtype(this);"  type="image" value="ALL" name="All" src="iconnes/ALL_selected.png" style="width:25px" title="<?php echo  $N3 ; ?>">
<input id="Road" onclick="findtype(this);" type="image" name="Road" src="iconnes/road.png"  style="width:25px" title="Road"></input>	
<input id="Air" onclick="findtype(this);"  type="image" name="Air" src="iconnes/Air.png" style="width:25px" title="Air"></input>
<input id="Ocean" onclick="findtype(this);" type="image" name="Ocean" src="iconnes/ocean.png" style="width:25px" title="Ocean"></input>
</td><td>&nbsp;&nbsp;
				</td><td align="right" id="sens_operation">
	
<input id="%" onclick="findoperation(this);" type="image"  src="iconnes/ALL_selected.png" style="width:25px" title="<?php echo  $N3 ; ?>"></input>
<input  id="EXP" onclick="findoperation(this);" type="image" name="export"  value="export" src="iconnes/Export.png" style="width:25px"  title="Export"></input>
<input id="IMP" onclick="findoperation(this);" type="image" name="import" value="import" src="iconnes/Import.png" style="width:25px"title="Import" ></input>
</td>
		</tr>
	</table>

			<table class="table table-striped table-bordered table-hover" id="sample_4">
											
			<thead> 
				<tr> 
    				<th><font size="1"><?php  echo $N4 ; ?></th> 
    				<th><font size="1"><?php  echo $N5 ; ?></th> 
					<th><font size="1"><?php echo  $N6 ; ?></th> 
    				<th><font size="1"><?php echo $N7 ; ?></th> 
					<th><font size="1"><?php echo  $N9 ; ?></th> 
    				 <th><font size="1"><?php echo $N8 ; ?></th> 
    				 <th><font size="1"><?php echo $N10 ; ?></th> 
					 <th><font size="1"><?php echo $N11 ; ?></th>
    				 <th><font size="1"><?php echo $N12 ; ?></th> 
    				 <th><font size="1"><?php echo $N1 ; ?></th> 
    				<th ><font size="1"><?php echo $N13 ; ?></th> 
				</tr> 
			</thead> 
							
					
					<tbody id="centent">


			<?php while($admin=mysql_fetch_array($admi)){
			 $cl=substr ($admin[2], 0,6 );
    				
    				
			$typ=explode(' ',$admin[7]);
			$img='';
			$type='';
			if($typ[0]== 'Road'){
			$img = "<img src=images/Road.png  title=Road width=20 height=18>";
			$type='Road';
			}
			elseif($typ[0]== 'Air'){
			$img = "<img src=images/Air.png title=Air width=20 height=18>";
			$type='Air';
			}
			elseif($typ[0]== 'Ocean' ){
			$img = "<img src=images/ocean.png title=Ocean width=20 height=18>";
			$type='Ocean';
			}
			$img2='';
			if($admin[8]== 'import'){
			$img2 = "<img src=images/Import.png title=Import width=20 height=18>";
			}
			elseif($admin[8]== 'export'){
			$img2 = "<img src=images/Export.png title=Export width=20 height=18>";
			}
			$titre="";
if($admin[7]=="Air Export"){
$titre="Air freight Export (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Air Import"){
$titre="Air freight Import (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Ocean Export"){
$titre="Ocean freight Export (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Ocean Import"){
$titre="Ocean freight Import (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Road Export"){
$titre="Road freight Export (".$admin[0].",".$admin[2].")";
}else{
$titre="Road freight Import (".$admin[0].",".$admin[2].")";
}

$titre = str_replace('&','%26',$titre);
?>
		<?php  $consult=mysql_query("select Consultation from $admin[8] where id='$admin[0]' "); 
                  $etat_consult=mysql_fetch_array($consult);

		?>
				<tr  > 
				
			
    				<?php if($admin[8]=="export"){ ?>
				<td><font size="1"><a href="MenuUtilisation.php?valeur=DetailOperationExport.php&page=<?php echo $type;?>&titre=<?php echo $titre;?> &type_operation=<?php echo $type;?> Export&id=<?php echo $admin[0]; ?>&url=<?php echo $url.".".$N19 ?>" ><?php  echo $admin[0];?> <?php if(!$etat_consult[0]){ ?>
				<span class="badge badge-warning">new</span>
				<?php }  ?></a></td> 
				<?php  }else{ ?>
				<td><font size="1"> <a href="MenuUtilisation.php?valeur=detailleoperation.php&tb=import&type_operation=<?php echo $type;?>&page=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&titre=<?php echo $titre; ?>&url=<?php echo $url.'.'.$N19; ?>" ><?php  echo $admin[0];?> <?php if(!$etat_consult[0]){ ?>
				<span class="badge badge-warning">new</span>
				<?php } ?> </a></td> 
				
				<?php  } ?>
					<td><font size="1"><a href="MenuUtilisation.php?valeur=detailleDossier.php&Ref=<?php echo $admin[1] ; ?>&type=affiche&titre= <?php echo $admin[1] ; ?>  <?php echo  $N15 ; ?>&url=<?php echo $urld.".".$N31; ?>"><?php echo $admin[1];?></a></td> 
    				<td><font size="1"><a  title="<?php echo $admin[2]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $admin[2];?>&titre=<?php echo $admin[2];?> <?php echo  $N15 ; ?>&mdc=1&url=<?php echo$urlcli.$N31?>"><?php echo $cl;?></a></td> 
					<td><font size="1"><?php echo $admin[10];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><font size="1"><?php echo $admin[3];?></td>
    				<td><font size="1"><?php echo $admin[5];?></td>
					<td><font size="1"><?php echo $admin[6];?></td>
    				<td><font size="1"><?php echo $admin[7];?></td>
    				<td><?php 
					$rq = "select * from invoice where  Ref_operration='$admin[0]' ";
					
                    $fctr=mysql_query($rq);
					$fct=mysql_fetch_array($fctr);
			 
					
					if(!$fct){
					if($admin[9]=="non"){
					?><span class="label label-sm label-danger">
<?php echo $N25;?></span>
<?php  }else{  ?>
<span class="label label-sm label-info">
<?php echo $N34;?></span>
<?php  }  ?>
<?php }else{
				if($admin[9]=="non"){
                    $fctr=mysql_query("update $admin[8] set Invoicing='oui' where  id='$admin[0]' ");
				}
	if($admin[9]=="oui"){			
?><span class="label label-sm label-success"><?php echo $N24;?></span>
<?php }else{ ?>
<span class="label label-sm label-warning"><?php echo $N33;?></span>
<?php }} ?></td>

					<?php if($admin[8]=="export"){?>
    				<td><a href="MenuUtilisation.php?valeur=Misajouroperation.php&id=<?php echo $admin[0];?>&type=delete&type_operation=<?php echo $type;?> Export&url=<?php echo $url.".".$N18; ?>&titre=<?php echo $_GET['titre']; ?>&tb=export" onclick="return confirmLink(this) ;"  title="<?php echo  $N18 ; ?>">
					<i class="fa fa-trash-o"></i>
					</a>
					<a href="MenuUtilisation.php?valeur=formulaire_trans.php&titre=<?php echo  $N29 ; ?>&tb=export&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&url=<?php echo $url.".".$N20; ?>" title="<?php echo  $N20 ; ?>" ><i class="fa fa-paste"></i>
				</a></td>				
			         <?php }else{ ?>
					 
					 <td><a href="MenuUtilisation.php?valeur=Misajouroperation.php&id=<?php echo $admin[0];?>&type=delete&tb=import&typeop=<?php echo $type;?>&url=<?php echo $url.".".$N18; ?>&titre=<?php echo $_GET['titre']; ?>" onclick="return confirmLink(this) ;"  title="<?php echo  $N18 ; ?>">
					 <i class="fa fa-trash-o"></i></a>
					 <a href="MenuUtilisation.php?valeur=formulaire_trans.php&titre=<?php echo $N29; ?>&tb=import&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>" title="<?php echo  $N20 ; ?>" ><i class="fa fa-paste"></i></a></td> 
				<?php } ?>
				</tr> 
			<?php } ?>		
			</tbody> 			

</table>
</div></div>
</div>