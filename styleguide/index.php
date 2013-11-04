<?php
    $crate_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']) . "_crate/";
    require($crate_dir . "core.php");
    include($crate_dir . "inc/header.php");
?>

<h1 class="crate-h1"><?php echo $config['PROJECT_NAME']; ?></h1>
<h2 class="crate-h2">Styleguide</h2>


    <select onchange="document.location='#'+this.options[this.selectedIndex].value" class="select-pattern input pull-right">
            
            <?php
            
            $files = array();
            $handle=opendir('../_patterns');
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
          
    </select>
    


	<?php
		$files = array();
		$patterns_dir = "../_patterns";
		$handle = opendir($patterns_dir);
		while (false !== ($file = readdir($handle))):
			if(stristr($file,'.html')):
				$files[] = $file;
			endif;
		endwhile;
		rsort($files);
		foreach ($files as $file):
			echo '<section class="pattern" id="'.str_replace('.html', '', $file).'">';
			
			echo '<details class="primer">';
			echo '<summary class="name" title="Show markup and usage"><strong>'.str_replace('.html', '', $file).'</strong> markup and usage </summary>';
			echo '<section>';
			echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
			echo '<p class="caption"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
			echo '</section>';
			echo '</details><!--/.primer-->';
			echo '<div class="preview">';
			include($patterns_dir.'/'.$file);
			echo '</div><!--/.preview-->';
			echo '</section><!--/.pattern-->';
		endforeach;
	?>
	

<?php
    include($crate_dir . 'inc/footer.php');
?>