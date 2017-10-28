<?php
/**
 * Plugin Name: MUPlugin | bootstrap
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 * Description: The MUPlugin bootstrap plugin.
 *
 * @package   site\muplugin
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2017, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace site\muplugin;

// change default theme
add_action( 'muplugins_loaded', function () {
    define( 'WP_DEFAULT_THEME', 'twentytwelve' );
}, 0 );

// register existing directory that contains themes
add_action( 'muplugins_loaded', function () {
    $directory = trailingslashit( ABSPATH . 'wp-content/themes' );
    register_theme_directory( $directory );
}, 0 );
