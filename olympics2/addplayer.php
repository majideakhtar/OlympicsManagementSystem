<?php
ob_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
    {
    	die(mysqli_error());
  }
  mysqli_select_db($conn,"olympics");
// Check $username and $password 

if(empty($_POST['a_name']))
{
    echo "Athelete name cannot be empty";
    return false;
}
if(empty($_POST['a_dob']))
{
    echo "Date of birth cannot be empty";
    return false;
}

if(empty($_POST['a_gender']))
{
    echo "Please specify Gender";
    return false;
}
if(empty($_POST['ccode']))
{
    echo "Please specify country";
    return false;
}
// Define $username and $password 
$a_name=stripslashes($_POST['a_name']); 
$a_dob=stripslashes($_POST['a_dob']);
$a_gender=stripslashes($_POST['a_gender']); 
$ccode=stripslashes($_POST['ccode']);
$sql="INSERT INTO athlete(athlete_name,athlete_dob,athlete_gender,country_code) VALUES('$a_name','$a_dob','$a_gender','$ccode')";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
// If result matched $username and $password, table row must be 1 row
if ($result == 1) {
header("Location: ./players.php");
exit();

	// header("Location: players.php"); /* Redirect browser */
 //    die();
} else {
    echo "Unsuccessful!";
	header("Location:index.php");
}

?>