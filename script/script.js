$(function(){
  $(".haircut-slider").slick({
    infinite: true,
    slidesToShow: 3,
    SlidesToScroll: 1,
    centerMode: true,
    prevArrow: $("#arrow-prev"),
    nextArrow: $("#arrow-next"),
    responsive: [
      {
        breakpoint: 700 ,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
})
