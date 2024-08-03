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
define( 'DB_NAME', 'project_db' );

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
define( 'AUTH_KEY',         ')]=(M#tlF@;)1tq<T4$A<GKhL4w oejG#ODc{>94.R6.%LbmJ}e48lh4-hYOgK+L' );
define( 'SECURE_AUTH_KEY',  '9D!HFQJaz9[8RKUOi8T(#m}_hggl%751:fJ3C_f3.bD>gH!djJDb||T@j*zDst37' );
define( 'LOGGED_IN_KEY',    '$XULFv{pVRLFo?SJ.b7UjF(R3aqa-GS#>F|fW;y:.ZSaSW].K*iALEy{v]J&+XK*' );
define( 'NONCE_KEY',        'K5{wfa9d%jqc^M`tNj^0~{}b!,6B:zy?+#0`}x|) MMX3.NMj;Af:kt]AefiTBV+' );
define( 'AUTH_SALT',        'yFb?Jd3BmKbqXEf.XRRjP+2n%l}NZ3cH?Aj[9RqC8S7EJyS`P(jX28f<LtJVm3B8' );
define( 'SECURE_AUTH_SALT', 'H,KbR3vJj4Vw+2W3z3jyGQw+;=~CP3,fjxz*;3yNY^75k>Od[PPzTqi|~>iuP:X8' );
define( 'LOGGED_IN_SALT',   '(lI+hMe~)wzU)[{sIwGELkubD$:Z.Lt~ omx/t3#a8G:x6ANF~cO# hmFS44yg L' );
define( 'NONCE_SALT',       'eu/yC0Wnk2UEyjt XuawBwiejB):RAH2,)AMmtJ7zE{$wp5n?42IMU +`dBcX>1p' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pj_';

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
