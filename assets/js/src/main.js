// Cookie
var $$ = document.querySelector.bind(document);
var CookieWidget = {
    control: '#cookiealert',
    close: '#cookiealert--close',
    init: function() {
        var element = $$(CookieWidget.control);
        if (typeof(element) != 'undefined' && element != null) {
        if (!CookieWidget.getCookie('cookieinfo')) { 
            $$(CookieWidget.control).classList.remove('d-none');
        }
        CookieWidget.listeners();
        }
    },
    listeners: function () {
        $$(CookieWidget.close).addEventListener('click', function(){
        CookieWidget.setCookie('cookieinfo', true, 999);
            $$(CookieWidget.control).classList.add('d-none');
        });
    },
    setCookie: function(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    },
    getCookie: function(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
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
}
CookieWidget.init();
// Cookie end

// Loader
window.addEventListener("load", function(event) { 
    var element = document.getElementsByClassName("loader");
    element[0].classList.remove("loader--loading");
    element[0].classList.add("loader--finish");
});
// Loader end

// AOS Animate on scroll
AOS.init({
    offset: 100, // offset (in px) from the original trigger point
    delay: 300, // values from 0 to 3000, with step 50ms
    duration: 300, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: true, // whether animation should happen only once - while scrolling down
});
// AOS end

// Parallax
const image = document.getElementsByClassName('parallax');
new simpleParallax(image);
// Parallax end