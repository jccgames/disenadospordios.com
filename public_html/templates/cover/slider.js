var main=function(){
	$('.slider-btn').click(sliderActive);
	setInterval(sliderChange, 10000);
}

var sliderActive = function(){
	//Buttons
	var pos = $(this).data('sliderpos');
	$('.slider-btn.active').toggleClass('active');
	$(this).toggleClass('active');
	//Images slides
	$('.slider.active').fadeToggle('slow', function(){
		$('.slider.active').toggleClass('active');
	});

	$('.slider[data-sliderpos='+pos+']').fadeToggle('slow',function(){
		$('.slider[data-sliderpos='+pos+']').toggleClass('active');
	});
}

var sliderChange =  function(){
	var pos = $('.slider-btn.active').data('sliderpos');
	if (pos == 3){
		var npos = 0;
	} else {
		var npos = pos + 1;
	}

	$('.slider-btn.active').toggleClass('active');
	$('.slider-btn[data-sliderpos='+npos+']').toggleClass('active');

	//Images slides
	$('.slider.active').fadeToggle('slow', function(){
		$('.slider.active').toggleClass('active');
	});

	$('.slider[data-sliderpos='+npos+']').fadeToggle('slow',function(){
		$('.slider[data-sliderpos='+npos+']').toggleClass('active');
	});
}


$(document).ready(main);