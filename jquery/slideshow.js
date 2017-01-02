// JavaScript Document

var main = function(){
		$('#arrow-next').click(function(){
        var currentSlide = $(".active-slide"); 
        var nextSlide = currentSlide.next();
			
		if(nextSlide.length === 0){
            nextSlide= $(".slide").first();
        }
        
        currentSlide.fadeOut(0).removeClass("active-slide");
        nextSlide.fadeIn(0).addClass("active-slide");
		
		var currentThumb = $(".inline-stroke");
        var nextThumb = currentThumb.next();
		
        if(nextThumb.length === 0){
			nextThumb = $(".low-slide").first();	
		}
		
        currentThumb.removeClass("inline-stroke");
        nextThumb.addClass("inline-stroke");
});

		$('#arrow-prev').click(function(){
        var currentSlide = $(".active-slide"); 
        var prevSlide = currentSlide.prev();
			
		if(prevSlide.length === 0){
            prevSlide= $(".slide").last();
        }      
        currentSlide.fadeOut(0).removeClass("active-slide");
        prevSlide.fadeIn(0).addClass("active-slide");
		
		var currentThumb = $(".inline-stroke");
        var prevThumb = currentThumb.prev();
		
        if(prevThumb.length === 0){
			prevThumb = $(".low-slide").last();	
		}
		
        currentThumb.removeClass("inline-stroke");
        prevThumb.addClass("inline-stroke");
    });

	}
var next = function(){
        var currentSlide = $(".active-slide"); 
        var nextSlide = currentSlide.next();
			
		if(nextSlide.length === 0){
            nextSlide= $(".slide").first();
        }
        
        currentSlide.fadeOut(0).removeClass("active-slide");
        nextSlide.fadeIn(0).addClass("active-slide");
		
		var currentThumb = $(".inline-stroke");
        var nextThumb = currentThumb.next();
		
        if(nextThumb.length === 0){
			nextThumb = $(".low-slide").first();	
		}
		
        currentThumb.removeClass("inline-stroke");
        nextThumb.addClass("inline-stroke");
    }
$(document).ready(main);
setInterval(next, 4000);