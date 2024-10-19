const navbar = document.querySelector (".navbar ");

window.addEventListener("scroll",() => { 
    const windowposition = window.scrollY > 0; 
    navbar.classList.toggle 
    ("scrolling-active",windowposition);
});

const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})