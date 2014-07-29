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
    <title>Code for America Style Guide</title>
    <link rel="stylesheet" type="text/css" href="//cloud.webtype.com/css/944a7551-9b08-4f0a-8767-e0f83db4a16b.css" />
    <link href="style/css/prism.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/css/documentation.css">
    <link rel="stylesheet" href="style/css/layout.css" media="all and (min-width: 40em)">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if (lt IE 9)&(!IEMobile)]>
    <link rel="stylesheet" href="style/css/layout.css" media="all">
    <![endif]-->
    
</head>

<body class="xx">

<div class="xx-js-container">

    <?php if(isset($_GET["url"]) && sanipath( $patternsPath . $_GET["url"] ) ): ?>
        
        <?php include_pattern( sanipath( $patternsPath . $_GET["url"] ), "Pattern not found." ); ?>
    
    <?php else : ?>

    <div class="xx-options">
    
        <a class="xx-cfa-logo" href=""><img src="_assets/logo-colored.png" /></a>
        
        <p class="xx-skip-to-nav skip-to-nav"><a href="#global-footer">Menu</a></p>
        
        <div class="xx-nav nav-global-secondary">
            
            <h2 class="text-whisper">Style Guide</h2>
            <ol role="navigation">
                <li class="xx-link-special"><a href="patchwork.php">View as patchwork</a></li>
                <li><a href="/messaging/">Messaging</a></li>

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
    
        <div class="heading"><h1>Website Style Guide</h1></div>
    	
        <form action="" method="post" id="pattern">
            <select name="section" id="pattern-select" class="nav-section-select">
                <option value="">Jump to&#8230;</option>
                <?php displayOptions($patternsPath); ?>
            </select>
            <input type="hidden" name="uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
            <button type="submit" id="pattern-submit">Go</button>
        </form>
    
        <main role="main">
        <div>
        	<h2 class="xx-section-title">Using the Guide</h2>
        	<p>Code for America aims to improve the relationships between citizens and government. The following logos, materials, and character of the Code for America brand were created to express the following:</p>
        	<ul>
        	<li>Openness: That the organization is approachable, easy to understand, easy to get involved with, and welcoming to both scrutiny and participation.</li>
        	<li>Currency + Progress: We’ve attempted to showcase the latest events and stories in civic tech, while also using current conventions in web design and technology-based approaches. We also strive to show a thread of progress over time.</li>
        	<li>Optimism: We wanted to emphasize the fact that Code for America believes in the future of our communities and local governments. The idea to portray is: "We can make this better together."</li>
        	</ul>
        	<p>This guide is intended to help anyone involved with communications for Code for America and its affiliate programs. If you have questions, <a href="https://github.com/codeforamerica/codeforamerica.org/issues/new">submit an issue in our github repo</a>.</p>
        </div>

        
        	<h2 class="xx-section-title">Bookmark Icons</h2>
        	
	    	<div class="pattern">
    	    	<div class="pattern-details">
    	    	    <h3 class="pattern-name">Flag Red</h3>
    	    	</div>
    	    	<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-red.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-red.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-red.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-red.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-red.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-red.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
    	    
	    	
	    	<div class="pattern">
	    		<div class="pattern-details">
	    		    <h3 class="pattern-name">Flag Blue</h3>
	    		</div>
	    		<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-blue.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-blue.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-blue.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-blue.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-blue.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-blue.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
	    	
    		<div class="pattern">
    			<div class="pattern-details">
    			    <h3 class="pattern-name">Flag Gray</h3>
    			</div>
    			<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-gray.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-gray.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-gray.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-gray.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-gray.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-gray.png" /> 16x16</li>
        	    	</ul>
	    	    </div>
	    	</div>
	    	
	    	<div class="pattern">
	    		<div class="pattern-details">
	    		    <h3 class="pattern-name">Flag Black</h3>
	    		</div>
    	    	<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-black.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-black.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-black.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-black.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-black.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-black.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
	    	
	    	<div class="pattern">
	    		<div class="pattern-details">
	    		    <h3 class="pattern-name">Flag White and Blue</h3>
	    		</div>
	    		<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-white-blue.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-white-blue.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-white-blue.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-white-blue.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-white-blue.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-white-blue.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
	    	
	    	<div class="pattern">
	    		<div class="pattern-details">
	    		    <h3 class="pattern-name">Flag White and Red</h3>
	    		</div>
	    		<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-white-red.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-white-red.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-white-red.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-white-red.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-white-red.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-white-red.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
    	
	    	<div class="pattern">
	    		<div class="pattern-details">
	    		    <h3 class="pattern-name">Flag White and Gray</h3>
	    		</div>
	    		<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-white-gray.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-white-gray.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-white-gray.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-white-gray.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-white-gray.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-white-gray.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
    	
	    	<div class="pattern">
	    		<div class="pattern-details">
	    		    <h3 class="pattern-name">Flag White and Black</h3>
	    		</div>
	    		<div class="pattern-preview">
        	    	<ul class="list-no-bullets list-horizontal list-inline text-whisper list-favicons">
        	    		<li><img src="style/favicons/152x152/flag-white-black.png" /> 152x152</li>
        	    		<li><img src="style/favicons/120x120/flag-white-black.png" /> 120x120</li>
        	    		<li><img src="style/favicons/76x76/flag-white-black.png" /> 76x76</li>
        	    		<li><img src="style/favicons/60x60/flag-white-black.png" /> 60x60</li>
        	    		<li><img src="style/favicons/32x32/flag-white-black.png" /> 32x32</li>
        	    		<li><img src="style/favicons/16x16/flag-white-black.png" /> 16x16</li>
        	    	</ul>
        	    </div>
        	</div>
    	
        	<h2 class="xx-section-title">Icons</h2>
        	
        	<p>Icons are from <a href="http://icomoon.io/">icomoon</a>.</p>
        	
        	<ul class="list-no-bullets list-crotchet">
        	    <li class="icon-facebook"> icon-facebook</li>
        	    <li class="icon-twitter"> icon-twitter</li>
        	    <li class="icon-feed"> icon-feed</li>
        	    <li class="icon-vimeo2"> icon-vimeo2</li>
        	    <li class="icon-lanyrd"> icon-lanyrd</li>
        	    <li class="icon-flickr"> icon-flickr</li>
        	    <li class="icon-mail"> icon-mail</li>
        	    <li class="icon-youtube"> icon-youtube</li>
        	    <li class="icon-google-plus"> icon-google-plus</li>
        	    <li class="icon-google-plus2"> icon-google-plus2</li>
        	    <li class="icon-github"> icon-github</li>
        	    <li class="icon-linkedin"> icon-linkedin</li>
        	    <li class="icon-skype"> icon-skype</li>
        	    <li class="icon-html5"> icon-html5</li>
        	    <li class="icon-css3"> icon-css3</li>
        	    <li class="icon-chrome"> icon-chrome</li>
        	    <li class="icon-firefox"> icon-firefox</li>
        	    <li class="icon-IE"> icon-IE</li>
        	    <li class="icon-opera"> icon-opera</li>
        	    <li class="icon-safari"> icon-safari</li>
        	    <li class="icon-share"> icon-share</li>
        	    <li class="icon-github2"> icon-github2</li>
        	    <li class="icon-user"> icon-user</li>
        	    <li class="icon-cc"> icon-cc</li>
        	    <li class="icon-phone"> icon-phone</li>
        	    <li class="icon-location"> icon-location</li>
        	    <li class="icon-envelop"> icon-envelop</li>
        	    <li class="icon-alarm"> icon-alarm</li>
        	    <li class="icon-print"> icon-print</li>
        	    <li class="icon-database"> icon-database</li>
        	    <li class="icon-undo"> icon-undo</li>
        	    <li class="icon-redo"> icon-redo</li>
        	    <li class="icon-bubble"> icon-bubble</li>
        	    <li class="icon-users"> icon-users</li>
        	    <li class="icon-quotes-left"> icon-quotes-left</li>
        	    <li class="icon-quotes-right"> icon-quotes-right</li>
        	    <li class="icon-key"> icon-key</li>
        	    <li class="icon-wrench"> icon-wrench</li>
        	    <li class="icon-cogs"> icon-cogs</li>
        	    <li class="icon-download2"> icon-download2</li>
        	    <li class="icon-upload2"> icon-upload2</li>
        	    <li class="icon-earth"> icon-earth</li>
        	    <li class="icon-star"> icon-star</li>
        	    <li class="icon-star2"> icon-star2</li>
        	    <li class="icon-star3"> icon-star3</li>
        	    <li class="icon-arrow-up"> icon-arrow-up</li>
        	    <li class="icon-arrow-right2"> icon-arrow-right2</li>
        	    <li class="icon-arrow-down"> icon-arrow-down</li>
        	    <li class="icon-arrow-left"> icon-arrow-left</li>
        	    <li class="icon-arrow-up2"> icon-arrow-up2</li>
        	    <li class="icon-arrow-right3"> icon-arrow-right3</li>
        	    <li class="icon-arrow-down2"> icon-arrow-down2</li>
        	    <li class="icon-arrow-left2"> icon-arrow-left2</li>
        	    <li class="icon-new-tab"> icon-new-tab</li>
        	    <li class="icon-embed"> icon-embed</li>
        	    <li class="icon-code"> icon-code</li>
        	    <li class="icon-search"> icon-search</li>
        	    <li class="icon-bullhorn"> icon-bullhorn</li>
        	    <li class="icon-rocket"> icon-rocket</li>
        	    <li class="icon-checkmark"> icon-checkmark</li>
        	    <li class="icon-tools"> icon-tools</li>
        	    <li class="icon-lamp"> icon-lamp</li>
        	    <li class="icon-calendar"> icon-calendar</li>
        	    <li class="icon-twitter2"> icon-twitter2</li>
        	    <li class="icon-grid"> icon-grid</li>
        	    <li class="icon-tumblr"> icon-tumblr</li>
        	    <li class="icon-cc2"> icon-cc2</li>
        	    <li class="icon-cc-by"> icon-cc-by</li>
        	    <li class="icon-cc-nc"> icon-cc-nc</li>
        	    <li class="icon-cc-nc-eu"> icon-cc-nc-eu</li>
        	    <li class="icon-cc-nc-jp"> icon-cc-nc-jp</li>
        	    <li class="icon-cc-sa"> icon-cc-sa</li>
        	    <li class="icon-cc-nd"> icon-cc-nd</li>
        	    <li class="icon-cc-pd"> icon-cc-pd</li>
        	    <li class="icon-cc-share2"> icon-cc-share2</li>
        	    <li class="icon-thumbs-up"> icon-thumbs-up</li>
        	    <li class="icon-thumbs-down"> icon-thumbs-down</li>
        	    <li class="icon-upload3"> icon-upload3</li>
        	    <li class="icon-cloud"> icon-cloud</li>
        	</ul>
            
            <h2 class="xx-section-title">Colors</h2>
            
            <h3>Primary Colors</h3>
            
            <ul class="list-no-bullets">
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #cf1b41;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>CfA Red</strong></li>
                        <li>PMS 193U</li>
                        <li>C13 M94 Y69 K4</li>
                        <li>R204 G39 B62</li>
                        <li>#cf1b41</li>
                        <li>$color-red</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #399fd3;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>CfA Blue</strong></li>
                        <li>PMS 2915M or 292C or 299U</li>
                        <li>C70 M24 Y0 K0</li>
                        <li>R63 G158 B216</li>
                        <li>#399fd3</li>
                        <li>$color-blue</li>
                    </ul>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #6D6E71;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>CfA Gray</strong></li>
                        <li>PMS Cool Gray 10</li>
                        <li>C58 M49 Y46 K15</li>
                        <li>R109 G110 B113</li>
                        <li>#6D6E71</li>
                        <li>$color-gray</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #000;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>CfA Black</strong></li>
                        <li>PMS Black U</li>
                        <li>C0 M0 Y0 K100</li>
                        <li>R0 G0 B0</li>
                        <li>#000000</li>
                        <li>$color-black</li>
                    </ul>
                </li>
            </ul>
            
            <h3>Secondary Colors</h3>
            
            <ul class="list-no-bullets">
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #004b6a;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Dark Blue</strong></li
                        <li>PMS 302U</li>
                        <li>C81 M66 Y51 K43</li>
                        <li>R47 G61 B74</li>
                        <li>#004b6a</li>
                        <li>$color-dark-blue</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #7ab5d6;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Light Blue</strong></li>
                        <li>PMS 297U</li>
                        <li>C50 M15 Y7 K0</li>
                        <li>R122 G181 B214</li>
                        <li>#7ab5d6</li>
                        <li>$color-light-blue</li>
                    </ul>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #444444;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Dark Gray</strong></li
                        <li>PMS 446U</li>
                        <li>C43 M37 Y36 K1</li>
                        <li>R68 G68 B68</li>
                        <li>#444444</li>
                        <li>$color-dark-gray</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #999595;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Medium gray</strong></li>
                        <li>PMS Cool Gray 6</li>
                        <li>C43 M37 Y36 K1</li>
                        <li>R153 G149 B149</li>
                        <li>#999595</li>
                        <li>$color-medium-gray</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #e5e5e5;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Light gray</strong></li>
                        <li>PMS Cool Gray 1</li>
                        <li>C9 M6 Y7 K0</li>
                        <li>R229 G229 B229</li>
                        <li>#e5e5e5</li>
                        <li>$color-light-gray</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #e87d2b;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Orange</strong></li>
                        <li>PMS 165U</li>
                        <li>C6 M62 Y96 K0</li>
                        <li>R232 G125 B43</li>
                        <li>#e87d2b</li>
                        <li>$color-orange</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #69579C;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Purple</strong></li>
                        <li>PMS 2597U</li>
                        <li>C69 M75 Y7 K0</li>
                        <li>R105 G87 B156</li>
                        <li>#69579C</li>
                        <li>$color-purple</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #00a175;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Teal</strong></li>
                        <li>PMS 3275U</li>
                        <li>C73 M18 Y68 K3</li>
                        <li>R0 G161 B117</li>
                        <li>#00a175</li>
                        <li>$color-teal</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #4298bb;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Medium Blue</strong></li>
                        <li>PMS 314U</li>
                        <li>C72 M27 Y16 K0</li>
                        <li>R66 G152 B187</li>
                        <li>#4298bb</li>
                        <li>$color-medium-blue</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #fedd44;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>Yellow</strong></li>
                        <li>PMS 109U</li>
                        <li>C2 M10 Y80 K0</li>
                        <li>R254 G221 B68</li>
                        <li>#fedd44</li>
                        <li>$color-yellow</li>
                    </ul>
                </li>
                <li class="swatch">
                    <span class="swatch-preview" style="background-color: #fff;"></span>
                    <ul class="list-no-bullets swatch-details">
                        <li><strong>White</strong></li>
                        <li>R255 G255 B255)</li>
                        <li>C0 M0 Y0 K0</li>
                        <li>#ffffff</li>
                        <li>$color-white</li>
                    </ul>
                </li>
            </ul>
            
            <h2 class="xx-section-title">Layout</h2>
            
            <p>The classnames used for layout are all prefixed with <code>layout-</code>. They are all derived from musical note values. This naming convention has been used because it avoids referencing the number of columns in the grid (which often only makes sense at "desktop" view).</p>
            
            <p>The site uses a 9-column grid which can be split into a 2, 3 or 9 column layout, and there are slight variations on these layouts.</p>
            
            <p>The widest container is <code>layout-breve</code>.</p>
            
            <div class="xx-pattern-layout">
                <div class="layout-breve">
                    <p>layout-breve</p>
                </div>
            </div>
            
            <p>Layouts can be wrapped inside each other. For example, 2 layout-minims can be within a layout-semibreve to have a 2 column layout which stops growing when it hits a certain size.</p>
            
            <div class="xx-pattern-layout">
                <div class="layout-breve">
                    <p>layout-breve</p>
                    <div class="layout-minim">
                        <p>layout-minim</p>
                    </div>
                    <div class="layout-minim">
                        <p>layout-minim</p>
                    </div>
                </div>
            </div>
            
            <div class="xx-pattern-layout">
            	<div class="layout-breve">
            	    <p>layout-breve</p>
    	            <div class="layout-crotchet">
    	                <p>layout-crotchet</p>
    	            </div>
    	            <div class="layout-crotchet">
    	                <p>layout-crotchet</p>
    	            </div>
    	            <div class="layout-crotchet">
    	                <p>layout-crotchet</p>
    	            </div>
    	        </div>
            </div>
            
            <div class="xx-pattern-layout">
            	<div class="layout-breve">
            	    <p>layout-breve</p>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                    <div class="layout-quaver">
                        <p>layout-quaver</p>
                    </div>
                </div>
            </div>
            
            <p><code>layout-semibreve</code> containers have an earlier max-width applied than <code>layout-breve</code>. This will appear to be the same width as layout-breve unless you're viewing the site on a wide screen.</p>
                        
            <div class="xx-pattern-layout">
                <div class="layout-semibreve">
                    <p>layout-semibreve</p>
                </div>
            </div>
            
            <div class="xx-pattern-layout">
                <div class="layout-semibreve">
                    <p>layout-semibreve</p>
    	            <div class="layout-minim">
    	                <p>layout-minim</p>
    	            </div>
    	            <div class="layout-minim">
    	                <p>layout-minim</p>
    	            </div>
    		    </div>
    		</div>
    		        
            <div class="xx-pattern-layout">
            	<div class="layout-semibreve">
            	    <p>layout-semibreve</p>
    	            <div class="layout-crotchet">
    	                <p>layout-crotchet</p>
    	            </div>
    	            <div class="layout-crotchet">
    	                <p>layout-crotchet</p>
    	            </div>
    	            <div class="layout-crotchet">
    	                <p>layout-crotchet</p>
    	            </div>
    	        </div>
            </div>
            
            <div class="xx-pattern-layout">
            	<div class="layout-semibreve">
            	    <p>layout-semibreve</p>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	            <div class="layout-quaver">
    	                <p>layout-quaver</p>
    	            </div>
    	        </div>
            </div>
            
            <p>For unequal column widths, use <code>layout-minor</code> and <code>layout-major</code>.</p>
            
            <div class="xx-pattern-layout">
            	<div class="layout-semibreve">
                	<p>layout-semibreve</p>
                    <div class="layout-minor">
                        <p>layout-minor</p>
                    </div>
                    <div class="layout-major">
                        <p>layout-major</p>
                    </div>
                </div>
            </div>
            
            <p>A "stacatto" is <a href="http://en.wikipedia.org/wiki/Staccato">A note of shortened duration, separated from the note that may follow by silence</a>. This has been applied to the class when the column is shorter than normal.</p>
            
            <div class="xx-pattern-layout">
            	<div class="layout-breve">
                	<p>layout-breve</p>
                    <div class="layout-minim-staccato">
                        <p>layout-minim-staccato</p>
                    </div>
                    <div class="layout-minim-staccato">
                        <p>layout-minim-staccato</p>
                    </div>
                </div>
            </div>
            
            <div class="xx-pattern-layout">
            	<div class="layout-semibreve">
                	<p>layout-semibreve</p>
                    <div class="layout-minim-staccato">
                        <p>layout-minim-staccato</p>
                    </div>
                    <div class="layout-minim-staccato">
                        <p>layout-minim-staccato</p>
                    </div>
                </div>
            </div>
            
            <div class="xx-pattern-layout">
            	<div class="layout-breve">
            	    <p>layout-breve</p>
                    <div class="layout-crotchet-staccato">
                        <p>layout-crotchet-staccato</p>
                    </div>
                    <div class="layout-crotchet-staccato">
                        <p>layout-crotchet-staccato</p>
                    </div>
                    <div class="layout-crotchet-staccato">
                        <p>layout-crotchet-staccato</p>
                    </div>
                </div>
            </div>
            
            <div class="xx-pattern-layout">
            	<div class="layout-semibreve">
            	    <p>layout-semibreve</p>
                    <div class="layout-crotchet-staccato">
                        <p>layout-crotchet-staccato</p>
                    </div>
                    <div class="layout-crotchet-staccato">
                        <p>layout-crotchet-staccato</p>
                    </div>
                    <div class="layout-crotchet-staccato">
                        <p>layout-crotchet-staccato</p>
                    </div>
                </div>
            </div>
            
            
            
            
            <h2 class="xx-section-title">Slabs</h2>
            
            <p>For background colors, use a class of <code>slab-colorname</code>.</p>
            
            <div class="xx-slabs">
    	        
    	        <section class="slab-gray">
    	        	<h3 class="text-whisper">slab-gray</h3>
    	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    	        	<ul>
    	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
    	        		<li>Aliquam tincidunt mauris eu risus.</li>
    	        		<li>Vestibulum auctor dapibus neque.</li>
    	        	</ul>
    	        </section>
    	        
    	        <section class="slab-dark-gray">
    	        	<h3 class="text-whisper">slab-dark-gray</h3>
    	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    	        	<ul>
    	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
    	        		<li>Aliquam tincidunt mauris eu risus.</li>
    	        		<li>Vestibulum auctor dapibus neque.</li>
    	        	</ul>
    	        </section>
    	        
    	        <section class="slab-red">
    	        	<h3 class="text-whisper">slab-red</h3>
    	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    	        	<ul>
    	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
    	        		<li>Aliquam tincidunt mauris eu risus.</li>
    	        		<li>Vestibulum auctor dapibus neque.</li>
    	        	</ul>
    	        </section>
    	        
    	        <section class="slab-medium-red">
    	        	<h3 class="text-whisper">slab-medium-red</h3>
    	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    	        	<ul>
    	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
    	        		<li>Aliquam tincidunt mauris eu risus.</li>
    	        		<li>Vestibulum auctor dapibus neque.</li>
    	        	</ul>
    	        </section>
    	        
    	        <section class="slab-blue">
    	        	<h3 class="text-whisper">slab-blue</h3>
    	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    	        	<ul>
    	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
    	        		<li>Aliquam tincidunt mauris eu risus.</li>
    	        		<li>Vestibulum auctor dapibus neque.</li>
    	        	</ul>
    	        </section>
    	        
    	        <section class="slab-dark-blue">
    	        	<h3 class="text-whisper">slab-dark-blue</h3>
    	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
    	        	<ul>
    	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
    	        		<li>Aliquam tincidunt mauris eu risus.</li>
    	        		<li>Vestibulum auctor dapibus neque.</li>
    	        	</ul>
    	        </section>
            
            </div>
            
            <?php displayPatterns($patternsPath); ?>
            
        </main><!--@main-->
    
    <?php endif; ?>
    
    </div><!-- .xx-container -->

</div><!-- .js-container -->
    
</body>

<script src="script/prism.js"></script>

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
