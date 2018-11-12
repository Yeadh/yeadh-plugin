<?php
/**
* Plugin Name: bappy plugin
* Plugin URI: https://github.com/Yeadh/bappy-plugin
* Description: After install the bappy WordPress Theme, you must need to install this "bappy-plugin" first to get all functions of bappy WP Theme.
* Version: 1.0.0
* Author: BusinessTheme
* Author URI: https://github.com/Yeadh
* Text Domain: bappy
* License: GPL/GNU.
*/


//define
define( 'PLG_URL', plugins_url() );
define( 'PLG_DIR', dirname( __FILE__ ) ); 

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
include_once(PLG_DIR. '/inc/custom-posts.php');