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
if(!empty($_POST['name']))
{
	$name=$_POST['name'];
}

$sh=mysql_query("Delete from mst_question where que_id=$name",$cn) or die(mysql_error());

$row=mysql_fetch_array($sh);
echo "<h2 align=center> <font color='green'>Question Deleted Successfully</font></h2>";
?>