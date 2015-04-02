<?php include "../include/common.php" ?>
<?php include $url_s_header ?>

<?php include $url_s_navigation ?>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&language=en-ca&#038;ver=1.0'></script>
<script>
		window.accommodationLocationLatitude = "51.054456";
		window.accommodationLocationLongitude = "-113.993309";
    	/*, , , 
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-34.397, 150.644)
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}


google.maps.event.addDomListener(window, 'load', initialize);
*/
function initialize_map() {
		var secheltLoc = new google.maps.LatLng(window.accommodationLocationLatitude, window.accommodationLocationLongitude);
		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map-canvas"), myMapOptions);
		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(window.accommodationLocationLatitude, window.accommodationLocationLongitude),
			visible: true
		});
		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>" + window.accommodationTitle + "</strong><br />" + window.accommodationAddress + "<br />" + window.accommodationWebsite + "";
		var myOptions = {
			 content: boxText
			,disableAutoPan: false
			,maxWidth: 0
			,pixelOffset: new google.maps.Size(-140, 0)
			,zIndex: null
			,closeBoxURL: ""
			,infoBoxClearance: new google.maps.Size(1, 1)
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
		};
		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});
		var ib = new InfoBox(myOptions);
		ib.open(theMap, marker);
	}
	
google.maps.event.addDomListener(window, 'load', initialize_map);

</script>
<script type="text/javascript">
$(document).ready(function() {
	$("#goback").click(function() {
		location.href="<?php echo ($common_root);?>location/";
	});
	
	$("#send").click(function() {
	//$("form#form1").submit(function(event){
		var action = $("#form1").attr('action');
		
	  //disable the default form submission
	  //event.preventDefault();
	 
	  //grab all form data  
	  //var form_data = new FormData($(this)[0]);
	  //var form_data = $("#form1").serialize();
	  //alert(form_data);
			var form_data = {
				smode: $("#smode").val(),
				fname: $("#fname").val(),
				lname: $("#lname").val(),
				company: $("#company").val(),
				email: $("#email").val(),
				areacode: $("#areacode").val(),
				phone: $("#phone").val(),
				describe: $("#describe").val(),
				is_ajax: 1
			};
			
			$.ajax({
					type: "POST",
					url: action,
					data: form_data,
					success: function(response) {
						//alert(response.process);
						if(response.process == '0') {
							$("#form1").slideUp('slow');
							$("#s_message").html("<h2><p style='font-weight:bold;text-align:center;'>Sending email is success.</p></h2>");
							$("#s_button").show();
						}
						else {
							//$("#message").html("<p style='color:red'>"+ response.err_message +"</p>");	
							if(response.err_message_name != "") {
								$("#em_name").html(response.err_message_name);
								$("#name").focus();
							}
							if(response.err_message_email != "") {
								$("#em_email").html(response.err_message_email);
								$("#email").focus();
							}
						}
					}
			});
		return false;
	});
});
</script>
    <?php /*
	<script src="http://cdn.jotfor.ms/static/jotform.js?3.1.2364" type="text/javascript"></script>
    <script type="text/javascript">
	   JotForm.init(function(){
	      $('email').hint('ex: myname@example.com');
	   });
	</script>
	*/ ?>
