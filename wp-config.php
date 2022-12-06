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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TravelWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         '/`Wl^_Eqj^3fA@gwB=6?,HVo#u:ay_cY6;i.x%+td]E@$XW-)iu>vQ)x>x^*Pvo5' );
define( 'SECURE_AUTH_KEY',  'S8YSks`4cv<!---q-g;EdPLPjZ*JO98!PDl6cP0$J{^bkW/y/4a7G/0zmjdvFZQ3' );
define( 'LOGGED_IN_KEY',    'Ry,N.]~,qapPG*ca?,fP^)=W$8j_wNTRQ]hhMKO3yfo>uisnj%7H;<1xx{v+Rip~' );
define( 'NONCE_KEY',        '|({}4S,$o^?p2u;bNzA@1W@`)Ahk{9)J5G%<GJ-<>v=Y{TS|bX#|(DJ|irqSwbRr' );
define( 'AUTH_SALT',        'Jm<(1963fNXI0Gmn:ttcW5x>ij4zAv.0^ZJG)S@e3VdPvDJlko,5X:}K;u~T~5@M' );
define( 'SECURE_AUTH_SALT', 'FXPclN7l@X35c(NJ(HUi2FnGr=QF/t,Ys)n}l~:{r]Si!c1M1J [WBH[YGFy&G;?' );
define( 'LOGGED_IN_SALT',   'eZt)wQn/HEr?^PsQTT5f/4yAw{%-Ib_r$>>X|ncUH]xaYZG$jpL|*;hO0UhMhcu]' );
define( 'NONCE_SALT',       '0HdxHa/r&%g1b>Zc R8 [roJ;q+</+`Ez_,?sdk9DtE|z n^q>(<L3yzbfuqhDfb' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
