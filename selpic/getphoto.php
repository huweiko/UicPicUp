<?php

$strRoot="http://www.srcer.com/mydemo/image/";

$con = mysql_connect("localhost", "root", "Liuhui331234958");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("repdb",$con);

$uemail=$_GET['uemail'];

$sql="select * from picinfo where useremail not in('$uemail') ";
/*echo $sql;*/

$result = mysql_query($sql,$con);

$strRet=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{
    echo $row['ptitle'] . "," . $strRoot . $row['url'] . "," . $row['votes'] . ";";
}

/*
echo "<br>==========================================<br>";

$sql = "SELECT * FROM picvotes where vdate like '$strMonth%'";
$result = mysql_query($sql,$con);
$strRet=mysql_num_rows($result);
echo $strRet . ":";
while($row=mysql_fetch_array($result))
{
    echo $row['username'] . "," . $strRoot . $row['picid'] . ".jpg" . "," . $row['cdate'] . ";";
}
*/

mysql_close($con);

?>

