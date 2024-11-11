<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luxtimemedia.com_db' );

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
define( 'AUTH_KEY',         'nVJys7xiJBpg?#3)&[D z#bG@5$4m=F&#I@=<t?8&w<.RP)p)ZkkT_e)6`0YXP:W' );
define( 'SECURE_AUTH_KEY',  '~S5tG<d3jU/)!] XqNzihM4gpZvsDm]?|O|o%MbJV{%6i3E/q4nfnes%>&-!g_Ez' );
define( 'LOGGED_IN_KEY',    '}@igOF$_OG/R?jk>)W> Qkc:vHhe?r.k;_y|tnWlc0^b&PtS!Bq.1B7Mse.FLWcD' );
define( 'NONCE_KEY',        'V[PU@i/*A`=/OEQ}qq[5]!/=d UMOyg-5Z[6@QI3>n!%mqc|Wyp^Y]K61mcq YVe' );
define( 'AUTH_SALT',        'wRY(1F,(=%ZG-&X<9As@2CR*&S-u4AVbm9^u574N75JO:>ux#?H}nOQ%g0{~LZ-]' );
define( 'SECURE_AUTH_SALT', 'PE$)>D]TMi8nztjjL)b/|!*=O4Yjd2q}-j/)H5Qpwo_#m+-b&RePAu|^7yiC:[Dv' );
define( 'LOGGED_IN_SALT',   'fB>@<IFYV:ppWi $hbEwaPSlw!aM0/p9ZX@IhR?$DSdk.6{f=GLU:,!W1VQvq 6S' );
define( 'NONCE_SALT',       'oSeflz6P#qzYY_iY8wm/%<&9=n.CM^*yb&9:F-JxMkUd![ZKNg&97|-@{>.(b[4 ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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