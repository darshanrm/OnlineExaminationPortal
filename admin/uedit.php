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
<?php
if(!empty($_POST['uid']))
{
	$name=$_POST['uid'];
}

$password=$_POST['pass'];
mysql_query("update mst_user set pass='$password' where user_id=$name",$cn) or die(mysql_error());
echo "<h2 align=center> <font color='green'>Password  has been Changed  Successfully</font></h2>";
echo  "<h3> Updated Password is :</h3> <font color='red'>".$password. "</font>";
?>