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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zX,?e-dOQbv;C}l@g#3p5<y1{J)pyJOIQ_i a$v9SK27HF=LQNj[{o~AaJ~i;FI0' );
define( 'SECURE_AUTH_KEY',  '@h[.v;8g$@#7TQNC$,mHkUe/t}i4`y?E2kk?,W7>5_d,]R=<LNx Der/Q}i3%yH=' );
define( 'LOGGED_IN_KEY',    'J8hjeIU9cf,KMxAYvIYdt)HHEx^*bNKcR}oV1&C9M47-}7!a>JC782+c|]?:i&G!' );
define( 'NONCE_KEY',        'EORZsArznF*D=*FPv_wq6w59gZzbA@3=+- <e.{<fy)t0:[#1Bl}/5F1)Ew}QU B' );
define( 'AUTH_SALT',        'aeC!OB%i)mnKW~jV2%z%H.%=ZHCi3x_AA[(6l4<QI&K-D>C{kI-I3D5H224Ei=i=' );
define( 'SECURE_AUTH_SALT', 'J8`Snt0%ue4dt5%%!@ut)essi>QRqjP!N:KsDPp+c1kE=yZ+85O/%#/clWC u/)s' );
define( 'LOGGED_IN_SALT',   'rwFB+Ydroq@+471#kTPs3~N*g2V6d#H.4N0:$9}16ic#I<]&<veM|Y>Uv27&L$3d' );
define( 'NONCE_SALT',       '))?PhHczN:H.|YfFnn!{?)y^g[1!;xos7xwb.^u*Ufq!9yD<jgp<*5Zq%cO<?fWT' );

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
