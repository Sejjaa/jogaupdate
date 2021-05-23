<?php  session_start(); 

		
        

      		



 ?>
var holding;
var Whois;
var btnEditCalendar;
var WhattoDoWithCalendar;
var Calendar;
var body;
var MonthArrey=["January",'February',"March",'April','May','June','July','August','September','October','November','December'];

var MonthDays=[31,28,31,30,31,30,31,31,30,31,30,31];

var firstday=[4,0,0,3,5,1,3,6,2,4,0,2];

var BackMonth;
var FowardMonth;
var days;
var textofmonth;
var AllDays;
var Month;
var ChangeFirstDay;
var AllCards;
function setUpCalendar(){
	body=$('body');

	Calendar=`
		<div class="row justify-content-center">
			<div class="col-12" style="text-align: center;"><h1>Calendar</h1></div>	
		</div>

		<div class="row justify-content-center" style="background: red;width: 70%;margin-left: 15%;">
			<div class="col-2"><button class="btn btn-primary BackMonth">Back</button> </div>	
			<div class="col-4"><h3 class="textofmonth">${MonthArrey[0]}</h3></div>
			<div class="col-2"><button class="btn btn-primary FowardMonth">Next</button></div>
		</div>

		<div class="row justify-content-around" style="background: blue;width: 95%;margin-left: 2.5%;">
			<div class="col-1" ><h4>Monday</h4></div>
			<div class="col-1" ><h4>Utorak</h4></div>
			<div class="col-1" ><h4>Srijeda</h4></div>
			<div class="col-1" ><h4>Cetvrtak</h4></div>
			<div class="col-1" ><h4>Petak</h4></div>
			<div class="col-1" ><h4>Subota</h4></div>
			<div class="col-1" ><h4>Nedelja</h4></div>
		</div>

		<div class="row justify-content-around" style="width: 95%;margin-left: 2.5%;text-align:center;">
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>	

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

		</div>


		<div class="row justify-content-around" style="width: 95%;margin-left: 2.5%;text-align:center;">
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>	

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

		</div>

		<div class="row justify-content-around" style="width: 95%;margin-left: 2.5%;text-align:center;">
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>	

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

		</div>

		<div class="row justify-content-around" style="width: 95%;margin-left: 2.5%;text-align:center;">
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>	

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

		</div>

		<div class="row justify-content-around" style="width: 95%;margin-left: 2.5%;text-align:center;">
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>	

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

		</div>

		<div class="row justify-content-around" style="width: 95%;margin-left: 2.5%;text-align:center;">
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>
			
			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>	

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

			<div class="col-1 days" style="margin-top:10px;width:14%;height:130px;">
			</div>

		</div>



<form action="../index/index.php"  method="POST">		
<div class="row justify-content-center" style="width: 95%;margin-left: 2.5%;text-align:center;margin-top:30px;height:100px;">
<div class="col-6">
<button class="btn btn-lg btn-danger btnBacktoMain">Go Back</button>	
</div>
</div>		
</form>

		


		



	`;


	Whois= ` 
	<?php 

		if(isset($_SESSION["name"])){
			if($_SESSION["name"] == "admin" ){	
				$who=0;	
				echo $who;
			}else{
				$who=1;
			    echo $who;
			}

		}else{
			$who=1;
			echo $who;
		}

	?>
	  `;


WhattoDoWithCalendar=$(".Calendar");

WhattoDoWithCalendar.on( "click",EditorShow );




}

var btnBacktoMain;

function EditorShow(){

	
	if(Whois == 0){
		AllPageHolder.css({ display:'none' });
		body.append(Calendar);
		AllDays=document.querySelectorAll('.days');


	}if(Whois == 1){
		AllPageHolder.css({ display:'none' });
		body.append(Calendar);
		AllDays=document.querySelectorAll('.days');
	}


setTimeout( ()=>{
BackMonth=$('.BackMonth');
$(BackMonth).on('click',FunctionBackMonth);

FowardMonth=$('.FowardMonth');	
$(FowardMonth).on('click',FunctionFowardMonth);

textofmonth=$('.textofmonth');

},100 )


	setTimeout(showCalendar,200);


	btnBacktoMain=$('.btnBacktoMain');

}


