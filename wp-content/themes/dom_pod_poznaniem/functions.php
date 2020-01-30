<?php

//Remove automatic wrapping WYSWIG editor content into <p>
// function my_acf_add_local_field_groups() {
//     remove_filter('acf_the_content', 'wpautop' );
// }
// add_action('acf/init', 'my_acf_add_local_field_groups');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wpse_wpautop_nobr( $content ) {
    return wpautop( $content, false );
}

add_filter( 'the_content', 'wpse_wpautop_nobr' );
add_filter( 'the_excerpt', 'wpse_wpautop_nobr' );

function format_phone($phone) {
    if (strlen( $phone ) != 9 ) {
        return $phone;
    }
    $result = '+48&nbsp;' . substr( $phone, 0, 3 ) . '&nbsp;' . substr( $phone, 3, 3 ) . '&nbsp;' . substr( $phone, 6, 3 );
    return $result;
}

add_action('get_header', 'remove_admin_login_header');

function get_image_sources($field_name) {
    echo ''?>
        <source srcset="<?= get_field( $field_name )['sizes']['medium']?>?version=0.12"
        media="(max-width: 300px)">
        <source srcset="<?= get_field( $field_name )['sizes']['medium_large']?>?version=0.12"
        media="(max-width: 768px)">
        <source srcset="<?= get_field( $field_name )['sizes']['large']?>?version=0.12"
        media="(max-width: 1024px)">
    <?php ;
}
// function test() {
//     remove_filter( 'the_content', 'wpautop' );
//     add_filter( 'the_content', 'wpautop' , 12);
// }
// test();


/*
	Get Script and Style IDs
	Adds inline comment to your frontend pages
	View source code near the <head> section
	Lists only properly registered scripts
	@ https://digwp.com/2018/08/disable-script-style-added-plugins/
*/
function shapeSpace_inspect_script_style() {
	
	global $wp_scripts, $wp_styles;
	
	echo "\n" .'<!--'. "\n\n";
	
	echo 'SCRIPT IDs:'. "\n";
	
	foreach($wp_scripts->queue as $handle) echo $handle . "\n";
	
	echo "\n" .'STYLE IDs:'. "\n";
	
	foreach($wp_styles->queue as $handle) echo $handle . "\n";
	
	echo "\n" .'-->'. "\n\n";
	
}
add_action('wp_print_scripts', 'shapeSpace_inspect_script_style');

// disable stylesheet (example)
function shapeSpace_disable_scripts_styles() {
    
    if ( !is_page( 'kontakt' ) ) {
        wp_dequeue_script( 'google-recaptcha' );
        wp_dequeue_script( 'contact-form-7' );
        wp_dequeue_style( 'contact-form-7' );
    }
    
	wp_dequeue_style('wp-block-library');
	
}
add_action('wp_enqueue_scripts', 'shapeSpace_disable_scripts_styles', 100);


function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );


/**
 * Add defer attribute to Google reCaptcha script
 *
 * @param String $tag		- Script HTML
 * @param String $handle	- Unique identifier for script
 *
 * @return String $tag
 */
// function prefix_add_defer_attribute( $tag, $handle ) {
	
// 	// The handle for our google recaptcha script is <code>google-recaptcha</code>
// 	// IF it's not this handle return early
// 	if( 'google-recaptcha' !== $handle ) {
// 		return $tag;
// 	}
	
// 	// IF we don't already have a defer attribute, add it
// 	if( false === strpos( $tag, 'defer ' ) && false === strpos( $tag, ' defer' ) ) {
// 		$tag = str_replace( 'src=', 'defer src=', $tag );
// 	}
	
// 	return $tag;
	
// }
// add_filter( 'script_loader_tag', 'prefix_add_defer_attribute', 10, 2 );


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
?>