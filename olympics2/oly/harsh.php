<?php
$con = @mysql_connect('localhost','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

@mysql_select_db("athlete", $con);

$sql= "INSERT INTO ath(a_idd,a_name,a_dob,a_gender,ccode)
VALUES
('$_POST[a_idd]','$_POST[a_name]','$_POST[a_dob]','$_POST[a_gender]','$_POST[ccode]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("Location: abcdef.html ");
  exit;
 mysql_close($con);
//echo "1 record added";


?> 