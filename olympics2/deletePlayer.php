<?php
$id = $_POST['id'];
$sql="DELETE FROM athlete WHERE athlete_id='$id'";
echo $id;
echo $sql;
$conn=mysqli_connect("localhost","root","");
	if(!$conn){
    		die(mysqli_error());
  	}
  	mysqli_select_db($conn,"olympics");
	$result=mysqli_query($conn,$sql);
	//$row=mysqli_fetch_array($result);
	   //$count = mysqli_num_rows($res); 
	print_r($result);   
	   if( $result == 1 ) {
	    header("Location: player.php");
	   } else {
	    $errMSG = "No User";
	   }
?>
