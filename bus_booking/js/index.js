 //faqs section
 const accordion = document.getElementsByClassName("faq-container");

 for (i = 0; i < accordion.length; i++) {
     accordion[i].addEventListener("click", function() {
         this.classList.toggle("active");
         // console.log("im clicked");
     });
 }

 //scroll navabar
 window.addEventListener("scroll", function(e) {
     var header = document.getElementById("header");
     if (
         document.documentElement.scrollTop ||
         document.body.scrollTop > window.innerHeight
     ) {
         header.classList.add("nav-colored");
         header.classList.remove("nav-transparent");
     } else {
         header.classList.add("nav-transparent");
         header.classList.remove("nav-colored");
     }
     var navlinksmain = document.getElementById("nav");
     if (
         document.documentElement.scrollTo ||
         document.body.scrollTop > window.innerHeight
     ) {
         navlinksmain.classList.add("navlinks-color");
     }
 });
 // jquery method
 $(document).ready(function() {
     // main-banner owl carousel
     $("#main-banner .owl-carousel").owlCarousel({
         nav: false,
         dots: false,
         autoplay: true,
         loop: true,
         margin: 20,
         responsive: {
             0: {
                 items: 1,
             },
             600: {
                 items: 1,
             },
             1000: {
                 items: 1,
             },
         },
     });
     // subbanner owl carousel
     $("#sub-banner .owl-carousel").owlCarousel({
         nav: false,
         dots: true,
         autoplay: true,
         loop: true,
         margin: 20,
         responsive: {
             0: {
                 items: 1,
             },
             600: {
                 items: 2,
             },
             1000: {
                 items: 3,
             },
         },
     });
     // clients owl carousel
     $(".client-section-title  .owl-carousel").owlCarousel({
         nav: false,
         dots: true,
         autoplay: true,
         loop: true,
         margin: 20,
         responsive: {
             0: {
                 items: 1,
             },
             600: {
                 items: 1,
             },
             1000: {
                 items: 1,
             },
         },
     });
     $(".getstarted .owl-carousel").owlCarousel({
         nav: true,
         dots: false,

         loop: false,
         navText: [
             "<span><i class='fas fa-arrow-left'></i> Previous</span>",

             "<span>Next <i class='fas fa-arrow-right'></i></span>",
         ],
         responsive: {
             0: {
                 items: 1,
             },
             600: {
                 items: 1,
             },
             1000: {
                 items: 1,
             },
         },
     });
 });