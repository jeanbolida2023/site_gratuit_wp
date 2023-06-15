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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_gratuit_wp_db' );

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
define( 'AUTH_KEY',         ',66{.~4(v*5IIR]w5N.`f$ISPY=)cQ[/y?6yBLZ*[||]bg A7A8H4nF;sG?4faC_' );
define( 'SECURE_AUTH_KEY',  'qJWHmaT3MXGKD5iNEuwUOOM+LFj@2wx$ta@,?%SE=YMg4A{oEaAOa&bYaC`5W yA' );
define( 'LOGGED_IN_KEY',    '_%CG9epN:o  ~twd3M2}o/M9/CfyTV[+zH^^e_UV.X7IL:iS:G<+fhok0hSH^=x8' );
define( 'NONCE_KEY',        '2N@j^@^k&T9UPzl<ygC66|2:nklX^ U>~ytT#!0ZtsYXD BCxT?nl7yz642`Nt04' );
define( 'AUTH_SALT',        'W1UDagy*4tdh2PN H9!G=K<3t=&]-C~Pu}:QPDiI}]*:DuVO3(ATX-@csU`am/t:' );
define( 'SECURE_AUTH_SALT', '[pOD#PZ]@oE]e^q| J+g>wp6tQ+qiaM&$!#Rh$,UR/dozf:edMZ.%@dwGVy Z)>6' );
define( 'LOGGED_IN_SALT',   'l@H~7+k`wY4}u:.1?NA7,k!e-5k]=.}M-1w@kOpB1 w,EuRX[b5JiT$&B6 X,P^d' );
define( 'NONCE_SALT',       '|iHQBCiurn6NHCS&_ea8lu A}^&l||Q<Pxrotnm-VybLFp0&4:X0c6~9{.vUFJ0~' );

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
