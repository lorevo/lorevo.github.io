  
<?php 
 $servername="localhost";
 $username="lorevo";
 $password="Baptiste2005";
 //se connecte à mysql
 $conn=mysqli_connect($servername,$username,$password);
 if(!$conn)
 {
	 die("Connection Failed".mysql_error());
 }
 
 //Créé la base de données
 $sql="CREATE DATABASE clickerLeaderboard";
 
 if( mysqli_query($conn,$sql) )
 {
	 echo ("Database create successfully");
 }
 else
 {
	 echo ("Error Creating Database".mysqli_error());
 }
 mysqli_close($conn);
 ?>
