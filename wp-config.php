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
define( 'DB_NAME', 'asfdgdfhnow' );

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
define( 'AUTH_KEY',         '.r3sus4n?Q3` ^ongS3Vup>QcB43A[$^Kdv[UB6^3bo;/o<lCm:@K3& F;7_fFzT' );
define( 'SECURE_AUTH_KEY',  'CyP{|Hoa#L@pR7SB)@u-8c{v]`wfz`!xDq#!+I(nbOS4;i-zBPIzIWss467$w?8{' );
define( 'LOGGED_IN_KEY',    '#RQHh2m1hubXl,L{&n.zOf4!E8uk){F#O+n}YfwX2^;LIS;0*.Q%,pw ,gyqPud0' );
define( 'NONCE_KEY',        'JZ#^hY@oQHC<ud;m&Hte;)W$ZLRJn8O(i]JG7mVl??$}(e>F#S%R&~i;NA/Z]?Fx' );
define( 'AUTH_SALT',        ']sz2PBLA`yjy0Z(p=|wVvEagGtKHkASoW54_-^R+%A:+} pV&v=S$zuyS GmF>g4' );
define( 'SECURE_AUTH_SALT', '3MMoot?;kkVu8dLeBiP):_cf:1uT?SEf1&d2>MBU[af[]8~xB:bw8_#KZpMdShrw' );
define( 'LOGGED_IN_SALT',   's>1irB]c>rp:rUP;`)-G12SIl/j(9bbhBp$$[wZ0vti|.jV8I:*nr#Qv07bYR_.I' );
define( 'NONCE_SALT',       'uu}9;OKwa-EE 2{j)j)9[cVHWZW*WDRUThK>QU[uWVWyt3+N-Vu1Bo(*BOH3+Q^o' );

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
