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
define( 'DB_USER', 'app' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         'TVC`{6B$[CA7[r~9^@|@w+VVs!c.S@#K6>o$cy}pfU!@0:-r;c!=+@05?ntfA+c' );
define( 'SECURE_AUTH_KEY',  '%5t!Guo|C_0Q?x`[y9[+/S?2k+r}pE|t-?bq#Oo]vL:k.g-Y=D-{LrMzV6P|J#{z' );
define( 'LOGGED_IN_KEY',    'h7pR.:<!UjRg-pMfz#5.&ans~M7.83H>BIuVNcIZ(ai&}qlF1xuQ&~_:b_s{;oO@' );
define( 'NONCE_KEY',        'Suw!1.H`R4n0B@Ff!g1j][*i5!+tfRzV{^Zph|*n3go~A&oCjN?xBzwy~ud[GiK' );
define( 'AUTH_SALT',        'GAhZ6pSr^[[]e7Q@Hb+Q*F#02;p%l.;7y5gN{&{)X*q!oq|=)L+H<K@+:|tLOVsc' );
define( 'SECURE_AUTH_SALT', '$[{0YX!k7YV-VI]f01}I;/hOm`xP&#{Q`w+`O_pte+|5 gr0jGvg|[(!W08L&t^w' );
define( 'LOGGED_IN_SALT',   'cR<Xv|(7G 4]b/Jp%[LD-47(v<Q#51t-<Kcck`1~3H>QjLzkSz[@EB%0-A(F;;A;' );
define( 'NONCE_SALT',       'aU,4#o?L9N7$w@ ZFBWI&viF%XYC<YCx+kf[)-j.;I] <#/FuC|}up-r|`ybCjyf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wps1t3_';

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
