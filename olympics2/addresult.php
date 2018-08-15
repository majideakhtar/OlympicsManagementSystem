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

<h1 class="i">  ADD RESULT INFORMATION </h1> 
<div class="image">
<table class="a" height="300" width="400" >
<form id="form1" name="form1" method="post" action="addRes.php">
 <tr>
 <td><font face="algerian" size="5" color="red">Year</font> </td>
 <td><input type="text" name="r_year" required /> </td>
</tr> 
<tr> 
 <td><font face="algerian" size="5" color="red">Sport </font></td>
 <td><input type="text" name="r_sport" required /> </td> 
 </tr>
 <tr>
 <td> <font face="algerian" size="5" color="red"> Medal </font> </td>
 <td><input type="text" name="r_medal" required /> </td>
</tr>

<tr>
 <td><font face="algerian" size="5" color="red"> Athlete</font> </td>
 <td><input type="text" name="r_athlete" required /> </td> 
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