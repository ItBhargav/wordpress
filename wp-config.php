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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xyW&aPk+,sb(qDMY-Y<XyJV`xZq?rt)WL=emUsEV0`zH#.BdiJa WK-=,RjH{JK&' );
define( 'SECURE_AUTH_KEY',  '+5*Nl6v16KBON}>.BHjs{67p-Nr3Sgc49xo{}6%>CP;_du9e`jiY/gQ9W2VzD:;:' );
define( 'LOGGED_IN_KEY',    'D5]aCi.jlNI 8_u,^|e`*rpWmADI_m^Y,z?VtH:I9_Bb FNM><q~Zn!Gt<_?2;tK' );
define( 'NONCE_KEY',        'Lul@K.QsUT9OCp:YtawQYM`^J(4O@$Iz>UvtjME6}lNfW`t->bYRT(PjNd?_n6E7' );
define( 'AUTH_SALT',        '}!QEWC;cL6q>gXl[g,xgAd>F{aLGtjiMraL6+)l?8EuP=o(YobdA9/p`OC3mQZcX' );
define( 'SECURE_AUTH_SALT', '&X0nY~qU:CFWTim]av=1bU`[U{:4IIqe4kK)6G0GVSNXwQFRK$<D1N#q@+Z+0V)9' );
define( 'LOGGED_IN_SALT',   'q[d#s6=_d%2?a7^>9}rt0zVQbSlv-3oP]2_[V.7$s,|PrS=6G|uBi3bmio7M?A<L' );
define( 'NONCE_SALT',       're?7y$)GU2>lWWf!EX9/y*rnP5D`mt<]m!u/-pyj|*R;zM&6&J]f:-&,_{3Hsl.a' );

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
