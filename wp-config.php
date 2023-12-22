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
define( 'DB_NAME', 'digital-agency' );

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
define( 'AUTH_KEY',         '&wa0ot8<kpyrzOj@)oo&M[QFekkx>sUgEb?~1xk~^v72s+Bcy.|P487cV>2(hlED' );
define( 'SECURE_AUTH_KEY',  'XM{X<6znQJOo_ ~usraX:6{a~Dt,GtbS3|r!e cIe.Q{$ylz]18KH~y=N`v,;jX5' );
define( 'LOGGED_IN_KEY',    'uH$0RY-2~)oqylWZpxeY=hwT#w[du_Em(^b#Z0LGeVQ+ZxQSjI6T7&HhxP%])7EY' );
define( 'NONCE_KEY',        'x?~nNEWbPI%);zGYQJU~Mx}Fnzd_Q-p]Zverw57n%G5ybbz: X96 wy9a4/6+2,=' );
define( 'AUTH_SALT',        ']/tz/ynoE!3n6ISz;|Qs_P,}OC,(XbQ*/B+v6)m#=u0Pv</S{,K/4HKa0aZ_S`h-' );
define( 'SECURE_AUTH_SALT', 'I%_wA8#^r%6h6S`w`7zDzv4%NdH- 7l<sP-.6&F %R<V)DJ6YojH(0-w; [9#-{M' );
define( 'LOGGED_IN_SALT',   'MwJo+3lNv7mYOgd[OEB>sq2LF;izrd:{hVuI@&HWO(H;L u;okM+naAvJo-Dm>i5' );
define( 'NONCE_SALT',       '1%ZP1]{z5Z#aIiehv;C^OV_`R0E/]:*P(y-YfHg[<U`^&eWJs7ZB7Go_3,+}7&Tq' );

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
