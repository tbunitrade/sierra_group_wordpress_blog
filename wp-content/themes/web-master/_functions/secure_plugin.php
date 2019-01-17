<?php

/////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
/////////// Sierra Osonich Plugin ///////////////////////
////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////
// kill tags for hackers
// remove the unwanted <meta> links
// <meta name="generator" content="Woo Framework Version 3.1.1" />
// <meta name="generator" content="WordPress 3.5" />
// <meta name="generator" content="Canvas 3.0" />
// <meta name="generator" content="Woo Framework Version x.x.x" />
// hide the meta tag generator from head and rss
function disable_version() { return '';}
add_filter('the_generator','disable_version');
remove_action( 'wp_head', 'wp_generator');
remove_action('wp_head', 'woo_version'); 
function no_woo_version (){   return true;}
add_filter ('wf_disable_generator_tags', 'no_woo_version');

//if included in wp_head
// add_action( 'after_setup_theme', 'my_wp_version_remover' ); function my_wp_version_remover(){
//     remove_action('wp_head', 'wp_generator');   //remove inbuilt version
//     remove_action('wp_head', 'woo_version');    //remove Woo-version (in case someone uses that)
// }



add_filter( 'style_loader_tag',  'clean_style_tag'  );
add_filter( 'script_loader_tag', 'clean_script_tag'  );

/**
 * Clean up output of stylesheet <link> tags
 */
function clean_style_tag( $input ) {
    preg_match_all( "!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );
    if ( empty( $matches[2] ) ) {
        return $input;
    }
    // Only display media if it is meaningful
    $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';

    return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}

/**
 * Clean up output of <script> tags
 */
function clean_script_tag( $input ) {
    $input = str_replace( "type='text/javascript' ", '', $input );

    return str_replace( "'", '"', $input );
}