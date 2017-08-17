var username = getCookie("css");
if (username != "") {

    $("link.changeme").attr("href",username);
    
}




$(document).ready(function(){

	$('.switch').click(function(){
	 
	    $("label[for='"+$(this).attr("id")+"']").find('i').toggleClass('fa fa-chevron-up fa fa-chevron-down ')
	});
	
	
$(".theme").click(function() { 
	$("link.changeme").attr("href",$(this).attr('rel'));
	setCookie("css",$(this).attr('rel'),5)

	

	return false;
});
});



function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


