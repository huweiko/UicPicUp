<?php

$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);

$uemail=$_POST['email'];
$uname =$_POST['name'];

$sql = "update userinfo set username='$uname' where useremail='$uemail' ";
$result = mysql_query($sql,$con);
/* 只有一条数据 */
echo mysql_num_rows($result);

mysql_close($con);

?>
