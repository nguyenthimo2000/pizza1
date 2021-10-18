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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']bde;/Eh=tl3;9:<|H{c/t2V6#x%Mf~u9/%tOe-@3o~`e@t}fHS6YmPhQqT!I!1d' );
define( 'SECURE_AUTH_KEY',  'yxc_Ef@%/E*8n&S@/5*Sg@:fsD[Jf$SQZg$` NmF=w?M<OK:JhWeaIcwqa6Khchs' );
define( 'LOGGED_IN_KEY',    'TOD-V{#*+O-nEkw7OJP5BSWo(CWXZ4WbsF{LDv:.WKwn{GV1xEe_Mat>{$Y9%zzR' );
define( 'NONCE_KEY',        '[eGo1_dIZ3rV.Mar,:+d%5IBWDdjwDL{Nf/{1E:Y@nh1I!lvpzrTxA-U}eF(hZ,$' );
define( 'AUTH_SALT',        '#JjX}hr_)`Uqm.Uu]dXko#U}B+m Zb]$|YX/N[_y-ddG/47GqTbEgIaaq;v$SKM9' );
define( 'SECURE_AUTH_SALT', '%/W{,-Bv2tH58QtEnqB@{_t_rjV-hw:L3@dxh+4mp76?Jvl-Zum5HPM|mwV GbSi' );
define( 'LOGGED_IN_SALT',   '(.oAkS5|;=9dHNh@161qu~flG&BkC|zbF YR^tIvPS,15Jql`S%hPV]?R}+b W<E' );
define( 'NONCE_SALT',       'MWGm<211-LX[_O7QGhiajwc`*[_`UKu/:Y=&T^_)kstR+oQp;M^y}6:]fPf@3|M#' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
