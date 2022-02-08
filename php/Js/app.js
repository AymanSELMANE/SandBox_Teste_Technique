//app js

const hamburger = document.querySelector(".hamburger");
const NavMenu = document.querySelector(".navbar-links-slide");

hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("active");
    NavMenu.classList.toggle("active");
});

const navigation = document.querySelector("navbar");
const colorChangeText = document.querySelector("nav_li_a");

window.addEventListener('scroll', () => {
    if(window.scrollY > 30) {
        navigation.classList.add('AnimeNav');
        colorChangeText.classList.add('ColorText');
        
    } else {
        navigation.classList.remove('AnimeNav');
        colorChangeText.classList.remove('ColorText');
    }
});
