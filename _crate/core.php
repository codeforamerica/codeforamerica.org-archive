<?php

# Some time settings
date_default_timezone_set("Europe/London");

# Setup some directory references for here and the templates
$root_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']);
$crate_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']) . "_crate/";

# Load the config into global.
$config_file = $root_dir . "_config.conf";
$comment = "#";

$fp = fopen($config_file, "r");

while (!feof($fp)) {
    $line = trim(fgets($fp));
    if ($line && !preg_match("/^$comment/", $line)) {
        $pieces = explode("=", $line);
        $option = trim($pieces[0]);
        $value = trim($pieces[1]);
        $config[$option] = $value;
    }
}
fclose($fp);

# Get directories in the route for the header.
$directories = get_file_index($root_dir);

function list_files($options = array()) {
    if (gettype($options) == 'string') {
        $options = Array('url' => $options);
    }
    $options['url'] = isset($options['url']) ? $options['url'] : null;
    $options['prefix'] = isset($options['prefix']) ? $options['prefix'] : null;
    $files = get_files_with_prefix($options['prefix'], isset($url));
    if (isset($options['sort'])) {
        $files = custom_sort_files($options['sort'], $files);
    }
    foreach ($files as $file) {
        $html =  '<li>';
        $html .= '<a class="crate-icon file" href="' . $file["url"] .'">' . $file["name"];
        $html .= '<span class="meta"><strong>Updated:</strong> ' . $file["last_modified"] . ', ' . $file["size"] . '</span></a></li>';
        echo $html;
    }
}

function list_files_with_prefix($prefix, $url = null) {
    list_files(array(
        'url'    => $url,
        'prefix' => $prefix
    ));
}

function custom_sort_files($sort, $files) {
    $sorted = array();
    foreach($sort as $name) {
        foreach ($files as $key => $file) {
            if ($file['name'] == $name) {
                array_push($sorted, $file);
                unset($files[$key]);
                break;
            }
        }
    }
    return array_merge($sorted, $files);
}

function get_file_index($dir) {
    if ($handle = opendir($dir)) {
        $thelist = array();

        /* Loop through the directory and return showable directories. */
        while (false !== ($file = readdir($handle))) {
            if (is_showable_file($file)) {
                array_push($thelist, $file);
            }
        }

        closedir($handle);
        sort($thelist);
        return $thelist;
    }
    
}

function get_files_with_prefix($prefix, $url = null) {
    $url = filter_url($url);
    $dir = get_dir_from_url($url);
    if ($handle = opendir($dir)) {
        $thelist = array();

        /* Loop through the directory. */
        while (false !== ($file = readdir($handle))) {
            /* If prefix is set then check if it is at the beginning of a file name. */
            if (!isset($prefix) || strpos((string)$file, $prefix) === 0) {
                if (is_showable_file($file)) {
                    array_push($thelist, array(
                        "name" => $file,
                        "url" => $url.$file,
                        "last_modified" => date("d F Y, H:i", filemtime($dir.'/'.$file)),
                        "size" => filesize($dir.'/'.$file),
                        "format" => get_file_suffix($dir.'/'.$file)
                    ));
                }
            }
        }

        closedir($handle);
        
        sort($thelist);
        return $thelist;
    }
}

function filter_url($url) {
    if (!empty($url)) {
        if (substr($url, -1) != '/') {
            $url = $url.'/';
        }
    } else {
        $url = '';
    }
    return $url;
}

function get_dir_from_url($url = '') {
    if (isset($url[0]) && $url[0] == '/') {
        $dir = $_SERVER['DOCUMENT_ROOT'].$url;
    } else {
        $dir = getcwd().'/'.$url;
    }
    return $dir;
}

function is_showable_file($file) {
    $black_listed_dirs = array('.', '..', 'index.php', '.htaccess', '.svn', 'README.md', 'readme.md', 'license', 'LICENSE', 'readme.markdown', 'favicon.ico', 'apple-touch-icon.png', 'apple-touch-icon-precomposed.png');
    
    /* Get rid of anything that starts with a . or an _ */
    if (strpos((string)$file, ".") !== 0 && strpos((string)$file, "_") !== 0) {
        /* Get rid of anything in the black list */
        if (!in_array(strtolower($file), $black_listed_dirs)) {
            return True;
        }
    }
    return False;
}

function get_file_suffix($file) {
    $parts = explode('.', $file);
    return end($parts);
}

?>