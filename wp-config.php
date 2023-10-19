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
define( 'DB_NAME', 'mysite10' );

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
define( 'AUTH_KEY',         'r4]l?-dz-Ng&=gpEMU#Et6Lj[E05[_{IY($@|eSB5|1,{cRGq-g<@m(uS5,HT=N@' );
define( 'SECURE_AUTH_KEY',  'mpg&7L)mB#qD@A&i}>oIcC.2niw=zi$g$&/%)@sz>e1XZ$Cu*b<l;.PayYYynizm' );
define( 'LOGGED_IN_KEY',    'rvi]/~lHFeew{qw]CyJ)FFj2[xMV5S]wvC>IQ8a_0/N~}})@~OG}(# C4NtRWN~Z' );
define( 'NONCE_KEY',        ';D%..Cu}5tNjL!Ro0ziyeFtMptz3f(^HP>rhFXjg#{+g=wRlEv+?wj6=dVA-]eLH' );
define( 'AUTH_SALT',        'h9o]q~V(3N)9}y9/`5`|~vHUR3ImiNZ-d!lWdys;He3L%J56=eKq :7uZah2&rZ>' );
define( 'SECURE_AUTH_SALT', 'e4<vU6;:C(!/2/hj[uT$iSU!yp]vaISu(]t{W4}PV%#4/sqNIXCMCx|5vZHL;-pt' );
define( 'LOGGED_IN_SALT',   '65wW2R0+rmv6OAtW}ml,(CJ_:@|3C:O<0!052}US_lYEg?x N]@`PSKd)oK--]vR' );
define( 'NONCE_SALT',       '=_NHG*t{^[z;.jsNq@>H@`3wpy{e:Km@Xi[YC.+Fb;a<xWrTGL 3A^n[:1P}fXRE' );

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
