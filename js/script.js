const hamburger = document.querySelector('.hamburger');
const menuNav = document.querySelector('.menu');
const closed = document.querySelector('.close');

hamburger.addEventListener('click', function(){
    menuNav.classList.add('right-0')
})

closed.addEventListener('click', function(){
    menuNav.classList.remove('right-0')
})

const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function(){
    const windowScrool = window.scrollY > 0;
    navbar.classList.toggle('scrolling-active', windowScrool);
})

