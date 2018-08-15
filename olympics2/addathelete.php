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

<h1 class="i">  ADD ATHLETE INFORMATION </h1> 
<div class="image">
<table class="a" height="300" width="400" >
<form id="form1" name="form1" method="post" action="addplayer.php">
 <tr>
 <td><font face="algerian" size="5" color="red">Name</font> </td>
 <td><input type="text" name="a_name" required /> </td>
</tr> 
<tr> 
 <td><font face="algerian" size="5" color="red">Date Of Birth </font></td>
 <td><input type="date" name="a_dob" required /> </td> 
 </tr>
 <tr>
 <td> <font face="algerian" size="5" color="red"> Gender </font> </td>
 <td><input type="text" name="a_gender" required /> </td>
</tr>

<tr>
 <td><font face="algerian" size="5" color="red"> Country code</font> </td>
 <td><input type="text" name="ccode" required /> </td> 
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