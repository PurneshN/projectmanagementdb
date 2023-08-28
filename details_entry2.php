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
	 $tid = $_POST['tid'];
	 $nop = $_POST['nop'];
	 $cid = $_POST['cid'];
	 $usn1 = $_POST['usn1'];
	 $usn2 = $_POST['usn2'];
	 $usn3 = $_POST['usn3'];

	 $sql_query = "INSERT INTO team (tid,nop,cid)
	 VALUES ('$tid','$nop','$cid')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
	 	echo "1New Details Entry inserted successfully !\n";
	 	$sql_query = "INSERT INTO team_mem (tid,usn)
	 	VALUES ('$tid','$usn1')";
	 	if (mysqli_query($conn, $sql_query)) 
	 	{
		echo "2New Details Entry inserted successfully !\n";
	 	}
	 	else
     	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 	}
	 	$sql_query = "INSERT INTO team_mem (tid,usn)
	 	VALUES ('$tid','$usn2')";
	 	if (mysqli_query($conn, $sql_query)) 
	 	{
		echo "3New Details Entry inserted successfully !\n";
	 	}
	 	else
     	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 	}
	 	$sql_query = "INSERT INTO team_mem (tid,usn)
	 	VALUES ('$tid','$usn3')";
	 	if (mysqli_query($conn, $sql_query)) 
	 	{
		echo "4New Details Entry inserted successfully !\n";
	 	}
	 	else
     	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 	}
	 }
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }


	 	

	 mysqli_close($conn);
}
?>