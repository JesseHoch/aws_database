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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Password1' );

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
define('AUTH_KEY',         '0-51.]#ac%!I; ?o}BMDX10I:t7(Iv/$OO<JvDIM9y[(o%<qD4)$^[O(t(}UaXlq');
define('SECURE_AUTH_KEY',  'h8-?c-Xd#/?G-*$i2P!,|u9lr+-k:+m]+2ckpQam=|8]LIi7rToS~1t=^ly-if*6');
define('LOGGED_IN_KEY',    '13`L&tO^w:Ed]94]4h~s-u|b|Jy_ *g~-I3L|iUqf}A?zh;C3*.{Q}a$A+4&{%zC');
define('NONCE_KEY',        'L/];]H=nLs!cl/J||nR(%?_7PG}?]%Gjx|Lg(e8;!x$3UD3+S@I4+1d:(yx6a}/:');
define('AUTH_SALT',        'XFXUIuHI%i+IQ{Lw>M$vxu2{AtKgUb  vb_-.#s?lcrP_:2Kz.?gI1I|DlbiDCCa');
define('SECURE_AUTH_SALT', ')6l>%)`-=c{%O<afSTD!Gb2;?+oS[#^?weH2l0|<1:G5OvE+(N8;nz+YA=H?u,=8');
define('LOGGED_IN_SALT',   '<$>%nIEw]]+aGNW+iSYSd|O}ete4,!GoA-`5&pzp`K_cMJ;s~TU9AQ^!tzkjgu`-');
define('NONCE_SALT',       'O~/ /^$ciu7 $WHT]iK{dfB3=@WTUgQ)O7n#wQ6+>|nJdmajxbB*J}P%B-okT3x|');

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
