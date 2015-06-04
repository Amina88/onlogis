<!doctype html>
<head>
  <script src="upload/jquery_upl.js"></script>
    <script src="upload/jquery.form.js"></script>
	<script src="upload/das.js"></script>
	<style>
         .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
        .bar { background-color: #66CCCC; width:0%; height:20px; border-radius: 3px; }
        .percent { position:absolute; display:inline-block; top:3px; left:48%; color: #E6F7F7;}
        #anc_add_more{background-color: #66CCCC; color: #FFF;padding: 7px;text-decoration: none; }
        .dv_add{margin-bottom: 25px;}
    </style>

    <script>
        /* JS for Uploader */
        $(function() {
            /* Append More Input Files */
            $('#anc_add_more').click(function() {
		     var max=document.getElementById("max").value;
			 max++;
                $('#spn_inputs').append('<p><table><tr><td> <span class="btn green fileinput-button"><i class="fa fa-plus"></i><span>Add files... </span><input type="file" name="myfile[]" id="'+max+'" required  ></span></td><td><div class="form-group"><label class="control-label col-md-3">Description</label><div class="col-md-9"><input type="text" class="form-control"  name="'+max+'"  id="'+max+'"  required  value=""></div></div></td><td><td width="20"><a href="#" id="remNew"><img src="images/ico_cancel.png" title="delete"></a></td></td></tr></table><br>  </p>');
            document.getElementById("max").value=max;
			});
			
        });

    </script>
</head>
<body>
    <div class="main">
       
        <div class="content">
           <div id="status">
		   
		   
		   </div>
               
            <div id='dv1'>

                <div class="dv_add"> 
 <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue" onClick="void(0);" id="anc_add_more">Add More File</button>
											
										</div>
									</div>
									</div>
				
				
				</div>
                <div class="progress">
                    <div class="bar"></div >
                    <div class="percent">0%</div >
                </div>    
                 <form action="upload/file.php" method="post" id='frm_upld' enctype="multipart/form-data">
                    <span id='spn_inputs'> 
					<table>
					<tr>
					<td>
                       <span class="btn green fileinput-button"><i class="fa fa-plus"></i><span>Add files... </span>
										<input type="file" name="myfile[]" required  >
										</span>
					</td><td>
					<div class="form-group"><label class="control-label col-md-3">Description</label><div class="col-md-9">
											<input type="text" class="form-control"  name="0" value=""  id="0" required  >
										
										</div>
									</div>
                        </td>
					  </tr>
					  </table><br>
                    </span>
					
					
					
					<input type="hidden" value="0" id="max" name="max">
					<?php if(isset($_GET['DocumentEntreprise'])){ ?>
					<input type="hidden" value=""  name="Doc_entreprise">
				<?php 	}  ?>
					<input type="hidden" value="<?php echo $_GET['id']; ?>"  name="operation">
					<br><br>
                    <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue">Envoyer</button>
											
										</div>
									</div>
									</div>
                </form>
                <script>/* JS for Uploader */
                    (function() {

                        var bar = $('.bar');
                        var percent = $('.percent');
                        var status = $('#status');

                        $('form').ajaxForm({
                            beforeSend: function() {
                                status.empty();
                                var percentVal = '0%';
                                bar.width(percentVal)
                                percent.html(percentVal);
                            },
                            uploadProgress: function(event, position, total, percentComplete) {
                                var percentVal = percentComplete + '%';
                                bar.width(percentVal)
                                percent.html(percentVal);

                            },
                            success: function() {
                                var percentVal = '100%';
                                bar.width(percentVal)
                                percent.html(percentVal);
                            },
                            complete: function(xhr) {
                                status.html(xhr.responseText);
                            }
                        });
                    })();
                </script>
            </div>
        </div></div>
</body>


</html>