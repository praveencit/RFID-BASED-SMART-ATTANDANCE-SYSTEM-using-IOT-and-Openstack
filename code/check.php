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
	$query = "select * from register where id = $id";
	
	
    $res = mysql_query($query, $conn);
    
	$num = mysql_num_rows($res);
	if($num==0)
		echo "NOT registered";
	else
	{
		$query1= "insert into attendance values('$id','$time')";
		 $res1 = mysql_query($query1, $conn);
		$row=mysql_fetch_row($res);
		echo "Name:".$row[0]." ".$row[1]."<br/>";
		//echo date('l jS h:i:s A');
	}

?>

