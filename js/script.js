$(document).ready(function(){
    $("#boxes").hide();
    $("footer").hide();
    $(".box").not(".box-1").hide();
    $("nav a.box-1").css('text-decoration', 'underline');
    
    
    //show or hide sectiions based on user click in nav/footer ul
    $("a.box-1").click(function(event) {
        $("nav a").not(".box-1").removeAttr( 'style' );
        $(".back a").not(".box-").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $("#boxes").fadeOut(800);
        $("footer").hide()
    });
    $("a.box-2").click(function(event) {  
        $("nav a").not(".box-2").removeAttr( 'style' );
        $(".back a").not(".box-2").removeAttr( 'style' );
        $("a.box-2").css('text-decoration', 'underline');
        $(".box").not(".box-2").hide();
        $("#boxes").show();
        $("footer").show();
        $(".box-2").slideDown("slow");
        $('html, body').animate({scrollTop: $("div.box-2").offset().top}, 1000);
    });
     $("a.box-3").click(function(event) { 
        $("nav a").not(".box-3").removeAttr( 'style' );
        $(".back a").not(".box-3").removeAttr( 'style' );
        $("a.box-3").css('text-decoration', 'underline');
        $(".box").not(".box-3").hide();
        $("#boxes").show();
        $("footer").show();
        $(".box-3").slideDown("slow");
        $('html, body').animate({scrollTop: $("div.box-3").offset().top}, 1000);
    });
    $("a.box-4").click(function(event) {
        $("nav a").not(".box-4").removeAttr( 'style' );
        $(".back a").not(".box-4").removeAttr( 'style' );
        $("a.box-4").css('text-decoration', 'underline');    
        $(".box").not(".box-4").hide();
        $("#boxes").show();
        $("footer").show();
        $(".box-4").slideDown("slow");
        $('html, body').animate({scrollTop: $("div.box-4").offset().top}, 1000);
    });
    $("a.box-5").click(function(event) {
        $("nav a").not(".box-5").removeAttr( 'style' );
        $(".back a").not(".box-5").removeAttr( 'style' );
        $("a.box-5").css('text-decoration', 'underline');   
        $(".box").not(".box-5").hide();
        $("#boxes").show();
        $("footer").show();
        $(".box-5").slideDown("slow");
        $('html, body').animate({scrollTop: $("div.box-5").offset().top}, 1000);
    });
    $("a.box-6").click(function(event) {
        $("nav a").not(".box-6").removeAttr( 'style' );
        $(".back a").not(".box-6").removeAttr( 'style' );
        $("a.box-6").css('text-decoration', 'underline');     
        $(".box").not(".box-6").hide();
        $("#boxes").show();
        $("footer").show();
        $(".box-6").slideDown("slow");
        $('html, body').animate({scrollTop: $("div.box-6").offset().top}, 1000);
    });
 
});

