<?php
/*
Plugin Name: IM Preload JS
Plugin URI: http://dev.interactivemechanics.com/imredesign
Description: Declares a plugin that will preloads javascript files
Version: 1.0
Author: Interactive Mechanics 
Author URI: http://www.interactivemechanics.com/
License: GPLv2
*/
 

add_action('wp_head', function () {

    global $wp_scripts;

    foreach($wp_scripts->queue as $handle) {
        $script = $wp_scripts->registered[$handle];

        //-- Weird way to check if script is being enqueued in the footer.
        if($script->extra['group'] === 1) {

            //-- If version is set, append to end of source.
            $source = $script->src . ($script->ver ? "?ver={$script->ver}" : "");

            //-- Spit out the tag.
            echo "<link rel='preload' href='{$source}' as='script'/>\n";
        }
    }
}, 1);

?>