/*
 * http://stackoverflow.com/questions/524696/how-to-create-a-style-tag-with-javascript/524798#524798
 *
 * Here's a script which adds IE-style createStyleSheet() and addRule()
 * methods to browsers which don't have them.
 */
if(typeof document.createStyleSheet === 'undefined')
{
    document.createStyleSheet = (function() {
        function createStyleSheet(href)
        {
            if(typeof href !== 'undefined') {
                var element = document.createElement('link');
                element.type = 'text/css';
                element.rel = 'stylesheet';
                element.href = href;
            }
            else {
                var element = document.createElement('style');
                element.type = 'text/css';
            }

            document.getElementsByTagName('head')[0].appendChild(element);
            var sheet = document.styleSheets[document.styleSheets.length - 1];

            if(typeof sheet.addRule === 'undefined')
                sheet.addRule = addRule;

            if(typeof sheet.removeRule === 'undefined')
                sheet.removeRule = sheet.deleteRule;

            return sheet;
        }

        function addRule(selectorText, cssText, index) {
            if(typeof index === 'undefined')
                index = this.cssRules.length;

            this.insertRule(selectorText + ' {' + cssText + '}', index);
        }

        return createStyleSheet;
    })();
}

/*
 * Stories.js calls on_stories().
 */
function on_stories(stories)
{
    var story = stories[Math.floor(Math.random() * stories.length)];
    var head_html = '<a href="'+story.page_link+'">'+story.title+'</a>';
    var onclick_event = "ga('send', 'event', 'Homepage', 'Hero link click', 'Story: "+story.title+"');";

    document.getElementById('story-title').innerHTML = head_html;
    document.getElementById('story-content').innerHTML = story.content_html;
    document.getElementById('story-title').getElementsByTagName('a')[0].setAttribute('onclick',onclick_event);
    
    if(story.hasOwnProperty('button_text') && story.hasOwnProperty('page_link'))
    {
        document.getElementById('box-link').href = story.page_link;
        document.getElementById('box-link').innerHTML = story.button_text;
        document.getElementById('box-link').setAttribute('onclick',onclick_event);
    }

    var s = document.createStyleSheet();
    s.addRule('.masthead:before', "background-image: url('"+story.image_src+"') !important");
}
