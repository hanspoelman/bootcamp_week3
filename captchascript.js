$(document).ready(function() {
$("#reload").click(function() {
    
$("img#img").remove();
    var id = Match.random();
$('<img id="img" src="captchascript.php?id='+id+'"/>').appendTo("#imgdiv");
id ='';    
});

$('#button').click(function(){
var captcha = $("captcha1").val();

if(captcha == '')
    {
        alert("fill ALL Fields")
    }
    
else
    {
        var datastring = 'captcha=' + captcha;
    }
$.ajx({
type: "POST",
url: "verify.php",
data: datastring,
succes: function(html){
    alert(html);
}   
});    
}
                   });
});