// var slideIndex = 0;
// showSlides();

// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 3000); // Change image every 2 seconds
// }


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

    //Movement Animation to happen
    // card = document.querySelector(".card");
    // container = document.querySelector(".con");
    // //Items
    //  title = document.querySelector(".title");
    //  sneaker = document.querySelector(".sneaker img");
    //  purchase = document.querySelector(".purchase");
    //  description = document.querySelector(".info p");
    //  sizes = document.querySelector(".sizes");
    //  rs = document.querySelector(".rs");
    
    // //Moving Animation Event
    // container.addEventListener("mousemove", (e) => {
    //     let xAxis = (window.innerWidth / 1 - e.pageX) / 150;
    //   let yAxis = (window.innerHeight / 1 - e.pageY) / 150;
    //   card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
    // });
    // //Animate In
    // container.addEventListener("mouseenter", (e) => {
    //   card.style.transition = "all .1s ease";
    //   //Popout
    //   title.style.transform = "translateZ(100px)";
    //   sneaker.style.transform = "translateZ(100px) rotateZ(-30deg)";
    //   description.style.transform = "translateZ(125px)";
    //   sizes.style.transform = "translateZ(60px)";
    //   rs.style.transform = "translateZ(70px)"
    //   purchase.style.transform = "translateZ(80px)";
    // });
    // //Animate Out
    // container.addEventListener("mouseleave", (e) => {
    //   card.style.transition = "all 0.5s ease";
    //   card.style.transform = `rotateY(0deg) rotateX(0deg)`;
    //   //Popback
    //   title.style.transform = "translateZ(0px)";
    //   sneaker.style.transform = "translateZ(0px) rotateZ(0deg)";
    //   description.style.transform = "translateZ(0px)";
    //   sizes.style.transform = "translateZ(0px)";
    //   rs.style.transform = "translateZ(0px)";
    //   purchase.style.transform = "translateZ(0px)";
    // });
    



    (function($) {
 
      var SliceSlider = {
        
        /**
         * Settings Object
         */
        settings: {
          delta:              0,
          currentSlideIndex:  0,
          scrollThreshold:    40,
          slides:             $('.slide'),
          numSlides:          $('.slide').length,
          navPrev:            $('.js-prev'),
          navNext:            $('.js-next'),
        },
        
        /**
         * Init
         */
        init: function() {
          s = this.settings;
          this.bindEvents();
        },
        
        /**
         * Bind our click, scroll, key events
         */
        bindEvents: function(){
          
          // Scrollwheel & trackpad
          s.slides.on({
            'DOMMouseScroll mousewheel' : SliceSlider.handleScroll
          });
          // On click prev
          s.navPrev.on({
            'click' : SliceSlider.prevSlide
          });
          // On click next
          s.navNext.on({
            'click' : SliceSlider.nextSlide
          });
          // On Arrow keys
          $(document).keyup(function(e) {
            // Left or back arrows
            if ((e.which === 37) ||  (e.which === 38)){
              SliceSlider.prevSlide();
            }
            // Down or right
            if ((e.which === 39) ||  (e.which === 40)) {
              SliceSlider.nextSlide();
            }
          });
        },
        
        /** 
         * Interept scroll direction
         */
        handleScroll: function(e){
    
          // Scrolling up
          if (e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0) { 
    
            s.delta--;
         
            if ( Math.abs(s.delta) >= s.scrollThreshold) {
              SliceSlider.prevSlide();
            }
          }
     
          // Scrolling Down
          else {
     
            s.delta++;
     
            if (s.delta >= s.scrollThreshold) {
              SliceSlider.nextSlide();
            }
          }
     
          // Prevent page from scrolling
          return false;
        },
    
        /**
         * Show Slide
         */
        showSlide: function(){ 
          // reset
          s.delta = 0;
          // Bail if we're already sliding
          if ($('body').hasClass('is-sliding')){
            return;
          }
          // Loop through our slides
          s.slides.each(function(i, slide) {
    
            // Toggle the is-active class to show slide
            $(slide).toggleClass('is-active', (i === s.currentSlideIndex)); 
            $(slide).toggleClass('is-prev', (i === s.currentSlideIndex - 1)); 
            $(slide).toggleClass('is-next', (i === s.currentSlideIndex + 1)); 
            
            // Add and remove is-sliding class
            $('body').addClass('is-sliding');
    
            setTimeout(function(){
                $('body').removeClass('is-sliding');
            }, 1000);
          });
        },
    
        /**
         * Previous Slide
         */
        prevSlide: function(){
          
          // If on first slide, loop to last
          if (s.currentSlideIndex <= 0) {
            s.currentSlideIndex = s.numSlides;
          }
          s.currentSlideIndex--;
          
          SliceSlider.showSlide();
        },
    
        /**
         * Next Slide
         */
        nextSlide: function(){
          
          s.currentSlideIndex++;
       
          // If on last slide, loop to first
          if (s.currentSlideIndex >= s.numSlides) { 
            s.currentSlideIndex = 0;
          }
     
          SliceSlider.showSlide();
        },
      };
      SliceSlider.init();
    })(jQuery);