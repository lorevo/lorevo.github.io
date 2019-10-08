<?php
include 'db.php';
$sql = "select pseudo from emp";
$result = mysql_query($sql,$conn);
while($row=mysql_fetch_array($result))
{
	echo $row['pseudo']."<br>";
}
?>
