<?php 
session_start();
$dil=strip_tags($_GET["dil"]);
if($dil=="tr" || $dil=="en"){
	$_SESSION["dil"]=$dil;
	header("Location:blog_details_ekle.php");
}else{
	header("Location:blog_details_ekle.php");
}

?>