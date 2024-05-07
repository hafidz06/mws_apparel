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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mws-apparel' );

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
define( 'AUTH_KEY',         't7qGo@m}HA,ix5S$CVIb(LmW6WGr96I~i::w|m;9$vfB3api8f_W!O=3Ed/iFPT8' );
define( 'SECURE_AUTH_KEY',  'nF#LXfPcy&1y1]qw^Yt86B$GTv=?5nV?KLel-F/*4W}B}<{uLH5J~Q]]%5cebORZ' );
define( 'LOGGED_IN_KEY',    'iOT/gD_&KE.5G{ljH=CRCC1ksq13BAVW5MlCxA)Y6`xlFC2(QOvf{|Vf1`NQ(.B^' );
define( 'NONCE_KEY',        'EeZhR7H_VXA|;]j}E#4*Yi44[:`brE}P79h[zc&]YB}|aB|Mz/9:B+,?<H`w*aw~' );
define( 'AUTH_SALT',        '&hb:@h@HqMAJObKxmev:;r_(d2-y[&uq~Ld<v:iO/5i!/{q=2YgbwNIe6%.*0Sj9' );
define( 'SECURE_AUTH_SALT', 'pz,Ha*e{diA3ug@L?R$8qHFMIp~^~iu$bQEYq_0G^;c@^-O%A<Ksg7,.$&4$uJ-.' );
define( 'LOGGED_IN_SALT',   '.+:i6G-;9TgfX*95[te0U2C*=*c{l-5b{%9QRMF3-52VUrh^seO^eV! _,J`7_O.' );
define( 'NONCE_SALT',       'oFfi@/.*`9`/4M)uKsEa;NF|LO|<smzj=cRGSk0Y]ycQqLc}J5t 3.(Us`5kq4P%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mws_';

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
