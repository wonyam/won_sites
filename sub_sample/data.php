<script type=”text/javascript” src=”//code.jquery.com/jquery-1.11.1.min.js”></script>

<script type=”text/javascript”>

$(document).ready(function() {

	$.ajax({

		url : "http://demo.mozaiccreative.ca/kapstone_careers/test.php",

		data : {

			"val" : 1

		},

		crossDomain: true,

		dataType : "jsonp",

		jsonp : "callback",

		jsonpCallback: "myCallback",

		success: function(data) {
			alert(data);

			if(setData != null){

			 	console.log(setData.result);

			}

		}

	});

	console.log("test");

});

</script>
aaa