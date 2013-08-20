<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
	
	echo file_get_contents( "header.html" );
	echo "<div style='height:0px'><br></div>";
	
	echo "<center>";
	echo "<div id='container'>";
	
	$id=$_GET["id"];
	echo "<h1 id='img'>Image #".$id."</h1><br>";
	$nextid=$id+1;
	$previd=$id-1;
	$next="showimage.php?id=".$nextid;
	$previous="showimage.php?id=".$previd;
		
	if($id>1)
	{
		echo "<a href=".$previous."#img><< Previous "."</a>";
	}
	else
	{
	
	}
	echo " - ";	
	if($id<36)
	{
		echo "<a href=".$next."#img> Next >>"."</a>";
	}
	else
	{
		
	}
	echo "<div style='height:5px'><br></div>";
	$file="pictures/".$id.".jpg";
	echo "<a href=".$next."#img><img style='border:1px solid black' src=".$file.">";
		
	echo "</center>";
	echo "</div>"
?>

</html>