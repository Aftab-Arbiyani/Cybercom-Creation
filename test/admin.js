function add(){
    var admin=[];
    var name=document.getElementById('name').value;
    var mail=document.getElementById('email').value;
    var pass=document.getElementById('one').value;
    var cred={
        name: name,
        mail:mail,
        pass: pass
    }
    //var arr=localStorage.getItem('admin');
    //var item=JSON.parse(arr);
    //arr=item;

    /*if(arr != null){
        alert("Admin already exists ");
    }*/

    if(localStorage.getItem('admin'))
    {
        admin = JSON.parse(localStorage.getItem('admin'));
    }

    admin.push(cred);
    localStorage.setItem("admin", JSON.stringify(admin));
    //document.write(localStorage);
}   
     