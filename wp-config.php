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
define( 'DB_NAME', 'epiz_33245647_wp_bdd' );

/** Database username */
define( 'DB_USER', 'epiz_33245647' );

/** Database password */
define( 'DB_PASSWORD', 'kAkHeGr3gbu' );

/** Database hostname */
define( 'DB_HOST', 'sql111.epizy.com' );

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
define( 'AUTH_KEY',         '+4V_01=?smBa92N?`zZ_},}y{^j&05-C_ ZrqnU<eyQT@(]<%KU TI|@tvdbdbHp' );
define( 'SECURE_AUTH_KEY',  '/PqcDj^:xIDAuYV(PAT0l[wVBou<yUKmT=pweyySgXtmP>{=o;rlK2J]7z7]lzB<' );
define( 'LOGGED_IN_KEY',    ';V,n30_3`R@Ppcm7oYOGllzN}=MJ9#sDF!Ov,v7Wj>,p+v`i8[ 3r8c/l4Gp2#|D' );
define( 'NONCE_KEY',        'ccf~ndRyof%#lAFX]~D#@$*x@<{w?dyhJv/h^`5DFA!E^s40la.1;tuK]TdiK[Z@' );
define( 'AUTH_SALT',        '`3;V 2_C1.Jx,`}sL`][Lgwn)2DX%;@oyL5fU^+ceUAl;^*<1*>&<zb0^+XA;+Vt' );
define( 'SECURE_AUTH_SALT', 'U&2uWmSEKBj]})pa1b>@,<<y>*mjku|0q mgXG=+jA&%~HIlRGK&N5JpE]eIQ*kG' );
define( 'LOGGED_IN_SALT',   '*r 1oOs@t>wp:tj14y]:HFkrR9F0.V=lr7fLl1HQf^/1+,-avI7K4``}P#u!9CZ>' );
define( 'NONCE_SALT',       'q<3&Y??{2p9G8Zh1aex_2Z?bWEKH.kB1b(Jg]h|!A6)u-=_U3@JdU/Y>IyJv43+b' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
