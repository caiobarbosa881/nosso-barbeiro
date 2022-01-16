$(function() {
    $('#autoWidth').lightSlider({
     
}); 
$('#light-slider').lightSlider({
  addClass: 'center-thumbs',
});
    
  });

  $( window ).on('resize load', function(){
    if($(window).width() < 1000)
    {
      $(".slider-img").width( 400 );
      $('#autoWidth').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        loop:true
      })
    } else {
      $(".slider-img").width( "unset");
      $('#autoWidth').lightSlider( "unset" );
    }
  });