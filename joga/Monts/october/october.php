<?php  


require '../../Connection/connection.php';

if(isset($_POST["btntodb"])){

	$id=$_POST["ids"];
	$input=$_POST["insert"];

	$sql="SELECT * FROM october WHERE id='$id'  ";
    $query=mysqli_query($database,$sql);
    $result=mysqli_fetch_assoc($query);

    if($query){

    	$sql="UPDATE october SET id='$id' ,trening='$input' WHERE id='$id'  ";	
		$query=mysqli_query($database,$sql);
		header( "Location:../../index/index.php" );

    }else{
    	header( "Location:../../index/index.php" );
    }


}else{
	
}




?>