
<!doctype html>
<html lang="en" class="no-js">

<head>

    <link rel="stylesheet" href="http://kapstoneservices.com/css/reset.css">
    <link rel="stylesheet" href="http://kapstoneservices.com/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://kapstoneservices.com/css/style.css">
    <link rel="stylesheet" href="http://kapstoneservices.com/css/custom.css">
    <link rel="stylesheet" href="http://kapstoneservices.com/css/media.css">
  	<link rel="stylesheet" href="http://kapstoneservices.com/css/page.css">

    <script src="http://kapstoneservices.com/js/jquery-2.1.1.js "></script>
    <script src="http://kapstoneservices.com/js/jquery.mobile.custom.min.js "></script>
    <script src="http://kapstoneservices.com/js/queryloader2.min.js "></script>
		<script type='text/javascript' src='http://kapstoneservices.com/js/jquery.min.js'></script>
		<script type='text/javascript' src='http://kapstoneservices.com/js/jquery.scrollTo-min.js'></script> 
    <script src="http://kapstoneservices.com/js/main.js "></script>
    
    <title>Kapstone Development</title>
</head>

<script type="text/javascript">
$(document).ready(function() {
	$('input:radio[name="applyfor"]').change(function(){
		$("#applyfor_val").val($(this).val());
	});
	
	$('input:radio[name="availability"]').change(function(){
		$("#availability_val").val($(this).val());
	});
	
	$("#goback").click(function() {
		location.href="<?php echo ($common_root);?>careers/";
	});
	
	//$("#send").click(function() {
   //$("input[name='send']").on("click", function(){
	$("form#form1").submit(function(event){
		var action = $("#form1").attr('action');
		
		if ($("#sname").val().trim() == "") {
			$("#em_sname").html("Please input your name.");
			$("#sname").focus();
		} else {
			$("#em_sname").html("");
		}
		if ($("#phone").val().trim() == "") {
			$("#em_phone").html("Please input your phone number.");
			$("#phone").focus();
		} else {
			$("#em_phone").html("");
		}
		if ($("#email").val().trim() == "") {
			$("#em_email").html("Please input your email.");
			$("#email").focus();
		} else {
			$("#em_email").html("");
		}
		if ($("#userfile1").val().trim() == "") {
			$("#em_userfile1").html("Please upload your resume.");
			return;
		} else {
			$("#em_userfile1").html("");
		}
		
		if( $("#userfile1").val() != "" ){
			var ext = $('#userfile1').val().split('.').pop().toLowerCase();
      if($.inArray(ext, ['pdf','doc','docx']) == -1) {
			  //alert('Only pdf or word format is accepted.');
				$("#em_userfile1").html("Only pdf or word format is accepted.");
				return;
      }
		}

	  //disable the default form submission
	  event.preventDefault();
	 
	  //grab all form data  
	  var form_data = new FormData($(this)[0]);
	  //var form_data = $("#form1").serialize();
	  //alert(form_data);

		/*
			var form_data = {
				smode: $("#smode").val(),
				sname: $("#sname").val(),
				phone: $("#phone").val(),
				email: $("#email").val(),
				applyfor: $("#applyfor_val").val(),
				availability: $("#availability_val").val(),
				when: $("#when").val(),
				experience: $("#experience").val(),
				transportation: $("#transportation").val(),
				userfile1: $("#userfile1").val(),
				userfile2: "",
				is_ajax: 1
			};
			*/
			
			$.ajax({
				type: "POST",
				url: action,
				data: form_data,
		    async: false,
		    cache: false,
		    contentType: false,
		    processData: false,
				success: function(response) {
					if(response == 'success') {
						$("#form1").slideUp('slow');
						$("#s_message").html("<h2><p style='font-weight:bold;text-align:center;'>Sending your resume is success.</p></h2>");
						$("#s_button").show();
					}
					else {
						$("#message").html("<p style='color:red'>"+ response +"</p>");	
					}
				}
			});
		return false;
	});
});
</script>

