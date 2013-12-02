<?php
    include_once('_inc/functions.php');

    // Build out URI to reload from form dropdown
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    
    if (isset($_POST['uri']) && isset($_POST['section'])) {
        $pageURL .= $_POST[uri].$_POST[section];
        header("Location: $pageURL");
    }
?>
<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <title>Code for America Style Guide</title>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6304652/777902/css/fonts.css" />
    <link rel="stylesheet" href="/_style/css/main.css">
    <link rel="stylesheet" href="/_style/css/layout.css" media="all and (min-width: 40em)">
    <link href="/_style/css/prism.css" rel="stylesheet" />
    <script src="/_script/fittext.js" type="text/javascript"></script>
    
    
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if (lt IE 9)&(!IEMobile)]>
    <link rel="stylesheet" href="/_style/css/layout.css" media="all">
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="xx">

<?php if(isset($_GET["url"])) : ?>
<?php  include($patternsPath.$_GET["url"]) ?>
<?php else : ?>

<div class="xx-sidebar">
    
    <a class="xx-cfa-logo" href="/">
        <img src="/_assets/logo.png" />
    </a>
    
    <div class="xx-nav">
        <h2 class="text-whisper">Styleguide</h2>
        <ol role="navigation">
            <li class="xx-link-special"><a href="/patchwork.php">View as patchwork</a></li>
            <?php displayList($patternsPath); ?>
        </ol>
        <h2 class="text-whisper">Templates</h2>
        <ol role="navigation">
            <li><a href="/_site/home/">Home</a></li>
            <li><a href="/_site/apps/">Apps</a></li>
            <li><a href="/_site/apps/bizfriendly/">Product (Bizfriendly)</a></li>
            <li><a href="/_site/governments/boston/">City (Boston)</a></li>
            <li><a href="/_site/fellows/">Fellows</a></li>
            <li><a href="/_site/2013/11/13/why-im-mentoring-for-america-by-zachary-townsend.html">Post</a></li>
            <li><a href="/_site/governments/">Governments</a></li>
            <li><a href="/_site/donate/">Donate (Landing)</a></li>
            <li><a href="/_site/donate/form/">Donate</a></li>
            <li><a href="/_site/citizens/">Citizens</a></li>
        </ol>
    </div>
    
    <a class="xx-hallmark" href="http://clearleft.com/" title="Crafted by Clearleft in Brighton">Crafted by Clearleft in Brighton, UK</a>
 
 </div>


