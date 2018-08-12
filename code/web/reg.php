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
		mysql_select_db('project');
    
     	$i = "insert into register(fname,lname,branch, email, phone,sem,id, address) values (' $fname ',' $lname ','$branch',' $email ','$phone','$sem','$id','$address')";
     	$result=mysql_query($i,$db);
     	


     //	echo "Registerd succesfully <br> thank you !!";
     
  if(!isset($result))
   {
       $message = "Registration unsuccesful";
         echo "<script type='text/javascript'>alert('$message');</script>";
 
 	   } else {
        $message = "Registration successful";
        echo "<script type='text/javascript'>alert('$message');</script>";

 	} 
 	}  
?>
