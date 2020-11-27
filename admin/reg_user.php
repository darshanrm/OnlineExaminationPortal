<?php
session_start();
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
include("C:\wamp\www\Online_exam_New\database.php");
extract($_SESSION);
echo "<BR><h3 align=center class=head1>Registered Users</h3>";
$rs=mysql_query("select * from mst_user",$cn) or die(mysql_error());
echo "<table border=1 align=center><h3><tr class=style2><td width=100><b>User ID </b><td> <b>Login ID </b><td> <b>Password </b><td> <b>Username</b> <td> <b>Enrollment No.</b> <td><b> Course Code </b><td> <b>Roll No. </b><td> <b>Address </b><td> <b>City </b><td><b> Phone Number</b><td><b> Email</b></h3>";
while($row=mysql_fetch_array($rs))
{
	echo "<tr class=style8><td>$row[0]<td align=center> $row[1] <td align=center> $row[2] <td align=center> $row[3] <td align=center> $row[4] <td align=center> $row[5] <td align=center> $row[6] <td align=center> $row[7] <td align=center> $row[8] <td align=center> $row[9] <td align=center> $row[10] ";
}
echo "</table>";
?>
</body>
</html>
