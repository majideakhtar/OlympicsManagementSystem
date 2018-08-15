<?php
ob_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
    {
    	die(mysqli_error());
  }
  mysqli_select_db($conn,"olympics");
// Check $username and $password 

if(empty($_POST['r_year']))
{
    echo "Athelete name cannot be empty";
    return false;
}
if(empty($_POST['r_sport']))
{
    echo "Date of birth cannot be empty";
    return false;
}

if(empty($_POST['r_medal']))
{
    echo "Please specify Gender";
    return false;
}
if(empty($_POST['r_athlete']))
{
    echo "Please specify country";
    return false;
}
// Define $username and $password 
$r_year=stripslashes($_POST['r_year']); 
$r_sport=stripslashes($_POST['r_sport']);
$r_medal=stripslashes($_POST['r_medal']); 
$r_athlete=stripslashes($_POST['r_athlete']);
$sql="INSERT INTO result(year,sports_name,medal_type,athlete_name) VALUES('$r_year','$r_sport','$r_medal','$r_athlete')";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
// If result matched $username and $password, table row must be 1 row
if ($result==1) {
	header("Location: result.php"); /* Redirect browser */
exit();

} else {
	echo $count;
    echo "Unsuccessful!";
	header("Location:index.html");
}

?>