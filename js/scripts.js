$(document).ready(function(){
	function barClick(bar,close){
		$(bar).css("display","none");
		$(close).css("display","block");
		$(".toggle-Nav").toggle();
	}
	$(".humberg-bars").click(function(){
		barClick('.humberg-bars','.humberg-close');
	});
	$(".humberg-close").click(function(){
		barClick('.humberg-close','.humberg-bars');
	});
	//Click on Top Search Bar
	$(".top-search").click(function(){
		$(".toggle-Nav").toggle();
		$(".humberg-bars").toggle();
		$(".humberg-close").toggle();
	});

	$(window).scroll(function(){
  if($(window).scrollTop() >= 0){
		barClick(".humberg-close",".humberg-bars");
		$(".toggle-Nav").css("display","none");
		// if(!$(".header").hasClass(".header-scroll")){
		// 	$(".header").toggleClass("header-scroll");
		// 	$(".hero-banner").css("margin-top","0");
		// }
  	}

	});

	//Custom Video Post Section
	$("#play_btn").click(function(){
		$("#play_btn").css("display",'none');
		$(".type-videos").addClass("type-videos-js");
		$(".sfv_videos").get(0).play();


	});

	//Content Extra Padding
function foundBlank(){
	$(".main-content p").each(function(){
		var blank = $(this).html();
		if(blank == ''){
			$(this).css("padding-top","10px")
		}
	})
}


})
