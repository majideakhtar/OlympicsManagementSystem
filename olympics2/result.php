<!DOCTYPE html>
<html>
<head>
    <title>Olympics Management System</title>
</head>
<body>
    <?php include 'header.php';?>
    <div class="cont">
        <?php
    $conn=mysqli_connect("localhost","root","");
    if(!$conn) {
        echo 'not connected';
    }
    session_start();
  mysqli_select_db($conn,"olympics");
  $Results=mysqli_query($conn,"select * from result");

        if (isset($_SESSION['username'])) {
        echo "<table border='0' cellspacing='0' cellpadding='0'><tbody><tr><th>Result Year</th><th>Result Sport</th><th>Medal</th><th>Athelete</th><th></th></tr>";
        } else {
            echo "<table border='0' cellspacing='0' cellpadding='0'><tbody><tr><th>Result Year</th><th>Result Sport</th><th>Medal</th><th>Athelete</th></tr>";
        }
        if(mysqli_num_rows($Results)==0){
            echo'<tr><td colspan="4">NO RESULT</td></tr>';
        }
        else
            while ($row=mysqli_fetch_array($Results)) {
                if (isset($_SESSION['username'])) {
                echo"<tr><td>{$row['year']}</td><td>{$row['sports_name']}</td><td>{$row['medal_type']}</td><td>{$row['athlete_name']}</td><td onclick='deleteResult({$row['result_id']})'>Delete</td></tr>";
                } else {
                    echo"<tr><td>{$row['year']}</td><td>{$row['sports_name']}</td><td>{$row['medal_type']}</td><td>{$row['athlete_name']}</td></tr>";
                }
            }
            echo "</tbody></table>";
  ?>
</body>
</html>
