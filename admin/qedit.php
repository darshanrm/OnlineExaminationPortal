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
if(!empty($_POST['qid']))
{
	$name=$_POST['qid'];
}
$que=$_POST['qd'];
$a1=$_POST['ans1'];
$a2=$_POST['ans2'];
$a3=$_POST['ans3'];
$a4=$_POST['ans4'];
$ta=$_POST['true_ans'];
echo "<h2 align=center> <font color='green'>You have successfully Updated the Question</font></h2>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Question:</b>" .$que. "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> Option A:</b>" .$a1. "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> Option B:</b>" .$a2. "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> Option C :</b>" .$a3. "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> Option D :</b>" .$a4. "<br>";
echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> True Answer :</b>" .$ta. "<br>";

mysql_query("update mst_question set que_desc='$que', ans1='$a1', ans2='$a2', ans3='$a3', ans4='$a4', true_ans='$ta' where que_id=$name",$cn) or die(mysql_error());
?>