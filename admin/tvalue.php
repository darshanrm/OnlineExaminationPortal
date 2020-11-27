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
echo $name;
$sh=mysql_query("select * from mst_question where que_id=$name ");
$row=mysql_fetch_array($sh);
echo "<form name=form1 >";
echo "Question desc:"."<textarea name=qd id=qd>".$row['que_desc']."</textarea><br>";
echo "Option A:"."<input id=1 type=text value='".$row['ans1']."'><br>";
echo "Option B:"."<input id=2 type=text value='".$row['ans2']."'><br>";
echo "Option C:"."<input id= 3 type=text value='".$row['ans3']."'><br>";
echo "Option D:"."<input id=4 type=text value='".$row['ans4']."'><br>";
echo "True ans:"."<input id=5 type=text value='".$row['true_ans']."'><br>";

echo "<input type=submit name=submit value=Save onClick=editfun();>";

?>   
<script language="javaScript">
function editfun()
{
	var k=document.getElementById("qd");
document.write(k);

}
</script>

        				