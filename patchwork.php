<?php
    include_once('_inc/functions.php');

    // Build out URI to reload from form dropdown
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    
    if (isset($_POST['uri']) && isset($_POST['section'])) {
        $pageURL .= $_POST[uri].$_POST[section];
        $pageURL = htmlspecialchars( filter_var( $pageURL, FILTER_SANITIZE_URL ) );
        
        header("Location: $pageURL");
    }
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Code for America Website Style Guide</title>
    <link rel="stylesheet" href="style/css/documentation.css">
    <link href="style/css/prism.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.webtype.com/css/944a7551-9b08-4f0a-8767-e0f83db4a16b.css" />
    <link rel="stylesheet" href="style/css/layout.css" media="all and (min-width: 40em)">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script>
        
        // Adds class of js to the html tag if JS is enabled
        document.getElementsByTagName('html')[0].className += ' js';
        
        // Adds class of svg to the html tag if svg is enabled
        (function flagSVG() {
            var ns = {'svg': 'http://www.w3.org/2000/svg'};
            if(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {document.getElementsByTagName('html')[0].className += ' svg';}
        })();
        
    </script>
    
    </head>

<body class="xx xx-patchwork">

<div class="xx-js-container">

    <?php if(isset($_GET["url"]) && sanipath( $patternsPath . $_GET["url"] ) ): ?>
        <?php include_pattern( sanipath( $patternsPath . $_GET["url"] ), "Pattern not found." ); ?>
    <?php else : ?>
    
    <div class="xx-options">
    
        <a class="xx-cfa-logo" href=""><img src="media/images/logo-colored.png" /></a>
        
        <p class="xx-skip-to-nav skip-to-nav"><a href="#global-footer">Menu</a></p>
        
        <div class="xx-nav nav-global-secondary">
            
            <h2 class="text-whisper">Style Guide</h2>
            <ol role="navigation">
                <li class="xx-link-special"><a href="">View as Style Guide</a></li>
            </ol>
            
            <h2 class="text-whisper">Templates</h2>
            <ol role="navigation">
                <li><a href="_site/home/">Home</a></li>
                <li><a href="_site/apps/">Apps</a></li>
                <li><a href="_site/apps/promptly/">App (Promptly)</a></li>
                <li><a href="_site/about/">About</a></li>
                <li><a href="_site/library/">Library</a></li>
                <li><a href="_site/governments/boston/">City (Boston)</a></li>
                <li><a href="_site/fellows/">Fellows</a></li>
                <li><a href="_site/2013/11/13/why-im-mentoring-for-america-by-zachary-townsend.html">Post</a></li>
                <li><a href="_site/governments/">Governments</a></li>
                <li><a href="_site/donate/">Donate (Landing)</a></li>
                <li><a href="_site/donate/form/">Donate</a></li>
                <li><a href="_site/citizens/">Citizens</a></li>
                <li><a href="_site/documentation/">Documentation</a></li>
            </ol>
            
        </div>
    
    </div>
    
    <div class="xx-container">
    
        <div class="heading"><h1>Website Patchwork</h1></div>
    	
        <form action="" method="post" id="pattern">
            <select name="section" id="pattern-select" class="nav-section-select">
                <option value="">Jump to&#8230;</option>
                <?php displayOptions($patternsPath); ?>
            </select>
            <input type="hidden" name="uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
            <button type="submit" id="pattern-submit">Go</button>
        </form>
    
        <main role="main">
            <?php displayPatchwork($patternsPath); ?>
        </main><!--@main-->
    
    <?php endif; ?>
    
    </div>

    <script src="script/prism.js"></script>
    
</body>

<script>

    // Adds class of js to the html tag if JS is enabled
    document.getElementsByTagName('html')[0].className += ' js';
    
    // Adds class of svg to the html tag if svg is enabled
    (function flagSVG() {
        var ns = {'svg': 'http://www.w3.org/2000/svg'};
        if(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {document.getElementsByTagName('html')[0].className += ' svg';}
    })();
    
    (function (document, undefined) {
        // Pattern selector
        document.getElementById('pattern-submit').style.display = 'none';
        document.getElementById('pattern-select').onchange = function() {
            //document.location=this.options[this.selectedIndex].value;
            var val = this.value;
            if (val !== "") {
                window.location = val;
            }
        }
    })(document);

    
    (function (win, doc) {
        'use strict';
        if (!doc.querySelector || !win.addEventListener) {
            // doesn't cut the mustard.
            return;
        }
        /*
        If the viewport is small enough, use the off-canvas pattern for navigation.
        */
        if (!doc.querySelector('.xx-js-container')
         || !doc.querySelector('.xx-nav')
         || !doc.querySelector('.xx-skip-to-nav')
        ) {
            return;
        }
        var toggleclass = 'slid',
            reg = new RegExp('(\\s|^)' + toggleclass + '(\\s|$)'),
            page = doc.querySelector('.xx-js-container'),
            primary = doc.querySelector('.xx-nav'),
            skiplink = doc.querySelector('.xx-skip-to-nav'),
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
        newnav.appendChild(primary);
        newnav.className = 'xx-js-offcanvas';
        skiplink.className = skiplink.className + ' persist';
        doc.body.appendChild(newnav);
    }(this, this.document));
    
    // Modified from http://stackoverflow.com/questions/3795481/javascript-slidedown-without-jquery
    var minheight = 50;
    var maxheight = document.getElementById('fade').offsetHeight + 15;
    var time = 1000;
    var timer = null;
    var toggled = false;
    
    window.onload = function() {
        
        var controler = document.getElementById('fade-activate');
        var slider = document.getElementById('fade-content');
        slider.style.height = minheight + 'px';
        controler.onclick = function(e) {  
            e.preventDefault();
            clearInterval(timer);
            var instanceheight = parseInt(slider.style.height);  // Current height
            var init = (new Date()).getTime(); //start time
            var height = (toggled = !toggled) ? maxheight: minheight; //if toggled
    
            var disp = height - parseInt(slider.style.height);
            timer = setInterval(function() {
                var instance = (new Date()).getTime() - init; //animating time
                if(instance <= time ) { //0 -> time seconds
                    var pos = instanceheight + Math.floor(disp * instance / time);
                    slider.style.height =  pos + 'px';
                }else {
                    slider.style.height = height + 'px'; //safety side ^^
                    clearInterval(timer);
                }
            },1);
        };
    };
    
</script>

</html>