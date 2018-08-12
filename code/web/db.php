<?php
	$id = $_POST['id'];
	$time = $_POST['time'];

	$server = "localhost";
	$usr = "root";
	$pwd = "@jaya123";

	$conn = mysql_connect($server, $usr, $pwd);

	if(!$conn) {
		die("connection failed");
	}
		
	mysql_select_db('project');
	
	$query = "insert into info1 values('$id','$time')";

	$res = mysql_query($query, $conn);
?>
