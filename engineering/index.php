<?php include "../include/common.php" ?>
<?php include $url_s_header ?>

<?php include $url_s_navigation ?>
<?php
	$point = $_REQUEST['point'];
?>
<div class="container-fluid">
    <div class="row">
        <section class="maintop engineering-top">
        </section>
    </div>
    <div class="row">
        <div >
            <section class="mainContent bgcolor_white">
            <h1>ENGINEERING SERVICES</h1>
          
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h3>
            		Construction Engineering <br />
								Structural Engineering<br />
								Building Engineering
						</h3>
            <div class="engineering">
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h5>
	            Whether you’re building from scratch or renovating/retrofitting an existing structure, it takes careful 
	            planning and methodical attention to detail to complete a project to our industry-recognized standards of 
	            quality. Kapstone offers experienced engineering services to help analyze your job requirements and decide 
	            what looks realistic, and what might require additional planning, work and expense. 
	          </h5>
						  <div class="content_left1">
						  	<div class="content_img1">
						  	</div>
						  </div>
						  <div class="content_right1">
						  	<div class="content_img2">
						  	</div>
						  </div>
            
            <h5>
	            Your Kapstone team includes experienced and qualified engineers, to help anticipate any job issues and 
	            innovate solutions so your project continues on time to your complete satisfaction:
								<ul class="list_circle"> 
									<li>Construction engineers to help manage the infrastructure</li>
									<li>Structural engineers to help design the foundation and structure</li>
									<li>Building engineers to help plan your indoor climate, lighting and sanitation</li>
								</ul>
							Trust Kapstone to manage your project, whether it is just one aspect of your development or the entire process 
							from property selection and procurement to design and construction. At each stage, we'll work out the costs, 
							obtain permits, plan materials delivery, schedule trades professionals, and manage every detail until it's 
							completed to your total satisfaction.
	          </h5>
						<div class="h_50"></div>
						
						  <div class="content_left2">
		            <h4>3D Architectural Design</h4>
		            <h5>
			            Kapstone provides 3D architectural visualization and graphic. Kapstone is all you need for your project, 
			            from start to finish. One powerful use of 3D is to simulate errors and identify design flaws that might 
			            occur during the design development and production process. Once models are created in 3D, there are limitless 
			            possibilities for walkthroughs and virtual tours which can help with any changes that are to be made. 
			          </h5>
						  </div>
						  <div class="content_right2">
						  	<div class="content_img3">
						  	</div>
						  </div>
						
						
            </div>
						
					</section>
        </div>
    </div>
</div>
<script>
/*$(document).ready(function() {*/
$(window).load(function() {
		$.scrollTo( $('#<?php echo($point) ?>'), 500 ); 
		return false;
});
</script>
<?php include $url_s_footer ?>
