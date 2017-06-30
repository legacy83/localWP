<?php
/**
 * Plugin Name: Site/MUPlugins/Autoload
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 * Description: The Site/MUPlugins/Autoload plugin.
 *
 * @package   site\muplugins\autoload
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2017, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace site\muplugins\autoload;

use Composer\Autoload\ClassLoader;

/**
 * Get the composer class loader.
 *
 * @return ClassLoader
 */
function get_loader()
{
    $base_dir = dirname( dirname( ABSPATH ) );
    $vendor_dir = trailingslashit( "{$base_dir}/vendor" );

    static $loader;
    if ( !isset( $loader ) && file_exists( "{$vendor_dir}autoload.php" ) ) {
        $loader = require_once( "{$vendor_dir}autoload.php" );
    }

    return $loader;
}

// init the composer class loader
call_user_func( __NAMESPACE__ . '\get_loader' );
