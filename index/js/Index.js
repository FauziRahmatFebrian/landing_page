const navbar = document.querySelector (".navbar ");

window.addEventListener("scroll",() => { 
    const windowposition = window.scrollY > 0; 
    navbar.classList.toggle 
    ("scrolling-active",windowposition);
});

var typed = new Typed (".auto-typed", {
    strings: ["KEMA FISIP UPNVJ", "Abirama Cakrabinaya"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
})
