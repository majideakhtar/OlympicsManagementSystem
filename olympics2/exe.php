<!DOCTYPE html>
<html>
<head>
	<title>olympics</title>
</head>
<body>
    <?php include 'header.php';?>
	<div class="cont">
		<?php
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
    
    	echo 'not connected';
  }
  mysqli_select_db($conn,"olympics");
  $athletes=mysqli_query($conn,"select * from athlete");
  echo "<table border='0' cellspacing='0' cellpadding='0'><tbody><tr><th>Athlete Name</th><th>Athlete Birthdate</th><th>Athlete Gender</th><th>Athlete Country</th></tr>";
 if( mysqli_num_rows( $athletes )==0 ){
        echo '<tr><td colspan="4">No Player</td></tr>';
      }else
        while( $row = mysqli_fetch_array ( $athletes ) ){
          echo "<tr><td>{$row['athlete_name']}</td><td>{$row['athlete_dob']}</td><td>{$row['athlete_gender']}</td><td>{$row['country_code']}</td></tr>";
        }
        
    echo "</tbody></table>";
// 3. fetch players from players table
// 4. Iterate through array and print player details - (for loop, while loop)
		?>
	</div>
</body>
</html>