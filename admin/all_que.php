<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
echo "<br />";
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Questions </h3>";
$rs=mysql_query("select test_id,que_id,que_desc,ans1,ans2,ans3,ans4,true_ans from mst_question",$cn) or die(mysql_error());
$a=1;
while($row=mysql_fetch_array($rs))
{
	echo "<br/>";
	echo "&nbsp<b>Test ID:</b>&nbsp&nbsp";
	echo $row['test_id']."<br>";
	echo "&nbsp<b>Question  ID:</b>&nbsp&nbsp";
	echo $row['que_id']."<br>";
	echo 
	"&nbsp<b>Question $a:</b>&nbsp&nbsp ";
	echo $row['que_desc']."<br>";
	echo "&nbsp<b>OptionA:</b>&nbsp&nbsp";
	echo $row['ans1']."<br>";
	echo "&nbsp<b>Option B:</b>&nbsp&nbsp";
	echo $row['ans2']."<br>";
	echo "&nbsp<b>Option C:</b>&nbsp&nbsp";
	echo $row['ans3']."<br>";
	echo "&nbsp<b>Option D:</b>&nbsp&nbsp";
	echo $row['ans4']."<br>";
	echo "&nbsp<b>True Answer:</b>&nbsp&nbsp";
	echo $row['true_ans']."<br>";
	$b=$row['que_id'];
	$a++;

}
?>