/*
 * Skrypt wy¶wietlaj±cy okienko z informacj± o wykorzystaniu ciasteczek (cookies)
 * 
 * Wiêcej informacji: http://webhelp.pl/artykuly/okienko-z-informacja-o-ciasteczkach-cookies/
 * 
 */

function WHCreateCookie(name, value, days) {
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    var expires = "; expires=" + date.toGMTString();
	document.cookie = name+"="+value+expires+"; path=/";
}
function WHReadCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

window.onload = WHCheckCookies;

function WHCheckCookies() {
    if(WHReadCookie('cookies_accepted') != 'T') {
        var message_container = document.createElement('div');
        message_container.id = 'cookies-message-container';
        var html_code = '<div id="cookies-message" style="padding: 10px 0px; font-size: 14px; line-height: 22px; border-bottom: 1px solid rgb(211, 208, 208); text-align: center; position: fixed; top: 0px; background-color: #c0c0c0; width: 100%; z-index: 999; font-size:10px; line-height: 150%"> Ta strona korzysta z plików cookies dla celów statystycznych. <br> Korzystaj¹c z naszej strony bez zmiany ustawieñ przegl¹darki bêd¹ one zapisane w pamiêci urz¹dzenia, <br> wiêcej informacji na temat zarz¹dzania plikami cookies znajdziesz w Polityce prywatnoœci. <br> <br>  <a href="cookies_info.html" target="_blank"  style="background-color: #364572; padding: 5px 10px; color: #FFF; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; display: inline-block; margin-left: 10px; text-decoration: none; cursor: pointer;"  >Dowiedz siê wiêcej</a><a href="javascript:WHCloseCookiesWindow();" id="accept-cookies-checkbox" name="accept-cookies" style="background-color: #364572; padding: 5px 10px; color: #FFF; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; display: inline-block; margin-left: 10px; text-decoration: none; cursor: pointer;">OK</a></div>';

        message_container.innerHTML = html_code;
        document.body.appendChild(message_container);
    }
}

function WHCloseCookiesWindow() {
    WHCreateCookie('cookies_accepted', 'T', 365);
    document.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));
}
