<?php require_once "bktransuploade/include_phpuploader.php" ?>
<?php
$uploader=new PhpUploader();

$mvcfile=$uploader->GetValidatingFile();

if($mvcfile->FileName=="accord.bmp")
{
	$uploader->WriteValidationError("My custom error : Invalid file name. ");
	exit(200);
}

//USER CODE:

$targetfilepath= "mail/Bktrans". $mvcfile->FileName;
if( is_file ($targetfilepath) )
	unlink($targetfilepath);
$mvcfile->MoveTo( $targetfilepath );

$uploader->WriteValidationOK("");

?>