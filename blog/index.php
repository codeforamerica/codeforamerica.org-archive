<?php include_once('../../_includes/head.php'); 
    $pageTitle = 'Blog';
?>

<?php include_once('../../_includes/header.php'); ?>
    
    <section>
    
        <div class="layout-semibreve layout-tight">
            
            <div class="layout-centered">
                <h2 class="h3 isolate">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</h2>
            </div>
        
        </div>
        
        <?php include_once('../../_includes/blocks/patterns/nav-tabs.html'); ?>
        
        <div class="layout-semibreve layout-tight">
            
            <div class="tab-content">
                <div class="tab-pane state-active">
                    <?php include_once('../../_includes/blocks/patterns/teasers-blog.html'); ?>
                    <p class="layout-centered isolate"><a href="#" class="button button-subtle button-crotchet text-whisper">Load More</a></p>
                </div>
            </div>
            
        </div>
        
    </section>
    
<?php include_once('../_includes/footer.php'); ?>

<?php include_once('../_includes/foot.php'); ?>