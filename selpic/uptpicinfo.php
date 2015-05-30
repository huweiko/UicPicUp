<?php

$email=$_POST['email'];
$ptitle=$_POST['title'];
$url =$_POST['url'];

$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);
echo "$email , $ptitle, $url";

/* move image.jpg to $ptitle.jpg */
rename("../image/image.jpg","../image/$url");
$sql = "insert into picinfo(ptitle,useremail,url,votes) values('$ptitle','$email','$url',0)"; 
echo $sql;
$result = mysql_query($sql,$con);
/* 只有一条数据 */
echo mysql_num_rows($result);

mysql_close($con);
