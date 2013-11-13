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
    <title>Code for America Website Style Guide</title>
    <link rel="stylesheet" href="style/css/main.css">
    <link href="style/css/prism.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6304652/777902/css/fonts.css" />
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body class="xx">
    
    

<?php if(isset($_GET["url"])) : ?>
<?php  include($patternsPath.$_GET["url"]) ?>
<?php else : ?>
    
    
    <?php include("patterns/_header.html") ?>
    
    <div class="layout-container">

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