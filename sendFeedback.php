<?php

    
      
	 if ($_POST['submit'])
	 {
		 $name = $_POST['name'];
		 $message = $_POST['message'];
		 
		 if($name&&$message) //existence check
		 {
			 if(strlen($name)<=20&&strlen($message)<=10000) // length check
			 {
				// ready to go
				 
				//set SMTP  
				ini_set("SMTP", "ghs.google.com");
				 
				$today = date("F j, Y, g:i a"); 
				$to = "debayhouse@gmail.com";
				$subject = "Feedback ". $today;
				$headers = "From: debayhouse@gmail.com";
				
				$body = "This is an email from $name\n\n$message";
				
				mail($to, $subject, $body, $headers);
				 
				die("Message successfully sent. Your feedback is greatly appreciated.");
			 }
			 else
			 {
				 die("Name field cannot exceed 20 characters<br>Feedback field cannot exceed 10,000 characters.");
			 }
		 }
		 else
		 	die("You must enter your first name and feedback.");
		 echo $name." ".$message;
	 }
?>

<html>
	<form action='http://debayhouse.com/index.php?page=feedback' method='POST'>
    <p>
    	First Name: <input type='text' name='name' maxlength='20'><br><br>
        Enter Feedback: <br><textarea cols='60' rows='10' name='message'></textarea>
        <input type='submit' name='submit' value='Send Feedback'>
    <br>
    </p>
    </form>

</html>
