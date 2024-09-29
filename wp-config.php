<?php
define('WP_CACHE', true);
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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'password');

/** Database hostname */
define('DB_HOST', 'db');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '5RXqC7.1F:uv[>S;F@d$Hw(L,?GZF>2]nQ?5z%~I^3mX{:W2 aNe-BuB;Z8M&t1 ');
define('SECURE_AUTH_KEY', 'E}G[u=VOY`^@`.W_V9Fb}$S*92ZWK9%5%)I<*Lt%`&`XbaG=5?b3@ddK= kTS+ie');
define('LOGGED_IN_KEY', 'J:4YNyW[xs~9KqJVFA&.S#eow=bL66|U@BX-x4^m-Ym)ugll}e0uze#&E;oH=99C');
define('NONCE_KEY', '8,,m`vumuQ i6zm!})wjsuq9j3L=mhXqc?I]Z9K%aYM-y((/-5.2:5s17IxD_cvk');
define('AUTH_SALT', '#V^4x,_Ik[BXpNJfZBS+v%_krhm-st)q$Pan+O[i=(E-(h|XDsYedg$#^Wtt4N1D');
define('SECURE_AUTH_SALT', 'BTV^]MJTftw,v6sx:^<.VzQCgyP?tc (r#o[-q@TJ:ge/X0)hGNpoLr!*/!NM{`H');
define('LOGGED_IN_SALT', 'zr&cgR%%@{(]=a(PE`Vc~fk_}w]bV7_>OQTDS1+6nvCaT|bW,FJ:T ptMsF<p 9$');
define('NONCE_SALT', 'aoc 7J6vJcQFfCjG2@Hcr dXbj`7 Mm[[a7{w|+[<16ZCG0nKVb{W|cLI d53iS{');

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
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

@ini_set('display_errors', 1);
define('SAVEQUERIES', true);
define('SCRIPT_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', '/logs/wp-errors.log');
define('DISALLOW_FILE_EDIT', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
