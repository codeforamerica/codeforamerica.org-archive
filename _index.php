<?
    include_once($_SERVER['DOCUMENT_ROOT'].'/_inc/functions.php');

    // Build out URI to reload from form dropdown
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    
    if (isset($_POST['uri']) && isset($_POST['section'])) {
        $pageURL .= $_POST[uri].$_POST[section];
        header("Location: $pageURL");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Code for America Website Style Guide</title>
    <link rel="stylesheet" href="/_style/css/main.css">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="xx">
<? if(isset($_GET["url"])) : ?>
<?  include($patternsPath.$_GET["url"]) ?>
<? else : ?>

<div class="xx-sidebar">
    <a class="xx-cfa-logo" href="/">
        <img src="images/logo-coloured.png" />
    </a>
    <ol class="xx-nav" role="navigation">
        <li><a href="#">Elements</a></li>
        <li><a href="#">Forms</a></li>
        <li><a href="#">Lists</a></li>
    </ol>
    <a class="xx-hallmark" href="http://clearleft.com/" title="Crafted by Clearleft in Brighton">Crafted by Clearleft in Brighton, UK</a>
 </div>

<div class="xx-container">

    <h1>Website Style Guide</h1>

    <!--<select onchange="document.location='#'+this.options[this.selectedIndex].value" class="nav-section-select">
        <option selected="selected" disabled="">Skip to…</option>
        <?php
        $files = array();
        $handle=opendir('_patterns');
        $pattern = str_replace('.html', '', $file);
        sort($files);
        while (false !== ($file = readdir($handle))):
            if(stristr($file,'.html')):
                $files[] = $file;
            endif;
        endwhile;
        foreach ($files as $file):
            //if ($file != 'head.html' && $file != 'foot.html' && $file != 'site-footer.html' && $file != 'site-header.html'): // exclude these files
                echo '<option>'.str_replace('.html', '', $file).'</option>';
            // endif;
        endforeach;
      ?>
    </select>-->
    
	<?php /*
		$files = array();
		$patterns_dir = "_patterns";
		$handle = opendir($patterns_dir);
		
		while (false !== ($file = readdir($handle))):
			if(stristr($file,'.html')):
				$files[] = $file;
			endif;
		endwhile;
		sort($files);
		foreach ($files as $file):
			echo '<section class="pattern" id="'.str_replace('.html', '', $file).'">';
			
			echo '<details class="primer">';
			echo '<summary class="name" title="Show markup and usage"><strong>'.str_replace('.html', '', $file).'</strong> markup and usage </summary>';
			echo '<section>';
			echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
			echo '<pre class="caption"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</pre>';
			echo '</section>';
			echo '</details><!--/.primer-->';
			echo '<div class="preview">';
			include($patterns_dir.'/'.$file);
			echo '</div><!--/.preview-->';
			echo '</section><!--/.pattern-->';
		endforeach; */
	?>
	
	<form action="" method="post" id="pattern">
	            <select name="section" id="pattern-select">
	                <option value="">Jump to section&#8230;</option>
	<?              displayOptions($patternsPath); ?>
	            </select>
	            <input type="hidden" name="uri" value="<?= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
	            <button type="submit" id="pattern-submit">Go</button>
	        </form>
	        
	        <main role="main">
	        <?      displayPatterns($patternsPath); ?>
	            </main><!--@main-->

    <?php /* if (!isset($_GET['ajax']) || $_GET['ajax'] != "true") { */?>

</div>

    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    
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
    
</body>
</html>
<?php } ?>