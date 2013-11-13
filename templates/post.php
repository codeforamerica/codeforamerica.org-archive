<?php
    include_once('../_inc/functions.php');

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
    <link rel="stylesheet" href="../style/css/main.css">
    <link href="../style/css/prism.css" rel="stylesheet" />
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
    
    
    <?php include("../patterns/_header.html") ?>
    
    <div class="layout-container">

    
    <main role="main">
        
        <article class="post">
            
            <h1 class="heading post-title">Why I'm mentoring for America: Zachary Townsend</h1>
        
            <div class="post-content">
                
                <p>This post is part of an ongoing series by Code for America mentors. Zachary is a 2013 mentor at Code for America for the startups program.</p> 
            
                <p>I work with governments because, when operated well, they can improve the lives of so many people. I work with civic startups at the CfA Accelerator because, when operated well, they can improve the efficiency of so many governments. Every positive change I made working in government in Newark, N.J. might effect tens of thousands of families and every civic startup I mentor might affect hundreds of governments.</p>
                
                <p>But let me take a step back: I started to care so much about government and their inner workings because local government changed the course of my life.</p>
                
                <p>When I was ten years old, my mother and I were in a terrible car accident. Although I did not realize it then, the next few hours came to define my life. At the time I was confused. Now I vividly recall the kindness of the child welfare workers and their help in what was a scary situation for me. My conversations and their actions that day instilled in me a value that I will never forget: the power of a few individuals to profoundly affect a person in need.</p>
                
                <p>It became clear that my mother was an alcoholic. My stepfather filed for divorce, and my parents (guided by child welfare) agreed that I would live with my dad. For years I did not understand what had happened, but in time I came to appreciate who the social workers were and the profound effect that a working and compassionate government can have on peoples lives. Or, in my case, just one life. Their careful and kind work made it so I could eventually go on to lead the life I’ve had.</p>
                
                <p>I have spent most of my professional life working to understand and improve the efficiencies and effectiveness of governments. As a private consultant, I used my love of data and passion for technology to work with New York City Administration for Children’s Services to improve services for children just like me, and many that were in much worse circumstances. From there, I worked in the Newark, N.J. Mayor’s Office to leverage technology to improve city life and services.</p>
                
                <p>Good city services are about basic fairness. As I wrote elsewhere:</p>
                
                <p>Overall the quality of service provision in government offices remains low. The offices which provide services use outdated and ill-designed technology tools to facilitate rarely-updated business process. Services must be requested in person, lines can be long, multiple offices need to be visited, and forms that aren’t filled out to exacting detail must be redone, creating an array of bureaucratic barriers. In essence, city services are a regressive tax on people’s time.</p>
                
                <p>Startups are the most powerful possibility I can find for helping to improve those services. A lack of procurement options is at the heart of the bad technology and the inefficient business processes of many cities.</p>
                
                <p>So I spend my days working on making banking data and services more and accessible through a Y-Combinator backed startup called Standard Treasury. I use my nights and weekend to mentor Accelerator companies. I work to bridge my knowledge base running a fast-growing technology startup with my background and knowledge of governments. Together with some amazing entrepreneurs and the Code for America team, we can build great companies that empower great governments to do great things for citizens.</p>
            
            </div>
            
            <div class="post-author">
                <p>I have spent most of my professional life working to understand and improve the efficiencies and effectiveness of governments. As a private consultant, I used my love of data and passion for technology to work with New York City Administration for Children’s Services to improve services for children just like me, and many that were in much worse circumstances. From there, I worked in the Newark, N.J. Mayor’s Office to leverage technology to improve city life and services.</p>
            </div>    
        
        </article>
        
    </main><!--@main-->
    <?php endif; ?>
    
    </div>
    
</body>

</html>