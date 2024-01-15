const form = document.getElementById("form");
const updateBtn = document.querySelector(".update");
let errorBox = document.querySelector(".error");
form.onsubmit = (e)=>{
    e.preventDefault();
}


updateBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest;
    xhr.open("POST", "../../../scripts/php/edit_profile.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            let data = xhr.response;
            if(data == "done"){
                location.href = "../profile.php";
            }else{
                errorBox.style.display = "flex";
                errorBox.innerHTML = `${data} <i class="fas fa-warning"></i>`;
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}