$(document).ready(function(){
    $('.settings').on('click',function(){
        $('.setting-lists').slideToggle(400);
    });
    $('.notifys').on('click',function(){
        $('.notify-lists').slideToggle(400);
    });
    $('.messages').on('click',function(){
        $('.messages-lists').slideToggle(400);
    });

    $('#profile_image').change( function(e) {

//    update image on profile.php
        var img = URL.createObjectURL(e.target.files[0]);
        $('.profile-pic').attr('src', img);
    });

});
