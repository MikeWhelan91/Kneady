window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



//FADE IN HOMEPAGE


$(function(){  // $(document).ready shorthand
  $('.fade').fadeIn(100);
});

$(document).ready(function() {
    
    
    $(window).scroll( function(){
    
      
        $('.fade').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},100);
                    
            }
            
        }); 
    
    });
    
});


//reloads the gif every time page is refreshed
document.getElementById('gif').src="/images/logo.gif?a="+Math.random()


