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
define( 'DB_NAME', 'spm_gbix' );

/** Database username */
define( 'DB_USER', 'chaka' );

/** Database password */
define( 'DB_PASSWORD', 'this.admin' );

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
define( 'AUTH_KEY',         'vW2:Ip]enblS|a^@p!xZ8,,vJJ!#-_t^F,E=Gnc#i@fP&]6BbLkdj[6(yCBTp1*l' );
define( 'SECURE_AUTH_KEY',  'tKc9!RfL4-lmh#1,r07Q%k47t*-?|mzD/L@:teRHq?(dR]_b%^c0j8= {r8av9#n' );
define( 'LOGGED_IN_KEY',    'j i)WJOuFL8kfvY{&]Kt|E::8jp4m.L~ l+l<p[7YHz]pE}#4H2sFO30N=/U3;7t' );
define( 'NONCE_KEY',        ',WTIDK<DG6C9&iEhFH9,}_w77RPtwyfJ4VN_+Ap0&??_N_X&(BNx0ja&&;>:fGLM' );
define( 'AUTH_SALT',        'cu})Jjii72CtZDBv0Hv^{! i:6_  l13 Mu=PgNYYrWuHQ&&g)j@8]02~{]Ypvm<' );
define( 'SECURE_AUTH_SALT', 'O$9aeY6aq]?uvj`k#b+<x<E>Ra?_h>={AUz$&`k2W-]+i9]I}EBt({KVHb9e&$)L' );
define( 'LOGGED_IN_SALT',   'G[]7=4#yZ-&|!><,O}+W}ShqKgnWkgyH=EN-m uz%<U|_=^&S?DYG|pJ-t/]DO)Y' );
define( 'NONCE_SALT',       'bb.*>iP25D~(q]x5J(at;CvDCXBe2WunP5DSS=o`#>5a~SK:G61G},y,^Wm.&qI&' );

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
define( 'ALLOW_UNFILTERED_UPLOADS', true );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'FS_METHOD', 'direct');
