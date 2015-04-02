<?php include "../include/common.php" ?>
<?php 
	$wpage_v = $_REQUEST['wpage_v']; 
	$wpage_m = $_REQUEST['wpage_m']; 
	
	if($wpage_v == "Y") {
?>
<?php include $url_s_header ?>
<link href="../css/photoview.css" rel="stylesheet">
<?php include $url_s_navigation ?>

<?php
	}

	if($wpage_m == "DR") { 			// Development > Residential
		$gallery_url = $common_root."img/gallery/residential/";
		$gallery_img = array( "residential_00.jpg", "residential_01.jpg", "residential_02.jpg", "residential_03.jpg", "residential_04.jpg", "residential_05.jpg", "residential_06.jpg", "residential_07.jpg", "residential_08.jpg", "residential_09.jpg", "residential_10.jpg", "residential_11.jpg", "residential_12.jpg", "residential_13.jpg");
		$gallery_folder = "residential";
	} else if($wpage_m == "DC") {	// Development > Commercial
		$gallery_url = $common_root."img/gallery/commercial/";
		//$gallery_url = "https://www.prepbootstrap.com/Content/images/shared/houses/";
		$gallery_img = array( "commercial_01.jpg", "commercial_02.jpg", "commercial_03.jpg", "commercial_04.jpeg");
		$gallery_folder = "commercial";
	} else if($wpage_m == "DE") {	// Development > Engineering
		$gallery_url = $common_root."img/gallery/engineering/";
		$gallery_img = array();
		$gallery_folder = "engineering";
	} else if($wpage_m == "SF") { 	// Services > Facility Services
		$gallery_url = $common_root."img/gallery/facility_services/";
		$gallery_img = array( "facility_services_01.jpg");
		$gallery_folder = "facility_services";
	} else if($wpage_m == "SA") { 	// Services > Clean Air Solutions
		$gallery_url = $common_root."img/gallery/clean_air/";
		$gallery_img = array( "cleanair_01.jpg", "cleanair_02.jpg", "cleanair_03.jpg", "cleanair_04.jpg", "cleanair_05.jpg", "cleanair_06.jpg", "cleanair_07.jpg", "cleanair_08.jpg", "cleanair_09.jpg", "cleanair_10.jpg", "cleanair_11.jpg", "cleanair_12.jpg", "cleanair_13.jpg", "cleanair_14.jpg", "cleanair_15.jpg", "cleanair_16.jpg", "cleanair_17.jpg", "cleanair_18.jpg");
		$gallery_folder = "clean_air_solutions";
	} else if($wpage_m == "SC") {	// Services > Construction
		$gallery_url = $common_root."img/gallery/construction/";
		$gallery_img = array( "construction_01.jpg", "construction_02.jpg", "construction_03.jpg", "construction_04.jpg", "construction_05.jpg", "construction_06.jpg", "construction_07.jpg", "construction_08.jpg", "construction_09.jpg", "construction_10.jpg", "construction_11.jpg", "construction_12.jpg", "construction_13.jpg", "construction_14.jpg", "construction_15.jpg");
		$gallery_folder = "construction";
	}
	$page_no = $_REQUEST['page_no'];
	//if(isset($page_no)) {
	if(empty($page_no)) {
		$page_no = 1;
	}
	
	$gallery_count = count($gallery_img);
	$line_display = 3;
	$page_count = 9;	
	$gallery_view_count = 0;
	
	$tot_page_number = ($gallery_count - ($gallery_count % $page_count)) / $page_count; 
	if(($gallery_count % $page_count) > 0) {
		$tot_page_number = $tot_page_number + 1;
	}
	if($tot_page_number > $page_no) {
		$gallery_view_count = $page_count;
	} else {
		$gallery_view_count = $gallery_count - ($page_count*($page_no-1));
	}
	
	//echo ("[".$tot_page_number."][".$gallery_view_count."]");
?>
<script src="<?php echo ($common_root);?>js/jquery-2.1.1.js "></script>
<script type="text/javascript">
$(document).ready(function() {
		$("#back").click(function() {
			$("#gallery_preview").load("<?php echo ($common_root);?><?php echo ($gallery_folder); ?>/gallery.php");
			//$("#gallery_button").show();
			//$("#back_button").hide();
		});
		
/*	$(window).load(function() {*/
		var param;
	<?php
		for($i = 0; $i < $tot_page_number; $i++) {
			if ($page_no!=$i+1) {
	?>
		$("#pageNo<?php echo($i) ?>").click(function() {
			param = "page_no="+ eval(<?php echo($i+1) ?>);
			<?php if($wpage_v == "Y") { ?>
 			$(location).attr('href', "<?php echo ($common_root);?>gallery/?wpage_v=<?php echo($wpage_v) ?>&wpage_m=<?php echo($wpage_m)?>&"+ param);
 			<?php } else { ?>
			$("#gallery_preview").load("<?php echo ($common_root);?>gallery/?wpage_m=<?php echo($wpage_m)?>&"+ param);
			<?php } ?>
 			return false;
		});
	<?php
		}
	}
	?>

	});
</script>

<?php if($wpage_v == "Y") { ?>
<div class="container-fluid">
    <div class="row">
        <section class="maintop commercial-top">
        </section>
    </div>
    <div class="row">
        <div >
            <section class="mainContent bgcolor_white">
            <h1>Project Gallery</h1>
            
            <section class="gallery">
		<div class="h_50"></div>
		
<? } ?>


	<div class="gallery_list gallery_bottom">
	<div class="content">
		<div class="gallery_container">
		<?php if($wpage_v != "Y") { ?>
		<div class="btn_gallery" id="back_button">
			<div class="myButton" id="back">BACK</div>
		</div>
		<?php } ?>
		<!-- Gallery - START -->
		<?php 
		if($gallery_view_count == 0) { 
			echo ("<div class='align_c'><img src='".$common_root."img/coming-soon.jpg' /></div>");
		} else {
			?>
			<?php  for($i = 0; $i < $gallery_view_count; $i++) {  
						$ii = ($page_count*($page_no-1))+$i;
					if (($i%$line_display)==0) {
				?>
        <div class="row">
        	<? } ?>
            <div class="col-md-4">
                <div class="well boxcontainer">
	                    <img class="thumbnail img-responsive" alt="Bootstrap template" 
	                        src="<?php echo($gallery_url)?><?php echo($gallery_img[$ii])?>" />
	                  
	                  <div class="roll">
											<div class="wrapcaption">
												<a data-gal="prettyPhoto[gallery1]" href="<?php echo($gallery_url)?><?php echo($gallery_img[$ii])?>"  title="<?php echo($gallery_img[$ii])?>"><i class="fa fa-search captionicons"></i></a>
											</div>
										</div>
	                  
                </div>
            </div>
        <?php  if((($i%$line_display)==($line_display-1)) || ($i == ($gallery_view_count-1))) { ?>
        </div>
       <?php 
       	}
      } 
    } ?>
        
        <?php if($gallery_count > $page_count ) { ?>
        <div class="row">
        	<?php 
        		for($j = 0; $j < $tot_page_number; $j++) {
        	?>
        	<span class="step<?php if($page_no==$j+1) { echo("-now"); } ?>" id="pageNo<?php echo($j); ?>"><?php echo($j+1); ?> </span>
        	<? } ?>
        </div>
        <? } ?>
    </div>
<!-- Gallery - END -->

							</div>
						</div>
<script src="../js/jquery.photoview.js"></script>
<?php if($wpage_v == "Y") { ?>
						</section>
					</div>
						</section>
    </div>
</div>

<?php include $url_s_footer ?>
<? } ?>