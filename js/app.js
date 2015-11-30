var main = function(){
    $('.btn').attr('disabled',true);
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
    $('.btn').click(function(){
        var post = $('.status-box').val();
        // <?php 
        // date_default_timezone_set("Asia/Singapore");//set timezone
        // $currenttime=date("Y-m-d H:i:s");//get current time with this format
        // ?>
        // var name = "<div style='float:left'><a href='profile.php?id=<?php echo $login_email;?>'>"
        //  +"<?php echo $login_fname;?>"
        //   + " <?php echo $login_lname;?></a></div><div style='float:right'><?php echo $currenttime; ?></div><br>"
        //    + post;
        // // post =  name + ":" + post;
        // $('<li>').html(name).prependTo('.posts');
        $('.status-box').val('');
        $('.counter').text('140');
        $('.btn').addClass('disabled');
    });
    $('.status-box').keyup(function(){//words left counter
        var postLength = $(this).val().length;
        var charactersleft = 140 - postLength;
        $('.counter').text(charactersleft);
        if(charactersleft<0){
            $('.btn').attr('disabled',true);
        }else if(charactersleft==140){
           $('.btn').attr('disabled',true);
        }else{
            $('.btn').attr('disabled',false);   
        }
    });
    // $('.btn').disabled="disabled";
};
$(document).ready(main);