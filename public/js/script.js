// Sidebar Action
const menuToggle = document.querySelector(".navbar-toggler");
const closeButton = document.querySelector(".close-button");
const sideBar = document.querySelector(".sidebar-container");

menuToggle.addEventListener("click", function () {
    sideBar.style.width = "100%";
});
closeButton.addEventListener("click", function () {
    sideBar.style.width = "0";
});

// Navbar Fade
let prevScroll = scrollY;
$(window).scroll(function () {
    const navbar = document.querySelector(".page-header");
    let currentScroll = scrollY;
    if (prevScroll > currentScroll) {
        navbar.style.top = "0";
        navbar.style.transition = "all 0.5s";
    } else {
        navbar.style.top = "-80px";
        navbar.style.transition = "all 0.5s";
    }
    prevScroll = currentScroll;
});

// Dropdown Menu Action
$(document).ready(function () {
    $(".dropdown-toggle").on("click", function () {
        $(".dropdown-toggle").toggleClass("show");
        $(".dropdown-menu").toggleClass("show");
    });
});
