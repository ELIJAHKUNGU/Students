//Java script for preloader
var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
    loader.style.display = "none";
});

//Java Script for loading date
document.getElementById("myBtn").addEventListener("click", displayDate);

function displayDate() {
    
document.getElementById("demo").innerHTML = Date();

}


//Java script for side bar menu
let toggleNavStatus = false;

let toggleNav = function() {
    let getSidebar = document.querySelector(".nav-sidebar");
    let getSidebarMenu = document.querySelector(".btn-toggle-nav");
    let getSidebarClose = document.querySelector(".close-tab");
    let getSidebarUl = document.querySelector(".nav-sidebar ul");
    let getSidebarUl1 = document.getElementById("dropdown");
    let container = document.querySelector("#Durag");
    let getSidebarTitle = document.querySelector(".nav-sidebar span");
    let getSidebarLinks = document.querySelectorAll(".nav-sidebar a");//All takes all the elements under the anchor tags

     container.addEventListener("mouseenter", function()
     {
        getSidebarUl1.style.display = "block";
        getSidebarUl1.style.visibility = "visible";

     });
    
     container.addEventListener("mouseleave", function()
     {
        getSidebarUl1.style.display = "block";
        //getSidebarUl1.style.visibility = "hidden"; 
     });
    if (toggleNavStatus === false) {
        getSidebarUl.style.visibility = "visible";
        getSidebarMenu.style.visibility = "hidden";
        getSidebarClose.style.visibility = "visible";
        getSidebarUl1.style.display = "none";
        getSidebar.style.width = "272px";
        getSidebar.style.backgroundColor = "#57606f";
        getSidebarTitle.style.opacity = "0.5";
        
        let arrayLength = getSidebarLinks.length;
        for (let i = 0; i < arrayLength; i++) {
            getSidebarLinks[i].style.opacity = "1";
        }
        toggleNavStatus = true;
    }
    else if (toggleNavStatus === true) {
        getSidebarMenu.style.visibility = "visible";
        getSidebarClose.style.visibility = "hidden";
        getSidebar.style.width = "50px";
        getSidebarUl.style.visibility = "hidden";
        getSidebarUl1.style.display = "none";
        getSidebarTitle.style.opacity = "0";
        toggleNavStatus = false;

        let arrayLength = getSidebarLinks.length;
        for (let i = 0; i < arrayLength; i++) {
            getSidebarLinks[i].style.opacity = "0";
        }
        
    }

}