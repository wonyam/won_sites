<?php include "../include/common.php" ?>
<?php include $url_s_header ?>

<?php include $url_s_navigation ?>

<script type="text/javascript">
$(document).ready(function() {
	$("#goback").click(function() {
		location.href="<?php echo ($common_root);?>subcontractor/";
	});
	
	$("#send").click(function() {
	//$("form#form1").submit(function(event){
		var action = $("#form1").attr('action');
		
		var construction_val = [];
		var janitorial_val = [];
	  $("input[name='construction[]']:checked").each(function ()
		{
		    construction_val.push($(this).val());
		});
	
	  $("input[name='janitorial[]']:checked").each(function ()
		{
		    janitorial_val.push($(this).val());
		});
	  //disable the default form submission
	  //event.preventDefault();
	 
	  //grab all form data  
	  //var form_data = new FormData($(this)[0]);
	  //var form_data = $("#form1").serialize();
	  //alert(form_data);
			var form_data = {
				smode: $("#smode").val(),
				cname: $("#cname").val(),
				caddress: $("#caddress").val(),
				phone: $("#phone").val(),
				email: $("#email").val(),
				construction: construction_val,
				janitorial: janitorial_val,
				/*
				certi_name: $("#certi_name").val(),
				certi_acquired: $("#certi_acquired").val(),
				certi_expiration: $("#certi_expiration").val(),
				equipment: $("#equipment").val(),
				labour: $("#labour").val(),
				provinces: $("#provinces").val(),
				insurance: $("#insurance").val(),
				wcb: $("#wcb").val(),
				*/
				is_ajax: 1
			};
			
			$.ajax({
					type: "POST",
					url: action,
					data: form_data,
					success: function(response) {
						//alert(form_data);
						//alert(response.process);
						if(response.process == '0') {
							$("#form1").slideUp('slow');
							$("#s_message").html("<h2><p style='font-weight:bold;text-align:center;'>Sending email is success.</p></h2>");
							$("#s_button").show();
						}
						else {
							//$("#message").html("<p style='color:red'>"+ response.err_message +"</p>");	
							if(response.err_message_cname != "") {
								$("#em_cname").html(response.err_message_cname);
								$("#cname").focus();
							}
							if(response.err_message_caddress != "") {
								$("#em_caddress").html(response.err_message_caddress);
								$("#caddress").focus();
							}
							if(response.err_message_phone != "") {
								$("#em_phone").html(response.err_message_phone);
								$("#phone").focus();
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
<div class="container-fluid">
    <div class="row">
        <section class="maintop main_careers-top">
        </section>
    </div>
    <div class="row">
        <div >
            <section class="mainContent bgcolor_white">
            <h1>CAREERS</h1>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h3>KAPSTONE CAREERS<br />SUB-CONTRACTOR REGISTRATION</h3>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <!--
            <h5>
	            To be the best, we recruit the best. If you are an expert in your field with client service skills that 
	            complement the Kapstone Way™, we would like to hear from you. We offer competitive wages and benefits, 
	            encourage ongoing training and reward hard work with opportunities for advancement. 
	          </h5>
	          -->
	          <div class="h_30">
	          </div>
	          
						<form id="form1" name="form1" action="send.php" method="post"  enctype='multipart/form-data' onsubmit="return false;" >
						<input type="hidden" name="smode" id="smode" value="send">
						<input type="hidden" name="applyfor_val" id="applyfor_val">
						<input type="hidden" name="availability_val" id="availability_val">
            <div class="careers">
            	
		          <div class="h_20"></div>
	            <h4 class="header-3">Company Information</h4>
	            	
	            <table class="contents03">
	            	<tr>
	            		<td><div class="q01"><label for="cname">Name of Company:</label><span class="form-required">*</span><span id="em_cname" class="form-required-message"></span></div>
	            			<div class="a01">
	            				<input type="text" name="cname" id="cname" value="" class="" />
	            			</div>
	            			</td>
	            	</tr>
	            	<tr>
	            		<td><div class="q01"><label for="caddress">Company Address:</label><span class="form-required">*</span><span id="em_caddress" class="form-required-message"></span></div>
	            			<div class="a01">
	            			<input type="text" name="caddress" id="caddress" value="" class="" /> </div></td>
	            	</tr>
	            	<tr>
	            		<td>
	            			<table class="contents04">
	            				<tr>
	            					<td>
	            						<div class="q01"><label for="phone">Phone:</label><span class="form-required">*</span><span id="em_phone" class="form-required-message"></span></div>
				            			<div class="a01">
				            			<input type="text" name="phone" id="phone" value="" class="" /> </div>
	            					</td>
	            					<td>
	            						<div class="q01"><label for="email">Email:</label><span class="form-required">*</span><span id="em_email" class="form-required-message"></span></div>
				            			<div class="a01">
				            			<input type="text" name="email" id="email" value="" class="" /> </div>
	            					</td>
	            				</tr>
	            			</table>
	            			
	            			</td>
	            	</tr>
	            </table>
	            
		          
		          <div class="h_20"></div>
	            <h4 class="header-3">What type of work do you normally perform (select all that apply)</h4>
		          
		          <table class="contents03">
	            	<tr>
	            		<td class="tleft02">
	            			<div class="q01">Construction: </div>
		          			<div class="h_10"></div>
	            		</td>
	            		<td class="tright02">
	            			
	            			<div class="a01">
	            				
		            				<table class="contents04">
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Excavation" id="construction1"><label for="construction1">Excavation</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Interior Finish Supply" id="construction2"><label for="construction2">Interior Finish Supply</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Demolition" id="construction3"><label for="construction3">Demolition</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Interior Finishing" id="construction4"><label for="construction4">Interior Finishing</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Electrician" id="construction5"><label for="construction5">Electrician</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Granite Counters" id="construction6"><label for="construction6">Granite Counters</label></td>
					            	</tr>
					            	
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Carpentry" id="construction7"><label for="construction7">Carpentry</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Light fixtures" id="construction8"><label for="construction8">Light fixtures</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Framing" id="construction9"><label for="construction9">Framing</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Cabinetry" id="construction10"><label for="construction10">Cabinetry</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Drywall/Insulation" id="construction11"><label for="construction11">Drywall/Insulation</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Stairs" id="construction12"><label for="construction12">Stairs</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Painting" id="construction13"><label for="construction13">Painting</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Flooring" id="construction14"><label for="construction14">Flooring</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Plumbing" id="construction15"><label for="construction15">Plumbing</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Tiling" id="construction16"><label for="construction16">Tiling</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Roofing" id="construction17"><label for="construction17">Roofing</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Appliances" id="construction18"><label for="construction18">Appliances</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Engineering & Surveying" id="construction19"><label for="construction19">Engineering & Surveying</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Central VAC" id="construction20"><label for="construction20">Central VAC</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Architectural/House Design" id="construction21"><label for="construction21">Architectural/House Design</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Security Systems" id="construction22"><label for="construction22">Security Systems</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Concrete supply/placement/Finishing" id="construction23"><label for="construction23">Concrete supply/placement/Finishing</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Sound Systems" id="construction24"><label for="construction24">Sound Systems</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Exterior windows & doors" id="construction25"><label for="construction25">Exterior windows & doors</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Shower Doors/Wall Mirrors" id="construction26"><label for="construction26">Shower Doors / Wall Mirrors</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Exterior Finishing" id="construction27"><label for="construction27">Exterior Finishing</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Refuse Removal" id="construction28"><label for="construction28">Refuse Removal</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Masonry" id="construction29"><label for="construction29">Masonry</label></td>
					            		<td><input type="checkbox" name="construction[]" value="New Home Sales" id="construction30"><label for="construction30">New Home Sales</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="construction[]" value="Decks/Railing" id="construction31"><label for="construction31">Decks/Railing</label></td>
					            		<td><input type="checkbox" name="construction[]" value="Lumber/Truss/Joist Supply" id="construction32"><label for="construction32">Lumber/Truss/Joist Supply</label></td>
					            	</tr>
					            </table>
	            			</div>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td colspan="2">
		          			<div class="h_10"></div>
	            			<div class="line_dash"></div>
		          			<div class="h_10"></div>
	            		</td>
	            	</tr>
	            	<tr>
	            		<td class="tleft02">
	            			<div class="q01">Janitorial & Clean Air:</div>
		          			<div class="h_10"></div>
	            		</td>
	            		<td class="tright02">
	            			<div class="a01">
		            			<table class="contents04">
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Window Cleaning" id="janitorial1"><label for="janitorial1">Window Cleaning</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="HVAC/Vent Cleaning" id="janitorial2"><label for="janitorial2">HVAC/Vent Cleaning</label></td>
					            	</tr>
					            	
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Carpet Cleaning" id="janitorial3"><label for="janitorial3">Carpet Cleaning</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="Asbestos/Mold Removal" id="janitorial4"><label for="janitorial4">Asbestos/Mold Removal</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Stripping/Waxing" id="janitorial5"><label for="janitorial5">Stripping/Waxing</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="Air Sampling" id="janitorial6"><label for="janitorial6">Air Sampling</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Pressure Washing" id="janitorial7"><label for="janitorial7">Pressure Washing</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="Disaster Restoration" id="janitorial8"><label for="janitorial8">Disaster Restoration</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Snow Removal" id="janitorial9"><label for="janitorial9">Snow Removal</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="Hood Range Cleaning" id="janitorial10"><label for="janitorial10">Hood Range Cleaning</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Crime Scene Cleaning" id="janitorial11"><label for="janitorial11">Crime Scene Cleaning</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="Commercial Kitchen Deep Cleaning" id="janitorial12"><label for="janitorial12">Commercial Kitchen Deep Cleaning</label></td>
					            	</tr>
					            	<tr>
					            		<td><input type="checkbox" name="janitorial[]" value="Trauma Scene Cleaning" id="janitorial13"><label for="janitorial13">Trauma Scene Cleaning</label></td>
					            		<td><input type="checkbox" name="janitorial[]" value="Contaminated Site Cleaning" id="janitoria114"><label for="janitoria114">Contaminated Site Cleaning</label></td>
					            	</tr>
					            </table>
	            			</div>
									</td>
	            	</tr>
	            </table>
		          
		          <?php /*
		          <div class="h_20"></div>
	            <h4 class="header-3">Other (please list)</h4>
		          
	            <table class="contents03">
	            	<tr>
	            		<td><div class="q01"><label for="certi_name">Certification:</label></div>
	            			<div class="a01">
	            				<table class="contents04">
	            					<tr>
	            						<td>
				            				<span class="form-container01"><input type="text" size="10" name="certi_name" id="certi_name" />
			          					  <label class="form-sub-label" for="certi_name"> Certification Name </label></span>
	            						</td>
	            						<td>
				            				<span class="form-container02"><input type="text" size="10" name="certi_acquired" id="certi_acquired" />
			          						<label class="form-sub-label" for="certi_acquired"> Acquired Date </label></span>
				            				<span class="form-container03"><input type="text" size="10" name="certi_expiration" id="certi_expiration" />
			          						<label class="form-sub-label" for="certi_expiration"> Expiration Date </label></span>
	            						</td>
	            					</tr>
	            				</table>
	            			</div>
	            			</td>
	            	</tr>
	            	<tr>
	            		<td><div class="q01"><label for="equipment">Equipment available and quantities:</label></div>
	            			<div class="a01">
	            			<input type="text" name="equipment" id="equipment" value="" class="" /> </div></td>
	            	</tr>
	            	<tr>
	            		<td><div class="q01"><label for="labour">Labour availability and quantities:</label></div>
	            			<div class="a01">
	            			<input type="text" name="labour" id="labour" value="" class="" /> </div></td>
	            	</tr>
	            	<tr>
	            		<td><div class="q01"><label for="provinces">What Provinces can you work in?</label></div>
	            			<div class="a01">
	            			<input type="text" name="provinces" id="provinces" value="" class="" /> </div></td>
	            	</tr>
	            	<tr>
	            		<td><div class="q01 letter_spacing"><label for="insurance">Do you have General Liability Insurance? </label></div>
	            			<div class="a01">
	            			<input type="text" name="insurance" id="insurance" value="" class="" /> </div></td>
	            	</tr>
	            	<tr>
	            		<td><div class="q01 letter_spacing"><label for="wcb">Do you have valid WCB for your employee?</label></div>
	            			<div class="a01">
	            			<input type="text" name="wcb" id="wcb" value="" class="" /> </div></td>
	            	</tr>
	            </table>
	            */ ?>
		          
		          <div class="h_10"></div>
							<div id="message" class="q01"></div>
		          <div class="h_20"></div>
		          <div class="sendform button_c">
			          <input type="button" name="send" id='send'  value="Send" class="myButton">
			          <!--input type="submit" value="Send" class="myButton"-->
			        </div>
		          <div class="h_100"></div>
		          
		          </div>
						</form>
							<div id="s_message" class="q01"></div>
							<div id="s_button" class="careers sendform goback"><input type="button" id="goback" value="Go Back" class="myButton"</div>
            </section>
        </div>
    </div>
</div>
<?php include $url_s_footer ?>
