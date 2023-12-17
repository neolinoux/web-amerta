let navbar = document.querySelector('header .navbar');

document.querySelector('#menu-btn').onclick = function () {
    navbar.classList.toggle('active');
}

window.onscroll = function () {
    navbar.classList.remove('active');
}

// if click
// document.querySelector('#home').onclick = function () {
//     window.location.href = 'index.html';
// }

// document.querySelector('#news').onclick = function () {
//     window.location.href = 'kabar-dan-info-62.html';
// }

// document.querySelector('#gallery').onclick = function () {
//     window.location.href = 'kaca-62.html';
// }
    
// document.querySelector('#about').onclick = function () {
//     window.location.href = 'kreasi-62.html';
// }