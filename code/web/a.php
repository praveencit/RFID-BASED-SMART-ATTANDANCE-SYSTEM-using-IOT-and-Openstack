<?php
	$myusername = $_POST['uname'];
	$mypassword = $_POST['pwd'];

	$server = "localhost";
	$usr = "root";
	$pwd = "@jaya123";

	$conn = mysql_connect($server, $usr, $pwd);

	if(!$conn) {
		die("connection failed");
	}
		
	mysql_select_db('project');
	
	$query = "select * from register";

	$res = mysql_query($query, $conn);
	$num = mysql_num_rows($res);
	echo "$num";

?>

