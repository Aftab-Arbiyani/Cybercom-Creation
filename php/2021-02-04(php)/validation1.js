

function validateform(){
    var name = document.getElementById('Name').value;
    var pass = document.getElementById('Password').value;
    var namepattern = /^([a-zA-Z]{3,})$/;

    if(!namepattern.test(name)){

        alert("Enter valid name");
        return false;
    }
    if(pass.length<=6){
        alert("Enter a longer password");
        return false;
    }
}
