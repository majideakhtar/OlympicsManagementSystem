<?php
ob_start();
$conn=mysqli_connect("localhost","root","");
if(!$conn)
    {
    	die(mysqli_error());
  }
  mysqli_select_db($conn,"olympics");
// Check $username and $password 

if(empty($_POST['s_date']))
{
    echo "Athelete name cannot be empty";
    return false;
}
if(empty($_POST['s_time']))
{
    echo "Date of birth cannot be empty";
    return false;
}

if(empty($_POST['s_venue']))
{
    echo "Please specify Gender";
    return false;
}
if(empty($_POST['s_sport']))
{
    echo "Please specify country";
    return false;
}
// Define $username and $password 
$s_date=stripslashes($_POST['s_date']); 
$s_time=stripslashes($_POST['s_time']);
$s_venue=stripslashes($_POST['s_venue']); 
$s_sport=stripslashes($_POST['s_sport']);
$sql="INSERT INTO schedule(date,time,venue,sports_name) VALUES('$s_date','$s_time','$s_venue','$s_sport')";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
// If result matched $username and $password, table row must be 1 row
print_r($result);
if ($result==1) {
    echo "Success! ";
	header("Location: schedule.php"); /* Redirect browser */
    exit();

} else {
	echo $count;
    echo "Unsuccessful!";
	header("Location:index.html");
}

?>