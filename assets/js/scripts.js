// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	image1 = document.getElementById('logo-web1');
	image2 = document.getElementById('logo-web2');

	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50)
	{
		document.getElementById("nav-text1").style.color = "#00FF00";
		document.getElementById("nav-text2").style.color = "#00FF00";
		document.getElementById("nav-text3").style.color = "#00FF00";
		//document.getElementById("nav-text4").style.color = "#00FF00";
		document.getElementById("nav-bars").style.color = "#00FF00";
		image1.src = "assets/img/logo44.png";
		image2.src = "assets/img/logo3.png";
	}
	else 
	{
		document.getElementById("nav-text1").style.color = "#080808";
		document.getElementById("nav-text2").style.color = "#080808";
		document.getElementById("nav-text3").style.color = "#080808";
		//document.getElementById("nav-text4").style.color = "#080808";
		document.getElementById("nav-bars").style.color = "#080808";
		image1.src = "assets/img/logo55.png";
		image2.src = "assets/img/logo1.png";
	} 
}

function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {

	$(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
	}
	$(this).addClass("active");

	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('nav').removeClass('transparent');
		} else {			
			$('nav').addClass('transparent');
		}
	});


	var winWidth  = 0;
	$(window).resize(function() {
		winWidth = $(window).width();
		if (winWidth<=800) {
			$('nav').removeClass('transparent');
		}
	})
	$(window).scroll(function() {
		winWidth = $(window).width();
		if (winWidth<=800) {
			$('nav').removeClass('transparent');
		}
	})
	winWidth = $(window).width();
	if (winWidth<=800) {
		$('nav').removeClass('transparent');
	}
	

	/*
	    Scroll link
	*/
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), 0);
	});
	
    /*
        Background slideshow
    */
    $('.top-content').backstretch("assets/img/backgrounds/1.jpg");
    $('footer').backstretch("assets/img/backgrounds/1b.jpg");
    
    /*
        Wow
    */
    new WOW().init();
	
});