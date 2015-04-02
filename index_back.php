<?php include "include/common.php" ?>
<?php include $url_header ?>
        <?php include $url_navigation ?>
				
            <!-- content here -->

            <!-- Slider -->
	            <div id="slideshow">
	                <div>
	                    <img src="img/banner1.jpg" id="firt_img" class="slideimg trig">
	                </div>
	                <div>
	                    <img src="img/banner2.jpg" class="slideimg">
	                </div>
	                <div>
	                    <img src="img/banner3.jpg" class="slideimg">
	                </div>
	            </div>
	            
					    <script>
					    	//alert(document.getElementById('firt_img').height);
					    	 //$("#slideshow").style.height = document.getElementById('firt_img').height;
					    	 	var agt = navigator.userAgent.toLowerCase();
					    	 	if (agt.indexOf("chrome") == -1 ) {
						    	 document.getElementById('slideshow').style.height = eval(document.getElementById('firt_img').height)+'px';
						    	}
					        $("#slideshow>div:gt(0)").hide();
					        setInterval(function () {
					            $('#slideshow > div:first').fadeOut(700).next().fadeIn(700).end().appendTo('#slideshow');
					        }, 3000);
					        
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
                    <img src="img/button_developement.png">
                    <h4>developments</h4>
                    <div class="s_text">
                    Committed to delivering your project on time and on budget
                  	</div>
                </div>
                <div class="service">
                    <img src="img/button_maintenance.png">
                    <h4>facility services</h4>
                    <div class="s_text">
                    	Helping you feel good about the image you project
                  	</div>
                </div>
                <div class="service">
                    <img src="img/button_cleanair.png">
                    <h4>clean air solutions</h4>
                    <div class="s_text">
                    Healthier indoor air quality for healthier workplaces.
                  	</div>
                </div>
                <div class="service">
                    <img src="img/button_renovation.png">
                    <h4>renovations</h4>
                    <div class="s_text">
                    Superior craftsmanship that delivers on your vision
                  	</div>
                </div>
                <div class="service last ">&nbsp;</div>
            </div>

            <!-- End Home Contents -->
        <?php include $url_footer ?>