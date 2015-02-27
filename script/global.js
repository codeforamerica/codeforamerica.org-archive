// Adds class of js to the html tag if JS is enabled.
document.getElementsByTagName('html')[0].className += ' js';


// Adds class of svg to the html tag if svg is enabled.
(function flagSVG() {
    var ns = {'svg': 'http://www.w3.org/2000/svg'};
    if(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {
        document.getElementsByTagName('html')[0].className += ' svg';
    }
})();

// off-canvas pattern for navigation.
(function (win, doc) {
    'use strict';
    if (!doc.querySelector || !win.addEventListener) {
        // doesn't cut the mustard.
        return;
    }
    if (doc.documentElement.clientWidth < 640) {
        // If the viewport is small enough, use the off-canvas pattern for navigation.
        if (!doc.querySelector('.js-container') || !doc.querySelector('.nav-global-primary') || !doc.querySelector('.nav-global-secondary') || !doc.querySelector('.skip-to-nav')
        ) {
            return;
        }
        var toggleclass = 'slid',
            reg = new RegExp('(\\s|^)' + toggleclass + '(\\s|$)'),
            page = doc.querySelector('.js-container'),
            primary = doc.querySelector('.nav-global-primary'),
            secondary = doc.querySelector('.nav-global-secondary'),
            skiplink = doc.querySelector('.skip-to-nav'),
            newnav = doc.createElement('div'),
            togglePage = function(e) {
                e.preventDefault();
                if (!page.className.match(reg)) {
                    page.className += ' ' + toggleclass;
                } else {
                    page.className = page.className.replace(reg, '');
                }
            };
        skiplink.addEventListener('click', togglePage, false);
        newnav.appendChild(secondary);
        newnav.appendChild(primary);
        newnav.className = 'js-offcanvas';
        skiplink.className = skiplink.className + ' persist';
        doc.body.appendChild(newnav);
    } else {
        // Add or remove a class on the navigation depending on how far the user has scrolled down. In the CSS, this class gets position:fixed within a widescreen media query.
        if (!doc.querySelector('.global-header') || !doc.querySelector('.masthead-l') || !doc.querySelector('.nav-global-primary')) {
            return;
        }
        var toggleclass = 'sticky',
            reg = new RegExp('(\\s|^)' + toggleclass + '(\\s|$)'),
            header = doc.querySelector('.global-header'),
            triggerpoint = doc.querySelector('.global-header').getBoundingClientRect().top - document.body.getBoundingClientRect().top,
            scrollDistance = null,
            checkToggle = function () {
                scrollDistance = (win.pageYOffset !== undefined) ? win.pageYOffset : doc.body.scrollTop;
                if (scrollDistance > triggerpoint) {
                    if (!header.className.match(reg)) {
                        header.className += ' ' + toggleclass;
                    }
                } else {
                    if (header.className.match(reg)) {
                        header.className = header.className.replace(reg, '');
                    }
                }
            };
        checkToggle();
        win.addEventListener('scroll', checkToggle, false);
    }
}(this, this.document));

// Adds a fade to elements with the ID of "fade". Modified from http://stackoverflow.com/questions/3795481/javascript-slidedown-without-jquery
var minheight = 50;
//var maxheight = document.getElementById('fade').offsetHeight + 15;
var time = 1000;
var timer = null;
var toggled = false;

if (document.getElementById('fade')) {
    window.onload = function() {
        var controller = document.getElementById('fade-activate');
        var slider = document.getElementById('fade-content');
        slider.style.height = minheight + 'px';
        controller.onclick = function(e) {
            e.preventDefault();
            clearInterval(timer);
            var instanceheight = parseInt(slider.style.height);  // Current height
            var init = (new Date()).getTime(); // start time
            var height = (toggled = !toggled) ? maxheight: minheight; // if toggled
            var disp = height - parseInt(slider.style.height);
            timer = setInterval(function() {
                var instance = (new Date()).getTime() - init; // animating time
                if(instance <= time ) { // 0 -> time seconds
                    var pos = instanceheight + Math.floor(disp * instance / time);
                    slider.style.height =  pos + 'px';
                } else {
                    slider.style.height = height + 'px'; // safety side ^^
                    clearInterval(timer);
                }
            },1);
        };
    };
}

// Tracking inbound referral for use in non-Google Analytics APIs (namely, for fellowship application form)
(function (doc) {
    // Check if there is a referrer
    console.log("hello");
    if (doc.referrer !== "") { 
        // Split up the referrer so we can look at it
        var hash = (doc.referrer).split("/");
        // Get the domain
        var domain = hash[2];
        // If the domain is Code for America, stop the presses
        if (hash[2] == "www.codeforamerica.org" || hash[2] == "codeforamerica.org") { 
            return;
        }
        // Otherwise, store it in local storage
        localStorage.setItem('externalReferrer',doc.referrer);
    }
})(this.document);
