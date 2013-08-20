<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
echo "<br>";
echo file_get_contents( "header.html" );
$page=$_GET["page"];
echo "<body><div id='container'>";
switch($page){
	case "home":
		include("main.html");
		break; 
	case "picture":
		echo "<center><h1>Click on any image!</h1><br><br>";
		for($i=1; $i<=36; $i++)
		{
			$tn="pictures/tn_".$i.".jpg";
			$link="showimage.php?id=";
			echo "<a href=".$link.$i."><img style='border:1px solid black' height='100' src=".$tn."></a>";
			echo " ";
		}
		echo "</center></div>";
		break; 
	case "activities":
		include("activities.html");
		break;

	case "information":
		include("information.html");
		break;
		
	case "contact":
		echo "<h1>Contact Information</h1><br>";
		echo "<p><b>Address:</b> 2024 S. Bayshore Drive, Milton DE<br><b>Email:</b> debayhouse@gmail.com</p><br>";
		echo "<img src='pictures/13.jpg' style='border:1px solid black'";
		break; 
	case "reserve":
		echo "<h1>Click <a href='http://www.vrbo.com/411473' target='Rentals'>here</a> to go to our realty site!</h1><br>";
		echo "<a href='http://www.vrbo.com/411473' target='Rentals'><img src='pictures/36.jpg' style='border:1px solid black'></a>";
		break;
	case "feedback":
		echo "<h1>Send us your feedback!</h1><br>";
		include("sendFeedback.php"); 
		break;
	default:
		echo "<a href='index.php?page=home'><br><h1>Click on the picture to continue!</center><br><br><img width='600' style='border:2px solid black' src='pictures/welcome2.jpg'></div></h1></a>";	
		break;	
}
echo "</body></div>";
echo "<h6><center>Copyright &copy; 2013 Grant Griffiths</center></h6><br><br>";
?>