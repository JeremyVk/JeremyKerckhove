const mobileNav = document.querySelector('.mobile-nav');
const hamb = document.querySelector('#hamburger');
const logo = document.querySelector('.logo');
hamb.addEventListener('click', () => {
    mobileNav.classList.toggle('active');
    logo.classList.toggle('active');
})