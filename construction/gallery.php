<?php include "../include/common.php" ?>

<script type="text/javascript">
	$(document).ready(function() {
		$("#gallery").click(function() {
			$("#gallery_preview").load("<?php echo ($common_root);?>gallery/index.php?wpage_m=SC");
			//$("#gallery_button").hide();
			//$("#back_button").show();
		});
	});
</script>

    <!-- Gallery -->
		<link rel="stylesheet" type="text/css" href="<?php echo ($common_root);?>css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo ($common_root);?>css/page.css"/>
		<script type="text/javascript" src="<?php echo ($common_root);?>js/slick.js"></script>
		<script type="text/javascript" src="<?php echo ($common_root);?>js/scripts.js"></script>
    <!-- Gallery -->
							<div class="content">
								<div class="btn_gallery" id="gallery_button">
									<div class="myButton" id="gallery">GALLERY</div>
								</div>
				          <div class="slider responsive">
									<div><img u="image" src="<?php echo ($common_root);?>img/services/construction_04.jpg"></div>
									<div><img u="image" src="<?php echo ($common_root);?>img/services/construction_05.jpg"></div>
									<div><img u="image" src="<?php echo ($common_root);?>img/services/construction_06.jpg"></div>
									</div>
							</div>