<div class="xx-container">
    
    <h1 class="xx-title">Website Style Guide</h1>

    <form action="" method="post" id="pattern">
        <select name="section" id="pattern-select" class="nav-section-select">
            <option value="">Jump to&#8230;</option>
            <?php displayOptions($patternsPath); ?>
        </select>
        <input type="hidden" name="uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
        <button type="submit" id="pattern-submit">Go</button>
    </form>

    <main role="main">
        
        <h2 class="xx-section-title">Colors</h2>
        
        <p>Colours can be applied in the Sass files by calling a variable, such as <code>background-color: $color-red;</code> – this will add the correct hex code.</p>
        
        <p>If you want the colour to have opacity, use this format in the Sass file: <code>background color: @include background-color($color-red, 0.5);</code>, or for a foreground color: <code>@include color($color-red, 0.5);</code></p>
        
        <p>The last unit is the strength of the opacity. 1 is opaque, and 0.5 has 50% transparency.</p>
        
        <h3>Primary Colors</h3>
        
        <ul class="list-no-bullets">
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #cf1b41;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>CfA Red</strong></li>
                    <li>rgb(204,39,62)</li>
                    <li>#cf1b41</li>
                    <li>$color-red</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #399fd3;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>CfA Blue</strong></li>
                    <li>rgb(63,158,216)</li>
                    <li>#399fd3</li>
                    <li>$color-blue</li>
                </ul>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #6D6E71;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>CfA Gray</strong></li>
                    <li>rgb(109, 110, 113)</li>
                    <li>#6D6E71</li>
                    <li>$color-gray</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #000;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>CfA Black</strong></li>
                    <li>rgb(0, 0, 0)</li>
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
                    <li><strong>Dark Blue</strong></li>
                    <li>rgb(0, 75, 106)</li>
                    <li>#004b6a</li>
                    <li>$color-dark-blue</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #7ab5d6;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Light Blue</strong></li>
                    <li>rgb(122,181,214)</li>
                    <li>#7ab5d6</li>
                    <li>$color-light-blue</li>
                </ul>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #444444;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Dark gray</strong></li>
                    <li>rgb(68, 68, 68)</li>
                    <li>#444444</li>
                    <li>$color-dark-gray</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #999595;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Medium gray</strong></li>
                    <li>rgb(153, 149, 149)</li>
                    <li>#999595</li>
                    <li>$color-medium-gray</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #e5e5e5;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Light gray</strong></li>
                    <li>rgb(229, 229, 229)</li>
                    <li>#e5e5e5</li>
                    <li>$color-light-gray</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #e87d2b;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Orange</strong></li>
                    <li>rgb(232, 125, 43)</li>
                    <li>#e87d2b</li>
                    <li>$color-orange</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #69579C;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Purple</strong></li>
                    <li>rgb(105, 87, 156)</li>
                    <li>#69579C</li>
                    <li>$color-purple</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #00a175;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Teal</strong></li>
                    <li>rgb(0, 161, 117)</li>
                    <li>#00a175</li>
                    <li>$color-teal</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #4298bb;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Medium Blue</strong></li>
                    <li>rgb(66, 152, 187)</li>
                    <li>#4298bb</li>
                    <li>$color-medium-blue</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #fedd44;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>Yellow</strong></li>
                    <li>rgb(254, 221, 68)</li>
                    <li>#fedd44</li>
                    <li>$color-yellow</li>
                </ul>
            </li>
            <li class="swatch">
                <span class="swatch-preview" style="background-color: #fff;"></span>
                <ul class="list-no-bullets swatch-details">
                    <li><strong>White</strong></li>
                    <li>rgb(255, 255, 255)</li>
                    <li>#ffffff</li>
                    <li>$color-white</li>
                </ul>
            </li>
        </ul>
        
        <h2 class="xx-section-title">Layout</h2>
        
        <p>The classnames used for layout are all prefixed with <code>layout-</code>. They are all derived from musical note values. The site uses a 9-column grid which can be split into a 2, 3 or 9 column layout, and there are slight variations on these layouts.</p>
        
        <p>A "stacatto" is <a href="http://en.wikipedia.org/wiki/Staccato">a note of shortened duration,[1][2] separated from the note that may follow by silence</a>. This has been applied to the class when the column is shorter than normal.</p>
        
        <p>Layouts can be wrapped inside each other. For example, 2 layout-minims can be within a layout-semibreve to have a 2 column layout which stops growing when it hits a certain size.</p>
        
        <div class="xx-pattern-layout">
            <div class="layout-breve">
                <p>layout-breve</p>
            </div>
        </div>
        
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
        
        <h2 class="xx-section-title">Slabs</h2>
        
        <div class="xx-slabs">
	        
	        <section class="slab-gray">
	        	<p><code>slab-gray</code></p>
	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
	        	<ul>
	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	        		<li>Aliquam tincidunt mauris eu risus.</li>
	        		<li>Vestibulum auctor dapibus neque.</li>
	        	</li>
	        </section>
	        
	        <section class="slab-dark-gray">
	        	<p><code>slab-dark-gray</code></p>
	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
	        	<ul>
	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	        		<li>Aliquam tincidunt mauris eu risus.</li>
	        		<li>Vestibulum auctor dapibus neque.</li>
	        	</li>
	        </section>
	        
	        <section class="slab-red">
	        	<p><code>slab-red</code></p>
	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
	        	<ul>
	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	        		<li>Aliquam tincidunt mauris eu risus.</li>
	        		<li>Vestibulum auctor dapibus neque.</li>
	        	</li>
	        </section>
	        
	        <section class="slab-medium-red">
	        	<p><code>slab-medium-red</code></p>
	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
	        	<ul>
	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	        		<li>Aliquam tincidunt mauris eu risus.</li>
	        		<li>Vestibulum auctor dapibus neque.</li>
	        	</li>
	        </section>
	        
	        <section class="slab-blue">
	        	<p><code>slab-blue</code></p>
	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
	        	<ul>
	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	        		<li>Aliquam tincidunt mauris eu risus.</li>
	        		<li>Vestibulum auctor dapibus neque.</li>
	        	</li>
	        </section>
	        
	        <section class="slab-dark-blue">
	        	<p><code>slab-dark-blue</code></p>
	        	<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
	        	<ul>
	        		<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
	        		<li>Aliquam tincidunt mauris eu risus.</li>
	        		<li>Vestibulum auctor dapibus neque.</li>
	        	</li>
	        </section>
        
        </div>
        
        <?php displayPatterns($patternsPath); ?>
        
    </main><!--@main-->
    <?php endif; ?>

</div>
    
    <script src="_script/prism.js"></script>
</body>

<script>
    (function (document, undefined) {
        // Add js class to body
        document.getElementsByTagName('body')[0].className += ' js';

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
</script>
</html>