<div class="container-fluid">
    <div class="row">
        <section class="maintop ourstory-top">
        </section>
    </div>
    <div class="row">
        <div >
            <section class="mainContent bgcolor_white">
            <h1>CONTACT US</h1>
	            
            
            <div class="location">
						  <div class="content_left1">
            		
            		
            		<!--  here -->
		         <!-- <div class="h_20"></div> -->
						  <h3>QUICK QUOTE</h3>
						  <div class="h_20"></div>
	            <div class="contact">
							<form id="form1" name="form1" action="send.php" method="post" onsubmit="return false;">
		            <table class="contents03" id="form_table">
									<input type="hidden" name="smode" id="smode" value="send">
		            	<tr>
		            		<td><div class="q01"><label for="fname">Full Name:</label> <span class="form-required">*</span><span id="em_name" class="form-required-message"></span></div>
			            			<div class="a01">
			            				<span class="form-container01"><input type="text" size="10" name="fname" id="fname" />
	            					  <label class="form-sub-label" for="fname"> First Name </label></span>
			            				<span class="form-container02"><input type="text" size="10" name="lname" id="lname" />
	            						<label class="form-sub-label" for="lname"> Last Name </label></span>
	            					</div>
		            			</td>
		            	</tr>
		            	<tr>
		            		<td><div for="when" class="q01"><label for="company">Company Name:</label></div>
		            			<div class="a01">
		            			<input type="text" name="company" id="company" value="" class="" /> </div></td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div for="experience" class="q01"><label for="email">E-mail:</label><span class="form-required">*</span><span id="em_email" class="form-required-message"></span></div>
		            			<div class="a01">
		            			<input type="text" name="email" id="email" value="" class="" />
		            			<label class="form-sub-label" for="email"> ex: myname@example.com</label></div>
		            			</td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div for="transportation" class="q01"><label for="areacode">Phone Number:</label></div>
		            			<div class="a01">
			            				<span class="form-container01"><input type="text" size="10" name="areacode" id="areacode" />
	            					  <label class="form-sub-label" for="areacode"> Area Code </label></span>
			            				<span class="form-container02"><input type="text" size="10" name="phone" id="phone" />
	            						<label class="form-sub-label" for="phone"> Phone Number </label></span>
	            					</div>
		            		</td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div for="transportation" class="q01"><label for="describe">Describe the Project:</label></div>
		            			<div class="a01">
          						<textarea id="describe" class="form-textarea" name="describe" cols="50" rows="10"></textarea>
		            			</div></td>
		            	</tr>
		            	<tr>
		            		<td> 
			          			<div class="h_10"></div>
												<div id="message" class="q01"></div>
						          <div class="h_20"></div>
		            			<div class="sendform align_c">
							          <input type="button" name="send" id='send'  value="Send" class="myButton">
							          <!--input type="submit" value="Send" class="myButton" id="send"-->
							        </div>
		            		</td>
		            	</tr>
		            </table>
		          </form>
		            <table class="contents03 goback "id="s_button">
		            	<tr><td>
						        <div class="h_50"></div>
										<div id="s_message" class="q01"></div>
										<div class="sendform"><input type="button" id="goback" value="Go Back" class="myButton"></div>
									</td></tr>
								</table>
		            
		          </div>
            		<!--  here -->
		          
            		
            		
						  </div>
						  
						  <div class="content_right1">
						  	<h3>CONTACT INFO</h3>
            		
		            <h5>
							  	Phone: (403) 460-4399 <br />
									Fax: (587) 350-4399 <br />
									Toll Free: 1-855-787-1900 <br />
									<span class="v_text01">
									Email: <a href="mailto:info@kapstoneservices.com">info@kapstoneservices.com</a> <br />
									Email: <a href="mailto:info@kapstonedevelopments.com">info@kapstonedevelopments.com</a>
									</span>
									<span class="v_text02">
									Email: <br />
									<a href="mailto:info@kapstoneservices.com">info@kapstoneservices.com</a>
									<a href="mailto:info@kapstonedevelopments.com">info@kapstonedevelopments.com</a>
									</span>
            		</h5>
						  	<div class="h_30"></div>
            		
            		<h3>OUR LOCATION</h3>
            		
		            <h5>
							  	2922 - 3RD Ave NE
									Calgary, AB, Canada <br />
									T2A 6T7
            		</h5>
						  	<div class="h_10"></div>
            		
            		
    				<div id="map-canvas"></div>
						  </div>
						  
           	</div>
           	
           	
								
            </section>
        </div>
    </div>
</div>
<?php include $url_s_footer ?>
