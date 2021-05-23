<?php session_start(); ?>

var Login;
var AllPageHolder;
var Body;
var ShowLoginForm;
var checkloginerror;
var LoginForm=`

	<form action="../Login/Login.php"  method="POST"  id="Login" style="margin-left:auto;margin-right:auto;background:orange;margin-top:50px;height:300px;border-radius:10%;width:90%;  ">
	<h1 style="text-align:center;margin-top:25px;" >Login Page</h1>


	<?php    

		if(isset($_SESSION["log"])){

			echo '  

	<div class="row justify-content-around">
	<div class="col-9 col-sm-6 offset-3 " style><input type="username" name="username" placeholder=" '.$_SESSION["log"].' "  required style="margin-top:20px;"></div>
	
	<div class="col-9  col-sm-6 offset-3 "><input type="password" name="password" placeholder=" '.$_SESSION["log"].' "  required  style="margin-top:20px;"></div>
	</div>


			';


		}else{

			echo '  

	<div class="row justify-content-around">
	<div class="col-9 col-sm-6 offset-3 " style><input type="username" name="username" placeholder="Username"  required style="margin-top:20px;"></div>
	
	<div class="col-9  col-sm-6 offset-3 "><input type="password" name="password" placeholder="Password"  required  style="margin-top:20px;"></div>
	</div>


			';

		}	

	?>


	<div class="row justify-content-around">
		<div class="col-6"><button name="btnBack" class="btn btn-lg btn-success DontGoOnNextPage"  type="submit" style="margin-top:60px;margin-left:55%;">Back</button>  </div>
		<div class="col-6"><button name="btnLogin" class="btn btn-lg btn-success"  type="submit" style="margin-top:60px;margin-left:20%;">Login</button>  </div>
	</div>


	</from>


`;


function SetUpLoginSystem(){
	Login=$('.BtnLogin');
	AllPageHolder=$('.AllPageHolder');
	Body=$('body');

Login.on( 'click',LoginThisForm);


		checkloginerror=` <?php 
		

		if(isset($_SESSION["log"])){
			
			if( $_SESSION["log"] == "Something is Wrong" ){
				$errr=10;
			    echo $errr;
			    unset($_SESSION["log"]);
			}
			
		}else{
			echo $errr=0;
			unset($_SESSION["log"]);
		}



	 ?>  `;


if(checkloginerror == 10){
	LoginThisForm();

}


}




function LoginThisForm(){


	 AllPageHolder.css({ display:'none' })
     Body.append(LoginForm);
     
     document.querySelector(".DontGoOnNextPage").addEventListener("click", function(event) {
        event.preventDefault();
        ShowLoginForm=$('#Login');
        ShowLoginForm.remove();
        AllPageHolder.css({ display:'' })

}, false);


}