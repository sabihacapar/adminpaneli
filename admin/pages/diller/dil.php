<?php
session_start();


	$lang	=strip_tags($_GET["lang"]);
if ($lang =="tr" || $lang == "en"){
	$_SESSION["lang"] = $lang;
	header("Location:../anasayfa.php");
}else {
	header("Location:.//anasayfa.php");
}



?>