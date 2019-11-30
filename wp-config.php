<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_lesson' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#8QV}FDM|>1OVxlI/f}1=d(C%c^V%w1TnhYKVhr2!Bn^e6%0~huHQ=r<xcb2e*On' );
define( 'SECURE_AUTH_KEY',  ':p0QDl{Nb1J0[#~oCrj,~^5)1EDmuTw|HX/%a.??#*]l[)vyb!TJ Oz1776kLd=|' );
define( 'LOGGED_IN_KEY',    's@FI%PjJsV+;PcxC!(^bpp-z(XuILSPP]WN5CRs:jL2/t[(nKrLQ[4>YZMU,gwYT' );
define( 'NONCE_KEY',        'f0mPRN-Oim}K6t?a|QW: 2,`vYi y0a^@PuFC+=O-.[2X?c*+HNI 2; [f|_@m1g' );
define( 'AUTH_SALT',        '=^<9VOyZNRUCBJ-X<xI00H2y`GfWvsaUa0q3FJ;t3`pGK=6qNm~IA6#}4PQ.bRB$' );
define( 'SECURE_AUTH_SALT', 'ZH5q3>4iY{(x&aytt-2xcDq9Whg$-v}<pLe6Hz@y)$#o_#X,+$9YfH}+efI03!w~' );
define( 'LOGGED_IN_SALT',   'MifF1* Hb.Pb Z.^cbK5W`(81FJMR<-+T}:XOaW[S70LT;f9~;+v5<L&=J7-ka2u' );
define( 'NONCE_SALT',       'iwV3vPmyf&t&oMT<g`Q5u~>Cux f]!F%J$0<moNhMH`6q9$@?~RH9s!Z#:g-z8L;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