function FunctionBackMonth(){

	if(AllCards){

		if(AllCards.length>0){
			AllCards.remove();
			AllCards=[];
		}
	}


	for(let i=0;i<MonthArrey.length;i++){

		if( textofmonth.text() == MonthArrey[i] ){

			if( textofmonth.text() == MonthArrey[0] ){
				textofmonth.text(MonthArrey[11]);
				break;
			}else{
				let change=i-1;
				textofmonth.text(MonthArrey[change]);
			}


		}	


	}
	
	showCalendar();

}

function FunctionFowardMonth(){


		if(AllCards){

		if(AllCards.length>0){
			AllCards.remove();
			AllCards=[];
		}
	}


	for(let i=0;i<MonthArrey.length;i++){

		if( textofmonth.text() == MonthArrey[i] ){

			if( textofmonth.text() == MonthArrey[11] ){
				textofmonth.text(MonthArrey[0]);
			}else{
				let change=i+1;
				textofmonth.text(MonthArrey[change]);
				break;
			}


		}	


	}
	
	showCalendar();


}





function PositionAllCard(){
	AllCards=$('.cards');

	

	for(let i=0;i<AllCards.length;i++){
	
	let Card=window.getComputedStyle(AllDays[ChangeFirstDay]);	
	let width=Card.getPropertyValue('width');				
    let top=Card.getPropertyValue('margin-top');
	let height=Card.getPropertyValue('height');

	let pos=$(AllDays[ChangeFirstDay]).position();

	$(AllCards[i]).css({position:'absolute', left:pos.left,top:pos.top,border:'1px solid black',width:width,height:height,marginTop:top,background:'orange'    })
	
	ChangeFirstDay++;	

	}




	





}




function showCalendar(){

	if(textofmonth.text() == MonthArrey[0] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM january";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       		
       		if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/January/January.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/January/January.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}

       		
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[0];
		
		
		
	}if(textofmonth.text() == MonthArrey[1] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM february";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       		
            if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/february/february.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/february/february.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[1];
		
		
		
	}if(textofmonth.text() == MonthArrey[2] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM march";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       		
         	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/march/march.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/march/march.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[2];
		
		
		
	}if(textofmonth.text() == MonthArrey[3] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM april";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/april/april.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/april/april.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}



       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[3];
		
		
		
	}if(textofmonth.text() == MonthArrey[4] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM may";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/may/may.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/may/may.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[4];
		
		
		
	}if(textofmonth.text() == MonthArrey[5] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM june";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/June/june.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/June/june.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[5];
		
		
		
	}if(textofmonth.text() == MonthArrey[6] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM july";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/july/july.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/july/july.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[6];
		
		
		
	}if(textofmonth.text() == MonthArrey[7] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM august";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/august/august.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/august/august.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[7];
		
		
		
	}if(textofmonth.text() == MonthArrey[8] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM semptember";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/semptember/september.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/semptember/september.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[8];
		
		
		
	}if(textofmonth.text() == MonthArrey[9] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM october";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/october/october.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/october/october.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[9];
		
		
		
	}if(textofmonth.text() == MonthArrey[10] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM november";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/novembar/november.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/novembar/november.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[10];
		
		
		
	}if(textofmonth.text() == MonthArrey[11] ){
		Month=`

		<?php 
		require '../Connection/connection.php';
		$sql="SELECT * FROM december";
        $query=mysqli_query($database,$sql);
        $result=mysqli_fetch_all($query,MYSQLI_ASSOC);	

       foreach ($result as $value) {
       	
       	if($who == 0){

       			echo '    

       		<form class="cards" action="../Monts/december/december.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><input type="text" name="insert" placeholder="'.$value["trening"].'" style="width:90%;margin-left:5%;margin-top:15px;text-align:center;" ></div>
		    <button type="submit" name="btntodb" style="margin-top:15px;" >Click me</button>
		    </form>


       		';


       		}else{

       			echo '    

       		<form class="cards" action="../Monts/december/december.php"  method="POST" style="text-align:center;position:absolute;">
			<div ><h4 style="margin-top:15px;"> '.$value["id"].'  </h4> </div>
			<input type="hidden" name="ids" value="'.$value["id"].'">
		    <div class="inputs"><h6 style="margin-top:30px;"> '.$value["trening"].' </h6></div>
		    </form>


       		';


       		}


       	
       }


		?>



		`;

		body.append(Month);
		ChangeFirstDay=firstday[11];
		
		
		
	}



	PositionAllCard();



}