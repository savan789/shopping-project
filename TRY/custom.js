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


/*----------------------------*\
	/START FVIDEO
\*----------------------------*/
const bg = document.getElementById('bg');
const tree = document.getElementById('tree');
const text = document.getElementById('text');

window.addEventListener("scroll", ()=>{
  const value = window.scrollY;

  bg.style.top = value * 0.1 + 'px';

  tree.style.top = value * 0.15 + 'px';
  text.style.top = value * 0.6 + 'px';
});

    

/*----------------------------*\
	/END FVIDEO
\*----------------------------*/

/*----------------------------*\
	/START PRODUCT-CARD
\*----------------------------*/
  //Movement Animation to happen
  const card = document.querySelector(".card");
  const container = document.querySelector(".container");
  //Items
  const title = document.querySelector(".title");
  const sneaker = document.querySelector(".sneaker img");
  const purchase = document.querySelector(".purchase");
  const description = document.querySelector(".info h3");
  const sizes = document.querySelector(".sizes");
  const rs = document.querySelector(".rs");
  
  //Moving Animation Event
  container.addEventListener("mousemove", (e) => {
    let xAxis = (window.innerWidth / 5 - e.pageX) / 30;
    let yAxis = (window.innerHeight / 5 - e.pageY) / 30;
    card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
  });
  //Animate In
  container.addEventListener("mouseenter", (e) => {
    card.style.transition = "none";
    //Popout
    title.style.transform = "translateZ(150px)";
    sneaker.style.transform = "translateZ(100px) rotateZ(-360deg)";
    description.style.transform = "translateZ(125px)";
    sizes.style.transform = "translateZ(100px)";
    purchase.style.transform = "translateZ(75px)"
    purchase.style.transform = "translateZ(50px)";
  });
  //Animate Out
  container.addEventListener("mouseleave", (e) => {
    card.style.transition = "all 0.5s ease";
    card.style.transform = `rotateY(0deg) rotateX(0deg)`;
    //Popback
    title.style.transform = "translateZ(0px)";
    sneaker.style.transform = "translateZ(0px) rotateZ(0deg)";
    description.style.transform = "translateZ(0px)";
    sizes.style.transform = "translateZ(0px)";
    rs.style.transform = "translateZ(0px)";
    purchase.style.transform = "translateZ(0px)";
  });
  /*----------------------------*\
	/END PRODUCT-CARD
\*----------------------------*/