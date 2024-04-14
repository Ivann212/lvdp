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
define( 'AUTH_KEY',          'yDMy(b,BBDA D/AVmr^X_H>;pP]Y+-^tAe03uB37JX]X^CT^!q5(.^jm?s0L_%h$' );
define( 'SECURE_AUTH_KEY',   'X%>I}[kSm~h.:2ch7uo.}VHbmxk;GWiTTb^!U6d_j>UL)S%s9_2Xa.GiTxm^rA6t' );
define( 'LOGGED_IN_KEY',     'd- .E/(O`]Ana:_IJg<b|ujH]nd+nT638V:UF6|e3Kg }K>ww!SB:9-Hx?ooc]UV' );
define( 'NONCE_KEY',         '+d/>F6Bxjr`Ft1TiDF<$G=vesWgd0?`ycq~9?}QE;4ID--^|iAW3.<ur-.yRf-Uv' );
define( 'AUTH_SALT',         'S0_pM5`r$4W)TI?M+%/Bx~9+D%)TK;y|BHY.^yO@|q<N/rdGJ3| 8;f1<jRw=key' );
define( 'SECURE_AUTH_SALT',  'uu~(2_!<U7~@CR##mu!|%3@;[#MboY{l82cMz<Mk/F!|J~3M,>j>dcM9O9zz)V#k' );
define( 'LOGGED_IN_SALT',    'MTiFL E`W~3Je1)tcBO6%sl)bmAVFfk1 2x;@C]u-`RK+#~QNlO/)CJ<O|K XM|!' );
define( 'NONCE_SALT',        'NGlXB[PS3=~U%J|hZ//x/$z8r)i;! +Z&cytmW(269>RkA*gS>3z-i2aC~o;l&P:' );
define( 'WP_CACHE_KEY_SALT', 'h<2 eR=AK`_`;];-V?Ejk})oCC]n[&aGwS6dz[p%`U yPlAITt*;FtCp5ekM]X}9' );


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
