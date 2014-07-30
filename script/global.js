// Adds class of js to the html tag if JS is enabled.
document.getElementsByTagName('html')[0].className += ' js';


// Adds class of svg to the html tag if svg is enabled.
(function flagSVG() {
    var ns = {'svg': 'http://www.w3.org/2000/svg'};
    if(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {
        document.getElementsByTagName('html')[0].className += ' svg';
    }
})();


// Make page title font-size smaller if it doesn't fit the container
(function (win, doc) {
    'use strict';
    if (!win.getComputedStyle || !doc.querySelector) {
        // doesn't cut the mustard
        return;
    }
    var container = doc.querySelector('.masthead'),
        pagetitle = container.querySelector('.page-title'),
        titlewidth = parseInt(win.getComputedStyle(pagetitle).getPropertyValue('width'), 10),
        containerwidth = parseInt(win.getComputedStyle(container).getPropertyValue('width'), 10);
    if (containerwidth < titlewidth) {
       // Make the title width slightly smaller than the container.
        var compressor = 0.95,
            multiplier = (containerwidth / titlewidth) * compressor,
            fontsize = parseFloat(win.getComputedStyle(pagetitle).getPropertyValue('font-size'));
        pagetitle.style.fontSize = Math.floor(fontsize * multiplier) + 'px';
    }
}(this, this.document));


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
    }
}(this, this.document));


// Adds a fade to elements with the ID of "fade". Modified from http://stackoverflow.com/questions/3795481/javascript-slidedown-without-jquery
var minheight = 50;
var maxheight = document.getElementById('fade').offsetHeight + 15;
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