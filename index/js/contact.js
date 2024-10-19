const navbar = document.querySelector (".navbar ");

window.addEventListener("scroll",() => { 
    const windowposition = window.scrollY > 0; 
    navbar.classList.toggle 
    ("scrolling-active",windowposition);
});
