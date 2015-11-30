var main = function(){
    $('.icon-menu').click(function(){
        $('.menu').animate({left:'0px'},200);
        $('body').animate({left:'285px'},200);
    });
    $('.icon-close').click(function(){
        $('.menu').animate({left:'-285px'},200);
        $('body').animate({left:'0px'},200);
    });
    $('.dropdown-toggle').click(function(){
        $('.dropdown-menu').toggle();
    });
    
    $('.status-box').keyup(function(){//words left counter
        var postLength = $(this).val().length;
        var charactersleft = 140 - postLength;
        $('.counter').text(charactersleft);
        if(charactersleft<0){
            $('.btn').addClass('disabled');
        }else if(charactersleft==140){
           $('.btn').addClass('disabled');
        }else{
            $('.btn').removeClass('disabled');   
        }
    });
    $('.btn').addClass('disabled');
};
$(document).ready(main);