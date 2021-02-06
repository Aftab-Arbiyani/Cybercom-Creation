function validation(){
    var name = document.getElementById('name').value;
    var mail = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;
    var dob = document.getElementById('dob').value;

    var reg_user = /^([A-Za-z]{3,})$/;
    var reg_mail = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    var reg_date = /^(0?[1-9]|1[0-2])[\/](0?[1-9]|[1-2][0-9]|3[01])$/;

    if(!reg_user.test(name)){
        alert("Enter valid Username");
        return false;
    }
    else if(!reg_mail.test(mail)){
        alert("Enter a valid Email");
        return false;
    }
    else if(pass.length < 6){
        alert("Minimum password length is ");
        return false;
    }
    else if(!reg_date.test(dob)){
        alert('Date format is MM/DD/YYYY');
        return false;
    }
    else{
        return true;
    }
}