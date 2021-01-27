<html>
<head>
	<style>
	body {
		background-color: black;
		text-align: left;
	}
	p {
		margin-top: 20vh;
		margin-left: 40px;
		color: white;
		font-size: 56px;
	}
	</style> 
</head>
<body>
	<p>
		<?php
			date_default_timezone_set("Asia/Calcutta");
			echo date("h:i:s:A");
		?>
	</p>
</body>
</html>