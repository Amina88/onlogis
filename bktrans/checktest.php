<script type="text/javascript">
function checkAll(ele) {

     var max = document.getElementById('max_CP').value;

  
     if (ele.checked) {
         for (var i = 1; i <= max; i++) {
		 document.getElementById("choix"+i).innerHTML='<div class="checker" ><span class="checked"><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'" checked="checked"  onClick="checkun('+i+');"  ></span></div>';
             
         }
     } else {
         for (var i = 1; i <  i <= max; i++) {
             document.getElementById("choix"+i).innerHTML='<div class="checker"><span ><input type="checkbox" value="1" id="selct'+i+'" name="selct'+i+'"   onClick="checkun('+i+');"  ></span></div>';
        
         }
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

/*


function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
				
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
				 
             }
         }
     }
 }
 */
  </script>
  <form action="" method="post"  />
							<table class="table table-striped table-bordered table-hover" id="sample_1" >
							<thead>
							<tr > 
					
							<th >
							<input type="checkbox"    onClick="checkAll(this)" /></th>
							</tr>
							<thead>
							<tbody>

  <?php 
include ("Connection.php");
  $req=mysql_query("select * from custemer ");
			$i=0;
			
			while($admin=mysql_fetch_array($req)){
			$i++;
			$texte = str_replace('&','%26',$admin[0]);
			?>
			
				<tr > 
		          
					<input  type="hidden"  name="cl<?php echo $i; ?>"   value="<?php echo $admin[0];?>"   >
   				
					<td  id="choix<?php echo $i; ?>">
					<input type="checkbox" value="1" id="selct<?php echo $i; ?>" name="selct<?php echo $i; ?>"   >
					
					</td> 
				</tr>
 <?php  } ?>
 <input  type="text"  name="max_CP"  id="max_CP"   value="<?php echo $i; ?>"  class="mail-checkbox" >
					
					