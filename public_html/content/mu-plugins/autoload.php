<?php
/**
 * Plugin Name: MUPlugin | autoload
 * Author: Thiago Senna
 * Author URI: http://thremes.com.br
 * Description: The MUPlugin autoload plugin.
 *
 * @package   site\muplugin
 * @author    Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2017, Thiago Senna
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace site\muplugin;

if ( file_exists( dirname( dirname( ABSPATH ) ) . '/vendor/autoload.php' ) ) {
    require_once( dirname( dirname( ABSPATH ) ) . '/vendor/autoload.php' );
}
