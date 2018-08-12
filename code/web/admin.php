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
		else{
	mysql_select_db('project');
	
	$query = "select * from admin where uname ='$myusername' and password ='$mypassword'";

	$res = mysql_query($query, $conn);
	$num = mysql_num_rows($res);
	if($num==0)
	 {


  echo '<script language="javascript">';
  echo 'if(alert("Enter correct username and password"))
              header(admin_login.html)';  //not showing an alert box.
  echo '</script>';
  exit;
}

	else{
		header("location: reg.html");
	}
	}

?>

