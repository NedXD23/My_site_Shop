
window.onscroll = function() {mystickybar()};

// Get the navbar
var navbar = document.getElementById("navibar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function mystickybar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
 
  } else {
    navbar.classList.remove("sticky");
  }
}

/** Fist slider */
$('.slider-one')
.not(".slick-initalized")
.slick
({
  autoplay:true,
  autoplaySpeed:3000,
  dots:true,
  prevArrow:".site-slider .slider-btn .prev",
  nextArrow:".site-slider .slider-btn .next",
});
/**second slider */
$('.slider-two')
.not(".slick-initalized")
.slick
({
  prevArrow:".site-slider-two .prev",
  nextArrow:".site-slider-two .next",
  slidesToShow:3,
  slidesToSCroll:1,
  autoplay:true,
  autoplaySpeed:3000
});