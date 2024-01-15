let form = document.querySelector(".login form");
let submit = document.querySelector(".login .submit");
let error = document.querySelector(".error");

form.onsubmit =  (e)=>{
    e.preventDefault();
}

submit.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../scripts/php/login.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(data == "done"){
                    location.href = "../../pages/home/home.php";
                }else {
                    error.style.display = "flex";
                    error.innerHTML = `${data}  <span class="warning"><i class="fas fa-warning"></i></span>`;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
