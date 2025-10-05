<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'nteu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'rootroot' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'h5)}R6@I]U{C@:y;Z;?Vp1}Z|Zcz<*qyx!=RW71q9CKoI(El[bf|VdNuPw!nn(k`' );
define( 'SECURE_AUTH_KEY',  '|rIDz}1X.E~./)aqlh[/tXTk#LS*]v9(U|HsK07e3T4V,U5L]v6rUBKlX2Uuql+,' );
define( 'LOGGED_IN_KEY',    '*zmy ckWAAAyN,HzW7.?gKIlNh?n:#}xe0`xvk{ToH+7)7W2!8?K[d!,|CkeMf.$' );
define( 'NONCE_KEY',        '@Tn}zJZ.JXcWcOQJTJA6*~._-&bMjwh,Y5kD#Pp}t#)}n:hmd;FZaoLKF,5zgttE' );
define( 'AUTH_SALT',        ' -}ucMQa88iu}}h*VhipJ(>8n$rlj~zs`8h}M!>/EJV<b@+%qJVY38#.S:Xb{[7Z' );
define( 'SECURE_AUTH_SALT', 'dql$zLM?#vv-bbgVOvgcRvq_d7t.pNC3Q^<!;I`[<_=BzjUmv/)D*-@aKO%qpt!c' );
define( 'LOGGED_IN_SALT',   '+q:|a9:qk`*uCPM!%.39DndFMMZP.7d=UNKbLYTyPWj~fluD]?~ykwV;sxQG}up,' );
define( 'NONCE_SALT',       'OP8JPTUs#!Kt}a&$8Gk>.y-EzQ`T/w0ABvXyGYj)9b,vKfD/ebb*72s!c;mmI> ,' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
