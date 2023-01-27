const burger = document.getElementById('boiteBurger');
const burgerBar = document.getElementById('burgerBar');


burger.addEventListener('click', ()=> {
    burgerBar.classList.toggle('burgerOpen');
})