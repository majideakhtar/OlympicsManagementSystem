<?php
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
      header("Location: ./hvindex.html"); /* Redirect browser */
exit();
}
?>
<html>
<body >
<?php include 'adminheader.html';?>

<h1 class="i">  ADD SCHEDULE INFORMATION </h1> 
<div class="image">
<table class="a" height="300" width="400" >
<form id="form1" name="form1" method="post" action="addsche.php">
 <tr>
 <td><font face="algerian" size="5" color="red">Date</font> </td>
 <td><input type="date" name="s_date" required /> </td>
</tr> 
<tr> 
 <td><font face="algerian" size="5" color="red">Time </font></td>
 <td><input type="test" name="s_time" placeholder="hh:mm:ss" required /></td> 
 </tr>
 <tr>
 <td> <font face="algerian" size="5" color="red"> Venue </font> </td>
 <td><input type="text" name="s_venue" required /> </td>
</tr>

<tr>
 <td><font face="algerian" size="5" color="red"> Sport</font> </td>
 <td><input type="text" name="s_sport" required /> </td> 
 </tr>

<tr>
 
<td> <input class="button" type="submit" name="Submit" value="ADD" />
  </td>
  </tr>
  </form>
  </table>
   </div>
</body>
</html>