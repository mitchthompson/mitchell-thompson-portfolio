$(document).ready(function(){
    $("#boxes").hide();
    $(".box").not(".box-1").hide();
    $("nav a.box-1").css('text-decoration', 'underline');
    
    
    //show or hide sectiions based on user click in nav
    $("a.box-1").click(function(event) {
        $("nav a").not(".box-1").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        //$(".box").not(".box-1").fadeOut(1000);
        $("#boxes").fadeOut(800);
    });
    $("a.box-2").click(function(event) {  
        $("nav a").not(".box-2").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-2").hide();
        $("#boxes").show();
        $(".box-2").slideDown("slow");
    });
     $("a.box-3").click(function(event) { 
        $("nav a").not(".box-3").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-3").hide();
        $("#boxes").show();
        $(".box-3").slideDown("slow");
    });
    $("a.box-4").click(function(event) {
        $("nav a").not(".box-4").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');     
        $(".box").not(".box-4").hide();
        $("#boxes").show();
        $(".box-4").slideDown("slow");
    });
    $("a.box-5").click(function(event) {
        $("nav a").not(".box-1").removeAttr( 'style' );;
        $(this).css('text-decoration', 'underline');     
        $(".box").not(".box-5").hide();
        $("#boxes").show();
        $(".box-5").slideDown("slow");
    });
    
    
});

