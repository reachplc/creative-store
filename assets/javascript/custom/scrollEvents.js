jQuery(function($){
    // $(document).scroll(function(){
    //     // Hide Transparent bar on Home and Events page when user scrolls
    //     if ($(document).scrollTop() > 100) {
    //         $(".nav-background").addClass("nav-background-show");
    //     }
    //     else {
    //     	$(".nav-background").removeClass("nav-background-show");
    //     }


    $("#menu-site-main li:nth-child(2)")
    .on('mouseenter', function(){
        $(".searchbox").addClass('searchboxshow');
    });

    $("#menu-site-main li:nth-child(1)")    
    .on('mouseleave', function(){
        $(".searchbox").removeClass('searchboxshow');
    });

     $("#menu-site-main li:nth-child(3), .nav-text .bluetext")  
    .on('mouseenter', function(){
        $(".searchbox").removeClass('searchboxshow');
    });


    // $(".ico1").hover(function(){
    // 	$(".ico1").
    // });

    $('#user').attr( 'placeholder', 'Username' );
    $('#pass').attr( 'placeholder', 'Password' );
});
