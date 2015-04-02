<?php include "include/common.php" ?>
<?php include $url_header ?>
        <?php include $url_navigation ?>
				
            <!-- content here -->

            <!-- Slider -->
	            <div id="slideshow">
	                <div>
	                    <img src="img/mainbanner_1.jpg" id="firt_img" class="slideimg trig">
	                </div>
	                <div>
	                    <img src="img/mainbanner_2.jpg" class="slideimg" id="second_img">
	                </div>
	                <div>
	                    <img src="img/mainbanner_3.jpg" class="slideimg" id="third_img">
	                </div>
	                <div>
	                    <img src="img/mainbanner_4.jpg" class="slideimg" id="forth_img">
	                </div>
	            </div>
	            
					    <script>
					    	//alert(document.getElementById('firt_img').height);
					    	 //$("#slideshow").style.height = document.getElementById('firt_img').height;
					    	 	var agt = navigator.userAgent.toLowerCase();
					    	 	//if (agt.indexOf("chrome") == -1 ) {
					    	 	//	alert(eval(document.getElementById('firt_img').height));
						    	// document.getElementById('slideshow').style.height = eval(document.getElementById('firt_img').naturalHeight)+'px';
						    	//}
					        $("#slideshow>div:gt(0)").hide();
					        setInterval(function () {
					            $('#slideshow > div:first').fadeOut(700).next().fadeIn(700).end().appendTo('#slideshow');
					        }, 6000);
					        
					    </script>
					    
            <!-- End Slider -->

            <!-- Home Contents -->
            <div class=" container home title ">
                <h2 class="title ">services</h2>
                <div class="underline ">
                    <hr class="left ">
                    <hr class="right ">
                </div>
            </div>

            <div class="container home">
                <div class="service first">&nbsp;</div>
                <div class="service">
                    <a href="commercial/">
                    	<img src="img/button_developement.png"><h4>developments</h4>
	                    <div class="s_text">
	                    Committed to delivering your project on time and on budget
	                  	</div>
	                  </a>
                </div>
                <div class="service">
                    <a href="facility_services/">
	                    <img src="img/button_maintenance02.png">
	                    <h4>facility services</h4>
	                    <div class="s_text">
	                    	Helping you feel good about the image you project
	                  	</div>
	                  </a>
                </div>
                <div class="service">
                    <a href="clean_air_solutions/">
	                    <img src="img/button_cleanair.png">
	                    <h4>clean air solutions</h4>
	                    <div class="s_text">
	                    Healthier indoor air quality for healthier workplaces.
	                  	</div>
	                  </a>
                </div>
                <div class="service">
                    <a href="construction/">
	                    <img src="img/button_renovation.png">
	                    <h4>renovations</h4>
	                    <div class="s_text">
	                    Superior craftsmanship that delivers on your vision
	                  	</div>
	                  </a>
                </div>
                <div class="service last ">&nbsp;</div>
            </div>
            <script>
            		
							/*$(document).ready(function() {*/
							$(window).load(function() {
								$("#slideshow").css('height',$("#firt_img").height());
							});
            </script>

            <!-- End Home Contents -->
        <?php include $url_footer ?>