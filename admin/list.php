<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<html>
<body>
<?php
extract($_POST);

echo "<BR>";
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
$query1=mysql_query("select test_id,que_desc,ans1,ans2,ans3,ans4,true_ans from mst_question");
echo "<table><tr><td>Test ID</td><td>Question</td><td>Option A</td><td>Option B</td><td>Option C</td><td>Option D</td><td>True Answer</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
	echo "<tr><td>".$query2['test_id']."</td>";
	echo "<tr><td>".$query2['que_desc']."</td>";
	echo "<tr><td>".$query2['ans1']."</td>";
	echo "<tr><td>".$query2['ans2']."</td>";
	echo "<tr><td>".$query2['ans3']."</td>";
	echo "<tr><td>".$query2['ans4']."</td>";
	echo "<tr><td>".$query2['true_ans']."</td>";
	echo "<td><a href='edit.php?id=".$query2['test_id'].">Edit</a></td>";
	echo "<td><a href='delete.php?id=".$query2['test_id'].">Delete</a></td>";
}
?>
</ol>
</table>
</body>
</html>