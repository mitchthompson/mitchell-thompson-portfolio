$(document).ready(function(){
    $("#boxes").show();
    $(".box").not(".box-2").hide();
    $("nav a").not(".box-2").removeAttr( 'style' );
    $(".back a").not(".box-2").removeAttr( 'style' );
    $("a.box-2").css('text-decoration', 'underline');
    $(".box").not(".box-2").hide();
    
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
    
    //Show/Hide web project picture view based on user click
    $(".modal img").not("#desktop").hide();
    $(".desktop-view").css("background-color", "#2e6da4");
    
    $(".desktop-view").click(function(event) {
        $(".desktop-view").css("background-color", "#2e6da4");
        $(".modal img").not("#desktop").hide();
        $(".modal #desktop").show();
    });
    $(".tablet-view").click(function(event) {
        $(".desktop-view").css("background-color", "#2C3E50");
        $(".modal img").not("#tablet").hide();
        $(".modal #tablet").show();
    });
    $(".mobile-view").click(function(event) {
        $(".desktop-view").css("background-color", "#2C3E50");
        $(".modal img").not("#mobile").hide();
        $(".modal #mobile").show();
    });
    
    //Custom form submit 
    $( "#contact" ).submit(function( event ) {
        $('#contact-success').html("SUCCESS! I will get back to within two business days. Thank you!");
        $('#contact-success').addClass('alert alert-success');
        event.preventDefault();
    });
    
    //Custom form submit 
    $( "#project-exploration" ).submit(function( event ) {
        $('#exploration-success').html("SUCCESS! I will get back to within two business days. Thank you!");
        $('#exploration-success').addClass('alert alert-success');
        event.preventDefault();
    });
 
});

