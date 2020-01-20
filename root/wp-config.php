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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'usbw' );

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
define( 'AUTH_KEY',         't8{|[)o9_: fRa$^p%(NwNe=/ZZE1W%J^~ga>n_?@-`(vaVLRz_L,q;V~.3jJ&7}' );
define( 'SECURE_AUTH_KEY',  '{9DE?mj<{W<G,Mvzy+]R.7V5Z9fDNj1pHM3(Zl[uDC8ovgJP;MZiI~jGj(D>l8Sy' );
define( 'LOGGED_IN_KEY',    'v57+&l^OciYZP7&p<{1Xwn#K@NNQa@<IiQ$;yR0lQ:>%b8nxgyBX+MF!jOSRn|RW' );
define( 'NONCE_KEY',        'vW(;@&?.>SBb*(p^Gx>.m0Yr(2^z,m+CtN-P]DI>`|lLmwGz_}9;~uv`nT#<h.rH' );
define( 'AUTH_SALT',        '-o]Am%C!VNI#?DOpIAZMp=/#U&vCSoG5CND>FX7?>DIeR(`N/T|Mp 0hL/sh?own' );
define( 'SECURE_AUTH_SALT', 'kk~IZY-81hU*7w8~w41;!%)Hb=i0GhX$nEKN5B*=G8DL@frH2)eG$Gdq(]ou57I ' );
define( 'LOGGED_IN_SALT',   '=zG94Au$b6,Gvt&JGIT`Te9xS<Z!l3F3FUXSwxj0tGlw<.phC<!b@gs@~F?(>}-*' );
define( 'NONCE_SALT',       '$nmr&-M4M>ld|MHa|gq8 J1,.9RnwM ?H:MeY0}lM3/6oGM2s{Y:keYgk!l3f#s7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
