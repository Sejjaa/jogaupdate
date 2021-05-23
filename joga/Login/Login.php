<?php   
session_start();
require '../Connection/connection.php';

if(isset($_POST["btnLogin"])){
$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT * FROM jogausers WHERE username='$username' and password='$password'  ";
$query=mysqli_query($database,$sql);
$result=mysqli_fetch_assoc($query);
if($query){
	$_SESSION["id"]=$result["id"];
	$_SESSION["name"]=$result["username"];
	if($_SESSION["id"]=$result["id"]){
		header( "Location:../index/index.php" );
	}else{
		$_SESSION["log"]="Something is Wrong";
		header( "Location:../index/index.php" );
	}


	header( "Location:../index/index.php" );
}else{
	header( "Location:../index/index.php" );
	$_SESSION["log"]="Something is Wrong";
}




}else{
	header( "Location:../index/index.php" );

}




 ?>















 