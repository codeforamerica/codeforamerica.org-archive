<?php include_once('../_includes/head.php'); 
    $pageTitle = 'Code for America';
    $mastheadImage = 'masthead-6.jpg';
?>

<div class="global-header-compact" role="banner">
    <a href="/home/" class="global-header-logo">
        <img src="/../_assets/logo.png" />
    </a>
    <p class="global-header-tagline"><strong>By the people, for the people,</strong> for the 21<sup>st</sup> century</p>
    
    <p class="skip-to-nav"><a href="#global-footer">Menu</a></p>
    
    <nav class="nav-global-secondary" role="navigation">
        <ul>
        	<li class="nav-tier1 nav-has-children">
        		<a href="/about/" <?php if(strpos($path,'/about/')){ echo "class=\"state-active\""; }?>>Who we are</a>
        		<?php if(strpos($path,'/about/')){ ?>
        		<ul class="nav-tier2">
        		    <li><a href="/about/">Team</a></li>
        		    <li><a href="/about/">Annual Report</a></li>
        		    <li><a href="/about/">Supporters</a></li>
        		    <li><a href="/about/">Press</a></li>
        		    <li><a href="/about/">Contact</a></li>
        		</ul>
        		<?php }?>
        	</li>
        	
            <li class="nav-tier1 nav-has-children">
                <a href="/governments/" <?php if(strpos($path,'/governments/') !== false){ ?>class="state-active"<?php }?>>Governments</a>
                <?php if(strpos($path,'/governments/')){ ?>
                <ul class="nav-tier2">
                    <li><a href="/governments/">Current Governments</a></li>
                    <li><a href="/governments/boston/">Upcoming Governments</a></li>
                    <li><a href="/governments/boston/">Alumni Governments</a></li>
                    <li><a href="/apps/">Apps &amp; APIs</a></li>
                </ul>
                <?php }?>
            </li>
            <li class="nav-tier1 nav-has-children">
            	<a href="/citizens/" {% if page.path contains 'citizens' %}class="state-active"{% endif %}>Citizens</a>
            	<?php if(strpos($path,'/citizens/')){ ?>
            	<ul class="nav-tier2">
            		<li><a href="#">Requests</a></li>
            		<li><a href="#">Code we Have</a></li>
            		<li><a href="#">Events</a></li>
            		<li><a href="#">Our geeks</a></li>
            	</ul>
            	<?php }?>
            </li>
            <li class="nav-tier1">
            	<a href="/apps/" <?php if(strpos($path,'/apps/')){ ?>class="state-active"<?php }?>>Apps</a>
            </li>
            <li><a href="/donate/" class="button">Donate</a></li>
        </ul>
    </nav>
    
    
</div>
        
<div class="masthead masthead-xl">
    <header class="layout-semibreve masthead-header">
        <h1 class="page-title" >In San Francisco</h1>
        <p>One third of HSA clients are unneccessarily cut from food benefits. Four fellows built <a href="#">Promptly</a> offering SMS notifications to keep families fed.</p>
        <a class="text-whisper button-invert" href="/about/">Learn more about what we do</a>
    </header>
</div>
    

    <main role="main">
    
        <section class="layout-centered isolate-invert">
        
            <h2 class="text-whisper">Join the movement</h2>
            
            <?php include_once('../_includes/blocks/patterns/bricks-3.html'); ?>
            
        </section>
        
        <section class="slab-black slab-bg1">
            
            <div class="layout-minim layout-solo insulate">
            
                <h2 class="h5">Blogging [For America]</h2>
                
                <?php include_once('../_includes/blocks/patterns/post-preview.html'); ?>
            
            </div>
                        
        </section>
        
        <section class="layout-centered insulate-inner">
        
            <h2 class="text-whisper">Quick Stats</h2>
            
            <?php include_once('../_includes/blocks/patterns/bricks-4.html'); ?>
            
        </section>
        
        
        <!-- If no blog post section -->
        
        <section class="slab-dark-blue layout-centered insulate-inner">
        
            <h2 class="text-whisper">Quick Stats</h2>
            
            <?php include_once('../_includes/blocks/patterns/bricks-4.html'); ?>
            
        </section>
        
        <!-- /if -->
        
        
        <section class="slab-gray layout-centered insulate-inner">
            <h2 class="text-whisper">Code for America is kindly supported by</h2>
            
            <?php include_once('../_includes/blocks/patterns/list-logos-muted.html'); ?>
            
        </section>
    
    </main>

<?php include_once('../_includes/footer.php'); ?>

<?php include_once('../_includes/foot.php'); ?>