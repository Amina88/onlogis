<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php	
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){
	foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;
  ?>
<head><style type="text/css" media="all">
	.cachediv {
display: none;
}
</style>
<script type="text/javascript">


	function DivStatus( nom, numero )
		{
			var divID = nom + numero;
			if ( document.getElementById && document.getElementById( divID ) ) // Pour les navigateurs récents
				{
					Pdiv = document.getElementById( divID );
					PcH = true;
		 		}
			else if ( document.all && document.all[ divID ] ) // Pour les veilles versions
				{
					Pdiv = document.all[ divID ];
					PcH = true;
				}
			else if ( document.layers && document.layers[ divID ] ) // Pour les très veilles versions
				{
					Pdiv = document.layers[ divID ];
					PcH = true;
				}
			else
				{
					
					PcH = false;
				}
			if ( PcH )
				{
					Pdiv.className = ( Pdiv.className == 'cachediv' ) ? '' : 'cachediv';
				}
		}
		
	
	function MontreTout( nom,NumDiv )
		{	
			
			if ( document.getElementById ) // Pour les navigateurs récents
				{
							SetDiv = document.getElementById( nom + NumDiv );
							if ( SetDiv && SetDiv.className != '' )
								{
									DivStatus( nom, NumDiv );
									
									for (NumDi = 1; NumDi < 5; NumDi++)
						{ 
						
						if(NumDi==NumDiv){
						NumDi++;
						}
							SetDiv = document.getElementById( nom + NumDi );
							if ( SetDiv && SetDiv.className != 'cachediv' )
								{
									DivStatus( nom, NumDi );
								}
							
						}
								}
						
						
				}
			
		}
		//

</script>
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
	a=leselect.split('/');
  if(a[1]=='1'){
document.getElementById('Sub').innerHTML='<div class=form-actions"> <div class="row"><div class="col-md-offset-3 col-md-9"><button type="submit" class="btn green" name="sauvgarder" ><?php echo $N9; ?></button></div> </div></div>';
document.getElementById('form1').action="delete_all_information.php";


}else{
document.getElementById('Sub').innerHTML="";
document.getElementById('form1').action="";

}

  
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	search=document.getElementById("pwd").value;
	
SRCH.send("confirm_delete="+search);

    }
</script>

</head>

				<?php
include ("Connection.php");


?>
 <div class="portlet-body">
			
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N2; ?></a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											<?php echo $N3; ?></a>
										</li>
										
									</ul>
									</div>
									<style> 
#myDIV {
    width: 100%;
    border: 2px solid #a1a1a1;
	background:none;
	border-radius: 25px;
   
}

</style>
									<div class="tab-content no-space">
										
										  <div class="tab-pane active" id="tab_general">
										  <br><br>
										  <form  action="#"  id="form1" class="form-horizontal" method="post">
										  <div id="myDIV">
										  
										  <div class="portlet-body form">
								            <div class="form-body">
								                          <div class="alert alert-danger display-hide">
										                   <button class="close" data-close="alert"></button>
										                   <?php echo $error_form; ?>
									                       </div>
										     <div class="form-group">
										          <label class=" col-md-9" style="color:337ab7;"><?php echo $N5; ?><span class="required">
										              </span>
										           </label>
										     </div>	
											 
											 <div class="form-group">
										         <label class="control-label col-md-6"><?php echo $N4; ?><span class="required">
										         *</span>
										          </label>
										          <div class="col-md-4">
											         <div class="input-icon right">
												       <i class="fa"></i>
												        <input  class="form-control" type="password" name="pwd" OnkeyUp="SERCH_op();"  id="pwd" value=""/>
											           </div>
										          </div>
									           </div>
											    <div id="Sub">
	
	                                            </div>
	                                           </div>
										  	  </div>
											  </div>
										  </form>
										  </div>
										  

										  
										   <div class="tab-pane" id="tab_meta">
										    <form  action="backup.php"  id="form1" class="form-horizontal" method="post">
											   <br><br>
											  <div id="myDIV">
										          <div class="portlet-body form">
								                        <div class="form-body">
								                          <div class="alert alert-danger display-hide">
										                   <button class="close" data-close="alert"></button>
										                   <?php echo $error_form; ?>
									                       </div>
														    <div class="form-group">
										                  <label class=" col-md-11" style="color:337ab7;"><?php echo $N10; ?><span class="required">
										                    !</span>
										                  </label>
										                     </div>
														  
														    <div class="form-actions">
														      <div class="row">
														         <div class="col-md-offset-3 col-md-9"><button type="submit" class="btn green" name="sauvgarder" ><?php echo $N15; ?></button>
														         </div>
														      </div>
														    </div>
										   
										               </div>
										          </div>
										        </div>
										     </form>
										   </div>
										   <div class="tab-pane" id="tab_images">
										    <form   id="form1" class="form-horizontal" 
											enctype="multipart/form-data"  method="POST" action="uplade_backup.php">
											   <br><br>
											  <div id="myDIV">
										          <div class="portlet-body form">
								                        <div class="form-body">
								                          <div class="alert alert-danger display-hide">
										                   <button class="close" data-close="alert"></button>
										                   <?php echo $error_form; ?>
									                       </div>
														    <div class="form-group">
										                  <label class=" col-md-12" style="color:337ab7;"><?php echo $N12; ?><span class="required">
										                    !</span>
										                  </label>
										                     </div>
												 <div class="form-group">
										                       <label class="control-label col-md-5"><?php echo $N13; ?><span class="required">
										                     *</span>
										                       </label>
										              <div class="col-md-4">
											            <div class="input-icon right">
												          <i class="fa"></i>
												          <input type="file" Name="file_date" value="" required="required" style="width:200px;"/>
											           </div>
										             </div>
									             </div>
														  
														    <div class="form-actions">
														      <div class="row">
														         <div class="col-md-offset-3 col-md-9"><button type="submit" class="btn green" name="sauvgarder" ><?php echo $N11; ?></button>
														         </div>
														      </div>
														    </div>
										   
										               </div>
										          </div>
										        </div>
										     </form>
										   </div>
										  
										  
										  
										  
										  
</div>
</div>



			
<?php }  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>