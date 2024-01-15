let messagesHolder = document.getElementById("messages-box");

let xhr = new XMLHttpRequest();
xhr.open("POST", "../../../scripts/php/get_chat.php", true);
xhr.onload = ()=>{
    if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
        let data = xhr.response;
        messagesHolder.innerHTML = data;
        scrollToBottom();
    }
}

let formData = new FormData(form);
xhr.send(formData);



function scrollToBottom(){
    messagesHolder.scrollTop = messagesHolder.scrollHeight;
}
scrollToBottom();