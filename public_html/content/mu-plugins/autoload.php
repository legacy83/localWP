<?php
/**
 * Plugin Name: Site/MUPlugins/Autoload
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 * Description: The Site/MUPlugins/Autoload plugin.
 *
 * @package   site\muplugins
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2017, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace site\muplugins;

if ( file_exists( dirname( dirname( ABSPATH ) ) . '/vendor/autoload.php' ) ) {
    require_once( dirname( dirname( ABSPATH ) ) . '/vendor/autoload.php' );
}
