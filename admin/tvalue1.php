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

$sh=mysql_query("select * from mst_question where que_id=$name ");
$row=mysql_fetch_array($sh);
?>
<html>
<body>
<form name=form1 align=center action=qedit.php method=post>
<b>Question ID:</b>&nbsp&nbsp<?php echo $name;?> <br><br>
<b>Question desc:</b><textarea name=qd id=qd><?php echo $row['que_desc']?></textarea><br><br>
<b>Option A :</b><input name=ans1 id=1 type=text value="<?php echo $row['ans1']?>"><br><br>
<b>Option B :</b><input name=ans2 id=2 type=text value="<?php echo $row['ans2']?>"><br><br>
<b>Option C :</b><input name=ans3 id=3 type=text value="<?php echo $row['ans3']?>"><br><br>
<b>Option D :</b><input name=ans4 id=4 type=text value="<?php echo $row['ans4']?>"><br><br>
<b>True ans :</b><input name=true_ans id=5 type=text value="<?php echo $row['true_ans']?>"><br>
<br>

<input type=submit name=submit value=Save >
</form>
</body>
</html>


