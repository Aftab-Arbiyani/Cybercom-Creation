function validation(){
    var name = document.getElementById('name').value;
    var mail = document.getElementById('email').value;
    //var com = document.getElementById('com').value;

    var reg_user = /^([A-Za-z]{3,})$/;
    var reg_mail = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    //var reg_com = /^[A-Za-z. , ?][0-9]$/;
    if(!reg_user.test(name)){
        alert("Enter valid Username");
        return false;
    }
    else if(!reg_mail.test(mail)){
        alert("Enter a valid Email");
        return false;
    }
    
    /*if(reg_com.test(com)){
        alert("")
    }*/
}