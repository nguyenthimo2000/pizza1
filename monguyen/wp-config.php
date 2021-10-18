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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monguyen' );

/** MySQL database username */
define( 'DB_USER', 'monguyen' );

/** MySQL database password */
define( 'DB_PASSWORD', 'monguyen' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<yGFV!,I;nmRb=^oNCBgflW/I!!:nwtMl[S9Wok<:!K9H*WstPDnvA2ITRk?k;$[' );
define( 'SECURE_AUTH_KEY',  '-<%|`0J6tGBEmZIZ{?{v!%Oz*;@,&7.tG@*+ehVjSULr;PO1Mvb6+8dTR!g$hyI@' );
define( 'LOGGED_IN_KEY',    ':LCKml;q mrTk<SB3_11q[v8LxI,^#8lC%kXc1?U!A=jI3_:j|d*6r4 3[Y%s|8X' );
define( 'NONCE_KEY',        'fAQo^%$n4U>6XPZ?rGXcEL<Sh0vU=b,1>CpieH#KG?%<6~I![peYE:)Yv4Lu.<)3' );
define( 'AUTH_SALT',        '1w1f^:?Brz*O&&j$={,HUeDvFe^#S|z5;!UUj6b6K!h/!YFiR/5E^pr)xw9T-FFK' );
define( 'SECURE_AUTH_SALT', '->*^c[HpZ`^rheLr+8CYh7c=[PE2?*iU`>4.EV+ukrQ:sWOK850V-J!tsi2<t1BB' );
define( 'LOGGED_IN_SALT',   'r*?EN,V!$:{@/+*j:*@4rhO*0=(6t`Ww `[M~)=jn8y:QY9 M:r-G>{rmM|g0IS|' );
define( 'NONCE_SALT',       'rRYx)nA!aIjJ``dQclMj1 6e5Mhi%_!_8VSr7?4^vZBkfIC}zO(k@P[VMfIh$OF=' );

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
