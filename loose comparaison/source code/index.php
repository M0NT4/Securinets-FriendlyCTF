<?php
	//config
	require("flag.php");
	highlight_file(__FILE__);
	
	
	$input=$_GET['magic'];
	if(hash('md5',$input)=="0"){
		echo ("congrats !! \n");
		echo ($flag);
	}
	else {
		echo "try harder if u want to become a real HACKER";
	}


?>
