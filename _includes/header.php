<div class="masthead <?php if (strpos($_SERVER['REQUEST_URI'], 'posts') !== false) { ?>masthead-s<?php } else {?>masthead-l<?php }?>">

    <div class="masthead-hero">
        <div class="masthead-image"
        <?php if(isset($mastheadImage)) { ?>
            style="background-image: url('/media/images/masthead/<?php echo $mastheadImage ?>')"
            <?php } elseif(strpos($path,'/posts/')){ ?>
                style="background-image: url('/media/images/masthead/masthead-3.jpg')"
                <?php }?>>
            </div>
        </div>
        <header class="layout-semibreve masthead-header" role="banner">
            <?php if (strpos($_SERVER['REQUEST_URI'], 'posts') !== false) { ?>
            <nav class="nav-breadcrumbs" role="navigation">
                <ul>
                    <li><a href="../../../home/">Home</a></li>
                    <li>Blog</li>
                </ul>
            </nav>
            <?php } else {?>
                <?php include_once('../_includes/blocks/patterns/nav-breadcrumb.html'); ?>
            <?php }?>
            <h1 class="page-title">
                <?php if (strpos($_SERVER['REQUEST_URI'], 'posts') !== false) { ?>
                    Blogging [for America]
                <?php } else {?>
                    <?php echo $pageTitle ?>
                <?php }?>
            </h1>
        </header>
    </div><!-- .masthead-hero -->   
    
    <?php if(strpos($path,'/posts/')){ ?>
        <style type="text/css">
        .masthead:before {
            background-image: url('/../media/images/masthead/masthead-3.jpg');
        }
        </style>
    <?php } elseif(isset($mastheadImage)) { ?>
        <style type="text/css">
        .masthead:before {
            background-image: url('/../media/images/masthead/<?php echo $mastheadImage ?>');
        }
        </style>
    <?php }?>

    <div class="global-header">

        <a href="/home/" class="global-header-logo">
            <img src="/../media/images/logo.png" />
        </a>

        <p class="skip-to-nav"><a href="#global-footer">Menu</a></p>

        <nav class="nav-global-secondary" role="navigation">
            <ul>
                <li class="nav-tier1 nav-has-children">
                    <a href="/about/index.php" <?php if (strpos($_SERVER['REQUEST_URI'], 'about') !== false) { echo "class=\"state-active\""; }?>>Who we are</a>
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'about') !== false) { ?>
                        <ul class="nav-tier2">
                            <li><a href="/about/index.php">Team</a></li>
                            <li><a href="/about/index.php">Annual Report</a></li>
                            <li><a href="/about/index.php">Supporters</a></li>
                            <li><a href="/about/index.php">Press</a></li>
                            <li><a href="/about/index.php">Contact</a></li>
                        </ul>
                    <?php }?>
                </li>
                <li class="nav-tier1 nav-has-children">
                    <a href="/governments/index.php" <?php if (strpos($_SERVER['REQUEST_URI'], 'governments') !== false) { echo "class=\"state-active\""; }?>>Governments</a>
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'governments') !== false) { ?>
                        <ul class="nav-tier2">
                            <li><a href="/governments/index.php">Current Governments</a></li>
                            <li><a href="/governments/boston/index.php">Upcoming Governments</a></li>
                            <li><a href="/governments/boston/index.php">Alumni Governments</a></li>
                            <li><a href="/apps/index.php">Apps &amp; APIs</a></li>
                        </ul>
                    <?php }?>
                </li>
                <li class="nav-tier1 nav-has-children">
                    <a href="/citizens/index.php" <?php if (strpos($_SERVER['REQUEST_URI'], 'citizens') !== false) { echo "class=\"state-active\""; }?>>Citizens</a>
                    <?php if (strpos($_SERVER['REQUEST_URI'], 'citizens') !== false) { ?>
                        <ul class="nav-tier2">
                            <li><a href="#">Requests</a></li>
                            <li><a href="#">Code we Have</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Our geeks</a></li>
                        </ul>
                    <?php }?>
                </li>
                <li class="nav-tier1">
                    <a href="/apps/index.php" <?php if (strpos($_SERVER['REQUEST_URI'], 'apps') !== false) { echo "class=\"state-active\""; }?>>Apps</a>
                </li>
                <li><a href="/donate/index.php" class="button">Donate</a></li>
            </ul>
        </nav>

    </div>

    <main role="main">
