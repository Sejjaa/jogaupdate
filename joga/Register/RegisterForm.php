<?php session_start();  ?>

var Register;
var AllPageHolder;
var Body;
var ShowRegisterForm;
var checkerror;
var RegisterForm=`

	<form action="../Register/Register.php"  method="POST"  id="Register" style="margin-left:auto;margin-right:auto;background:orange;margin-top:50px;height:400px;border-radius:10%;width:90%;  ">
	<h1 style="text-align:center;margin-top:25px;" >Register Page</h1>

	<div class="row justify-content-around">

	<?php

		if(isset($_SESSION["usererror"])){

			echo '
<div class="col-9 col-sm-6 offset-3 " style><input type="username" name="username" placeholder=" '.$_SESSION["usererror"].' "  required style="margin-top:20px;text-align:center;"></div>

			';

		}else{

			echo '
				<div class="col-9 col-sm-6 offset-3 " style><input type="username" name="username" placeholder="Username"  required style="margin-top:20px;text-align:center;"></div>


			';


		}


	 ?>	

	<div class="col-9  col-sm-6 offset-3 "><input type="email" name="email" placeholder="Email"  required  style="margin-top:20px;text-align:center; "></div>
	<div class="col-9  col-sm-6 offset-3 "><input type="password" name="password" placeholder="Password"  required  style="margin-top:20px;text-align: center;"></div>
	</div>


	<div class="row justify-content-around">
		<div class="col-6"><button name="btnBack" class="btn btn-lg btn-success DontGoOnNextPage"  type="submit" style="margin-top:60px;margin-left:55%;">Back</button>  </div>
		<div class="col-6"><button name="btnReg" class="btn btn-lg btn-success"  type="submit" style="margin-top:60px;margin-left:20%;">Register</button>  </div>
	</div>


	</from>


`;


function SetUpRegisterSystem(){
	Register=$('.BtnReg');
	AllPageHolder=$('.AllPageHolder');
	Body=$('body');

	checkerror=` <?php  
		if(isset($_SESSION["usererror"])){
			
			if( $_SESSION["usererror"] == "User Name is Taken" ){
				$err=10;
			    echo $err;
			    unset($_SESSION['usererror']);
			}
			
		}else{
			echo $err=0;
			unset($_SESSION['usererror']);
		}



	 ?>  `;


if(checkerror == 10){
	RegisterThisForm();

}

Register.on( 'click', RegisterThisForm);



}


function RegisterThisForm(){

     AllPageHolder.css({ display:'none' })
     Body.append(RegisterForm);
     
     document.querySelector(".DontGoOnNextPage").addEventListener("click", function(event) {
        event.preventDefault();
        ShowRegisterForm=$('#Register');
        ShowRegisterForm.remove();
        AllPageHolder.css({ display:'' })

}, false);


   }