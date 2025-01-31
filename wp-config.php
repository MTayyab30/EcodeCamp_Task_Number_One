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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crazyglamor' );

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
define( 'AUTH_KEY',         'BAnt:7Vbppc9o%>q+hgSl}ggToR,lN6h,@y*%W!5OYs|90|sz?&,MSVG9b/{{`?9' );
define( 'SECURE_AUTH_KEY',  ';x(8]!RZoa/P#4A05N0j0jNqPv 4vz<p//otIsr-A8,k!6<_17Y {!K|^B#FZT%4' );
define( 'LOGGED_IN_KEY',    'y<iD?MGg1>t=^{TT)RlMS3*^>;7]MsxCy{(pC4GUz9fW@q^UJ/6H2=2O|b{gPJM=' );
define( 'NONCE_KEY',        'RP+C@6s1UuLPfNU-l<(k)1ew6UPcCQa:.k$Ej7bEhj$$}b?(CLUj5#XSHbkh[.Uw' );
define( 'AUTH_SALT',        'e?r0-xL_wy,F6[@`WVVN~Jcn^:OXc-1$w0UI)&{6QNS0Lt=qvfWyH3/c`f6-Rm%@' );
define( 'SECURE_AUTH_SALT', 'BX^FO9{D(%bBPsZu:l1SJO_oEK+p!9w?X?ogQLigPyzwG;D!<l9y4,trzVG(Z 8^' );
define( 'LOGGED_IN_SALT',   'R9a6;-EdXCY#^K`r7ddtp3|.m4-;#aFq#p$)(xbbC8-55w 7)!%@BK:&PfxZSKh?' );
define( 'NONCE_SALT',       'BgagE!I.`QLB5HOKyE{]RK/[JQe`3$iwHzj(7bJrF8s$zZPWn.F,#&7~o;d&5kt(' );

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
