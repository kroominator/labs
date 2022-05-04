<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'ginkru_dk_db' );

/** Database username */
define( 'DB_USER', 'ginkru_dk' );

/** Database password */
define( 'DB_PASSWORD', 'Slaptazodis29' );

/** Database hostname */
define( 'DB_HOST', 'mysql107.unoeuro.com' );

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
define( 'AUTH_KEY',          'I!Gu:}ZI>bpo7m}XWSzY-M@+_JYzf.B@*b1@F2`&p9IPL#g%xc@NW<mR|hYS7d[R' );
define( 'SECURE_AUTH_KEY',   'K.)3H%xw;.#ugj?2ku,e`t|.!S^87/IjbM;:7Wv1_MR6Adk&z0Yr1|L/Lq!L|Tlb' );
define( 'LOGGED_IN_KEY',     '(ouKy+;#t6~]@t{oH:xy3WjEWZKncI~IAZ$[=nIOkKNuMFpQ6$M[x6NX~650+R-M' );
define( 'NONCE_KEY',         '{`W?Ze`Ep8mQ9=z5V=l#E@pL^09Wk8/+iY/c:J`KK7gY(r^SBz6o2`^-Duw8?_81' );
define( 'AUTH_SALT',         '3S0<Nd&U[iNomAlc;oBonk>qPD6;rW)tGXEPbK!R=ZZe- 7`;kRkXPtw5+:AaE%6' );
define( 'SECURE_AUTH_SALT',  'jrov@fvy/}3e)Ka,oz,il?(nm[0WS}Fg_jHx2wshtQ6~$#n{G_6z^[k%#&tu69/c' );
define( 'LOGGED_IN_SALT',    ':,*Vi|SfIg?hD&{!x}k-Evnb|L6c.20wf<!jJfdYgvKwwD~t*Ag{`>MIj5H6YCjx' );
define( 'NONCE_SALT',        'kHQPepYWz-!{0p*Vb7.0iZ>+Oj,pHP4#Uac4~bD&aaGw%$t|0GC2&6i^e6;<>{Gy' );
define( 'WP_CACHE_KEY_SALT', '^>pb^PGuP7c5yK?BKmN~LcG3:NP|_iiFq/UBx[X]dE#6%<O$irOtgsCA@oj=ho#~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clk_954a8c58e6_';

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



define( 'WP_MEMORY_LIMIT', ini_get('memory_limit') );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
