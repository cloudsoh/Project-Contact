var main = function(){
    $('#post').attr('disabled',true);
    $('.icon-menu').click(function(){
        $('.menu').animate({left:'0px'},200);
        $('body').animate({left:'285px'},200);
    });
    $('.icon-close').click(function(){
        $('.menu').animate({left:'-285px'},200);
        $('body').animate({left:'0px'},200);
    });
    // $('.dropdown-toggle').click(function(){
    //     $('.dropdown-menu').toggle();
    // });

    $('#post').click(function(){
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
        // $('.status-box').val('');
        $('.counter').text('140');
        // $('#post').attr('disabled',true);
    });
    $('.status-box').keyup(function(){//words left counter
        var postLength = $(this).val().length;
        var charactersleft = 140 - postLength;
        $('.counter').text(charactersleft);
        if(charactersleft<0){
            $('#post').attr('disabled',true);
        }else if(charactersleft==140){
           $('#post').attr('disabled',true);
        }else{
            $('#post').attr('disabled',false);   
        }
    });
    
    // $('#exampleModal').on('show.bs.modal', function (event) {
    //   var button = $(event.relatedTarget);; // Button that triggered the modal
    //   var recipient = button.data('whatever'); // Extract info from data-* attributes
    //   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    //   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    //   var modal = $(this);
    //   modal.find('.modal-title').text('New message to ' + recipient);
    //   modal.find('.modal-body input').val(recipient);
    // });
    // $('#post').disabled="disabled";
};
$(document).ready(main);