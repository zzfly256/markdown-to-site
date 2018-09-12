<?php
/**
 * Markdown to site
 * User: Rytia
 * Date: 2018/9/12
 * Time: 19:07
 */

include 'vendor/autoload.php';

//  Modify Markdown Text
$file = file($_GET['md']);

$loc = '';
foreach ($file as $line => $value){
    if (substr($value, 0, 1) == "#" AND substr_count($value, "#") <= 3) {
        $title = str_replace([" ", "\t", "\n", "\r", "#"], '', $value);
        $size = explode(" ",$value);

        $loc .= $size[0]." [".$title."](#".$title.")\n";
        $file[$line] = "<span id='".$title."'>\n".$value."\n</span>";
    }
}

// Generate HTML
$parse = new Parsedown();
$loc = $parse->text($loc);
$content = $parse->text(implode($file));

// View
include 'view.php';