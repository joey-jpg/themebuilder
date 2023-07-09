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
define( 'DB_NAME', 'wp-theme' );

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
define( 'AUTH_KEY',         'c5OL*8UW7 9>(u2Y6Fo(oi8(gIZIKASaUz++=z^bB4_1 d(Sh7g]ni?VE[7=av&N' );
define( 'SECURE_AUTH_KEY',  'nhFk:,hqri=Wi?P-p_hv+=;-j}lF*OZ2O*r}<~dptzx6$^&zb]dCBAG~LiEUT1f{' );
define( 'LOGGED_IN_KEY',    '6zG_t8dE+(TM94QvdAq=y^35W,(`oO>{5X6>0BE%Zjmo<Gm>TX-=4S[6!0IPXM.R' );
define( 'NONCE_KEY',        'Qi$9B^I#@6B!O1-RYE6,dc^hJ(ce%TTE@m .>v4IOWGfWovMKc{3y2e-h~{N_Dr.' );
define( 'AUTH_SALT',        'f#p{MiLK#V|W#X?`iF;hw}j;Q9;)1q2u;)l`:T~6G6cn$h!pb+rYFqS05l~})ZaD' );
define( 'SECURE_AUTH_SALT', '*$@WClc[;H5b#1?30Qw$yd<ljCqixFB0<, Yt2[NhCjp$N3F+f1xA=J~7vtkg_[D' );
define( 'LOGGED_IN_SALT',   'CrFqtkqg%h%5e~Ryb2{;yza~6yNaQs93_a/.{Z{nG=(0JE|Eh`7B7#O!jgx~}+$F' );
define( 'NONCE_SALT',       'r{;$xd`TZS+_]zs:2~6Jw3v@UW({6rgt*J0/)M(dX?]&6)3QLaatIIp[+mI/]%BP' );

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
