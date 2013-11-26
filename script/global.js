
(function (win, doc) {
    'use strict';
    if (!doc.querySelector || !win.addEventListener) {
        // doesn't cut the mustard.
        return;
    }

    if (doc.documentElement.clientWidth < 480) {
/*
If the viewport is small enough, use the off-canvas pattern for navigation.
*/
        if (!doc.querySelector('.js-container')
         || !doc.querySelector('.nav-global-primary')
         || !doc.querySelector('.nav-global-secondary')
         || !doc.querySelector('.skip-to-nav')
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
/*
Add or remove a class on the navigation depending on how far the user has scrolled down.
In the CSS, this class gets position:fixed within a widescreen media query.
*/
        if (!doc.querySelector('.global-header')
         || !doc.querySelector('.masthead-l')
         || !doc.querySelector('.nav-global-primary')) {
            return;
        }
        var toggleclass = 'sticky',
            reg = new RegExp('(\\s|^)' + toggleclass + '(\\s|$)'),
            header = doc.querySelector('.global-header'),
            triggerpoint = doc.querySelector('.masthead-l').offsetHeight - doc.querySelector('.nav-global-primary').offsetHeight,
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