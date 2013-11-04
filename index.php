<?php
    $crate_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']) . "_crate/";
    require($crate_dir . "core.php");
    include($crate_dir . "inc/header.php");
?>
<h1 class="crate-h1"><?php echo $config['PROJECT_NAME']; ?></h1>
<h2 class="crate-h2">Project Contacts</h2>
<div class="section">
    <div class="half vcard">
        <img class="photo" src="_crate/inc/avatar-jeremy-keith.jpg" alt="" width="64" height="64"/>
        <h3 class="crate-h3"><a class="fn url" href="http://clearleft.com/is/jeremy-keith/">Jeremy Keith</a> &#8212; <span class="role">Front-end Development</span></h3>
        <p><a class="email" href="mailto:jeremy@clearleft.com">jeremy@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="_crate/inc/avatar-jon-aizlewood.jpg" alt="" width="64" height="64"/>
        <h3 class="crate-h3"><a class="fn url" href="http://clearleft.com/is/jeremy-keith/">Jon Aizlewood</a> &#8212; <span class="role">Design</span></h3>
        <p><a class="email" href="mailto:jon@clearleft.com">jon@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="_crate/inc/avatar-anna-debenham.jpg" alt="" width="64" height="64"/>
        <h3 class="crate-h3"><a class="fn url" href="http://clearleft.com/is/jeremy-keith/">Anna Debenham</a> &#8212; <span class="role">Front-end Development</span></h3>
        <p><a class="email" href="mailto:anna@clearleft.com">anna@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="_crate/inc/avatar-jessica-jebari.jpg" alt="" width="64" height="64"/>
        <h3 class="crate-h3"><a class="fn url" href="http://clearleft.com/is/jessica-jebari/">Jessica Jebari</a> &#8212; <span class="role">Project Manager</span></h3>
        <p><a class="email" href="mailto:jessica@clearleft.com">jessica@clearleft.com</a></p>
    </div>
</div>

<div class="section divide">
    <div class="half">
        <?php if ($config['ISSUES_URL'] != null) { ?> Bugs and implementation issues can be reported on <a href="<?php echo $config['ISSUES_URL']; ?>">GitHub</a>.<?php } ?></p>
    </div>
    <div class="half">
        <p class="crate-icon tel">You can always give us a call on <strong><a href="tel:+448458386163">+44 (0)845 8386163</a></strong></p>
    </div>
</div>

<?php
    include($crate_dir . 'inc/footer.php');
?>