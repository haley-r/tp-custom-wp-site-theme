// modeled after MobileMenu.js

class TestimonialTiles {
  constructor() {
    this.testimonialsGrid = document.querySelector(".testimonials");
    this.testimonial = document.querySelector(".testimonials blockquote")
    this.events()
  }

  events() {
    window.addEventListener("load", this.updateTestimonialsDisplay);
    window.addEventListener("resize", this.updateTestimonialsDisplay);
  }

  updateTestimonialsDisplay(){
    if (window.innerWidth >= 950) {
      document.querySelector(".testimonials").classList.add("grid");
      makeNewMasonryLayout();
      }
    else {
      document.querySelector(".testimonials").classList.remove("grid");
    }
  }

  makeNewMasonryLayout(){
    var elem = document.querySelector('.grid');
    var msnry = new Masonry(elem, {
      itemSelector: '.wp-block-quote',
      columnWidth: 200
    });
    msnry.layout();
  }
}

export default TestimonialTiles


// masonry layout for testimonials (put in module once working)

// if (window.innerWidth >= 950) {
//   console.log("hello");
//   this.header.classList.toggle("header-menu-active")
// }

// var elem = document.querySelector('.testimonials');
// var msnry = new Masonry(elem, {
//   // options
//   itemSelector: 'blockquote',
//   columnWidth: 200
// });

