<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
if(isset($_SESSION[login]))
{
	include("../database.php");
	echo "<h1 align=center>".STUDENTS."</h1>";
	echo "<table border=1 align=center>";
echo "<td>".$_SESSION['login'];
echo "</table>";
}

else 
{
	echo "<BR><BR><BR><BR><div class=head1> No one is Online <div>";
		exit;
}
?>
