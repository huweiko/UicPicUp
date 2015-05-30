<?php

$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);

$uemail=$_POST['email'];

$sql = "SELECT * FROM userinfo where useremail='$uemail' ";
$result = mysql_query($sql,$con);
/* 只有一条数据 */
while($row=mysql_fetch_array($result))
{
    echo $row['username'];
}

mysql_close($con);

?>
