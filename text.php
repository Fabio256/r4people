<?php
$servernam = "localhost";
$usernam = "root";
$passwor = "";
$database="tutorial";
$conn = mysqli_connect($servernam,$usernam,$passwor,$database);
if(!$conn){
	die("connection errror".mysqli_connect_error());

}
$username =$_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM `users` WHERE `user` LIKE 'dinu' AND `password` LIKE 'john'";
$result =mysqli_query($conn,$sql);
if($result){

	while($row=mysqli_fetch_assoc($result)){
		
		echo $row["user"].",".$row["password"];
		header('Location: \web\dinu\index.html');
	}
	echo "dinu";
}else "0 Esullts";
mysqli_close($conn);
?>

