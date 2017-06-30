<?php

/*
 * --------------------------------------------------------------------------------
 * Alternate Config
 * --------------------------------------------------------------------------------
 *
 * Maybe load an alternate configuration
 *
 */

if ( file_exists( dirname( __FILE__ ) . '/wp-config.local.php' ) ) {
    require_once( dirname( __FILE__ ) . '/wp-config.local.php' );
    return;
}


/*
 * --------------------------------------------------------------------------------
 * MySQL settings
 * --------------------------------------------------------------------------------
 *
 * MySQL settings - You can get this info from your web host
 *
 */

define( 'DB_NAME', 'www' );
define( 'DB_USER', 'www' );
define( 'DB_PASSWORD', 'www@secret' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );


/*
 * --------------------------------------------------------------------------------
 * Home/Site address (url's)
 * --------------------------------------------------------------------------------
 *
 * Change these to different home/site address (url's).
 *
 */

define( 'WP_HOME', 'http://www.gozma14.local' );
define( 'WP_SITEURL', 'http://www.gozma14.local/wp' );


/*
 * --------------------------------------------------------------------------------
 * Custom Content Directory
 * --------------------------------------------------------------------------------
 *
 * Change these to different content directory/url location.
 *
 */

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', WP_HOME . '/content' );


/*
 * --------------------------------------------------------------------------------
 * Authentication Unique Keys and Salts
 * --------------------------------------------------------------------------------
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 */

define( 'AUTH_KEY', 'Wwt-V>qYb_MY,Xk./fI5b(Gf^?*Ry{fm.w--+N)m{R2/BMn3+fDj3H5 nWAIMo Q' );
define( 'SECURE_AUTH_KEY', 'kbs@8oo|:$;4Z7y]Uur)lu9vTnW|t75vH:%1N3ln)/,b22!/$m+Dj,mU!wTp]c49' );
define( 'LOGGED_IN_KEY', 'xAv`yhe%se_-+w*EW8C9M_)@*XCUd#4.li#aR^aTMu*qk9Slg}n.Fh.=$*WRDAt+' );
define( 'NONCE_KEY', 'eB1^Qp:g~el#<;bS3E3V6;f3MxX~x1WH=VIs9@;S8j*YCJ4]!MvnOc61YVsigwf7' );
define( 'AUTH_SALT', '>.<{_LO@(uSY(C30_>j,SUn:$PcA$rXBj*{i-+n+Eo@mW,g#@+JNn!O.HL$#ct(P' );
define( 'SECURE_AUTH_SALT', '_-r6/E%}Ms>{;7)Z$kwVD{#~jC&Un]*o%3Y~wm01B]5J_}CW|wdFnTQ{.|PXR/bY' );
define( 'LOGGED_IN_SALT', '!BQ_*-@l2=V$NSFaM*efY|`6YAV[toUY/+>Z]Dce/Xte4hPl.9f5=ukLUVglzmj@' );
define( 'NONCE_SALT', 'ZiShKo3OsC4=G9pHGQ./L0X|VG {TsrqD-|8S?+bx<n?%@746>W@r+G+qm(+/}Lw' );


/*
 * --------------------------------------------------------------------------------
 * WordPress Database Table prefix
 * --------------------------------------------------------------------------------
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 */

$table_prefix = 'wp_';


/*
 * --------------------------------------------------------------------------------
 * For developers: WordPress debugging mode
 * --------------------------------------------------------------------------------
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 *
 */

define( 'WP_DEBUG', FALSE );


/*
 * --------------------------------------------------------------------------------
 * Sets up WordPress
 * --------------------------------------------------------------------------------
 *
 * Sets up WordPress vars and included files.
 *
 */

if ( !defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}

require_once( ABSPATH . 'wp-settings.php' );
