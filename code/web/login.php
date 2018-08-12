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
	
	$query = "select *from student where sname ='$myusername' and pwd ='$mypassword'";

	$res = mysql_query($query, $conn);
	$num = mysql_num_rows($res);
	if($num==0)
	 {
header("location:student_chart.html");
  
}

	else
	{
		//header("location: chart.html");
		header("location:student_chart.html");
		
	}

?>

