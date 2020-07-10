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
define( 'DB_NAME', 'infobjp' );

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
define( 'AUTH_KEY',         '.%Ftc/;Ekc{aac~@ISdX:.-(7m}wg^4mNw({(e<t3H_J>B![F9)7QlNMr>/F_G8>' );
define( 'SECURE_AUTH_KEY',  '|w#1!)g7L~s-Rg@)JkGR4nY>~*Q@OKR-f-,}]Uu)De }ixkd(7iCS7yY4*bX7n>W' );
define( 'LOGGED_IN_KEY',    'ghTMLK.0f/5{%!NWO`,%htFqaW/z.Yy[KxINy+::D%TgpBr2o^|2Vu]>&,t0)puB' );
define( 'NONCE_KEY',        'h2i]!q#B</_Qr=HH:4wh=!Jsqk93Dk@S5jjTlp~Ji)~KXt*xR;cL&pa /xEaeKPz' );
define( 'AUTH_SALT',        '2hecl=duWIKUctmm?WX<E@_b]+-]kCgl9JqV%2zB|Y%#F;8{|I{-`]K0RqV@yf<m' );
define( 'SECURE_AUTH_SALT', '@o^O8al_^cH#g[&AW) @rax-GP9QfGa!kzYC(2-=ibZL1ZG`8:dBPomA;hVLUUrN' );
define( 'LOGGED_IN_SALT',   'jRX7kr,+}]kIJIe$if ;E>#Aj=e!V`d7fa(OpTo$@FU9APbLt3=tfO:QmW9/.B`g' );
define( 'NONCE_SALT',       '~v+N{5kd4V.7>&#.:$nAO{E<i$~#d(,pd|:%cjD @9KXLw|gVnhdx{+.`m;52?A;' );

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
