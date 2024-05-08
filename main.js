let nav= document.querySelector(".navbar");
window.onscroll=function(){
    if(document.documentElement.scrollTop > 50){
    nav.classList.add("header-scrolled");
}else{
    nav.classList.remove("header-scrolled");
}
}

let navBar=document.querySelectorAll(".nav-link");
let navCollapse=document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function(a){
    a.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
});

var swiper = new Swiper(".mySwiper", {
    // Default parameters
    direction:"vertical",
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    autoplay: {
        delay: 3500,
    },
  });

  document.addEventListener("DOMContentLoaded", () =>{
    function counter(id,start,end,duration){
        let obj=document.getElementById(id),
        current=start,
        range=end-start,
        increment=end>start?1:-1;
        step=Math.abs(Math.floor(duration/range)),
        id=setInterval(() => {
            current+=increment;
            obj.textContent=current;
            if(current==end){
                clearInterval(id);
            }
        }, step);
    }
    counter("count1",0,12878,3000);
    counter("count2",100,53347,3000);
    counter("count3",0,17847,3000);
    counter("count4",0,66784,3000);
  });

 
  var swiper = new Swiper(".our-partner", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true, 
    autoplay: {
    delay: 2000,
    },
    breakpoints: {
    '991': {
    slidesPerView: 5, 
    spaceBetween: 10,
    }, 
    '767': {
    slidesPerView: 3,
    spaceBetween: 10,
    },
    '320': {
    slidesPerView: 2,
    spaceBetween: 8,
    },
    },
    });