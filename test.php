<?php
$conn=mysqli_connect('localhost','root','','project');
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
?>