<?php /*
					  <h3>APPLICATION</h3>
					  <div class="h_20"></div>
					  */ ?>
	          
						<form id="form1" name="form1" action="send.php" method="post"  enctype='multipart/form-data' onsubmit="return false;" >
						<input type="hidden" name="smode" id="smode" value="send">
						<input type="hidden" name="applyfor_val" id="applyfor_val">
						<input type="hidden" name="availability_val" id="availability_val">
            <div class="careers">
	            <h4 class="header-3">Personal Information</h4>
	            
          			<table class="contents04">
          				<tr>
          					<td>
          						<div class="q01"><label for="sname">Name:</label> <span class="form-required">*</span><span id="em_sname" class="form-required-message"></span></div>
		            			<div class="a01">
		            			<input type="text" name="sname" id="sname" value="" /></div>
          					</td>
          					<td>
          						<div for="transportation" class="q01"><label for="phone">Phone number:</label> <span class="form-required">*</span><span id="em_phone" class="form-required-message"></span> </div>
		            			<div class="a01">
		            			<input type="text" name="phone" id="phone" value="" /> </div>
          					</td>
          				</tr>
          				<tr>
          					<td>
          						<div class="q01"><label for="email">Email:</label> <span class="form-required">*</span><span id="em_email" class="form-required-message"></span></div>
		            			<div class="a01">
		            			<input type="text" name="email" id="email" value="" /> </div>
          					</td>
          					<td>
          						
          					</td>
          				</tr>
          			</table>
          			
		          <div class="h_20"></div>
	            <h4 class="header-3">Position applying for</h4>
	            <div class="applyfor">
		            <table class="contents02">
		            	<tr>
		            		<td class="tleft"><input type="radio" name="applyfor" value="Building construction skilled trades" id="applyfor1"><label for="applyfor1"> Building construction skilled trades</label></td>
		            		<td class="tright"><input type="radio" name="applyfor" value="Construction contractor" id="applyfor2"><label for="applyfor2"> Construction contractor </label></td>
		            	</tr>
		            	<tr>
		            		<td class="tleft"><input type="radio" name="applyfor" value="Facility services cleaner" id="applyfor3"><label for="applyfor3"> Facility services cleaner </label></td>
		            		<td class="tright"><input type="radio" name="applyfor" value="Cleaning contractor" id="applyfor4"><label for="applyfor4"> Cleaning contractor </label></td>
		            	</tr>
		            	<tr>
		            		<td class="tleft"><input type="radio" name="applyfor" value="HVAC, Asbestos, mold Technician" id="applyfor5"><label for="applyfor5"> HVAC, Asbestos, mold Technician </label></td>
		            		<td class="tright"><input type="radio" name="applyfor" value="Other" id="applyfor6"><label for="applyfor6"> Other </label></td>
		            	</tr>
		            </table>
		          </div>
		          
		          <div class="h_20"></div>
	            <h4 class="header-3">Availability</h4>
	            <div class="availability">
		            <table class="contents03">
		            	<tr>
		            		<td><div class="q01">Are you looking for...? </div>
		            			<div class="a01">
		            				<table class="t01">
		            					<tr>
		            						<td class="td01"><input type="radio" name="availability" value="Full time" id="availability1"><label for="availability1"> Full time</label></td>
		            						<td class="td02"><input type="radio" name="availability" value="Part-time" id="availability2"><label for="availability2"> Part-time</label></td>
		            						<td class="td03"><input type="radio" name="availability" value="Weekends" id="availability3"><label for="availability3"> Weekends</label></td>
		            						<td class="td04"><input type="radio" name="availability" value="sub contracts / affiliate" id="availability4"><label for="availability4"> Sub contracts / affiliate</label></td>
		            					</tr>
		            				</table>
		            			</div>
		            			</td>
		            	</tr>
		            	<tr>
		            		<td><div class="q01"><label for="when">When are you available to start work?</label></div>
		            			<div class="a01">
		            			<input type="text" name="when" id="when" value="" class="" /> </div></td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div class="q01"><label for="experience">Years of experience?</label></div>
		            			<div class="a01">
		            			<input type="text" name="experience" id="experience" value="" class="" /> </div>
		            			</td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div class="q01"><label  for="transportation">Do you have transportation?</label></div>
		            			<div class="a01">
		            			<input type="text" name="transportation" id="transportation" value="" class="" /> </div></td>
		            	</tr>
		            </table>
		          </div>
		          
		          <div class="h_20"></div>
	            <h4 class="header-3">Resume<span class="form-required">*</span><span id="em_userfile1" class="form-required-message"></span></h4>
	            <div class="resume">
		            <table class="contents03">
		            	<tr>
		            		<td>
				            	<div class="q01">Please upload your resume here: only pdf or word format is accepted.</div>
					            <div class="a01"><input type="file" name="userfile1" id="userfile1" value="upload resume"></div>
		            		</td>
		            	</tr>
		          	</table>
	          	</div>
		          <div class="h_10"></div>
							<div id="message" class="q01"></div>
		          <div class="h_20"></div>
		          <div class="sendform align_c">
			          <!--input type="button" name="send" id='send'  value="Send" class="myButton"-->
			          <input type="submit" value="Send" class="myButton">
			        </div>
		          <div class="h_100"></div>
		          
		          </div>
						</form>
							<div id="s_message" class="q01"></div>
							<div id="s_button" class="careers sendform goback"><input type="button" id="goback" value="Go Back" class="myButton"></div>
							
							