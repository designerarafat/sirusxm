<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u357996510_du3Vi' );

/** Database username */
define( 'DB_USER', 'u357996510_JRyN4' );

/** Database password */
define( 'DB_PASSWORD', '3lIbuJ61je' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'A}]exB;@f=*|TxnO{XF<U#(UlGIlErO^Q>?F^Upw}q32b|CX=(_9H:#$]k5ju:da' );
define( 'SECURE_AUTH_KEY',   '{O2Me[1y1o8j^uan>LZF8(.76=Y-Va6|VLaBH!?>]L*m.>y.,2],(wLjVcS :8iH' );
define( 'LOGGED_IN_KEY',     'c:6<v.uZ1{ _mEI2&u8A4$]^_>^7@k< p_/C10t.C^-_4vkvd<(=DyP_s<Ew>*0(' );
define( 'NONCE_KEY',         'Td1$r1Lw^ovhGc eMOsp<jZmL!gMRN 8KX KvD!$^{(k<52xg2?/4qy7;T0$.dk,' );
define( 'AUTH_SALT',         '1]v_bsV Ohn0{diygnqa{BH6!zoYZu_RoYr aS.Ll5[UF2YSkc1$gCzi$_^o+*D!' );
define( 'SECURE_AUTH_SALT',  'J+@]fzA-]MnPgO.6f<=%K1)C90L8.Qw.wIv7:-1`w*Zt%epH|[n[~X}6bVMJ0I%y' );
define( 'LOGGED_IN_SALT',    'o;Ch$tkFtc,{aO?)VzhC.`s}/,,m>bQ%kG?XC4fl(XV-kR1@)]!:z>&B{5KBIgg?' );
define( 'NONCE_SALT',        'FR41~H3yH6XvoU{e~KYlcOXaU=J1L$+a-HLr1V#v_#PzMp1V0f{p=dGrlbvD,:f|' );
define( 'WP_CACHE_KEY_SALT', ';W{H%/bV-A5%zvz-U/j<L^ h>__:R6s|nf)X=pOu M]j7FMN&Y1@*3Vlnkl7 t>i' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '587929b771de1f86603f4d31282cee2a' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
