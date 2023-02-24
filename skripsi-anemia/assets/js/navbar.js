var hamburger = document.querySelector(".hamb");
var navlist = document.querySelector(".nav-list");
var links = document.querySelector(".nav-list li");


hamburger.addEventListener("click",function(){
    this.classList.toogle("click");
    navlist.classList.toogle("open");
});