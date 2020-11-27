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

$sh=mysql_query("select * from mst_user where user_id=$name ");
$row=mysql_fetch_array($sh);
?>
<html>
<body>
<form name=form1 align=center action=uedit.php method=post>
<b>User id:</b> &nbsp&nbsp<?php echo $name;?><br><br>
<b>Password :</b><input name=pass id=pass type=text value="<?php echo $row['pass']?>"><br><br>
<input type=submit name=submit value=Save >
</form>
</body>
</html>
