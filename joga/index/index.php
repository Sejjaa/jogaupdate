<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Joga Page</title>
	<!--Bootstrap link   -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript" src="../javascript/jquery.js"></script>
	<script type="text/javascript" src="../javascript/GallerySlider.js"></script>
	
	<!--Register and Login Js Code      -->
	<script type="text/javascript" src="../Connection/connection.php"></script>
	<script type="text/javascript" src="../Login/LoginForm.php"></script>
	<script type="text/javascript" src="../Register/RegisterForm.php"></script>
	<script type="text/javascript" src="../Logout/Logout.php"></script>
	<script type="text/javascript" src="../Calendar/Calendar.php"></script>
	<script type="text/javascript" src="../Monts/January/January.php"></script>
	<script type="text/javascript" src="../Monts/february/february.php"></script>
	<script type="text/javascript" src="../Monts/march/march.php"></script>
	<script type="text/javascript" src="../Monts/april/april.php"></script>
	<script type="text/javascript" src="../Monts/may/may.php"></script>
	<script type="text/javascript" src="../Monts/June/june.php"></script>
	<script type="text/javascript" src="../Monts/july/july.php"></script>
	<script type="text/javascript" src="../Monts/august/august.php"></script>
	<script type="text/javascript" src="../Monts/semptember/september.php"></script>
	<script type="text/javascript" src="../Monts/october/october.php"></script>
	<script type="text/javascript" src="../Monts/novembar/november.php"></script>
	<script type="text/javascript" src="../Monts/december/december.php"></script>
</head>
<body>

	
	<!--Nav Bar   -->




	<div class="AllPageHolder">	


	<div class="container-fluid" style="background: red;margin-left: 10px;width: 98%; ">

		<div class="row" style="text-align: center;">
			<div class="col-3"> <h1>My Website</h1> </div>	
			<div class="col-2" style="margin-top: 10px;"> <h3>My Website</h3> </div>
			<div class="col-1 offset-1" style="margin-top: 15px;"> <a href="#">Link 1  </a> </div>
			<div class="col-1" style="margin-top: 15px;"> <a href="#">Link 2  </a> </div>

			<?php    

			if(isset($_SESSION["name"]) ){
				if($_SESSION["name"] == "admin"){
					echo ' <div class="col-1" style="margin-top: 10px;"> <button class="btn btn-danger Calendar">Setup Calendar </button></div>    ';
				}else{
				echo ' <div class="col-1" style="margin-top: 10px;"> <button class="btn btn-danger Calendar">Calendar</button></div>     ';

			}
				

			}


			?> 


			<?php    
		
			if(isset($_SESSION["id"])){
				echo '	<div class="col-1" style="margin-top: 10px;"> <button class="btn btn-primary"> '.$_SESSION["name"].' </button> </div>   ' ;

			}

			?>	
			
			<?php    
			if(isset($_SESSION["id"])){

				echo '
				
				<div class="col-1" style="margin-top:10px;"> <form action="../Logout/Logout.php"  method="POST"  id="Logout"> <button class="btn btn-danger " name="btnLogout" >Logout</button> </form> </div>

				';

			}	

			?>

			


		</div>



	</div>	

