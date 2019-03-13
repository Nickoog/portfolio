<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/* INCLUDE ALL PHP FILES IN LIB/INC */
foreach(glob(get_template_directory() . "/lib/inc/*.php") as $file){
    require $file;
}

/* ACF Options page feature */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}
/* Email setup */
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->IsHTML(true); 
}

add_action( 'wp_ajax_nopriv_ajax_forms', 'ajax_forms' );
add_action( 'wp_ajax_ajax_forms', 'ajax_forms' );
function ajax_forms() {
    $post =str_replace("\\","",$_POST['forms']);
    $obj = json_decode($post,true);
    $text = '';
    $recipiant = get_field('email','option');;
    //set confirmation mail
    $email = $_POST['email'];
    $subjet = get_field('subjet','option');
    $message = get_field('message','option');

    foreach ($obj as $key => $value){
        $text .="<br><br><Strong>".$key."</Strong>: ".$value."<br>";
    }
    echo wp_mail( $recipiant, $_POST['title'], $text) && wp_mail( $email, $subjet, $message );
    //echo wp_mail( $recipiant, $_POST['title'], $text);
    die();
}
// disable admin bar
show_admin_bar(false);
