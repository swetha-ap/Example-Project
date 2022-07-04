<!DOCTYPE html>
<html>

<head>
	<title>
		jQuery html() Method
	</title>
		
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
</head>
	
<body style = "text-align:center;">
			
	<h1 style = "color:green;" >
		GeeksForGeeks
	</h1>
	
	<h2>
		jQuery | html() Method
	</h2>
	
	<button>Click</button>
	
	<!-- Script to set the content -->
	<script>
		$(document).ready(function() {
			$("button").click(function() {
				// $("h2").html(function(n) {
				// 	return "jQuery | html() Method"
				// 			+ " has index: " + n;
				// });
             alert($("h2").html());
			});
		});
	</script>
</body>
</html>
