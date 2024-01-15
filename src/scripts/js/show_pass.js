let pass = document.getElementById("password");
let passIcon = document.getElementById("pass-icon");

passIcon.addEventListener("click", ()=>{
    if(pass.type == "password"){
        pass.type = "text";
        passIcon.classList.toggle("fa-lock-open");
    }else {
        pass.type = "password";
        passIcon.classList.toggle("fa-lock-open");
    }
})