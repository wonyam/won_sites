<?php include "../include/common.php" ?>
<?php include $url_s_header ?>

<?php include $url_s_navigation ?>
<div class="container-fluid">
    <div class="row">
        <section class="maintop ourstory-top">
        </section>
    </div>
    <div class="row">
        <div >
            <section class="mainContent bgcolor_white">
            <h1 id="ourstory">our story</h1>
            <h2>About Kapstone</h2>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h3>Complete Property Development <br />& Facility Maintenance Professionals</h3>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            
            <div class="ourstory">
            	<div class="content_img1">
            	</div>
	            <h5>
	            	At Kapstone, we’re dedicated to delivering innovative customer-focused solutions in a safe, effective and 
	            	proactive manner. This means seeing the big picture while taking care of all the little details, 
	            	always thinking one step ahead to make sure your project needs are taken care of in advance; 
	            	Finishing what we started, and making sure the job is done right every time. 
	            	Kapstone puts your needs first in our effort <span class="emphsis_ba">to be Calgary’s first-choice, one-stop service provider for all our clients’ 
	            	building and maintenance needs.</span>
		          </h5><br>
		          
		          
	            <h1 id="ourteam">THE KAPSTONE TEAM</h1>
	            
	            
						  <div class="content_text1">
		            <div class="underline ">
		                <hr class="greenbar ">
		            </div>
		            <h3>Knowledgeable 
										Dependable	
										Approachable
										</h3>
		            <div class="underline ">
		                <hr class="greenbar ">
		            </div>
						  </div>
						  <div class="content_text2">
            		<h5>
						  	Our strength is our service, and our people make all the difference. They’re the individuals that put a face to our 
						  	company name, and ultimately who define us as your trusted partner.<br /><br />
								Every member on our staff is highly trained to deliver their specialized service and meet our company’s standards 
								of performance, safety and client satisfaction. Part of this training is an understanding of the Kapstone Way™ – a 
								company philosophy of respect, fairness, and commitment to the clients we serve. <br /><br />
								<span class="emphsis_bu">Your satisfaction comes first – 24/7/365.</span>
            	</h5>
						  </div>
            </div>
	 				 <table class="ourstory">
							<tr><td></td></tr>
						</table>
            <h1 id="associations">Associations</h1>
            
            <div class="ourstory">
	            <table class="ourstory_table">
	            	<tr>
	            		<td class="ltd">
							  		<div class="content_logo1"><img src="../img/aboutus/ourstory_02.jpg" class="logo_img01"></div>
									  <div class="content_logo1_text"><h5>Calgary Construction Association: <br />
			                              membership</h5>
									  </div>
	            		</td>
	            		<td class="rtd">
									  <div class="content_logo2"><img src="../img/aboutus/ourstory_03.jpg" class="logo_img02"></div>
									  <div class="content_logo2_text"><h5>Alberta Health and Safety Association: <br />
			                                                     membership</h5>
									  </div>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td class="ltd">
							  		<div class="content_logo1"><img src="../img/aboutus/ourstory_05.jpg" class="logo_img03"></div>
									  <div class="content_logo1_text"><br /><h5>Progressive Home Warranty Alberta New Home Buyer Protection</h5>
									  </div>
	            		</td>
	            		<td class="rtd">
									  <div class="content_logo2"><img src="../img/aboutus/ourstory_06.jpg" class="logo_img04"></div>
									  <div class="content_logo2_text"><h5>Canadian Healthcare Engineering Society</h5>
									  </div>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td class="ltd">
							  		<div class="content_logo1"><img src="../img/aboutus/ourstory_07.jpg" class="logo_img03"></div>
									  <div class="content_logo1_text"><br /><h5>New Home Buyer Protection Board</h5>
									  </div>
	            		</td>
	            		<td class="rtd">
									  <div class="content_logo2"><img src="../img/aboutus/ourstory_08.jpg" class="logo_img04"></div>
									  <div class="content_logo2_text"><h5>Alberta Association for Safety Partnership</h5>
									  </div>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td class="ltd">
							  		<div class="content_logo1"><img src="../img/aboutus/ourstory_09.jpg" class="logo_img03"></div>
									  <div class="content_logo1_text"><h5>Canadian Safety Association</h5>
									  </div>
	            		</td>
	            		<td class="rtd">
									  <div class="content_logo2"><img src="../img/aboutus/ourstory_10.jpg" class="logo_img04"></div>
									  <div class="content_logo2_text"><h5>Institute of Inspection Cleaning and Restoration Certification</h5>
									  </div>
	            		</td>
	            	</tr>
	            </table>
	          </div>
            </section>
            
	          <!--
            <h5>
	            At Kapstone, we’re dedicated to delivering innovative customer-focused solutions in a safe, effective and proactive manner. This means seeing the big picture while taking care of all the little details. Always thinking one step ahead to make sure your project needs are taken care of in advance. Finishing what we started, and making sure the job is done right every time. And putting your needs first in our effort to be Calgary’s first-choice, one-stop service provider for all our clients’ building and maintenance needs.
	          </h5><br>
						<h5 style="color:#333;font-weight:bold;margin-bottom:15px;">More</h5>
				    <a href="about-ourteam.php" class="subnav">Our Team</a>
				    <a href="about-association.php" class="subnav">Association</a>
				    <a href="about-gallery.php" class="subnav">Gallery</a>
				    -->
        </div>
    </div>
</div>
<?php
	$point = $_REQUEST['point'];
?>
<script>
/*$(document).ready(function() {*/
$(window).load(function() {
		$.scrollTo( $('#<?php echo($point) ?>'), 500 ); 
		return false;
});
</script>
<?php include $url_s_footer ?>
