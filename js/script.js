$(document).ready(function(){
    $(".box").not(".box-1").hide();
    $("nav a.box-1").css('text-decoration', 'underline');
    
    
    //show or hide sectiions based on user click in nav
    $("a.box-1").click(function(event) {
        $("nav a").not(".box-1").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-1").hide(1000);
        $(".box-1").show(1000);
    });
    $("a.box-2").click(function(event) {  
        $("nav a").not(".box-2").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-2").hide(1000);
        $(".box-2").show(1000);
    });
     $("a.box-3").click(function(event) { 
        $("nav a").not(".box-3").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');
        $(".box").not(".box-3").hide(1000);
        $(".box-3").show(1000);
    });
    $("a.box-4").click(function(event) {
        $("nav a").not(".box-4").removeAttr( 'style' );
        $(this).css('text-decoration', 'underline');     
        $(".box").not(".box-4").hide(1000);
        $(".box-4").show(1000);
    });
    
    
   //trick to get footer sticked to bottom of the page
//   var docHeight = $(window).height();
//   var footerHeight = $('footer').height();
//   var footerTop = $('footer').position().top + footerHeight;
//
//   if (footerTop < docHeight) {
//    $('footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
//   }
//    
    
});

