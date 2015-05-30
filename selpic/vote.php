<?php

$method=$_POST['method'];
$title=$_POST['title'];
$voter=$_POST['email'];

$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);

$date = date('Ymd');

if($method=="voteto")
{
    $sql = "delete from voteinfo where srcvoter='$voter' and ptitle='$title'";
    $result = mysql_query($sql,$con);
    echo $sql;
    $sql = "insert into voteinfo(ptitle,srcvoter,vdate) values('$title','$voter','$date')";
    $result = mysql_query($sql,$con);
    echo $sql;
}
else if($method=="votecancel")
{
    $sql = "delete from voteinfo where srcvoter='$voter' and ptitle='$title'";
    $result = mysql_query($sql,$con);
    echo $sql;
}


mysql_close($con);






?>
