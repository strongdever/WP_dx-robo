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
define( 'DB_NAME', 'dx-robo' );

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
define( 'AUTH_KEY',         'S$5 ~:eAr3#`ZKftCJRqJQj^`G@z^or)@*1o4tv[dOh+B54M(OCYcRa:kJd(hefy' );
define( 'SECURE_AUTH_KEY',  'WTY%0 F&B8&PdHk8Sn-:tU_eV2IY5D*]l0jO5@tG>9a|Azh6T.;lN^5w46h##$6%' );
define( 'LOGGED_IN_KEY',    'Qos/oi[}2$|EXP0T=25yk#|sfO|K[M>[?bs>@;N<c04`8Vn1}fZNR0L_w3OqT`kd' );
define( 'NONCE_KEY',        'veJ*cf>kD!_L)xx~@GdAG:sB{H7tG<[xkEF34^y4DNBL4JY9E;96s{PG!cX=6]kj' );
define( 'AUTH_SALT',        'A0p 8L0+);A-[?^X!xg7MlGP*+A6I}l.|]SL8jOkvq7Q<a/K*[9QJm;2{9 O$n35' );
define( 'SECURE_AUTH_SALT', '6g%jXQ@u&m}BL>n9-@SfQL@8zimhS_b.((lqs]}Ey#h?V/>5eY`:T.|p13#T1<w*' );
define( 'LOGGED_IN_SALT',   'x!!kY3C0([k!nS.vA!9< =DQ[U_Q}v(dCYwS4pA:2jc7|`(?N*DbieZ(+{_q$LT1' );
define( 'NONCE_SALT',       '.4/G3]sF* qF-nuk%.7:db:F;Gp)St$$v9MQ,^~2neSL(GB.Y|ZR[pW-YnBn*{4>' );

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
