let password = document.getElementById("password");
let progress = document.querySelector(".val");

password.addEventListener("input", ()=>{
    let passVal = password.value.length;
    if(passVal <= 0){
        progress.classList.add("weak");
    }
    else {
        progress.classList.remove("weak");
    }
    if (passVal >= 1 && passVal < 5){
        progress.classList.add("medium");
    }
    else {
        progress.classList.remove("medium");
    }
    if (passVal >= 5  && passVal < 9){
        progress.classList.add("strong");
    }
    else {
        progress.classList.remove("strong");
    }
    if (passVal >= 9){
        progress.classList.add("vstrong");
    }
    else {
        progress.classList.remove("vstrong");
    }
})