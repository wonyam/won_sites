<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo ($common_root);?>favicon.ico" />

    <link rel="stylesheet" href="<?php echo ($common_root);?>css/reset.css">
    <!-- CSS reset -->
    <!--link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"-->
    <link rel="stylesheet" href="<?php echo ($common_root);?>css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo ($common_root);?>css/style.css">
    <!-- Resource style -->
    <link rel="stylesheet" href="<?php echo ($common_root);?>css/custom.css">
    <!-- Overwrites style -->
    <link rel="stylesheet" href="<?php echo ($common_root);?>css/media.css">
  	<link rel="stylesheet" href="<?php echo ($common_root);?>css/page.css">
    <script src="<?php echo ($common_root); ?>js/modernizr.js"></script>
		<link href="<?php echo ($common_root);?>css/photoview.css" rel="stylesheet">
    <!-- Modernizr -->
    <!-- Gallery -->
		<link rel="stylesheet" type="text/css" href="<?php echo ($common_root);?>css/slick.css"/>
    <!-- Gallery -->


    <script src="<?php echo ($common_root);?>js/jquery-2.1.1.js "></script>
    <script src="<?php echo ($common_root);?>js/jquery.mobile.custom.min.js "></script>
    <script src="<?php echo ($common_root);?>js/queryloader2.min.js "></script>
		<script type='text/javascript' src='<?php echo ($common_root);?>js/jquery.min.js'></script>
		<script type='text/javascript' src='<?php echo ($common_root);?>js/jquery.scrollTo-min.js'></script> 
    <script src="<?php echo ($common_root);?>js/main.js "></script>
    <!-- Gallery -->
		<script type="text/javascript" src="<?php echo ($common_root);?>js/slick.js"></script>
		<script type="text/javascript" src="<?php echo ($common_root);?>js/scripts.js"></script>
    <!-- Gallery -->
    <script type="text/javascript ">
    	/*
        $(document).ready(function () {
            $("body ").queryLoader2({
                barColor: "#00417d ",
                backgroundColor: "#fff ",
                percentage: true,
                barHeight: 1
            });
        });
        */
    </script>
    <title>Kapstone Development</title>
</head>
<?php 
	$bgcolor = $_REQUEST['bgcolor']; 
	if($bgcolor == "") {
		echo ("<body>");
	} else {
		echo ("<body class='bgcolor_".$bgcolor."'>");
	}
?>
    <div class="wrapper">