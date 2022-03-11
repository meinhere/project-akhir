// Sidebar Action
const menuToggle = document.querySelector('.navbar-toggler');
const closeButton = document.querySelector('.close-button');
const sideBar = document.querySelector('.sidebar-container');

menuToggle.addEventListener('click', function () {
  sideBar.style.width = '100%';
});
closeButton.addEventListener('click', function () {
  sideBar.style.width = '0';
});

// Navbar Fade
let prevScroll = scrollY;
$(window).scroll(function () {
  const navbar = document.querySelector('.page-header');
  let currentScroll = scrollY;
  if (prevScroll > currentScroll) {
    navbar.style.top = '0';
    navbar.style.transition = 'all 0.5s';
  } else {
    navbar.style.top = '-80px';
    navbar.style.transition = 'all 0.5s';
  }
  prevScroll = currentScroll;
});

// Login Page Action
let x = document.getElementById("login");
let y = document.getElementById("register");
let z = document.getElementById("btn-active");
let a = document.querySelector(".labelLogin");
let b = document.querySelector(".labelRegister");

function register() {
  x.style.left = "-400px";
  y.style.left = "50px";
  z.style.left = "120px";

  setTimeout(() => {
    a.style.color = "black";
    b.style.color = "white";
  }, 200);
}

function login() {
  x.style.left = "50px";
  y.style.left = "450px";
  z.style.left = "0px";
  setTimeout(() => {
    a.style.color = "white";
    b.style.color = "black";
  }, 200);
}
