$(document).ready(function(){
    $(".box").not(".box-1").hide();
    $("nav a.box-1").css('text-decoration', 'underline');
    
    $("nav a.box-1").click(function(event) {
        $("nav a").not(".box-1").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-1").hide(1000);
        $(".box-1").show(1000);
    });
    
    $("nav a.box-2").click(function(event) {  
        $("nav a").not(".box-2").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-2").hide(1000);
        $(".box-2").show(1000);
    });
    
     $("nav a.box-3").click(function(event) { 
        $("nav a").not(".box-3").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-3").hide(1000);
        $(".box-3").show(1000);
    });
    
    $("nav a.box-4").click(function(event) {
        $("nav a").not(".box-4").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');     
        $(".box").not(".box-4").hide(1000);
        $(".box-4").show(1000);
    });
  
});

