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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_local' );

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
define( 'AUTH_KEY',         '|GVw2/b8gU>S9lz,@GW#rf/-VGW{z1/%;A%.1X{672@o~|Q1LHQ9*h~/w8Ll%63F' );
define( 'SECURE_AUTH_KEY',  'kvw_SFL^$n N_84Y8tIAzu-i-nMcq;qk !1d!z01V}y]M)ngW|LEhY}Jl)sF:U*j' );
define( 'LOGGED_IN_KEY',    '!#EBoDMWh,+ef# qHD#_ai 42Q.Fdo1%d*>DUacI3$KFHb8R4?0X?ivA?!OqEUvW' );
define( 'NONCE_KEY',        'iKWp>/<_a7XV[/O$m{RD,K:j.|S!n9[CpmB*CtZnXP Y.BJ&zc}fL&Qd:Ih0IP{v' );
define( 'AUTH_SALT',        'h=T!jTveL)s,$kx{DQt,s-0W=nLCFka|5,+27bXr/^XYm>iC6E|CX]imT94Mfi%G' );
define( 'SECURE_AUTH_SALT', 'Arl1MnjLk-V@2(w02f}Oda_j}^pK]7+`Jb_JcWPzh7wrsQ[HjN?>4DRz1s+2gj+T' );
define( 'LOGGED_IN_SALT',   'O_Pe[!n|;:XN$#t)ij%^3-R@?XElea2KLW&o_8({7|q-.jS`,rCt_8h6NOo);I*9' );
define( 'NONCE_SALT',       '[sN|q<od92e`wfpzOC2*dVU0Fo*j*0~WqlhC^g}|kqlGf(M[^5lIAd`pLpGgGC(X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
