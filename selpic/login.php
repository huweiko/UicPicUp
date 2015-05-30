<?php


$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);

$uemail=$_POST['email'];
$upwd=$_POST['password'];

$sql = "SELECT * FROM userinfo where useremail='$uemail' and userpwd='$upwd'" ;
$result = mysql_query($sql,$con);

echo mysql_num_rows($result);
/*echo "1";*/

mysql_close($con);

?>

