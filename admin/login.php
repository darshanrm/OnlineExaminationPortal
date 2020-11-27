<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">Welcome to Admistrative Area </p>
<div style="margin:auto;width:90%;height:700px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><a href="subadd.php"><h3>Add Subject</h3></a></p>
<p class="style7"><a href="testadd.php"><h3>Add Test</h3></a></p>
<p class="style7"><a href="questionadd.php"><h3>Add Question</h3></a></p>
<p class="style7"><a href="all_que.php"><h3>All Questions</h3></a></p>
<p class="style7"><a href="editlab.php"><h3>Edit Question</h3></a></p>
<p class="style7"><a href="dellab.php"><h3>Remove Question </h3></a></p>
<p class="style7"><a href="deltlab.php"><h3>Remove Test</h3></a></p>
<p class="style7"><a href="delslab.php"><h3>Remove Subject</h3></a></p>
<p class="style7"><a href="result2.php"><h3>Results</h3></a></p>
<p class="style7"><a href="alluser.php"><h3>Users</h3></a></p>
<p align="center" class="head1">&nbsp;</p>

</div>
</div>
</body>
</html>
