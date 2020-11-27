<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
extract($_POST);

echo "<BR>";
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<html>
<body>
<form name="form" align="center" action="tdel.php" method="post">
Enter the Test Name you  want to Delete:<input type="text" name="name" id="name"><br><br><br>
<input type="submit" value="Delete" name="submit">
</form>
</body>
</html>