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
	 $usn = $_POST['usn'];
	 $name = $_POST['name'];
	 $dob = $_POST['dob'];
	 $gender = $_POST['gender'];
	 $dept = $_POST['dept'];

	 $sql_query = "INSERT INTO student (usn,sname,dob,gender,deptid)
	 VALUES ('$usn','$name','$dob','$gender','$dept')";

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