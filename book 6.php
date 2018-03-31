<?php
 require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>*******</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body>
	 <form class="myform" action="book 6.php" method="post">
	   
	   <label><b>First Name</label>
	   <input name="firstname" type="text" class="inputvalues" placeholder="Type your First Name " required/><br>
	   
	   <label><b>Last Name</label>
	   <input name="lastname" type="text" class="inputvalues" placeholder="Type your Last Name" required/><br>
	   
         <label><b>National Id Number</label>
	   <input name="nic" type="text" class="inputvalues" placeholder="Type your National Id Number" required/><br>
	 
       <label><b>Email</label>
	   <input name="email" type="text" class="inputvalues" placeholder="Type your Email" required/><br>
	 
       <label><b>Phone Number</label>
	   <input name="phone" type="text" class="inputvalues" placeholder="Type your Phone Number" required/><br><br>
	 	 

	   <input name="login" type="submit" id="login_btn" value="Login"/>
	 
	 </form>
	 
	 <?php
	   if(isset($_POST['login']))
	   {
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$nic=$_POST['nic'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			
			$query2="select * from customer WHERE seatno='6'";
			$query_run=mysqli_query($con,$query2);
			
              if(mysqli_num_rows($query_run)>0){
			  echo '<script type="text/javascript">alert("Seat Already Booked")</script>';
			  }
              else
			  {
			  $query="INSERT INTO customer(seatno,firstname,lastname,nic,email,phone) VALUES ('6','$firstname','$lastname','$nic','$email','$phone')";
			  mysqli_query($con,$query);	 
			 } 

	   }		
	 ?>
</body> 	 
</html>
