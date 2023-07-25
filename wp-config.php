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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'three-sixty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'kk>Zw@G/z&DEaL.$sT0pE|o$;4XR9U;gD+U`UvL1z=Wq;M?+3H:L48s0}w)n >bW' );
define( 'SECURE_AUTH_KEY',  '/}HC{HL#`Nj[m)-XA_!wFH=^P]hy1DE?=&_W/mIHQ$:{~/c+lpr+O5CJI6SxeXc$' );
define( 'LOGGED_IN_KEY',    'YmuQi3Ce:W,V^<&=FhWFE^=R)k8j;5zXW!ZpN3!N^EOyfT^1mmoq;Kh+(>r(5cW4' );
define( 'NONCE_KEY',        'oWUGJs7p~1IA0&`kHC^*[^8Vkvj5c{Vu0lL|,.?%)*cfYO=X~Q 9FLN_$UU^ks-^' );
define( 'AUTH_SALT',        'RYu7tcHAGq4;@Ga,Q}EkvY.wG]7U(WHxnFQLYrf>RutgyT!ZpRj#:Ae9K1J6-Q5G' );
define( 'SECURE_AUTH_SALT', 'M*RlYmL*<8 i&HRbv0U@@+F,>`zn%REPpRD4Fcu+IlO>5a;I{uSfO8i7G{5T<R$k' );
define( 'LOGGED_IN_SALT',   '#]!T6^`mhx^*^Tq<kvU%>aS9,^T.{oJ)cZ,c#7vfOP!:t99BP/dL+$|kTP//:fxx' );
define( 'NONCE_SALT',       '&[N$b<VsrqOf 8=(j7v?^x!(T3/.O/r9{&z+CwibGuw_cUodR*F-1Zlq7 e4Br$ ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
