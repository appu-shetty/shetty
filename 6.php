
<?php
	echo "<h1> VISITOR COUNTER </h1>";
	$file = "count.txt";
	$c = file_get_contents($file);
	file_put_contents($file,$c+1);
	echo "<p> The number of users visited: ".$c;
	echo "</p>";
?>
<!-- <html>
	<head>
		<title>Visitor Count Program</title>
		<style>
			h1{
				color:blue;
				font-size:24px;
				text-decoration-line: underline;
				text-decoration-color: red;
			}
			p{
				color:green;
				font-size:14px;
			}
		</style>
	</head>
</html> 
-->