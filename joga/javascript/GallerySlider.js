var GallerySliderHolder;

var ImgUrls=[ '../Img/hero.jpg' ,'../Img/hills-400x340.jpg','../Img/path-400x340.jpg', ];
var NextImg;

var BackImg;

function SetUpGalerySlider(){

	GallerySliderHolder=$('.GallerySliderHolder');
	GallerySliderHolder.css({ overflow: 'hidden',width:'98%',height:'400px'  });
	GallerySliderHolder.attr("src",ImgUrls[0]);
	NextImg=$('.NextImg');
	BackImg=$('.BackImg');

	NextImg.on('click',NextImage);	
	
	BackImg.on('click',BackImage);	
	
}

var clickbloker=0;
var endloop=0;
var loop;
function NextImage(){

	if(clickbloker==0){

	clickbloker=2;	
	let nowimg = GallerySliderHolder.attr("src");
	for(let i=0;i<ImgUrls.length;i++ ){
		
		if(nowimg == ImgUrls[i] ){
			loop=i+1;
			endloop=0;
			if( loop == ImgUrls.length ){
				endloop=1;
				
			}

		}

		

	}///end for loop


	AnimationGalleryNext();

	}

	

}


function AnimationGalleryNext(){

	GallerySliderHolder.css({ transform:'rotateY(90deg)',transition:'1s',  });
	BackImg.css({ display:'',transition:'1s',transform:'rotateY(90deg)',  });
	NextImg.css({ display:'',transition:'1s',transform:'rotateY(90deg)',  });
	
	setTimeout( ()=>{
		GallerySliderHolder.css({ transform:'rotateY(0deg)',  });
		BackImg.css({ display:'',transition:'1s',transform:'rotateY(0deg)',  });
		NextImg.css({ display:'',transition:'1s',transform:'rotateY(0deg)',  });
		
	if(endloop==0){
		GallerySliderHolder.attr("src",ImgUrls[loop]);
	}else if(endloop==3) {
		GallerySliderHolder.attr("src",ImgUrls[loop]);
	}else{
		GallerySliderHolder.attr("src",ImgUrls[0]);
	}

		setTimeout( ()=>{
			clickbloker=0;
		},100 )
		

	},2000 );

	

}


function BackImage(){


	if(clickbloker==0){

	clickbloker=2;	
	let nowimg = GallerySliderHolder.attr("src");

	for(let i=0;i<ImgUrls.length;i++ ){
		
		if(nowimg == ImgUrls[i] ){
			loop=i;
			endloop=0;

			if(loop == 0 ){
				loop=ImgUrls.length-1;
				endloop=3;
			}else{
				loop=i-1;
			}

		}

		

	}///end for loop

	AnimationGalleryNext();

	}


}



setInterval( ()=>{

NextImage();


},25000 )