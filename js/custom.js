var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}


// fvideo
const bg = document.getElementById('bg');
const tree = document.getElementById('tree');
const text = document.getElementById('text');

window.addEventListener("scroll", ()=>{
  const value = window.scrollY;

  bg.style.top = value * 0.1 + 'px';

  tree.style.top = value * 0.15 + 'px';
  text.style.top = value * 0.5 + 'px';
});

    