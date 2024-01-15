let links   = document.getElementById("links"),
    menuBtn = document.getElementById("menu-btn");
    menuIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", ()=>{
    links.classList.toggle("active");
    menuIcon.classList.toggle("fa-close");
    menuIcon.classList.toggle("fa-home");
})