<?php
	
	include('flag.php');
	
	if(isset($_GET['input']))
	{
		$input =$_GET['input'];
		$str = "securinets_is_the_best";
		$final=preg_replace("/$str/", '', $input);
		if ($final === $str){
			echo ('flag = '.$flag);
		}
		else {
			die('try harder !! it\'s EZ x_x ');
		}
	
	}
	else {
		highlight_file(__FILE__);//just for displaying code source
	}

?>
