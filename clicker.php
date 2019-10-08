<?php
include 'db.php';
$pseudo=$_POST['pseudo'];
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
