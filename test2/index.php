<?php include "../include/common.php" ?>
<?php include $url_s_header ?>

<?php include $url_s_navigation ?>

<script type="text/javascript">
$(document).ready(function() {
	$("#login").click(function() {
		var action = $("#form1").attr('action');
		var form_data = {
			user_id: $("#user_id").val(),
			user_pw: $("#user_pw").val(),
			is_ajax: 1
		};
		$.ajax({
			type: "POST",
			url: action,
			data: form_data,
			success: function(response) {
				alert(response);
				if(response == 'success') {
					$("#message").html("<p style='color:green;font-weight:bold'>로그인 성공!</p>");
					$("#form1").slideUp('slow');
				}
				else {
					$("#message").html("<p style='color:red'>아이디 또는 비밀번호가 잘못되었습니다.</p>");	
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
            <section class="mainContent">
						<form id="form1" name="form1" action="login_ok.php" method="post"  enctype='multipart/form-data'>
						<input type="hidden" name="mode" value="send">
            <h1>CAREERS</h1>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            <h3>KAPSTONE CAREERS<br />EXPERTS WHO PUT PEOPLE FIRST</h3>
            <div class="underline ">
                <hr class="greenbar ">
            </div>
            
            <h5>
	            To be the best, we recruit the best. If you are an expert in your field with client service skills that 
	            complement the Kapstone Way™, we would like to hear from you. We offer competitive wages and benefits, 
	            encourage ongoing training and reward hard work with opportunities for advancement. 
	          </h5>
	          <div class="h_30">
	          </div>
	          
            <div class="careers">
	            <h4 class="header-3">Personal Information</h4>
		            <table class="contents">
		            		<tr>
		            			<th><label for="name">Name:</label></th>
		            			<td><input type="text" name="name" value="" /></td>
		            			<th><label for="phone">Phone number:</label></th>
		            			<td><input type="text" name="phone" value="" /></td>
		            		</tr>
		            		<tr>
		            			<th><label for="email">Email:</label></th>
		            			<td><input type="text" name="email" value="" /></td>
		            		</tr>
		            </table>
		          <div class="h_20"></div>
	            <h4 class="header-3">Position applying for</h4>
	            <div class="applyfor">
		            <table class="contents02">
		            	<tr>
		            		<td class="tleft"><input type="radio" name="applyfor" value="Building construction skilled trades" id="applyfor01"><label for="applyfor01">Building construction skilled trades</label></td>
		            		<td class="tright"><input type="radio" name="applyfor" value="Construction contractor" id="applyfor02"><label for="applyfor02">Construction contractor </label></td>
		            	</tr>
		            	<tr>
		            		<td class="tleft"><input type="radio" name="applyfor" value="Facility services cleaner" id="applyfor03"><label for="applyfor03">Facility services cleaner </label></td>
		            		<td class="tright"><input type="radio" name="applyfor" value="Cleaning contractor" id="applyfor04"><label for="applyfor04">Cleaning contractor </label></td>
		            	</tr>
		            	<tr>
		            		<td class="tleft"><input type="radio" name="applyfor" value="HVAC, Asbestos, mold Technician" id="applyfor05"><label for="applyfor05">HVAC, Asbestos, mold Technician </label></td>
		            		<td class="tright"><input type="radio" name="applyfor" value="Other" id="applyfor06"><label for="applyfor06">Other </label></td>
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
		            			<input type="radio" name="availability" value="Full time" id="availability01"><label for="availability01">Full time</label>
		            			<input type="radio" name="availability" value="Part-time" id="availability02"><label for="availability02">Part-time</label>
		            			<input type="radio" name="availability" value="Weekends" id="availability03"><label for="availability03">Weekends</label>
		            			<input type="radio" name="availability" value="sub contracts / affiliate" id="availability04"><label for="availability04">sub contracts / affiliate</label>
		            			</div>
		            			</td>
		            	</tr>
		            	<tr>
		            		<td><div for="when" class="q01">When are you available to start work?</div>
		            			<div class="a01">
		            			<input type="text" name="when" value="" class="" /> </div></td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div for="experience" class="q01">Years of experience?</div>
		            			<div class="a01">
		            			<input type="text" name="experience" value="" class="" /> </div>
		            			</td>
		            	</tr>
		            	<tr>
		            		<td>
		            			<div for="transportation" class="q01">Do you have transportation?</div>
		            			<div class="a01">
		            			<input type="text" name="transportation" value="" class="" /> </div></td>
		            	</tr>
		            </table>
		          </div>
		          
		          <div class="h_20"></div>
	            <h4 class="header-3">Resume</h4>
	            <div class="resume">
		            <table class="contents03">
		            	<tr>
		            		<td>
				            	<div class="q01">Please upload your resume here: only pdf or word format is accepted.</div>
					            <div class="a01"><input type="file" name="userfile1" value="upload resume"></div>
		            		</td>
		            	</tr>
		          	</table>
	          	</div>
		          <div class="h_10"></div>
							<div id="message" class="q01"></div>
		          <div class="h_20"></div>
		          <div class="button_c">
			         <input type='button' id='login' tabindex='3' value='로그인' style='height:50px'/>
			        </div>
		          <div class="h_100"></div>
		          
		          </div>
						</form>
            </section>
        </div>
    	
    	
    	
    	
    </div>
</div>
<?php include $url_s_footer ?>
