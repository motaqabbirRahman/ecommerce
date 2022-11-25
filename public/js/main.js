let search = document.querySelector('.search-box');
document.querySelector('#search-icon').onclick = () =>{
    search.classList.toggle('active');
    navbar.classList.remove('active');
    menu.classList.remove('move');
    navbar.classList.remove('active');
    login.classList.remove('active');
}

let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar');
menu.onclick = () => {
    navbar.classList.toggle('active');
    menu.classList.toggle('move');
    cart.classList.remove('active'); 
    search.classList.remove('active');
    login.classList.remove('active');
}

let cart = document.querySelector('.cart')
document.querySelector('#cart-icon').onclick = () =>{
    cart.classList.toggle('active');
    navbar.classList.remove('active');
    menu.classList.remove('move'); 
    search.classList.remove('active');
    login.classList.remove('active');
}

let login = document.querySelector('.login-form');
document.querySelector('#user-icon').onclick = () =>{
    login.classList.toggle('active');
    search.classList.remove('active');
    navbar.classList.remove('active');
    menu.classList.remove('move');
    cart.classList.remove('active');
    
}