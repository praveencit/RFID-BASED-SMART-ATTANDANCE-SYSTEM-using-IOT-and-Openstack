<?php

    $fname = $_POST['fname'];    
    $lname = $_POST['lname'];
    $branch= $_POST['branch'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sem  = $_POST['sem'];
  $id  = $_POST['id'];
    $address = $_POST['address'];


	if($fname!=' '&& $lname != ' ' &&$branch!= ' '&&$email!= ' ' && $phone!= ' ' && $sem!= ' ' && $id!= ' ' && $adress!= ' '){

		$username="root";
		$password="@jaya123";
		$host="localhost";
		$db=mysql_connect($host,$username,$password);
		$selected=mysql_select_db('project',$db);
    
     	$i = "insert into register(fname,lname,branch, email, phone,sem,id, address) values (' $fname ',' $lname ','$branch',' $email ','$phone','$sem','$id','$address')";
     	$result=mysql_query($i);
     	


     //	echo "Registerd succesfully <br> thank you !!";
     $num = mysql_num_rows($result);
  if($num==0)
   {
       $message = "Registration successful";
echo "<script type='text/javascript'>alert('$message');</script>";


 	} else {
        $message = "Registration unsuccessful";
echo "<script type='text/javascript'>alert('$message');</script>";
 	} 
 	}  
?>
