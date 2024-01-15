let form = document.getElementById("msg-send-form");
let msgInput = document.getElementById("message");
let msgBtn = form.querySelector("button");
let reloadBtn = document.getElementById("reload-btn");
reloadBtn.onclick = ()=>{
    location.reload();
    scrollToBottom();
}



msgInput.addEventListener("input", ()=>{
    if(msgInput.value != ""){
        msgInput.classList.add("active");
        msgBtn.classList.add("active");
    }else {
        msgInput.classList.remove("active");
        msgBtn.classList.remove("active");
    }
})





form.onsubmit =  (e)=>{
    e.preventDefault();
}









msgBtn.onclick = ()=>{
    let testxhr = new XMLHttpRequest();
    testxhr.open("POST", "../../../scripts/php/chat.php", true);
    testxhr.onload = ()=>{
        if(testxhr.readyState == XMLHttpRequest.DONE && testxhr.status == 200){
            msgInput.value = "";
            location.reload();
            scrollToBottom();
        }
    }
    let formData = new FormData(form);
    testxhr.send(formData);
}



