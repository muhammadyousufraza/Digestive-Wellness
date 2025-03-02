<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Yi^xn-7:P[}Bq_+(rP/Wb>LVP*k5+2 :6z=(7a9v[|{g?Q|P)$jwHA/TJP_&-R:_' );
define( 'SECURE_AUTH_KEY',   'lIFvJA^3jcC9,2_^X}z5;37z@V#&/|;G$ ~kuw @=BLQNGF$C04F&vQ+Ku|a]P  ' );
define( 'LOGGED_IN_KEY',     'd|X32D_{MPor5JiRMSILC!#O9{}JPI]z[wlrWKIpZ1;?9o#ZQVDny0HuHG~2BzU3' );
define( 'NONCE_KEY',         'zt?vF?+;)%j`9qx$bik&m:H55Lrgx49WTqtou+L>F%*e,^{(xNz|xVc#IqjLxlc*' );
define( 'AUTH_SALT',         'T_`f~wy<cYYuh1/.{R#ONlLZy3 ,H9)(7{OQ^,o+gj9(DdOzhidpmt[_{AN~ktwS' );
define( 'SECURE_AUTH_SALT',  'hlf^Ag#.Pu^X 7UmXs/q,b!cDu-vgH1[=@x^>ZJ%J$*#aw3b#g6GFr%q*~0TG1p(' );
define( 'LOGGED_IN_SALT',    ' 9o.I4A$Z|Vv@:>>zqz}-3R&g:OH/(VIygTqB(&)4N|YuW7:LcsH/ZS]&w{G9Wv=' );
define( 'NONCE_SALT',        'yL63Yzpq_g2-WW#k@R1ibQ08/ g<W9<5Bz+{eY}E1OqgL(V$Cg4YyD/7r0-!{u#Z' );
define( 'WP_CACHE_KEY_SALT', 'v7wdqSu x=>zZ$inTSCTj5PMS5OKn.CU8><[6qWs>CrB^4l#)(gNxvYY(4./X(xW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
