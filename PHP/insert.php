<?php
include 'db.php';
$pseudo=$_GET['pseudo'];
/* Using PDO (prepared statements) prevents SQL injection: */
$sql = $conn->prepare("INSERT INTO emp (pseudo) VALUES (?, ?)");
$sql->bind_param("is", $pseudo);
$result = $sql->execute();
if (!$result) {
	echo "Error inserting data";
	$sql->close();
} else {
	 echo "Data inserted successfully";
	 $sql->close();
 }
/* Prone to SQL Injection:
$sql="INSERT INTO `emp` (`pseudo`) values ('$pseudo')";
$check=mysql_query($sql,$conn);
if(!$check)
	die( "Error inserting data".mysql_error() );
else echo "Data Inserted Succesfully";
mysql_close($conn);
*/
?>
