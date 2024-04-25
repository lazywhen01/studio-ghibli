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
define( 'DB_NAME', 'wp_sydney' );

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
define( 'AUTH_KEY',         '%>mZS lHdSGy2{fmGU*U)A`.`qH EgO1r9yYl4Y,K8MN~e$H`T7P(O9Wl5opK+Tn' );
define( 'SECURE_AUTH_KEY',  '(R0o~dzO>ux.k<q8EEbii/ Ru<~3Ul!WlNMo>:,nIsGVkM]k!y0W^4AAqoe+(i$v' );
define( 'LOGGED_IN_KEY',    's.M-^F$9@+1&.`+b!U5SBwXXO6UpU`mz8LE7!_G^BV)W)LMxs8+!xCQ;J;P&z1( ' );
define( 'NONCE_KEY',        'czxG28`srCmjyiX-(|!m$[H}mbTNkGP!}_GYg.25WvgsQ|RL(7q0f&2Qgx?}5Ow$' );
define( 'AUTH_SALT',        'W/)#>0+9?BI)=(w6$ZEMsu9s8VWm;q@CQ`3B9WSMp^$Y7t69;rT2B,xuMf?hN{ym' );
define( 'SECURE_AUTH_SALT', 'LtNogncagl2kMAQlungF`8/QqV2na1T%&4Ke3yCm=L>|0a04n:+=h_=,9*}N4p+8' );
define( 'LOGGED_IN_SALT',   '#^e4V+^2W9p(CG~| }3`Y^c/qLHX!uHM>~8T)7[>V+3@9N=EUYAe -Ys.Pg@EhZg' );
define( 'NONCE_SALT',       'f)%Rc_3oYrwf]jd0oJ+xaoe(Qu6gbMe+Ev[RZ:orKN9hGN.c|}FTK!RlZt}>O6In' );

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
