function Sess(){
    var email=document.getElementById('email').value;
    var d=new Date();
    var log=[];
    var login={
        email: email,
        loginTime: d,
        logoutTime
    }
    if(localStorage.getItem('log'))
	{
	    log = JSON.parse(localStorage.getItem('log'));
    }

     log.push(login);
    localStorage.setItem("log", JSON.stringify(log));
}