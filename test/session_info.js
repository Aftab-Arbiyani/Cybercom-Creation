var log = localStorage.getItem('log');
var items = JSON.parse(log);
log = items;
		
document.write('<table>');document.write('<tr>');
document.write('<th>Email</th><th>Login Date Time</th></tr><tr>');

for(var k=0;k<log.length;k++){
    document.write('<td>'+log[k].email+'</td>');
    document.write('<td>'+log[k].loginTime+'</td>');
    document.write('</tr>');
}

document.write('</table>');