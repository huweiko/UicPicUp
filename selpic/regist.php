<?php

$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);

$uemail=$_POST['uemail'];
$upassword=$_POST['upassword'];
$uname=$_POST['uname'];

/*insert into userinfo(useremail,username,userpwd) values('test2@qq.com','kity','111111');*/
$sql = "INSERT INTO userinfo(useremail,username,userpwd) values('$uemail','$uname','$upassword');";
$result = mysql_query($sql,$con); 
echo mysql_affected_rows();

mysql_close($con);


?>

