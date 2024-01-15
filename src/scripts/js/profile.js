let userInfoHolder = document.getElementById("user-info-holder");



let xhr = new XMLHttpRequest;
xhr.open("GET", "../../scripts/php/profile.php", true);
xhr.onload = ()=>{
    if(xhr.readyState = XMLHttpRequest.DONE && xhr.status == 200){
        let data = xhr.response;
        userInfoHolder.innerHTML = data;
    }
}
xhr.send();

