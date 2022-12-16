$('.center').slick({
  centerMode: true,
  centerPadding: '290px',
  slidesToShow: 1,
  focusOnSelect: false,
  pauseOnHover:false,
  dots: false,
  autoplay:true,
  autoplaySpeed:2000,
  arrows:true,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '190px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 996,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '90px',
        slidesToShow: 1
      }
    },
     {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1
      }
    }
  ]
});
$('.mobile').slick({
  centerMode: true,
  centerPadding: '150px',
  slidesToShow: 3,
  focusOnSelect: false,
  pauseOnHover:false,
  dots: false,
  autoplay:false,
  autoplaySpeed:2000,
  arrows:true,
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '150px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 996,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '120px',
        slidesToShow: 3
      }
    },
     {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 620,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '70px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 400,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 1
      }
    }
  ]
});