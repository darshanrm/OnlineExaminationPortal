<?php
session_start();
require("../database.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_SESSION);
$rs=mysql_query("select u.username,u.enrollment,r.test_id,r.score from mst_user u, mst_result r where u.login=r.login",$cn) or die(mysql_error());
echo "<h1 class=head1 align=center> Result </h1>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=200><b>Student Name</b><td><b>Enrollment Number </b><td><b> Test ID</b><td> <b>Score</b>";

while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2] <td align=center> $row[3]";
}

echo "</table>";
?>
</body>
</html>
