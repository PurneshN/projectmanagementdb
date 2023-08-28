<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="project";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	 
	 $pid = $_POST['pid'];
	 $tid = $_POST['tid'];
	 $cid = $_POST['cid'];
	 $fid = $_POST['fid'];
	 $pt = $_POST['ptitle'];

	 $sql_query = "INSERT INTO project (pid,tid,cid,fid,title)
	 VALUES ('$pid','$tid','$cid','$fid','$pt')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>