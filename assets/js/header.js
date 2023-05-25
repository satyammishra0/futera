// ---------------------
// Header Transformation
// ---------------------

const header = document.querySelector(".header");
const mobile_nav_btn = document.querySelector(".mobile-navbar-btn");

const toggleNavbar = () => {
  header.classList.toggle("active");
};

mobile_nav_btn.addEventListener("click", () => toggleNavbar());
