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
//! Scroll
const Scroll = document.querySelector(".scroll")
window.addEventListener("scroll", function () {
    if (window.scrollY > 100) {
        Scroll.classList.add("show");
    } else {
        Scroll.classList.remove("show");
    }
});
document.querySelector(".scroll").addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
})