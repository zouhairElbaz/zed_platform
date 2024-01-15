let allUsersHolder = document.getElementById("users-list");


    let xhrAll = new XMLHttpRequest();
    xhrAll.open("GET", "../../scripts/php/get_all_users.php", true);
    xhrAll.onload = ()=>{
        if(xhrAll.readyState == XMLHttpRequest.DONE){
            if(xhrAll.status == 200){
                let data = xhrAll.response;
                allUsersHolder.innerHTML += data;
            }
        }
    }
    xhrAll.send();

