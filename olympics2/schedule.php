<!DOCTYPE html>
<html>
<head>
    <title></title>
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
  $schedules=mysqli_query($conn,"select * from schedule");
  if (isset($_SESSION['username'])) {
        echo "<table border='0' cellspacing='0' cellpadding='0'><tbody><tr><th>Schedule Date</th><th>Schedule Time</th><th>Schedule Venue</th><th>Schedule Sport</th><th></th></tr>";
    } else {
echo "<table border='0' cellspacing='0' cellpadding='0'><tbody><tr><th>Schedule Date</th><th>Schedule Time</th><th>Schedule Venue</th><th>Schedule Sport</th></tr>";
    }

        if(mysqli_num_rows($schedules)==0){
            echo'<tr><td colspan="4">NO SCHEDULE</td></tr>';
        }
        else
            while ($row=mysqli_fetch_array($schedules)) {
                if (isset($_SESSION['username'])) {
                echo"<tr><td>{$row['date']}</td><td>{$row['time']}</td><td>{$row['venue']}</td><td>{$row['sports_name']}</td><td onclick='deleteSchedule({$row['schedule_id']})'>Delete</td></tr>";
            } else{
echo"<tr><td>{$row['date']}</td><td>{$row['time']}</td><td>{$row['venue']}</td><td>{$row['sports_name']}</td></tr>";
            }
            }
        echo "</tbody></table>";
  ?>
</body>
</html>
