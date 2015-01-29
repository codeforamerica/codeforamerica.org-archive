 /*
 * Andy E on http://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
 *
 * Pops the URL parameters and assigns them to urlParams.
 * 
 * Ex: http://codeforamerica.org/page.html?param1=something&param2=somethingelse
 * var firstParam = urlParams['param1'] => 'something'
 * var secondParam = urlParams['param2'] => 'somethingelse'
 */
var urlParams;

(window.onpopstate = function () {
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
       urlParams[decode(match[1])] = decode(match[2]);
})();