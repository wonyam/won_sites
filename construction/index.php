<?php include "../include/common.php" ?>
<?php include $url_s_header ?>

<?php include $url_s_navigation ?>
<?php
	$point = $_REQUEST['point'];
?>
<div class="container-fluid">
    <div class="row">
        <section class="maintop residential-top">
        </section>
    </div>
    <div class="row">
        <div >
            <section class="mainContent bgcolor_white">
            <h1>CONSTRUCTION</h1>
          
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h3>
            		Exterior Services<br />
								Renovations<br />
								Custom Homes<br />
								Site Planning<br />
								Interior/Exterior Design<br />
								Backyard Essentials
						</h3>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h5>
	            Kapstone offers a comprehensive range of services encompassing virtually every aspect of residential and 
	            commercial renovations. <br /><br />
							We offer estimating, scheduling and a skilled and knowledgeable team of professionals. The end result is 
							an unparalleled level of service, support, quality, and competitive pricing with an ultimate goal of complete customer satisfaction.<br /><br />
							From demolition projects to ground-up construction, we have the knowledge and skills to turn your architectural 
							dreams into a reality. Our meticulous attention to detail and adept team guarantee your total satisfaction from 
							start to finish.
	          </h5>
            
            <!--
            <div class="construction">
	            <div class="content_left">
	            	<div class="content_img1">
	            	</div>
	            </div>
	            <div class="content_middle">
	            	<div class="content_img2">
	            	</div>
	            </div>
	            <div class="content_right">
	            	<div class="content_img3">
	            	</div>
	            </div>
	          </div>
	          -->
            <section class="gallery">
								
			<div  id="gallery_preview">
	          <?php include "gallery.php" ?>
			</div>
					
			</section>
	          
	          
	          
			<div class="construction02">
            <h5>
	            Our professional service will yield the results you should expect from a renovation company, and our approach 
	            will ensure superior construction and results. With our knowledge, your project will be managed 
	            cost-effectively and efficiently, and we are directed by your vision every step of the way. <br /><br />
							
	
		           <div class="content_left02">
		           	Construction/Renovation related services:<br /><br />
						<ul class="list_circle"> 
							<li>Design and colour consultation</li>
							<li>Rebuilding after mould remediation</li>
							<li>Custom homes</li>
							<li>Architectural plans and design</li>
							<li>General carpentry and repairs</li>
							<li>Kitchen remodeling</li>
							<li>Basement development</li>
							<li>Bathroom remodeling and finishing</li>
							<li>Exterior and interior painting</li>
							<li>Window and door replacement</li>
							<li>Wood floor refinishing and installation</li>
							<li>Tile and stonework</li>
							<li>Porch repair and building</li>
							<li>Decks and stairways</li>
							<li>Foundation work</li>
							<li>Roof repair and installation</li>
							<li>Electrical repair and installation</li>
							<li>Plumbing repair and installation</li>
							<li>Major or minor structural changes and additions</li>
							<li>Fencing</li>
							<li>Any other renovation or building need</li>
						</ul>
		           </div>
		           <div class="content_right02">
		           	<div class="content_img4">
		          	</div>
		          </div>
			        
	        </h5>
			</div>
						<div class="h_100"></div>
						
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