<!--End of navbar   -->



		<!--Slika posle nav bara   -->
        <img src="hero.jpg" style="width: 98%; margin-top: 40px;margin-left: 10px;height: 350px; " >	

        <div class="row justify-content-center"  style="margin-top: -200px;width: 100%;margin-left: 0px;">
			<div class="col-10 col-xl-6">
			<h6  style="background: green;text-align: center;height: 50px;padding: 12px;">We strive to make all of our creations exquisite.</h6>
			</div>

		</div>


		<div class="row justify-content-center"  style="margin-top: 50px;width: 20%;margin-left:40%; text-align: center;">

			<?php  

			if(isset($_SESSION["id"])){
		
			}else{
			echo '
			<div class="col-6">
			<button class="btn btn-lg btn-warning BtnReg" style="width:100px;margin-left: -30px;">Sing In</button>
			</div>   ';

			}

			?>

			<?php 

			if(isset($_SESSION["id"])){

			}else{
				echo '
			<div class="col-6">
			<button class="btn btn-lg btn-danger BtnLogin" style="width:100px;margin-left: 30px;">Login</button>
			</div>

				';
			}	

			?>
			


		</div>


		<!--Izlazak iz slike   -->



		
			
		<!--Podekts od programima slike i ikonice   -->

			<div class="row justify-content-around" style="text-align: center;margin-left: 10px;width: 98%;margin-top: 120px;background: orange; " >

					<div class="col-12" style="margin-top: 50px;background: gray;width: 98%">
						<h1>Podekste o programima</h1>

					</div>

					<div class="col-12 col-xl-6" style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-1.png" ><h3>Purpose</h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>
					


					<div class="col-12 col-xl-6 " style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-2.png">
					<h3>Quality</h3>	
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>
					

					<div class="col-12 col-xl-6 " style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-3.png">
						<h3>Function</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>
					


					<div class="col-12 col-xl-6 "style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-4.png">
						<h3>Elegant</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>


					<div class="col-12 col-xl-6 "style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-4.png">
						<h3>Elegant</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>

					<div class="col-12 col-xl-6 "style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-4.png">
						<h3>Elegant</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>

					<div class="col-12 col-xl-6 "style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-4.png">
						<h3>Elegant</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>

					<div class="col-12 col-xl-6 "style="margin-top: 50px;background: gold;border: 2px solid black;width: 45%;"><img src="icon-4.png">
						<h3>Elegant</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>

					<button class="btn btn-danger btn-lg" style="padding: 10px;width:30%; ">Link</button>

					</div>

			</div>


			<!--Izlazak iz tesksa sa programima   -->




			<!--O voditelju kursa   -->

		<div class="row justify-content-around"  style="margin-top: 50px;width: 98%;margin-left: 10px; text-align: center;background: red; text-align: center;">
			
			<div class="col-12" style="margin-top: 30px;"> <h1>O voditelju kursa</h1> </div>

			<div class="col-12"><img src="hero.jpg" style="width: 55%;margin-top: 30px;border-radius: 50%;height: 400px;">  </div>	


			<div class="col-12" style="margin-top: 55px;width: 90%;"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>

			</div>
	

		<!--Izlazak iz voditelja kursa   -->



		<!--Galerija    -->

		<div class="row"  style="margin-top:70px;width: 98%;margin-left: 10px; text-align: center;background: violet; text-align: center;">
			
			<div class="col-12" style="margin-top: 30px;"> <h1>Galerija</h1> </div>


			<div class="col-12 " style="margin-top: 30px;">
				<img class="GallerySliderHolder" src="hero.jpg" >
				<button class="btn btn-danger BackImg" style="margin-top: -420px;margin-right: 85%;" >Back</button>
				<button class="btn btn-danger NextImg" style="margin-top: -465px;margin-left: 85%;" >Next</button>
			</div>
				


			

		</div>

		


<!--Izlazak iz galerije   -->




	<!--Utisci  -->

	<div class="row justify-content-around"  style="margin-top:70px;width: 98%;margin-left: 10px; text-align: center;background:lightblue; text-align: center;">
			
			<div class="col-12" style="margin-top: 30px;"> <h1>Utisci</h1> </div>

			<div class="col-4" style="margin-top: 30px;border-radius: 5%;border:1px solid black;width: 31%;"> 
				<img src="hero.jpg" alt="Chicago"  style="margin-top: 30px; border-radius: 50%;width: 100%;height: 270px;">

				<h1 style="margin-top: 30px;">Ime i Prezime</h1>
				<p style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


			 </div>



			 <div class="col-4" style="margin-top: 30px;border-radius: 5%;border:1px solid black;width: 31%;"> 
				<img src="hero.jpg" alt="Chicago"  style="margin-top: 30px; border-radius: 50%;width: 100%;height: 270px;">

				<h1 style="margin-top: 30px;">Ime i Prezime</h1>
				<p style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


			 </div>



			 <div class="col-4" style="margin-top: 30px;border-radius: 5%;border:1px solid black;width: 31%;"> 
				<img src="hero.jpg" alt="Chicago"  style="margin-top: 30px; border-radius: 50%;width: 100%;height: 270px;">

				<h1 style="margin-top: 30px;">Ime i Prezime</h1>
				<p style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


			 </div>


	</div>		


	<!--Izlazak iz utisaka  Utisci  -->




	<!--Footer  -->

	<div class="row justify-content-around"  style="margin-top:70px;width: 99%;text-align: center;background:black; text-align: center;color: gold;">
			
			<div class="col-12" style="margin-top: 30px;"> <h1>Footer</h1> </div>

			
				<div class="col-4" style="margin-top: 50px;" >
					
					<a href="#">Link 1</a>

					<a href="#">Link 1</a>

					<a href="#">Link 1</a>

					<a href="#">Link 1</a>

				</div>	


			<div class="col-4" style="margin-top: 50px;" >
					
					<img src="hero.jpg" alt="Chicago" style="width: 95%;">
					<h5>Copy Right</h5>

				</div>		


			<div class="col-1" style="margin-top: 50px;" >
					
					
					<img src="hero.jpg" alt="Chicago" style="width: 95%;margin-top: 50px;">


			</div>	


			<div class="col-1" style="margin-top: 50px;" >
					
					
					<img src="hero.jpg" alt="Chicago" style="width: 95%;margin-top: 50px;">


			</div>	


			<div class="col-1" style="margin-top: 50px;" >
					
					
					<img src="hero.jpg" alt="Chicago" style="width: 95%;margin-top: 50px;">


			</div>	

	</div>		


	<!--Izlazak iz Footer  -->	


</div>

<script type="text/javascript" src="../javascript/java.js"></script>
</body>
</html>