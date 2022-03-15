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
define( 'DB_NAME', 'site_propre_maliclimat' );

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
define( 'AUTH_KEY',         'N8-k %c>4L,>A#J|NV}(gKR.d{a}_rxMpsmr,f<:JtES.yr]!_0;hy#mU,?rw)vN' );
define( 'SECURE_AUTH_KEY',  'XMCH~f^<F!tZ`8IK~c?6+IShp(Ti c*X4Rkq..5+,,:#q8/7=?A8k.%vK}}NZSPo' );
define( 'LOGGED_IN_KEY',    'wWA46XMcI?@zu=@n+!=_+~.YCxE 4)Egp<7:($G}#.]g2.,<swD$m.sGSH+HGrGN' );
define( 'NONCE_KEY',        '#dgoqe<nE5:q![!}u9sHTV5t.x7J&f!Rxh87t~3%K-]MH/Y8Pb1*=L%-J!fL_*C2' );
define( 'AUTH_SALT',        'C:RLh<(X;QE42q1HOTLxM;;[?[Nd7y%odrsu!o%L;G[.gIA43c*mbJ/}=*jGJ6gM' );
define( 'SECURE_AUTH_SALT', 'V@fI!w8+K65#Ww1Ol%!3Va&{*edp:%N):X~JK7~NV,.8V:+&&~$iL8}9dkYxp3Or' );
define( 'LOGGED_IN_SALT',   'wHk?&EQ<a=Ka/VXKEpKkyHrVeZ0 Nu:_b_4}$ei,|x>OG:9^J)@o Nowp WS85DO' );
define( 'NONCE_SALT',       '[1<f)f#^a`Ag|2vKYv{_mi$ALH`<by9c3Gt;}fc2fU PX6m7{p$^XGy+v~Zk7KT2' );

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
