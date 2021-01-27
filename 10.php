<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weblab05";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("Connection failed:".mysqli_connect_error());
	}
	$sql = "SELECT * FROM student1";
	$result = $conn -> query($sql);
	$usn = array();
	echo "<table border = '2'><caption>Before Sorting: </caption><br>";
	echo "<tr><th>USN</th><th>NAME</th><th>MARKS</th></tr>";
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			echo "<tr><td>".$row["USN"]."</td>";
			echo "<td>".$row["NAME"]."</td>";
			echo "<td>".$row["MARKS"]."</td></tr>";
			$usn[] = $row["USN"];
		}
	}
	$n = sizeof($usn);
	for($i=0; $i<$n-1; $i++)
	{
		$pos = $i;
		for($j=$i+1; $j<$n; $j++)
		{
			if($usn[$pos] > $usn[$j])
			{
				$pos = $j;
			}
		}
		if($pos != $i)
		{
			$temp = $usn[$i];
			$usn[$i] = $usn[$pos];
			$usn[$pos]  = $temp;
		}
	}
	$name = [];
	$marks = [];
	$result = $conn -> query($sql);
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			for($i=0; $i<$n; $i++)
			{
				if($row["USN"] == $usn[$i])
				{
					$name[$i] = $row["NAME"];
					$marks[$i] = $row["MARKS"];
				}
			}
		}
	}
	echo "<br><table border = '2'><caption>After Sorting: </caption><br>";
	echo "<tr><th>USN</th><th>NAME</th><th>MARKS</th></tr>";
	for($i=0; $i<sizeof($usn); $i++)
	{
		echo "<tr><td>".$usn[$i]."</td>";
		echo "<td>".$name[$i]."</td>";
		echo "<td>".$marks[$i]."</td></tr>";
	}
?>

					