<?php
error_reporting(0);
ob_start();
session_start();
if (isset($_SESSION['user'])!="" ) {
      header("Location: ./index.php");
exit();
}
$error = false;

if( isset($_POST['btn-login']) ) { 

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
	$password = hash('sha256', stripslashes($password));

	$conn=mysqli_connect("localhost","root","");
	if(!$conn)
    {
    	die(mysqli_error());
  	}
  	mysqli_select_db($conn,"olympics");
	
	$sql="SELECT userId, name, password FROM user WHERE username='$username'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
   //$count = mysqli_num_rows($res); 
   
   if( $result == 1 && $row['password']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: index.php");
   } else {
    $errMSG = "<p style='color:red;font-size:30px;'>Incorrect Credentials, Try again...</p>";
   }
}
?>
<html>
<style>
.image{
height :auto;
width:100%;
}
.login { 
	position: absolute;
	top: 40%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	
}
button {
 position : relative;
 left: 8em;
background-color: red;
  -moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border: 2px solid ff0000;
  padding: 5px;
}

</style>

<body>
<img class="image" src="img/usr3.jpg"> 
 <div class="login">
 <form id="f2orm1" name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
 	<?php
  if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>

	<h1> User Login</h1>
    	<input type="text"  name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" name="btn-login">Log in</button>
    </form>
</div>
</body>
</html>
<?php ob_end_flush(); ?>