<?php

$conn=mysqli_connect("localhost","root","");
if(!$conn)
    {
    	die(mysqli_error());
  }
  mysqli_select_db($conn,"olympics");
// Check $username and $password 

if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}

// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password'];


// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);

$sql="SELECT * FROM admin WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows( $result );
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    //echo "Success! $count";
    session_start();
                $the_username = "root";
                $_SESSION['username'] = $the_username; 
	header("Location: ./addathelete.php"); /* Redirect browser */
exit();

} else {
	echo $count;
    echo "Unsuccessful!";
	header("Location:index.html");
}

?>