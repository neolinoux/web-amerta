let navbar = document.querySelector('header .navbar');

document.querySelector('#menu-btn').onclick = function () {
    navbar.classList.toggle('active');
}

window.onscroll = function () {
    navbar.classList.remove('active');
}