//! CopyRight
let year = document.getElementById("year").innerHTML = new Date().getFullYear();
//! Fixed Navbar
let navbar = document.querySelector(".navbar");
window.addEventListener("scroll", function () {
    if (window.scrollY > 120) {
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
});