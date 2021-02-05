function validation(){
    var pass = document.getElementById('pass').value;
    var mail = document.getElementById('email').value;

    var reg_mail = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    if(!reg_mail.test(mail)){
        alert("Enter a valid Email");
        return false;
    }
    else if(pass.length < 6){
        alert("Minimum password length is 6");
        return false;
    }
}