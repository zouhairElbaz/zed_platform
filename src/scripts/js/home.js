let currentUserPic = document.getElementById("current_user_pic");

let xhr = new XMLHttpRequest();
xhr.open("GET", "../../scripts/php/home.php", true);
xhr.onload = ()=>{
    if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
        let data = xhr.response;
        currentUserPic.innerHTML = data;
    }
}
xhr.send();