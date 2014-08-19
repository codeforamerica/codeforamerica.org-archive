<?php include_once('../_includes/head.php'); 
    $pageTitle = 'Code for America';
    $mastheadImage = 'masthead-7.jpg';
?>

<div class="global-header global-header-tight">
    
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
        
<div class="masthead masthead-xl">
    <header class="layout-semibreve masthead-header">
        <h1 class="page-title">Government can work for the people, by the people, in the 21<sup>st</sup> century.</h1>
        <a href="#" class="button-invert">Let’s make it work.</a>
    </header>
</div>

<main role="main">
    
    <section class="slab-red">
        <div class="layout-chimney">
        	<div class="layout-minim slab-medium-red chimney">
            	<div class="chimney-body">
                    <h2>We the people</h2>
                	<p>Code for America is working towards a government by the people, for the people, that works in the 21st century.</p>
        			<p>We are a 501(c)3 non-profit that helps residents and governments harness technology to solve community problems.</p>
        			<a class="button" href="/about/index.php">Learn more about what we do</a>
                </div>
            </div>
            <div class="layout-minim-staccato">
	            <h3 class="h4">What's happening?</h3>
	            <ul class="list-no-bullets">
	                <li><a class="button-prominent" href="/summit">Register for the 2014 CfA Summit!</a></li>
	            </ul>
	            <ul class="list-no-bullets list-icons">
                	<li class="icon-calendar"><span id="nextEvent"><a href="http://www.meetup.com/Triangle-Code-for-America/events/198001182/">Code for Durham: Civic Hacking Session</a><span class="text-whisper">in 12 hours at Code for Raleigh</span></span>
                	<a class="text-whisper" href="http://codeforamerica.org/brigade/events">Other Events</a>
                	</li>
                  <li class="icon-github2"><span id="openIssue"><a href="https://github.com/codeforseoul/wheredoesmymoneygo.kr/issues/1">지역별 지출 내역 대한민국 지도 적용하기</a></span>
                  	<a class="text-whisper" href="http://civicissues.herokuapp.com">More hack requests</a>
                  </li>
                  <li class="icon-lamp"><span id="recentProject"><a href="https://github.com/newsapps/flask-tarbell">flask-tarbell</a></span>
                  	<a class="text-whisper" href="http://codeforamerica.org/brigade/projects">More civic tech projects</a>
                  </li>
                  <li class="icon-bullhorn"><span id="recentStory"><a href="http://buildforstl.org/2014/06/09/thank-you-build4stl-sponsors-a-thousand-x-thank-you/">Thank You @Build4STL Sponsors!  A Thousand X Thank You!</a></span>
                  	<a class="text-whisper" href="http://codeforamerica.tumblr.com/">More civic tech stories</a>
                  </li>
                </ul>
	        </div>
        </div>
    </section>
    
    <section class="layout-breve layout-centered">
        <h2>Citizens have the power to help their cities.</h2>
        <p class="layout-semibreve">The <a href="http://codeforamerica.org/brigade">Code for America Brigade</a> program is an international network of people committed to using their voices and hands, in collaboration with local governments, to make their cities better. The <a href="/about/fellowship">CfA Fellowship</a> is a one year residency placing developers, designers, and researchers within local governments. <a href="/apply">Applications</a> for the 2015 Fellowship are due July 15.</p>
        <h2 class="text-whisper">Quick Stats</h2>
        <?php include('../_includes/blocks/patterns/bricks-4.html'); ?>
    </section>
    
    <section class="slab-black slab-bg1">
        <div class="layout-minim layout-solo insulate">
            <h2 class="h5">Blogging [For America]</h2>
            <?php include_once('../_includes/blocks/patterns/post-preview.html'); ?>
        </div>         
    </section>
    
    
    <section class="slab-gray layout-centered insulate-inner">
        <h2 class="text-whisper">Code for America is kindly supported by</h2>
        <?php include_once('../_includes/blocks/patterns/list-logos-hierachy-greyscale.html'); ?>
    </section>

</main>

<?php include_once('../_includes/footer.php'); ?>

<?php include_once('../_includes/foot.php'); ?>