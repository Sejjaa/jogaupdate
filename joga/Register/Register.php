<?php   
session_start();
require '../Connection/connection.php';

if(isset($_POST["btnReg"])){
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$sql="SELECT * FROM jogausers WHERE username='$username' ";
$query=mysqli_query($database,$sql);
$result=mysqli_fetch_ASSOC($query);
if($query){
	if($username == $result["username"]){
		header("Location:../index/index.php");

		$_SESSION["usererror"]="User Name is Taken";
	}else{
		$sql="INSERT INTO jogausers VALUES (NULL,'$username','$email','$password' )   ";	
		$query=mysqli_query($database,$sql);
		if($query){
			header( "Location:../index/index.php" );

		}else{
			header( "Location:../index/index.php" );	
				
		}

	}



}else{
	header( "Location:../index/index.php" );

}




}else{
	header( "Location:../index/index.php" );

}




 ?>