let onlineUsersHolder = document.getElementById("online-users-holder");


let xhr = new XMLHttpRequest();
xhr.open("GET", "../../scripts/php/get_online_users.php", true);
xhr.onload = ()=>{
    if(xhr.readyState == XMLHttpRequest.DONE){
        if(xhr.status == 200){
            let data = xhr.response;
            onlineUsersHolder.innerHTML += data;
            let userCount = onlineUsersHolder.childElementCount;
            if(userCount > 1){
                onlineUsersHolder.style.width = `${userCount * 70}px`;
                console.log(userCount);
            }else{
                onlineUsersHolder.style.width = "200px";
                console.log("no users");
            }
        }
    }
}
xhr.send();
