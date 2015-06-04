<?php require_once "bktransuploade/include_phpuploader.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<div>
	<?php
		$uploader=new PhpUploader();

		$uploader->MultipleFilesUpload=true;
		$uploader->MaxSizeKB=10240;
		$uploader->AllowedFileExtensions="*.jpg,*.png,*.gif,*.bmp,*.pdf";
		
		$uploader->UploadUrl="demo2_upload.php";
		
		$uploader->Render();
		
		  $legumes = array('carotte','poivron','aubergine','chou');
		   $legumes[] = 'salade';

	?>
	
	<script type='text/javascript'>
	var fruits = [""];
	function CuteWebUI_AjaxUploader_OnTaskComplete(task)
	{
	
fruits.push("myprefix_"+task.FileName);
var div2=document.getElementById("file_upp");
var link=document.createElement("input");
		link.setAttribute("name",fruits.length-1);
		link.setAttribute("type","hidden");
		link.setAttribute("value","bktrans"+task.FileName);
		div2.appendChild(link);
	

	}
	
	
	</script>
	
	</div>
	
</body>
	</html>