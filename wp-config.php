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
define( 'AUTH_KEY',          '<*8#}C(c([0_}]/R6SZ5]{t/G>@51s}+m4z^Y Yi#k<q~HIHUFCBhDNpl:WXmsCb' );
define( 'SECURE_AUTH_KEY',   '6uugq_aH&j.xHU8=rsakO/Bq~mS$7w;B7[ip:OAG;4kW5t(ahvZvvv/_`In7DIDm' );
define( 'LOGGED_IN_KEY',     'rwzQZC7w,!KcRwZ@*ug`7cxj5jQ3.Y%i7]Y:jRXp)Y(t4+)0qM~[Wdyl1-5hM>n;' );
define( 'NONCE_KEY',         'g$xf4v~e%ILW!k~W<re=9.Yonew=f=qI$<yoW_Z$Akc_-[j&LMASVdMIFZ49Ss&l' );
define( 'AUTH_SALT',         'oD]DdD*YVIEj[Uk]nF[%6A; B_$fncfCj`gV?x;pc#SDERe?P1a:!Z@CyLAo`3Q4' );
define( 'SECURE_AUTH_SALT',  'ch=%l&bSmQdBO^[$!T:E9qsP_DfF{J`ZzXTN46^;o]i+p)6s}%,r/[pjXHzjshTL' );
define( 'LOGGED_IN_SALT',    'G$fjlD}&dYuI2n0A?}{S+D ].VH>YUlS9V$}pfF+mZ;giLlQzz4yUL]g3}L8JG3s' );
define( 'NONCE_SALT',        'trN!lkS-H)C~P>r]_d4=F (eejGnU7N1q@3-~oA#(vt|( GYf44I:+;4Hov$sj;k' );
define( 'WP_CACHE_KEY_SALT', 'N3{Pn!KKJ8p=W-3h|>l{]*,jaTdZj27 WC!+4pnexBo w/hE .kHh;O_j%Bv.rQc' );


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
