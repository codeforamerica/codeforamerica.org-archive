/*
Add or remove a class on the navigation depending on how far the user has scrolled down.
In the CSS, this class gets position:fixed within a widescreen media query.
*/
(function (win, doc) {
    'use strict';
    if (!doc.querySelector || !win.addEventListener) {
        // doesn't cut the mustard.
        return;
    }
    var toggleClass = 'sticky',
        reg = new RegExp('(\\s|^)' + toggleClass + '(\\s|$)'),
        logo = doc.querySelector('.global-header'),
        triggerpoint = doc.querySelector('.masthead-l').offsetHeight + doc.querySelector('.nav-global-primary').offsetHeight,
        scrollDistance = null,
        checkToggle = function () {
            scrollDistance = (win.pageYOffset !== undefined) ? win.pageYOffset : doc.body.scrollTop;
            if (scrollDistance > triggerpoint) {
                if (!logo.className.match(reg)) {
                    logo.className += ' ' + toggleClass;
                }
            } else {
                if (logo.className.match(reg)) {
                    logo.className = logo.className.replace(reg, '');
                }
            }
        };
    checkToggle();
    win.addEventListener('scroll', checkToggle, false);
}(this, this.document));