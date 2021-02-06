var array = localStorage.getItem('array');
		var items = JSON.parse(array);
		
		array = items;
		
		document.write('<table border = "1" id = "table1">');
		document.write('<tr>');
		document.write('<th>Name</th> <th>Email</th><th>Password</th><th>Date Of Birth</th><th>Age</th><th colspan="2">Action</th></tr> <tr>');
					
			if(array === null )
			{
				alert("Records not found!");
				document.getElementById("table1").style.display = "none";
				window.open("User.html");
			}			
			else
			{
				for(var k = 0 ; k < array.length; k++)
				{	
					document.write('<td>'+ array[k].name + '</td>' );
                    document.write('<td style="color: blue; text-decoration: underline;">'+ array[k].email + '</td>' );
                    document.write('<td>'+array[k].password+'</td>');
                    document.write('<td>'+ array[k].birthdate + '</td>' );
                    document.write('<td>'+array[k].age);
                    document.write('<td><a href="">edit</a></td><td><a onclick="deleteItem()">Delete</a></td>');
					document.write('</tr>');
				}
            }