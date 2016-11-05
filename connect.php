<?php
$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];
$user = "root";
$password = "";
$database="tutorial";
$connect = mysql_connect("localhost", $user,$password);
@mysql_select_db($database) or ("data base not found");
$query = "SELECT * FROM 'users' where 'user'= '$inputuser'";
$querypass = "SELECT * FROM 'users' where 'password' = '$inputpass'";
$result = mysql_query($query);
$resultpass = mysql_query($querypass);

$row = mysql_fetch_array($result);
$rowpass = mysql_fetch_array($resultpass);
$serveruser = $row["user"];
$serverpass = $row["password"];

if($serveruser&&$serverpass){
	if(!$result){
		die("username or password  is invalid");
	}
	echo "<br><center>database output</br></center>";
	mysql_close();
	if($inputpass==$serverpass){
		header('Location: home.php');
	} else{
		header('Location:fail.php');
	}

}
mysql_close()

 
?>