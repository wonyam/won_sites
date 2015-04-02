<?php
	global $common_root, $common_include, $common_sub_include, $url_header, $url_navigation, $url_foote;
	// it's test
	$common_root				= "/kapstone/";
	$common_include 		= "include/";
	$common_s_include 	= "../include/";
	
	// it's real
	//$common_root				= "/";
	//$common_include 		= "/include/";
	//$common_s_include 	= "../include/";
	
	$url_header 			= $common_include ."header.php"; 
	$url_navigation 	= $common_include ."navigation.php"; 
	$url_footer 			= $common_include ."footer.php"; 
	
	$url_s_header 		= $common_s_include ."header.php"; 
	$url_s_navigation = $common_s_include ."navigation.php"; 
	$url_s_footer 		= $common_s_include ."footer.php"; 
?>